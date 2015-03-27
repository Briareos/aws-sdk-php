<?php
namespace Aws\S3;

use Aws\AwsClient;
use Aws\S3\Exception\S3Exception;
use Aws\Result;
use Aws\Retry\ThrottlingFilter;
use Aws\ClientResolver;
use Aws\Retry\S3TimeoutFilter;
use Aws\Subscriber\SaveAs;
use Aws\Subscriber\SourceFile;
use GuzzleHttp\Command\Event\InitEvent;
use GuzzleHttp\Event\EmitterInterface;
use GuzzleHttp\Message\ResponseInterface;
use GuzzleHttp\Subscriber\Retry\RetrySubscriber;
use GuzzleHttp\Stream\AppendStream;
use GuzzleHttp\Stream\Stream;
use GuzzleHttp\Command\CommandInterface;
use GuzzleHttp\Stream\StreamInterface;
use GuzzleHttp\Stream\Utils;

/**
 * Client used to interact with **Amazon Simple Storage Service (Amazon S3)**.
 */
class S3Client extends AwsClient
{
    public static function getArguments()
    {
        $args = parent::getArguments();
        // S3 does not require a region for the "classic" endpoint.
        $args['region']['default'] = 'us-east-1';
        // Apply custom retry strategy.
        $args['retries']['fn'] = self::createRetry();
        // Handle HEAD request error parsing.
        $args['api_provider']['fn'] = self::applyApiProvider();

        return $args + [
            'force_path_style' => [
                'type'    => 'config',
                'valid'   => ['bool'],
                'doc'     => 'Set to true to send requests using path style '
                           . 'bucket addressing (e.g., '
                           . 'https://s3.amazonaws.com/bucket/key).',
                'fn'      => function ($value, $_, EmitterInterface $em) {
                    if ($value === true) {
                        $em->on('init', function (InitEvent $e) {
                            $e->getCommand()['PathStyle'] = true;
                        });
                    }
                },
            ],
            'calculate_md5' => [
                'type'    => 'config',
                'valid'   => ['bool'],
                'doc'     => 'Set to false to disable calculating an MD5 for '
                           . 'all Amazon S3 signed uploads.',
                'default' => function (array &$args) {
                    // S3Client should calculate MD5 checksums for uploads
                    // unless explicitly disabled or using a v4 signer.
                    return $args['config']['signature_version'] != 'v4';
                },
            ],
            'bucket_endpoint' => [
                'type'  => 'config',
                'valid' => ['bool'],
                'doc'   => 'Set to true to send requests to a hardcoded bucket '
                         . 'endpoint rather than create an endpoint as a '
                         . 'result of injecting the bucket into the URL. This '
                         . 'option is useful for interacting with CNAME '
                         . 'endpoints.',
            ]
        ];
    }

    /**
     * {@inheritdoc}
     *
     * In addition to the options available to
     * {@see Aws\AwsClient::__construct}, S3Client accepts the following
     * options:
     *
     * - bucket_endpoint: (bool) Set to true to send requests to a
     *   hardcoded bucket endpoint rather than create an endpoint as a result
     *   of injecting the bucket into the URL. This option is useful for
     *   interacting with CNAME endpoints.
     * - calculate_md5: (bool) Set to false to disable calculating an MD5
     *   for all Amazon S3 signed uploads.
     * - force_path_style: (bool) Set to true to send requests using path
     *   style bucket addressing (e.g., https://s3.amazonaws.com/bucket/key).
     *
     * @param array $args
     */
    public function __construct(array $args)
    {
        parent::__construct($args);
        $em = $this->getEmitter();
        $em->attach(new BucketStyleSubscriber($this->getConfig('bucket_endpoint')));
        $em->attach(new PermanentRedirectSubscriber());
        $em->attach(new SSECSubscriber());
        $em->attach(new PutObjectUrlSubscriber());
        $em->attach(new SourceFile($this->getApi()));
        $em->attach(new ApplyMd5Subscriber());
        $em->attach(new SaveAs());
    }

    /**
     * Determine if a string is a valid name for a DNS compatible Amazon S3
     * bucket.
     *
     * DNS compatible bucket names can be used as a subdomain in a URL (e.g.,
     * "<bucket>.s3.amazonaws.com").
     *
     * @param string $bucket Bucket name to check.
     *
     * @return bool
     */
    public static function isBucketDnsCompatible($bucket)
    {
        $bucketLen = strlen($bucket);

        return ($bucketLen >= 3 && $bucketLen <= 63) &&
            // Cannot look like an IP address
            !filter_var($bucket, FILTER_VALIDATE_IP) &&
            preg_match('/^[a-z0-9]([a-z0-9\-\.]*[a-z0-9])?$/', $bucket);
    }

    /**
     * Create a pre-signed URL for the given S3 command object.
     *
     * @param CommandInterface $command     Command to create a pre-signed
     *                                      URL for.
     * @param int|string|\DateTime $expires The time at which the URL should
     *                                      expire. This can be a Unix
     *                                      timestamp, a PHP DateTime object,
     *                                      or a string that can be evaluated
     *                                      by strtotime
     * @return string
     */
    public function createPresignedUrl(CommandInterface $command, $expires)
    {
        $signer = call_user_func(
            $this->getSignatureProvider(),
            $this->getConfig('signature_version'),
            $this->getApi()->getSigningName(),
            $this->getRegion()
        );

        return $signer->createPresignedUrl(
            $this->initTransaction($command)->request,
            $this->getCredentials(),
            $expires
        );
    }

    /**
     * Returns the URL to an object identified by its bucket and key.
     *
     * If an expiration time is provided, the URL will be signed and set to
     * expire at the provided time.
     *
     * @param string $bucket  The name of the bucket where the object is located
     * @param string $key     The key of the object
     * @param mixed  $expires The time at which the URL should expire.
     * @param array  $args    Associative array of additional arguments found
     *                        in the GetObject API operation.
     *
     * @return string The URL to the object
     */
    public function getObjectUrl($bucket, $key, $expires = null, array $args = [])
    {
        $args = ['Bucket' => $bucket, 'Key' => $key] + $args;
        $command = $this->getCommand('GetObject', $args);

        return $expires
            ? $this->createPresignedUrl($command, $expires)
            : $this->initTransaction($command)->request->getUrl();
    }

    /**
     * Determines whether or not a bucket exists by name.
     *
     * @param string $bucket  The name of the bucket
     *
     * @return bool
     */
    public function doesBucketExist($bucket)
    {
        return $this->checkExistenceWithCommand(
            $this->getCommand('HeadBucket', ['Bucket' => $bucket])
        );
    }

    /**
     * Determines whether or not an object exists by name.
     *
     * @param string $bucket  The name of the bucket
     * @param string $key     The key of the object
     * @param array  $options Additional options available in the HeadObject
     *                        operation (e.g., VersionId).
     *
     * @return bool
     */
    public function doesObjectExist($bucket, $key, array $options = [])
    {
        return $this->checkExistenceWithCommand(
            $this->getCommand('HeadObject', [
                'Bucket' => $bucket,
                'Key'    => $key
            ] + $options)
        );
    }

    /**
     * Raw URL encode a key and allow for '/' characters
     *
     * @param string $key Key to encode
     *
     * @return string Returns the encoded key
     */
    public static function encodeKey($key)
    {
        return str_replace('%2F', '/', rawurlencode($key));
    }

    /**
     * Register the Amazon S3 stream wrapper with this client instance.
     */
    public function registerStreamWrapper()
    {
        StreamWrapper::register($this);
    }

    /**
     * Deletes objects from Amazon S3 that match the result of a ListObjects
     * operation. For example, this allows you to do things like delete all
     * objects that match a specific key prefix.
     *
     * @param string $bucket  Bucket that contains the object keys
     * @param string $prefix  Optionally delete only objects under this key prefix
     * @param string $regex   Delete only objects that match this regex
     * @param array  $options Options used when deleting the object:
     *       - before: Callable to invoke before each delete is called. This
     *       callable accepts the underlying iterator being used and an array
     *       of the keys that are about to be deleted.
     *
     * @see Aws\S3\S3Client::listObjects
     * @see Aws\S3\ClearBucket For more options or customization
     * @throws \RuntimeException if no prefix and no regex is given
     */
    public function deleteMatchingObjects(
        $bucket,
        $prefix = '',
        $regex = '',
        array $options = []
    ) {
        if (!$prefix && !$regex) {
            throw new \RuntimeException('A prefix or regex is required.');
        }

        $options['iterator'] = $this->getIterator('ListObjects', [
            'Bucket' => $bucket,
            'Prefix' => $prefix
        ]);

        if ($regex) {
            $options['iterator'] = new \CallbackFilterIterator(
                $options['iterator'],
                function ($c) use ($regex) {
                    return preg_match($regex, $c['Key']);
                }
            );
            $options['iterator']->rewind();
        }

        (new ClearBucket($this, $bucket, $options))->clear();
    }

    /**
     * Upload a file, stream, or string to a bucket.
     *
     * If the upload size exceeds the specified threshold, the upload will be
     * performed using parallel multipart uploads.
     *
     * @param string $bucket  Bucket to upload the object
     * @param string $key     Key of the object
     * @param mixed  $body    Object data to upload. Can be a
     *                        GuzzleHttp\Stream\StreamInterface, PHP stream
     *                        resource, or a string of data to upload.
     * @param string $acl     ACL to apply to the object
     * @param array  $options Custom options used when executing commands:
     *
     *     - before_upload: Callback to invoke before each multipart upload.
     *       The callback will receive a relevant Guzzle Event object.
     *     - concurrency: Maximum number of concurrent multipart uploads.
     *     - params: Custom parameters to use with the upload. The parameters
     *       must map to the parameters specified in the PutObject operation.
     *     - part_size: Minimum size to allow for each uploaded part when
     *       performing a multipart upload.
     *     - threshold: The minimum size, in bytes, the upload must be before
     *       a multipart upload is required.
     *
     * @see Aws\S3\Model\MultipartUpload\UploadBuilder for more information.
     * @return Result Returns the modeled result of the performed operation.
     */
    public function upload(
        $bucket,
        $key,
        $body,
        $acl = 'private',
        array $options = []
    ) {
        // Apply default options.
        $options += [
            'before_upload' => null,
            'concurrency'   => 1,
            'params'        => [],
            'part_size'     => null,
            'threshold'     => 16777216 // 16 MB
        ];

        // Perform the needed operations to upload the S3 Object.
        $body = Stream::factory($body);
        $params = ['ACL' => $acl] + $options['params'];

        if (!$this->requiresMultipart($body, $options['threshold'])) {
            return $this->execute($this->getCommand('PutObject', [
                'Bucket' => $bucket,
                'Key'    => $key,
                'Body'   => $body,
            ] + $params));
        }

        return (new UploadBuilder)
            ->setClient($this)
            ->setSource($body)
            ->setBucket($bucket)
            ->setKey($key)
            ->addParams('initiate', $params)
            ->setPartSize($options['part_size'])
            ->build()
            ->upload($options['concurrency'], $options['before_upload']);
    }

    /**
     * Recursively uploads all files in a given directory to a given bucket.
     *
     * @param string $directory Full path to a directory to upload
     * @param string $bucket    Name of the bucket
     * @param string $keyPrefix Virtual directory key prefix to add to each upload
     * @param array  $options   Options available in Aws\S3\Transfer::__construct
     *
     * @see Aws\S3\Transfer for more options and customization
     */
    public function uploadDirectory(
        $directory,
        $bucket,
        $keyPrefix = null,
        array $options = []
    ) {
        $d = "s3://$bucket" . ($keyPrefix ? '/' . ltrim($keyPrefix, '/') : '');
        (new Transfer($this, $directory, $d, $options))->transfer();
    }

    /**
     * Downloads a bucket to the local filesystem
     *
     * @param string $directory Directory to download to
     * @param string $bucket    Bucket to download from
     * @param string $keyPrefix Only download objects that use this key prefix
     * @param array  $options   Options available in Aws\S3\Transfer::__construct
     */
    public function downloadBucket(
        $directory,
        $bucket,
        $keyPrefix = '',
        array $options = []
    ) {
        $s = "s3://$bucket" . ($keyPrefix ? '/' . ltrim($keyPrefix, '/') : '');
        (new Transfer($this, $s, $directory, $options))->transfer();
    }

    /**
     * Determines if the body should be uploaded using PutObject or the
     * Multipart Upload System. It also modifies the passed-in $body as needed
     * to support the upload.
     *
     * @param StreamInterface $body      Stream representing the body.
     * @param integer         $threshold Minimum bytes before using Multipart.
     *
     * @return bool
     */
    private function requiresMultipart(StreamInterface &$body, $threshold)
    {
        // If body size known, compare to threshold to determine if Multipart.
        if ($body->getSize() !== null) {
            return $body->getSize() < $threshold ? false : true;
        }

        // Handle the situation where the body size is unknown.
        // Read up to 5MB into a buffer to determine how to upload the body.
        $buffer = Stream::factory();
        Utils::copyToStream($body, $buffer, 5242880);

        // If body < 5MB, use PutObject with the buffer.
        if ($buffer->getSize() < 5242880) {
            $buffer->seek(0);
            $body = $buffer;
            return false;
        }

        // If >= 5 MB, and seekable, use Multipart with rewound body.
        if ($body->isSeekable()) {
            $body->seek(0);
            return true;
        }

        // If >= 5 MB, and non-seekable, use Multipart, but stitch the
        // buffer and the body together into one stream. This avoids
        // needing to seek and unnecessary disc usage, while requiring
        // only the 5 MB buffer to be re-read by the Multipart system.
        $buffer->seek(0);
        $body = new AppendStream([$buffer, $body]);

        return true;
    }

    /**
     * Determines whether or not a resource exists using a command
     *
     * @param CommandInterface $command Command used to poll for the resource
     *
     * @return bool
     * @throws S3Exception|\Exception if there is an unhandled exception
     */
    private function checkExistenceWithCommand(CommandInterface $command)
    {
        try {
            $this->execute($command);
            return true;
        } catch (S3Exception $e) {
            if ($e->getAwsErrorCode() == 'AccessDenied') {
                return true;
            }
            if ($e->getStatusCode() >= 500) {
                throw $e;
            }
            return false;
        }
    }

    /**
     * @deprecated This method is deprecated. Use Aws\S3\ClearBucket directly.
     */
    public function clearBucket($bucket)
    {
        (new ClearBucket($this, $bucket))->clear();
    }

    /**
     * @deprecated Use Aws\S3\S3Client::isBucketDnsCompatible() directly
     */
    public static function isValidBucketName($bucket)
    {
        return self::isBucketDnsCompatible($bucket);
    }

    private static function createRetry()
    {
        return function ($value, array &$args) {
            if ($value) {
                $args['client']->getEmitter()->attach(new RetrySubscriber(
                    ClientResolver::_wrapDebugLogger($args, [
                        'max'    => $value,
                        'delay'  => ['GuzzleHttp\Subscriber\Retry\RetrySubscriber', 'exponentialDelay'],
                        'filter' => RetrySubscriber::createChainFilter([
                            new S3TimeoutFilter(),
                            new ThrottlingFilter($args['error_parser']),
                            RetrySubscriber::createStatusFilter(),
                            RetrySubscriber::createConnectFilter()
                        ])
                    ])
                ));
            }
        };
    }

    private static function applyApiProvider()
    {
        return function ($value, &$args) {
            ClientResolver::_apply_api_provider($value, $args);
            $parser = function (ResponseInterface $response) use ($args) {
                // Call the original parser.
                $errorData = $args['error_parser']($response);
                // Handle 404 responses where the code was not parsed.
                if (!isset($errorData['code'])
                    && $response->getStatusCode() == 404
                ) {
                    $url = (new S3UriParser)->parse($response->getEffectiveUrl());
                    if (isset($url['key'])) {
                        $errorData['code'] = 'NoSuchKey';
                    } elseif ($url['bucket']) {
                        $errorData['code'] = 'NoSuchBucket';
                    }
                }
                return $errorData;
            };
            $args['error_parser'] = $parser;
        };
    }
}
