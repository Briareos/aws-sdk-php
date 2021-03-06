<?php return [
  'operations' => [
    'AbortMultipartUpload' => '<p>Aborts a multipart upload.</p> <p>To verify that all parts have been removed, so you don\'t get charged for the part storage, you should call the List Parts operation and ensure the parts list is empty.</p>',
    'CompleteMultipartUpload' => 'Completes a multipart upload by assembling previously uploaded parts.',
    'CopyObject' => 'Creates a copy of an object that is already stored in Amazon S3.',
    'CreateBucket' => 'Creates a new bucket.',
    'CreateMultipartUpload' => '<p>Initiates a multipart upload and returns an upload ID.</p> <p><b>Note:</b> After you initiate multipart upload and upload one or more parts, you must either complete or abort multipart upload in order to stop getting charged for storage of the uploaded parts. Only after you either complete or abort multipart upload, Amazon S3 frees up the parts storage and stops charging you for the parts storage.</p>',
    'DeleteBucket' => 'Deletes the bucket. All objects (including all object versions and Delete Markers] in the bucket must be deleted before the bucket itself can be deleted.',
    'DeleteBucketCors' => 'Deletes the cors configuration information set for the bucket.',
    'DeleteBucketLifecycle' => 'Deletes the lifecycle configuration from the bucket.',
    'DeleteBucketPolicy' => 'Deletes the policy from the bucket.',
    'DeleteBucketTagging' => 'Deletes the tags from the bucket.',
    'DeleteBucketWebsite' => 'This operation removes the website configuration from the bucket.',
    'DeleteObject' => 'Removes the null version (if there is one] of an object and inserts a delete marker, which becomes the latest version of the object. If there isn\'t a null version, Amazon S3 does not remove any objects.',
    'DeleteObjects' => 'This operation enables you to delete multiple objects from a bucket using a single HTTP request. You may specify up to 1000 keys.',
    'GetBucketAcl' => 'Gets the access control policy for the bucket.',
    'GetBucketCors' => 'Returns the cors configuration for the bucket.',
    'GetBucketLifecycle' => 'Returns the lifecycle configuration information set on the bucket.',
    'GetBucketLocation' => 'Returns the region the bucket resides in.',
    'GetBucketLogging' => 'Returns the logging status of a bucket and the permissions users have to view and modify that status. To use GET, you must be the bucket owner.',
    'GetBucketNotification' => 'Return the notification configuration of a bucket.',
    'GetBucketPolicy' => 'Returns the policy of a specified bucket.',
    'GetBucketRequestPayment' => 'Returns the request payment configuration of a bucket.',
    'GetBucketTagging' => 'Returns the tag set associated with the bucket.',
    'GetBucketVersioning' => 'Returns the versioning state of a bucket.',
    'GetBucketWebsite' => 'Returns the website configuration for a bucket.',
    'GetObject' => 'Retrieves objects from Amazon S3.',
    'GetObjectAcl' => 'Returns the access control list (ACL] of an object.',
    'GetObjectTorrent' => 'Return torrent files from a bucket.',
    'HeadBucket' => 'This operation is useful to determine if a bucket exists and you have permission to access it.',
    'HeadObject' => 'The HEAD operation retrieves metadata from an object without returning the object itself. This operation is useful if you\'re only interested in an object\'s metadata. To use HEAD, you must have READ access to the object.',
    'ListBuckets' => 'Returns a list of all buckets owned by the authenticated sender of the request.',
    'ListMultipartUploads' => 'This operation lists in-progress multipart uploads.',
    'ListObjectVersions' => 'Returns metadata about all of the versions of objects in a bucket.',
    'ListObjects' => 'Returns some or all (up to 1000] of the objects in a bucket. You can use the request parameters as selection criteria to return a subset of the objects in a bucket.',
    'ListParts' => 'Lists the parts that have been uploaded for a specific multipart upload.',
    'PutBucketAcl' => 'Sets the permissions on a bucket using access control lists (ACL].',
    'PutBucketCors' => 'Sets the cors configuration for a bucket.',
    'PutBucketLifecycle' => 'Sets lifecycle configuration for your bucket. If a lifecycle configuration exists, it replaces it.',
    'PutBucketLogging' => 'Set the logging parameters for a bucket and to specify permissions for who can view and modify the logging parameters. To set the logging status of a bucket, you must be the bucket owner.',
    'PutBucketNotification' => 'Enables notifications of specified events for a bucket.',
    'PutBucketPolicy' => 'Replaces a policy on a bucket. If the bucket already has a policy, the one in this request completely replaces it.',
    'PutBucketRequestPayment' => 'Sets the request payment configuration for a bucket. By default, the bucket owner pays for downloads from the bucket. This configuration parameter enables the bucket owner (only] to specify that the person requesting the download will be charged for the download.',
    'PutBucketTagging' => 'Sets the tags for a bucket.',
    'PutBucketVersioning' => 'Sets the versioning state of an existing bucket. To set the versioning state, you must be the bucket owner.',
    'PutBucketWebsite' => 'Set the website configuration for a bucket.',
    'PutObject' => 'Adds an object to a bucket.',
    'PutObjectAcl' => 'uses the acl subresource to set the access control list (ACL] permissions for an object that already exists in a bucket',
    'RestoreObject' => 'Restores an archived copy of an object back into Amazon S3',
    'UploadPart' => '<p>Uploads a part in a multipart upload.</p> <p><b>Note:</b> After you initiate multipart upload and upload one or more parts, you must either complete or abort multipart upload in order to stop getting charged for storage of the uploaded parts. Only after you either complete or abort multipart upload, Amazon S3 frees up the parts storage and stops charging you for the parts storage.</p>',
    'UploadPartCopy' => 'Uploads a part by copying data from an existing object as data source.',
  ],
  'service' => NULL,
  'shapes' => [
    'AbortMultipartUploadRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AcceptRanges' => [
      'base' => NULL,
      'refs' => [
        'GetObjectOutput$AcceptRanges' => NULL,
        'HeadObjectOutput$AcceptRanges' => NULL,
      ],
    ],
    'AccessControlPolicy' => [
      'base' => NULL,
      'refs' => [
        'PutBucketAclRequest$AccessControlPolicy' => NULL,
        'PutObjectAclRequest$AccessControlPolicy' => NULL,
      ],
    ],
    'AllowedHeader' => [
      'base' => NULL,
      'refs' => [
        'AllowedHeaders$member' => NULL,
      ],
    ],
    'AllowedHeaders' => [
      'base' => NULL,
      'refs' => [
        'CORSRule$AllowedHeaders' => 'Specifies which headers are allowed in a pre-flight OPTIONS request.',
      ],
    ],
    'AllowedMethod' => [
      'base' => NULL,
      'refs' => [
        'AllowedMethods$member' => NULL,
      ],
    ],
    'AllowedMethods' => [
      'base' => NULL,
      'refs' => [
        'CORSRule$AllowedMethods' => 'Identifies HTTP methods that the domain/origin specified in the rule is allowed to execute.',
      ],
    ],
    'AllowedOrigin' => [
      'base' => NULL,
      'refs' => [
        'AllowedOrigins$member' => NULL,
      ],
    ],
    'AllowedOrigins' => [
      'base' => NULL,
      'refs' => [
        'CORSRule$AllowedOrigins' => 'One or more origins you want customers to be able to access the bucket from.',
      ],
    ],
    'Body' => [
      'base' => NULL,
      'refs' => [
        'GetObjectOutput$Body' => 'Object data.',
        'GetObjectTorrentOutput$Body' => NULL,
        'PutObjectRequest$Body' => 'Object data.',
        'UploadPartRequest$Body' => NULL,
      ],
    ],
    'Bucket' => [
      'base' => NULL,
      'refs' => [
        'Buckets$member' => NULL,
      ],
    ],
    'BucketAlreadyExists' => [
      'base' => 'The requested bucket name is not available. The bucket namespace is shared by all users of the system. Please select a different name and try again.',
      'refs' => [],
    ],
    'BucketCannedACL' => [
      'base' => NULL,
      'refs' => [
        'CreateBucketRequest$ACL' => 'The canned ACL to apply to the bucket.',
        'PutBucketAclRequest$ACL' => 'The canned ACL to apply to the bucket.',
      ],
    ],
    'BucketLocationConstraint' => [
      'base' => NULL,
      'refs' => [
        'CreateBucketConfiguration$LocationConstraint' => 'Specifies the region where the bucket will be created.',
        'GetBucketLocationOutput$LocationConstraint' => NULL,
      ],
    ],
    'BucketLoggingStatus' => [
      'base' => NULL,
      'refs' => [
        'PutBucketLoggingRequest$BucketLoggingStatus' => NULL,
      ],
    ],
    'BucketLogsPermission' => [
      'base' => NULL,
      'refs' => [
        'TargetGrant$Permission' => 'Logging permissions assigned to the Grantee for the bucket.',
      ],
    ],
    'BucketName' => [
      'base' => NULL,
      'refs' => [
        'AbortMultipartUploadRequest$Bucket' => NULL,
        'Bucket$Name' => 'The name of the bucket.',
        'CompleteMultipartUploadOutput$Bucket' => NULL,
        'CompleteMultipartUploadRequest$Bucket' => NULL,
        'CopyObjectRequest$Bucket' => NULL,
        'CreateBucketRequest$Bucket' => NULL,
        'CreateMultipartUploadOutput$Bucket' => 'Name of the bucket to which the multipart upload was initiated.',
        'CreateMultipartUploadRequest$Bucket' => NULL,
        'DeleteBucketCorsRequest$Bucket' => NULL,
        'DeleteBucketLifecycleRequest$Bucket' => NULL,
        'DeleteBucketPolicyRequest$Bucket' => NULL,
        'DeleteBucketRequest$Bucket' => NULL,
        'DeleteBucketTaggingRequest$Bucket' => NULL,
        'DeleteBucketWebsiteRequest$Bucket' => NULL,
        'DeleteObjectRequest$Bucket' => NULL,
        'DeleteObjectsRequest$Bucket' => NULL,
        'GetBucketAclRequest$Bucket' => NULL,
        'GetBucketCorsRequest$Bucket' => NULL,
        'GetBucketLifecycleRequest$Bucket' => NULL,
        'GetBucketLocationRequest$Bucket' => NULL,
        'GetBucketLoggingRequest$Bucket' => NULL,
        'GetBucketNotificationRequest$Bucket' => NULL,
        'GetBucketPolicyRequest$Bucket' => NULL,
        'GetBucketRequestPaymentRequest$Bucket' => NULL,
        'GetBucketTaggingRequest$Bucket' => NULL,
        'GetBucketVersioningRequest$Bucket' => NULL,
        'GetBucketWebsiteRequest$Bucket' => NULL,
        'GetObjectAclRequest$Bucket' => NULL,
        'GetObjectRequest$Bucket' => NULL,
        'GetObjectTorrentRequest$Bucket' => NULL,
        'HeadBucketRequest$Bucket' => NULL,
        'HeadObjectRequest$Bucket' => NULL,
        'ListMultipartUploadsOutput$Bucket' => 'Name of the bucket to which the multipart upload was initiated.',
        'ListMultipartUploadsRequest$Bucket' => NULL,
        'ListObjectVersionsOutput$Name' => NULL,
        'ListObjectVersionsRequest$Bucket' => NULL,
        'ListObjectsOutput$Name' => NULL,
        'ListObjectsRequest$Bucket' => NULL,
        'ListPartsOutput$Bucket' => 'Name of the bucket to which the multipart upload was initiated.',
        'ListPartsRequest$Bucket' => NULL,
        'PutBucketAclRequest$Bucket' => NULL,
        'PutBucketCorsRequest$Bucket' => NULL,
        'PutBucketLifecycleRequest$Bucket' => NULL,
        'PutBucketLoggingRequest$Bucket' => NULL,
        'PutBucketNotificationRequest$Bucket' => NULL,
        'PutBucketPolicyRequest$Bucket' => NULL,
        'PutBucketRequestPaymentRequest$Bucket' => NULL,
        'PutBucketTaggingRequest$Bucket' => NULL,
        'PutBucketVersioningRequest$Bucket' => NULL,
        'PutBucketWebsiteRequest$Bucket' => NULL,
        'PutObjectAclRequest$Bucket' => NULL,
        'PutObjectRequest$Bucket' => NULL,
        'RestoreObjectRequest$Bucket' => NULL,
        'UploadPartCopyRequest$Bucket' => NULL,
        'UploadPartRequest$Bucket' => NULL,
      ],
    ],
    'BucketVersioningStatus' => [
      'base' => NULL,
      'refs' => [
        'GetBucketVersioningOutput$Status' => 'The versioning state of the bucket.',
        'VersioningConfiguration$Status' => 'The versioning state of the bucket.',
      ],
    ],
    'Buckets' => [
      'base' => NULL,
      'refs' => [
        'ListBucketsOutput$Buckets' => NULL,
      ],
    ],
    'CORSConfiguration' => [
      'base' => NULL,
      'refs' => [
        'PutBucketCorsRequest$CORSConfiguration' => NULL,
      ],
    ],
    'CORSRule' => [
      'base' => NULL,
      'refs' => [
        'CORSRules$member' => NULL,
      ],
    ],
    'CORSRules' => [
      'base' => NULL,
      'refs' => [
        'CORSConfiguration$CORSRules' => NULL,
        'GetBucketCorsOutput$CORSRules' => NULL,
      ],
    ],
    'CacheControl' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$CacheControl' => 'Specifies caching behavior along the request/reply chain.',
        'CreateMultipartUploadRequest$CacheControl' => 'Specifies caching behavior along the request/reply chain.',
        'GetObjectOutput$CacheControl' => 'Specifies caching behavior along the request/reply chain.',
        'HeadObjectOutput$CacheControl' => 'Specifies caching behavior along the request/reply chain.',
        'PutObjectRequest$CacheControl' => 'Specifies caching behavior along the request/reply chain.',
      ],
    ],
    'CloudFunction' => [
      'base' => NULL,
      'refs' => [
        'CloudFunctionConfiguration$CloudFunction' => NULL,
      ],
    ],
    'CloudFunctionConfiguration' => [
      'base' => NULL,
      'refs' => [
        'GetBucketNotificationOutput$CloudFunctionConfiguration' => NULL,
        'NotificationConfiguration$CloudFunctionConfiguration' => NULL,
      ],
    ],
    'CloudFunctionInvocationRole' => [
      'base' => NULL,
      'refs' => [
        'CloudFunctionConfiguration$InvocationRole' => NULL,
      ],
    ],
    'Code' => [
      'base' => NULL,
      'refs' => [
        'Error$Code' => NULL,
      ],
    ],
    'CommonPrefix' => [
      'base' => NULL,
      'refs' => [
        'CommonPrefixList$member' => NULL,
      ],
    ],
    'CommonPrefixList' => [
      'base' => NULL,
      'refs' => [
        'ListMultipartUploadsOutput$CommonPrefixes' => NULL,
        'ListObjectVersionsOutput$CommonPrefixes' => NULL,
        'ListObjectsOutput$CommonPrefixes' => NULL,
      ],
    ],
    'CompleteMultipartUploadOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CompleteMultipartUploadRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CompletedMultipartUpload' => [
      'base' => NULL,
      'refs' => [
        'CompleteMultipartUploadRequest$MultipartUpload' => NULL,
      ],
    ],
    'CompletedPart' => [
      'base' => NULL,
      'refs' => [
        'CompletedPartList$member' => NULL,
      ],
    ],
    'CompletedPartList' => [
      'base' => NULL,
      'refs' => [
        'CompletedMultipartUpload$Parts' => NULL,
      ],
    ],
    'Condition' => [
      'base' => NULL,
      'refs' => [
        'RoutingRule$Condition' => 'A container for describing a condition that must be met for the specified redirect to apply. For example, 1. If request is for pages in the /docs folder, redirect to the /documents folder. 2. If request results in HTTP error 4xx, redirect request to another host where you might process the error.',
      ],
    ],
    'ContentDisposition' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$ContentDisposition' => 'Specifies presentational information for the object.',
        'CreateMultipartUploadRequest$ContentDisposition' => 'Specifies presentational information for the object.',
        'GetObjectOutput$ContentDisposition' => 'Specifies presentational information for the object.',
        'HeadObjectOutput$ContentDisposition' => 'Specifies presentational information for the object.',
        'PutObjectRequest$ContentDisposition' => 'Specifies presentational information for the object.',
      ],
    ],
    'ContentEncoding' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$ContentEncoding' => 'Specifies what content encodings have been applied to the object and thus what decoding mechanisms must be applied to obtain the media-type referenced by the Content-Type header field.',
        'CreateMultipartUploadRequest$ContentEncoding' => 'Specifies what content encodings have been applied to the object and thus what decoding mechanisms must be applied to obtain the media-type referenced by the Content-Type header field.',
        'GetObjectOutput$ContentEncoding' => 'Specifies what content encodings have been applied to the object and thus what decoding mechanisms must be applied to obtain the media-type referenced by the Content-Type header field.',
        'HeadObjectOutput$ContentEncoding' => 'Specifies what content encodings have been applied to the object and thus what decoding mechanisms must be applied to obtain the media-type referenced by the Content-Type header field.',
        'PutObjectRequest$ContentEncoding' => 'Specifies what content encodings have been applied to the object and thus what decoding mechanisms must be applied to obtain the media-type referenced by the Content-Type header field.',
      ],
    ],
    'ContentLanguage' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$ContentLanguage' => 'The language the content is in.',
        'CreateMultipartUploadRequest$ContentLanguage' => 'The language the content is in.',
        'GetObjectOutput$ContentLanguage' => 'The language the content is in.',
        'HeadObjectOutput$ContentLanguage' => 'The language the content is in.',
        'PutObjectRequest$ContentLanguage' => 'The language the content is in.',
      ],
    ],
    'ContentLength' => [
      'base' => NULL,
      'refs' => [
        'GetObjectOutput$ContentLength' => 'Size of the body in bytes.',
        'HeadObjectOutput$ContentLength' => 'Size of the body in bytes.',
        'PutObjectRequest$ContentLength' => 'Size of the body in bytes. This parameter is useful when the size of the body cannot be determined automatically.',
        'UploadPartRequest$ContentLength' => 'Size of the body in bytes. This parameter is useful when the size of the body cannot be determined automatically.',
      ],
    ],
    'ContentMD5' => [
      'base' => NULL,
      'refs' => [
        'PutBucketAclRequest$ContentMD5' => NULL,
        'PutBucketCorsRequest$ContentMD5' => NULL,
        'PutBucketLifecycleRequest$ContentMD5' => NULL,
        'PutBucketLoggingRequest$ContentMD5' => NULL,
        'PutBucketNotificationRequest$ContentMD5' => NULL,
        'PutBucketPolicyRequest$ContentMD5' => NULL,
        'PutBucketRequestPaymentRequest$ContentMD5' => NULL,
        'PutBucketTaggingRequest$ContentMD5' => NULL,
        'PutBucketVersioningRequest$ContentMD5' => NULL,
        'PutBucketWebsiteRequest$ContentMD5' => NULL,
        'PutObjectAclRequest$ContentMD5' => NULL,
        'PutObjectRequest$ContentMD5' => NULL,
        'UploadPartRequest$ContentMD5' => NULL,
      ],
    ],
    'ContentType' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$ContentType' => 'A standard MIME type describing the format of the object data.',
        'CreateMultipartUploadRequest$ContentType' => 'A standard MIME type describing the format of the object data.',
        'GetObjectOutput$ContentType' => 'A standard MIME type describing the format of the object data.',
        'HeadObjectOutput$ContentType' => 'A standard MIME type describing the format of the object data.',
        'PutObjectRequest$ContentType' => 'A standard MIME type describing the format of the object data.',
      ],
    ],
    'CopyObjectOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CopyObjectRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CopyObjectResult' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectOutput$CopyObjectResult' => NULL,
      ],
    ],
    'CopyPartResult' => [
      'base' => NULL,
      'refs' => [
        'UploadPartCopyOutput$CopyPartResult' => NULL,
      ],
    ],
    'CopySource' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$CopySource' => 'The name of the source bucket and key name of the source object, separated by a slash (/]. Must be URL-encoded.',
        'UploadPartCopyRequest$CopySource' => 'The name of the source bucket and key name of the source object, separated by a slash (/]. Must be URL-encoded.',
      ],
    ],
    'CopySourceIfMatch' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$CopySourceIfMatch' => 'Copies the object if its entity tag (ETag] matches the specified tag.',
        'UploadPartCopyRequest$CopySourceIfMatch' => 'Copies the object if its entity tag (ETag] matches the specified tag.',
      ],
    ],
    'CopySourceIfModifiedSince' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$CopySourceIfModifiedSince' => 'Copies the object if it has been modified since the specified time.',
        'UploadPartCopyRequest$CopySourceIfModifiedSince' => 'Copies the object if it has been modified since the specified time.',
      ],
    ],
    'CopySourceIfNoneMatch' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$CopySourceIfNoneMatch' => 'Copies the object if its entity tag (ETag] is different than the specified ETag.',
        'UploadPartCopyRequest$CopySourceIfNoneMatch' => 'Copies the object if its entity tag (ETag] is different than the specified ETag.',
      ],
    ],
    'CopySourceIfUnmodifiedSince' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$CopySourceIfUnmodifiedSince' => 'Copies the object if it hasn\'t been modified since the specified time.',
        'UploadPartCopyRequest$CopySourceIfUnmodifiedSince' => 'Copies the object if it hasn\'t been modified since the specified time.',
      ],
    ],
    'CopySourceRange' => [
      'base' => NULL,
      'refs' => [
        'UploadPartCopyRequest$CopySourceRange' => 'The range of bytes to copy from the source object. The range value must use the form bytes=first-last, where the first and last are the zero-based byte offsets to copy. For example, bytes=0-9 indicates that you want to copy the first ten bytes of the source. You can copy a range only if the source object is greater than 5 GB.',
      ],
    ],
    'CopySourceSSECustomerAlgorithm' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$CopySourceSSECustomerAlgorithm' => 'Specifies the algorithm to use when decrypting the source object (e.g., AES256].',
        'UploadPartCopyRequest$CopySourceSSECustomerAlgorithm' => 'Specifies the algorithm to use when decrypting the source object (e.g., AES256].',
      ],
    ],
    'CopySourceSSECustomerKey' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$CopySourceSSECustomerKey' => 'Specifies the customer-provided encryption key for Amazon S3 to use to decrypt the source object. The encryption key provided in this header must be one that was used when the source object was created.',
        'UploadPartCopyRequest$CopySourceSSECustomerKey' => 'Specifies the customer-provided encryption key for Amazon S3 to use to decrypt the source object. The encryption key provided in this header must be one that was used when the source object was created.',
      ],
    ],
    'CopySourceSSECustomerKeyMD5' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$CopySourceSSECustomerKeyMD5' => 'Specifies the 128-bit MD5 digest of the encryption key according to RFC 1321. Amazon S3 uses this header for a message integrity check to ensure the encryption key was transmitted without error.',
        'UploadPartCopyRequest$CopySourceSSECustomerKeyMD5' => 'Specifies the 128-bit MD5 digest of the encryption key according to RFC 1321. Amazon S3 uses this header for a message integrity check to ensure the encryption key was transmitted without error.',
      ],
    ],
    'CopySourceVersionId' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectOutput$CopySourceVersionId' => NULL,
        'UploadPartCopyOutput$CopySourceVersionId' => 'The version of the source object that was copied, if you have enabled versioning on the source bucket.',
      ],
    ],
    'CreateBucketConfiguration' => [
      'base' => NULL,
      'refs' => [
        'CreateBucketRequest$CreateBucketConfiguration' => NULL,
      ],
    ],
    'CreateBucketOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateBucketRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateMultipartUploadOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateMultipartUploadRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreationDate' => [
      'base' => NULL,
      'refs' => [
        'Bucket$CreationDate' => 'Date the bucket was created.',
      ],
    ],
    'Date' => [
      'base' => NULL,
      'refs' => [
        'LifecycleExpiration$Date' => 'Indicates at what date the object is to be moved or deleted. Should be in GMT ISO 8601 Format.',
        'Transition$Date' => 'Indicates at what date the object is to be moved or deleted. Should be in GMT ISO 8601 Format.',
      ],
    ],
    'Days' => [
      'base' => NULL,
      'refs' => [
        'LifecycleExpiration$Days' => 'Indicates the lifetime, in days, of the objects that are subject to the rule. The value must be a non-zero positive integer.',
        'NoncurrentVersionExpiration$NoncurrentDays' => 'Specifies the number of days an object is noncurrent before Amazon S3 can perform the associated action. For information about the noncurrent days calculations, see <a href="/AmazonS3/latest/dev/s3-access-control.html">How Amazon S3 Calculates When an Object Became Noncurrent</a> in the Amazon Simple Storage Service Developer Guide.',
        'NoncurrentVersionTransition$NoncurrentDays' => 'Specifies the number of days an object is noncurrent before Amazon S3 can perform the associated action. For information about the noncurrent days calculations, see <a href="/AmazonS3/latest/dev/s3-access-control.html">How Amazon S3 Calculates When an Object Became Noncurrent</a> in the Amazon Simple Storage Service Developer Guide.',
        'RestoreRequest$Days' => 'Lifetime of the active copy in days',
        'Transition$Days' => 'Indicates the lifetime, in days, of the objects that are subject to the rule. The value must be a non-zero positive integer.',
      ],
    ],
    'Delete' => [
      'base' => NULL,
      'refs' => [
        'DeleteObjectsRequest$Delete' => NULL,
      ],
    ],
    'DeleteBucketCorsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteBucketLifecycleRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteBucketPolicyRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteBucketRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteBucketTaggingRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteBucketWebsiteRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteMarker' => [
      'base' => NULL,
      'refs' => [
        'DeleteObjectOutput$DeleteMarker' => 'Specifies whether the versioned object that was permanently deleted was (true] or was not (false] a delete marker.',
        'DeletedObject$DeleteMarker' => NULL,
        'GetObjectOutput$DeleteMarker' => 'Specifies whether the object retrieved was (true] or was not (false] a Delete Marker. If false, this response header does not appear in the response.',
        'HeadObjectOutput$DeleteMarker' => 'Specifies whether the object retrieved was (true] or was not (false] a Delete Marker. If false, this response header does not appear in the response.',
      ],
    ],
    'DeleteMarkerEntry' => [
      'base' => NULL,
      'refs' => [
        'DeleteMarkers$member' => NULL,
      ],
    ],
    'DeleteMarkerVersionId' => [
      'base' => NULL,
      'refs' => [
        'DeletedObject$DeleteMarkerVersionId' => NULL,
      ],
    ],
    'DeleteMarkers' => [
      'base' => NULL,
      'refs' => [
        'ListObjectVersionsOutput$DeleteMarkers' => NULL,
      ],
    ],
    'DeleteObjectOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteObjectRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteObjectsOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteObjectsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeletedObject' => [
      'base' => NULL,
      'refs' => [
        'DeletedObjects$member' => NULL,
      ],
    ],
    'DeletedObjects' => [
      'base' => NULL,
      'refs' => [
        'DeleteObjectsOutput$Deleted' => NULL,
      ],
    ],
    'Delimiter' => [
      'base' => NULL,
      'refs' => [
        'ListMultipartUploadsOutput$Delimiter' => NULL,
        'ListMultipartUploadsRequest$Delimiter' => 'Character you use to group keys.',
        'ListObjectVersionsOutput$Delimiter' => NULL,
        'ListObjectVersionsRequest$Delimiter' => 'A delimiter is a character you use to group keys.',
        'ListObjectsOutput$Delimiter' => NULL,
        'ListObjectsRequest$Delimiter' => 'A delimiter is a character you use to group keys.',
      ],
    ],
    'DisplayName' => [
      'base' => NULL,
      'refs' => [
        'Grantee$DisplayName' => 'Screen name of the grantee.',
        'Initiator$DisplayName' => 'Name of the Principal.',
        'Owner$DisplayName' => NULL,
      ],
    ],
    'ETag' => [
      'base' => NULL,
      'refs' => [
        'CompleteMultipartUploadOutput$ETag' => 'Entity tag of the object.',
        'CompletedPart$ETag' => 'Entity tag returned when the part was uploaded.',
        'CopyObjectResult$ETag' => NULL,
        'CopyPartResult$ETag' => 'Entity tag of the object.',
        'GetObjectOutput$ETag' => 'An ETag is an opaque identifier assigned by a web server to a specific version of a resource found at a URL',
        'HeadObjectOutput$ETag' => 'An ETag is an opaque identifier assigned by a web server to a specific version of a resource found at a URL',
        'Object$ETag' => NULL,
        'ObjectVersion$ETag' => NULL,
        'Part$ETag' => 'Entity tag returned when the part was uploaded.',
        'PutObjectOutput$ETag' => 'Entity tag for the uploaded object.',
        'UploadPartOutput$ETag' => 'Entity tag for the uploaded object.',
      ],
    ],
    'EmailAddress' => [
      'base' => NULL,
      'refs' => [
        'Grantee$EmailAddress' => 'Email address of the grantee.',
      ],
    ],
    'EncodingType' => [
      'base' => 'Requests Amazon S3 to encode the object keys in the response and specifies the encoding method to use. An object key may contain any Unicode character; however, XML 1.0 parser cannot parse some characters, such as characters with an ASCII value from 0 to 10. For characters that are not supported in XML 1.0, you can add this parameter to request that Amazon S3 encode the keys in the response.',
      'refs' => [
        'ListMultipartUploadsOutput$EncodingType' => 'Encoding type used by Amazon S3 to encode object keys in the response.',
        'ListMultipartUploadsRequest$EncodingType' => NULL,
        'ListObjectVersionsOutput$EncodingType' => 'Encoding type used by Amazon S3 to encode object keys in the response.',
        'ListObjectVersionsRequest$EncodingType' => NULL,
        'ListObjectsOutput$EncodingType' => 'Encoding type used by Amazon S3 to encode object keys in the response.',
        'ListObjectsRequest$EncodingType' => NULL,
      ],
    ],
    'Error' => [
      'base' => NULL,
      'refs' => [
        'Errors$member' => NULL,
      ],
    ],
    'ErrorDocument' => [
      'base' => NULL,
      'refs' => [
        'GetBucketWebsiteOutput$ErrorDocument' => NULL,
        'WebsiteConfiguration$ErrorDocument' => NULL,
      ],
    ],
    'Errors' => [
      'base' => NULL,
      'refs' => [
        'DeleteObjectsOutput$Errors' => NULL,
      ],
    ],
    'Event' => [
      'base' => NULL,
      'refs' => [
        'CloudFunctionConfiguration$Event' => NULL,
        'Events$member' => NULL,
        'QueueConfiguration$Event' => NULL,
        'TopicConfiguration$Event' => 'Bucket event for which to send notifications.',
      ],
    ],
    'Events' => [
      'base' => NULL,
      'refs' => [
        'CloudFunctionConfiguration$Events' => NULL,
        'QueueConfiguration$Events' => NULL,
        'TopicConfiguration$Events' => NULL,
      ],
    ],
    'Expiration' => [
      'base' => NULL,
      'refs' => [
        'CompleteMultipartUploadOutput$Expiration' => 'If the object expiration is configured, this will contain the expiration date (expiry-date] and rule ID (rule-id]. The value of rule-id is URL encoded.',
        'CopyObjectOutput$Expiration' => 'If the object expiration is configured, the response includes this header.',
        'GetObjectOutput$Expiration' => 'If the object expiration is configured (see PUT Bucket lifecycle], the response includes this header. It includes the expiry-date and rule-id key value pairs providing object expiration information. The value of the rule-id is URL encoded.',
        'HeadObjectOutput$Expiration' => 'If the object expiration is configured (see PUT Bucket lifecycle], the response includes this header. It includes the expiry-date and rule-id key value pairs providing object expiration information. The value of the rule-id is URL encoded.',
        'PutObjectOutput$Expiration' => 'If the object expiration is configured, this will contain the expiration date (expiry-date] and rule ID (rule-id]. The value of rule-id is URL encoded.',
      ],
    ],
    'ExpirationStatus' => [
      'base' => NULL,
      'refs' => [
        'Rule$Status' => 'If \'Enabled\', the rule is currently being applied. If \'Disabled\', the rule is not currently being applied.',
      ],
    ],
    'Expires' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$Expires' => 'The date and time at which the object is no longer cacheable.',
        'CreateMultipartUploadRequest$Expires' => 'The date and time at which the object is no longer cacheable.',
        'GetObjectOutput$Expires' => 'The date and time at which the object is no longer cacheable.',
        'HeadObjectOutput$Expires' => 'The date and time at which the object is no longer cacheable.',
        'PutObjectRequest$Expires' => 'The date and time at which the object is no longer cacheable.',
      ],
    ],
    'ExposeHeader' => [
      'base' => NULL,
      'refs' => [
        'ExposeHeaders$member' => NULL,
      ],
    ],
    'ExposeHeaders' => [
      'base' => NULL,
      'refs' => [
        'CORSRule$ExposeHeaders' => 'One or more headers in the response that you want customers to be able to access from their applications (for example, from a JavaScript XMLHttpRequest object].',
      ],
    ],
    'GetBucketAclOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketAclRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketCorsOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketCorsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketLifecycleOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketLifecycleRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketLocationOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketLocationRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketLoggingOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketLoggingRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketNotificationOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketNotificationRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketPolicyOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketPolicyRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketRequestPaymentOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketRequestPaymentRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketTaggingOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketTaggingRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketVersioningOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketVersioningRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketWebsiteOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetBucketWebsiteRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetObjectAclOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetObjectAclRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetObjectOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetObjectRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetObjectTorrentOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetObjectTorrentRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Grant' => [
      'base' => NULL,
      'refs' => [
        'Grants$member' => NULL,
      ],
    ],
    'GrantFullControl' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$GrantFullControl' => 'Gives the grantee READ, READ_ACP, and WRITE_ACP permissions on the object.',
        'CreateBucketRequest$GrantFullControl' => 'Allows grantee the read, write, read ACP, and write ACP permissions on the bucket.',
        'CreateMultipartUploadRequest$GrantFullControl' => 'Gives the grantee READ, READ_ACP, and WRITE_ACP permissions on the object.',
        'PutBucketAclRequest$GrantFullControl' => 'Allows grantee the read, write, read ACP, and write ACP permissions on the bucket.',
        'PutObjectAclRequest$GrantFullControl' => 'Allows grantee the read, write, read ACP, and write ACP permissions on the bucket.',
        'PutObjectRequest$GrantFullControl' => 'Gives the grantee READ, READ_ACP, and WRITE_ACP permissions on the object.',
      ],
    ],
    'GrantRead' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$GrantRead' => 'Allows grantee to read the object data and its metadata.',
        'CreateBucketRequest$GrantRead' => 'Allows grantee to list the objects in the bucket.',
        'CreateMultipartUploadRequest$GrantRead' => 'Allows grantee to read the object data and its metadata.',
        'PutBucketAclRequest$GrantRead' => 'Allows grantee to list the objects in the bucket.',
        'PutObjectAclRequest$GrantRead' => 'Allows grantee to list the objects in the bucket.',
        'PutObjectRequest$GrantRead' => 'Allows grantee to read the object data and its metadata.',
      ],
    ],
    'GrantReadACP' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$GrantReadACP' => 'Allows grantee to read the object ACL.',
        'CreateBucketRequest$GrantReadACP' => 'Allows grantee to read the bucket ACL.',
        'CreateMultipartUploadRequest$GrantReadACP' => 'Allows grantee to read the object ACL.',
        'PutBucketAclRequest$GrantReadACP' => 'Allows grantee to read the bucket ACL.',
        'PutObjectAclRequest$GrantReadACP' => 'Allows grantee to read the bucket ACL.',
        'PutObjectRequest$GrantReadACP' => 'Allows grantee to read the object ACL.',
      ],
    ],
    'GrantWrite' => [
      'base' => NULL,
      'refs' => [
        'CreateBucketRequest$GrantWrite' => 'Allows grantee to create, overwrite, and delete any object in the bucket.',
        'PutBucketAclRequest$GrantWrite' => 'Allows grantee to create, overwrite, and delete any object in the bucket.',
        'PutObjectAclRequest$GrantWrite' => 'Allows grantee to create, overwrite, and delete any object in the bucket.',
      ],
    ],
    'GrantWriteACP' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$GrantWriteACP' => 'Allows grantee to write the ACL for the applicable object.',
        'CreateBucketRequest$GrantWriteACP' => 'Allows grantee to write the ACL for the applicable bucket.',
        'CreateMultipartUploadRequest$GrantWriteACP' => 'Allows grantee to write the ACL for the applicable object.',
        'PutBucketAclRequest$GrantWriteACP' => 'Allows grantee to write the ACL for the applicable bucket.',
        'PutObjectAclRequest$GrantWriteACP' => 'Allows grantee to write the ACL for the applicable bucket.',
        'PutObjectRequest$GrantWriteACP' => 'Allows grantee to write the ACL for the applicable object.',
      ],
    ],
    'Grantee' => [
      'base' => NULL,
      'refs' => [
        'Grant$Grantee' => NULL,
        'TargetGrant$Grantee' => NULL,
      ],
    ],
    'Grants' => [
      'base' => NULL,
      'refs' => [
        'AccessControlPolicy$Grants' => 'A list of grants.',
        'GetBucketAclOutput$Grants' => 'A list of grants.',
        'GetObjectAclOutput$Grants' => 'A list of grants.',
      ],
    ],
    'HeadBucketRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'HeadObjectOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'HeadObjectRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'HostName' => [
      'base' => NULL,
      'refs' => [
        'Redirect$HostName' => 'The host name to use in the redirect request.',
        'RedirectAllRequestsTo$HostName' => 'Name of the host where requests will be redirected.',
      ],
    ],
    'HttpErrorCodeReturnedEquals' => [
      'base' => NULL,
      'refs' => [
        'Condition$HttpErrorCodeReturnedEquals' => 'The HTTP error code when the redirect is applied. In the event of an error, if the error code equals this value, then the specified redirect is applied. Required when parent element Condition is specified and sibling KeyPrefixEquals is not specified. If both are specified, then both must be true for the redirect to be applied.',
      ],
    ],
    'HttpRedirectCode' => [
      'base' => NULL,
      'refs' => [
        'Redirect$HttpRedirectCode' => 'The HTTP redirect code to use on the response. Not required if one of the siblings is present.',
      ],
    ],
    'ID' => [
      'base' => NULL,
      'refs' => [
        'Grantee$ID' => 'The canonical user ID of the grantee.',
        'Initiator$ID' => 'If the principal is an AWS account, it provides the Canonical User ID. If the principal is an IAM User, it provides a user ARN value.',
        'Owner$ID' => NULL,
        'Rule$ID' => 'Unique identifier for the rule. The value cannot be longer than 255 characters.',
      ],
    ],
    'IfMatch' => [
      'base' => NULL,
      'refs' => [
        'GetObjectRequest$IfMatch' => 'Return the object only if its entity tag (ETag] is the same as the one specified, otherwise return a 412 (precondition failed].',
        'HeadObjectRequest$IfMatch' => 'Return the object only if its entity tag (ETag] is the same as the one specified, otherwise return a 412 (precondition failed].',
      ],
    ],
    'IfModifiedSince' => [
      'base' => NULL,
      'refs' => [
        'GetObjectRequest$IfModifiedSince' => 'Return the object only if it has been modified since the specified time, otherwise return a 304 (not modified].',
        'HeadObjectRequest$IfModifiedSince' => 'Return the object only if it has been modified since the specified time, otherwise return a 304 (not modified].',
      ],
    ],
    'IfNoneMatch' => [
      'base' => NULL,
      'refs' => [
        'GetObjectRequest$IfNoneMatch' => 'Return the object only if its entity tag (ETag] is different from the one specified, otherwise return a 304 (not modified].',
        'HeadObjectRequest$IfNoneMatch' => 'Return the object only if its entity tag (ETag] is different from the one specified, otherwise return a 304 (not modified].',
      ],
    ],
    'IfUnmodifiedSince' => [
      'base' => NULL,
      'refs' => [
        'GetObjectRequest$IfUnmodifiedSince' => 'Return the object only if it has not been modified since the specified time, otherwise return a 412 (precondition failed].',
        'HeadObjectRequest$IfUnmodifiedSince' => 'Return the object only if it has not been modified since the specified time, otherwise return a 412 (precondition failed].',
      ],
    ],
    'IndexDocument' => [
      'base' => NULL,
      'refs' => [
        'GetBucketWebsiteOutput$IndexDocument' => NULL,
        'WebsiteConfiguration$IndexDocument' => NULL,
      ],
    ],
    'Initiated' => [
      'base' => NULL,
      'refs' => [
        'MultipartUpload$Initiated' => 'Date and time at which the multipart upload was initiated.',
      ],
    ],
    'Initiator' => [
      'base' => NULL,
      'refs' => [
        'ListPartsOutput$Initiator' => 'Identifies who initiated the multipart upload.',
        'MultipartUpload$Initiator' => 'Identifies who initiated the multipart upload.',
      ],
    ],
    'IsLatest' => [
      'base' => NULL,
      'refs' => [
        'DeleteMarkerEntry$IsLatest' => 'Specifies whether the object is (true] or is not (false] the latest version of an object.',
        'ObjectVersion$IsLatest' => 'Specifies whether the object is (true] or is not (false] the latest version of an object.',
      ],
    ],
    'IsTruncated' => [
      'base' => NULL,
      'refs' => [
        'ListMultipartUploadsOutput$IsTruncated' => 'Indicates whether the returned list of multipart uploads is truncated. A value of true indicates that the list was truncated. The list can be truncated if the number of multipart uploads exceeds the limit allowed or specified by max uploads.',
        'ListObjectVersionsOutput$IsTruncated' => 'A flag that indicates whether or not Amazon S3 returned all of the results that satisfied the search criteria. If your results were truncated, you can make a follow-up paginated request using the NextKeyMarker and NextVersionIdMarker response parameters as a starting place in another request to return the rest of the results.',
        'ListObjectsOutput$IsTruncated' => 'A flag that indicates whether or not Amazon S3 returned all of the results that satisfied the search criteria.',
        'ListPartsOutput$IsTruncated' => 'Indicates whether the returned list of parts is truncated.',
      ],
    ],
    'KeyMarker' => [
      'base' => NULL,
      'refs' => [
        'ListMultipartUploadsOutput$KeyMarker' => 'The key at or after which the listing began.',
        'ListMultipartUploadsRequest$KeyMarker' => 'Together with upload-id-marker, this parameter specifies the multipart upload after which listing should begin.',
        'ListObjectVersionsOutput$KeyMarker' => 'Marks the last Key returned in a truncated response.',
        'ListObjectVersionsRequest$KeyMarker' => 'Specifies the key to start with when listing objects in a bucket.',
      ],
    ],
    'KeyPrefixEquals' => [
      'base' => NULL,
      'refs' => [
        'Condition$KeyPrefixEquals' => 'The object key name prefix when the redirect is applied. For example, to redirect requests for ExamplePage.html, the key prefix will be ExamplePage.html. To redirect request for all pages with the prefix docs/, the key prefix will be /docs, which identifies all objects in the docs/ folder. Required when the parent element Condition is specified and sibling HttpErrorCodeReturnedEquals is not specified. If both conditions are specified, both must be true for the redirect to be applied.',
      ],
    ],
    'LastModified' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectResult$LastModified' => NULL,
        'CopyPartResult$LastModified' => 'Date and time at which the object was uploaded.',
        'DeleteMarkerEntry$LastModified' => 'Date and time the object was last modified.',
        'GetObjectOutput$LastModified' => 'Last modified date of the object',
        'HeadObjectOutput$LastModified' => 'Last modified date of the object',
        'Object$LastModified' => NULL,
        'ObjectVersion$LastModified' => 'Date and time the object was last modified.',
        'Part$LastModified' => 'Date and time at which the part was uploaded.',
      ],
    ],
    'LifecycleConfiguration' => [
      'base' => NULL,
      'refs' => [
        'PutBucketLifecycleRequest$LifecycleConfiguration' => NULL,
      ],
    ],
    'LifecycleExpiration' => [
      'base' => NULL,
      'refs' => [
        'Rule$Expiration' => NULL,
      ],
    ],
    'ListBucketsOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ListMultipartUploadsOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ListMultipartUploadsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ListObjectVersionsOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ListObjectVersionsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ListObjectsOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ListObjectsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ListPartsOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ListPartsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Location' => [
      'base' => NULL,
      'refs' => [
        'CompleteMultipartUploadOutput$Location' => NULL,
        'CreateBucketOutput$Location' => NULL,
      ],
    ],
    'LoggingEnabled' => [
      'base' => NULL,
      'refs' => [
        'BucketLoggingStatus$LoggingEnabled' => NULL,
        'GetBucketLoggingOutput$LoggingEnabled' => NULL,
      ],
    ],
    'MFA' => [
      'base' => NULL,
      'refs' => [
        'DeleteObjectRequest$MFA' => 'The concatenation of the authentication device\'s serial number, a space, and the value that is displayed on your authentication device.',
        'DeleteObjectsRequest$MFA' => 'The concatenation of the authentication device\'s serial number, a space, and the value that is displayed on your authentication device.',
        'PutBucketVersioningRequest$MFA' => 'The concatenation of the authentication device\'s serial number, a space, and the value that is displayed on your authentication device.',
      ],
    ],
    'MFADelete' => [
      'base' => NULL,
      'refs' => [
        'VersioningConfiguration$MFADelete' => 'Specifies whether MFA delete is enabled in the bucket versioning configuration. This element is only returned if the bucket has been configured with MFA delete. If the bucket has never been so configured, this element is not returned.',
      ],
    ],
    'MFADeleteStatus' => [
      'base' => NULL,
      'refs' => [
        'GetBucketVersioningOutput$MFADelete' => 'Specifies whether MFA delete is enabled in the bucket versioning configuration. This element is only returned if the bucket has been configured with MFA delete. If the bucket has never been so configured, this element is not returned.',
      ],
    ],
    'Marker' => [
      'base' => NULL,
      'refs' => [
        'ListObjectsOutput$Marker' => NULL,
        'ListObjectsRequest$Marker' => 'Specifies the key to start with when listing objects in a bucket.',
      ],
    ],
    'MaxAgeSeconds' => [
      'base' => NULL,
      'refs' => [
        'CORSRule$MaxAgeSeconds' => 'The time in seconds that your browser is to cache the preflight response for the specified resource.',
      ],
    ],
    'MaxKeys' => [
      'base' => NULL,
      'refs' => [
        'ListObjectVersionsOutput$MaxKeys' => NULL,
        'ListObjectVersionsRequest$MaxKeys' => 'Sets the maximum number of keys returned in the response. The response might contain fewer keys but will never contain more.',
        'ListObjectsOutput$MaxKeys' => NULL,
        'ListObjectsRequest$MaxKeys' => 'Sets the maximum number of keys returned in the response. The response might contain fewer keys but will never contain more.',
      ],
    ],
    'MaxParts' => [
      'base' => NULL,
      'refs' => [
        'ListPartsOutput$MaxParts' => 'Maximum number of parts that were allowed in the response.',
        'ListPartsRequest$MaxParts' => 'Sets the maximum number of parts to return.',
      ],
    ],
    'MaxUploads' => [
      'base' => NULL,
      'refs' => [
        'ListMultipartUploadsOutput$MaxUploads' => 'Maximum number of multipart uploads that could have been included in the response.',
        'ListMultipartUploadsRequest$MaxUploads' => 'Sets the maximum number of multipart uploads, from 1 to 1,000, to return in the response body. 1,000 is the maximum number of uploads that can be returned in a response.',
      ],
    ],
    'Message' => [
      'base' => NULL,
      'refs' => [
        'Error$Message' => NULL,
      ],
    ],
    'Metadata' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$Metadata' => 'A map of metadata to store with the object in S3.',
        'CreateMultipartUploadRequest$Metadata' => 'A map of metadata to store with the object in S3.',
        'GetObjectOutput$Metadata' => 'A map of metadata to store with the object in S3.',
        'HeadObjectOutput$Metadata' => 'A map of metadata to store with the object in S3.',
        'PutObjectRequest$Metadata' => 'A map of metadata to store with the object in S3.',
      ],
    ],
    'MetadataDirective' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$MetadataDirective' => 'Specifies whether the metadata is copied from the source object or replaced with metadata provided in the request.',
      ],
    ],
    'MetadataKey' => [
      'base' => NULL,
      'refs' => [
        'Metadata$key' => NULL,
      ],
    ],
    'MetadataValue' => [
      'base' => NULL,
      'refs' => [
        'Metadata$value' => NULL,
      ],
    ],
    'MissingMeta' => [
      'base' => NULL,
      'refs' => [
        'GetObjectOutput$MissingMeta' => 'This is set to the number of metadata entries not returned in x-amz-meta headers. This can happen if you create metadata using an API like SOAP that supports more flexible metadata than the REST API. For example, using SOAP, you can create metadata whose values are not legal HTTP headers.',
        'HeadObjectOutput$MissingMeta' => 'This is set to the number of metadata entries not returned in x-amz-meta headers. This can happen if you create metadata using an API like SOAP that supports more flexible metadata than the REST API. For example, using SOAP, you can create metadata whose values are not legal HTTP headers.',
      ],
    ],
    'MultipartUpload' => [
      'base' => NULL,
      'refs' => [
        'MultipartUploadList$member' => NULL,
      ],
    ],
    'MultipartUploadId' => [
      'base' => NULL,
      'refs' => [
        'AbortMultipartUploadRequest$UploadId' => NULL,
        'CompleteMultipartUploadRequest$UploadId' => NULL,
        'CreateMultipartUploadOutput$UploadId' => 'ID for the initiated multipart upload.',
        'ListPartsOutput$UploadId' => 'Upload ID identifying the multipart upload whose parts are being listed.',
        'ListPartsRequest$UploadId' => 'Upload ID identifying the multipart upload whose parts are being listed.',
        'MultipartUpload$UploadId' => 'Upload ID that identifies the multipart upload.',
        'UploadPartCopyRequest$UploadId' => 'Upload ID identifying the multipart upload whose part is being copied.',
        'UploadPartRequest$UploadId' => 'Upload ID identifying the multipart upload whose part is being uploaded.',
      ],
    ],
    'MultipartUploadList' => [
      'base' => NULL,
      'refs' => [
        'ListMultipartUploadsOutput$Uploads' => NULL,
      ],
    ],
    'NextKeyMarker' => [
      'base' => NULL,
      'refs' => [
        'ListMultipartUploadsOutput$NextKeyMarker' => 'When a list is truncated, this element specifies the value that should be used for the key-marker request parameter in a subsequent request.',
        'ListObjectVersionsOutput$NextKeyMarker' => 'Use this value for the key marker request parameter in a subsequent request.',
      ],
    ],
    'NextMarker' => [
      'base' => NULL,
      'refs' => [
        'ListObjectsOutput$NextMarker' => 'When response is truncated (the IsTruncated element value in the response is true], you can use the key name in this field as marker in the subsequent request to get next set of objects. Amazon S3 lists objects in alphabetical order Note: This element is returned only if you have delimiter request parameter specified. If response does not include the NextMaker and it is truncated, you can use the value of the last Key in the response as the marker in the subsequent request to get the next set of object keys.',
      ],
    ],
    'NextPartNumberMarker' => [
      'base' => NULL,
      'refs' => [
        'ListPartsOutput$NextPartNumberMarker' => 'When a list is truncated, this element specifies the last part in the list, as well as the value to use for the part-number-marker request parameter in a subsequent request.',
      ],
    ],
    'NextUploadIdMarker' => [
      'base' => NULL,
      'refs' => [
        'ListMultipartUploadsOutput$NextUploadIdMarker' => 'When a list is truncated, this element specifies the value that should be used for the upload-id-marker request parameter in a subsequent request.',
      ],
    ],
    'NextVersionIdMarker' => [
      'base' => NULL,
      'refs' => [
        'ListObjectVersionsOutput$NextVersionIdMarker' => 'Use this value for the next version id marker parameter in a subsequent request.',
      ],
    ],
    'NoSuchBucket' => [
      'base' => 'The specified bucket does not exist.',
      'refs' => [],
    ],
    'NoSuchKey' => [
      'base' => 'The specified key does not exist.',
      'refs' => [],
    ],
    'NoSuchUpload' => [
      'base' => 'The specified multipart upload does not exist.',
      'refs' => [],
    ],
    'NoncurrentVersionExpiration' => [
      'base' => 'Specifies when noncurrent object versions expire. Upon expiration, Amazon S3 permanently deletes the noncurrent object versions. You set this lifecycle configuration action on a bucket that has versioning enabled (or suspended] to request that Amazon S3 delete noncurrent object versions at a specific period in the object\'s lifetime.',
      'refs' => [
        'Rule$NoncurrentVersionExpiration' => NULL,
      ],
    ],
    'NoncurrentVersionTransition' => [
      'base' => 'Container for the transition rule that describes when noncurrent objects transition to the GLACIER storage class. If your bucket is versioning-enabled (or versioning is suspended], you can set this action to request that Amazon S3 transition noncurrent object versions to the GLACIER storage class at a specific period in the object\'s lifetime.',
      'refs' => [
        'Rule$NoncurrentVersionTransition' => NULL,
      ],
    ],
    'NotificationConfiguration' => [
      'base' => NULL,
      'refs' => [
        'PutBucketNotificationRequest$NotificationConfiguration' => NULL,
      ],
    ],
    'NotificationId' => [
      'base' => NULL,
      'refs' => [
        'CloudFunctionConfiguration$Id' => NULL,
        'QueueConfiguration$Id' => NULL,
        'TopicConfiguration$Id' => NULL,
      ],
    ],
    'Object' => [
      'base' => NULL,
      'refs' => [
        'ObjectList$member' => NULL,
      ],
    ],
    'ObjectAlreadyInActiveTierError' => [
      'base' => 'This operation is not allowed against this storage tier',
      'refs' => [],
    ],
    'ObjectCannedACL' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$ACL' => 'The canned ACL to apply to the object.',
        'CreateMultipartUploadRequest$ACL' => 'The canned ACL to apply to the object.',
        'PutObjectAclRequest$ACL' => 'The canned ACL to apply to the object.',
        'PutObjectRequest$ACL' => 'The canned ACL to apply to the object.',
      ],
    ],
    'ObjectIdentifier' => [
      'base' => NULL,
      'refs' => [
        'ObjectIdentifierList$member' => NULL,
      ],
    ],
    'ObjectIdentifierList' => [
      'base' => NULL,
      'refs' => [
        'Delete$Objects' => NULL,
      ],
    ],
    'ObjectKey' => [
      'base' => NULL,
      'refs' => [
        'AbortMultipartUploadRequest$Key' => NULL,
        'CompleteMultipartUploadOutput$Key' => NULL,
        'CompleteMultipartUploadRequest$Key' => NULL,
        'CopyObjectRequest$Key' => NULL,
        'CreateMultipartUploadOutput$Key' => 'Object key for which the multipart upload was initiated.',
        'CreateMultipartUploadRequest$Key' => NULL,
        'DeleteMarkerEntry$Key' => 'The object key.',
        'DeleteObjectRequest$Key' => NULL,
        'DeletedObject$Key' => NULL,
        'Error$Key' => NULL,
        'ErrorDocument$Key' => 'The object key name to use when a 4XX class error occurs.',
        'GetObjectAclRequest$Key' => NULL,
        'GetObjectRequest$Key' => NULL,
        'GetObjectTorrentRequest$Key' => NULL,
        'HeadObjectRequest$Key' => NULL,
        'ListPartsOutput$Key' => 'Object key for which the multipart upload was initiated.',
        'ListPartsRequest$Key' => NULL,
        'MultipartUpload$Key' => 'Key of the object for which the multipart upload was initiated.',
        'Object$Key' => NULL,
        'ObjectIdentifier$Key' => 'Key name of the object to delete.',
        'ObjectVersion$Key' => 'The object key.',
        'PutObjectAclRequest$Key' => NULL,
        'PutObjectRequest$Key' => NULL,
        'RestoreObjectRequest$Key' => NULL,
        'Tag$Key' => 'Name of the tag.',
        'UploadPartCopyRequest$Key' => NULL,
        'UploadPartRequest$Key' => NULL,
      ],
    ],
    'ObjectList' => [
      'base' => NULL,
      'refs' => [
        'ListObjectsOutput$Contents' => NULL,
      ],
    ],
    'ObjectNotInActiveTierError' => [
      'base' => 'The source object of the COPY operation is not in the active tier and is only stored in Amazon Glacier.',
      'refs' => [],
    ],
    'ObjectStorageClass' => [
      'base' => NULL,
      'refs' => [
        'Object$StorageClass' => 'The class of storage used to store the object.',
      ],
    ],
    'ObjectVersion' => [
      'base' => NULL,
      'refs' => [
        'ObjectVersionList$member' => NULL,
      ],
    ],
    'ObjectVersionId' => [
      'base' => NULL,
      'refs' => [
        'CompleteMultipartUploadOutput$VersionId' => 'Version of the object.',
        'DeleteMarkerEntry$VersionId' => 'Version ID of an object.',
        'DeleteObjectOutput$VersionId' => 'Returns the version ID of the delete marker created as a result of the DELETE operation.',
        'DeleteObjectRequest$VersionId' => 'VersionId used to reference a specific version of the object.',
        'DeletedObject$VersionId' => NULL,
        'Error$VersionId' => NULL,
        'GetObjectAclRequest$VersionId' => 'VersionId used to reference a specific version of the object.',
        'GetObjectOutput$VersionId' => 'Version of the object.',
        'GetObjectRequest$VersionId' => 'VersionId used to reference a specific version of the object.',
        'HeadObjectOutput$VersionId' => 'Version of the object.',
        'HeadObjectRequest$VersionId' => 'VersionId used to reference a specific version of the object.',
        'ObjectIdentifier$VersionId' => 'VersionId for the specific version of the object to delete.',
        'ObjectVersion$VersionId' => 'Version ID of an object.',
        'PutObjectOutput$VersionId' => 'Version of the object.',
        'RestoreObjectRequest$VersionId' => NULL,
      ],
    ],
    'ObjectVersionList' => [
      'base' => NULL,
      'refs' => [
        'ListObjectVersionsOutput$Versions' => NULL,
      ],
    ],
    'ObjectVersionStorageClass' => [
      'base' => NULL,
      'refs' => [
        'ObjectVersion$StorageClass' => 'The class of storage used to store the object.',
      ],
    ],
    'Owner' => [
      'base' => NULL,
      'refs' => [
        'AccessControlPolicy$Owner' => NULL,
        'DeleteMarkerEntry$Owner' => NULL,
        'GetBucketAclOutput$Owner' => NULL,
        'GetObjectAclOutput$Owner' => NULL,
        'ListBucketsOutput$Owner' => NULL,
        'ListPartsOutput$Owner' => NULL,
        'MultipartUpload$Owner' => NULL,
        'Object$Owner' => NULL,
        'ObjectVersion$Owner' => NULL,
      ],
    ],
    'Part' => [
      'base' => NULL,
      'refs' => [
        'Parts$member' => NULL,
      ],
    ],
    'PartNumber' => [
      'base' => NULL,
      'refs' => [
        'CompletedPart$PartNumber' => 'Part number that identifies the part.',
        'Part$PartNumber' => 'Part number identifying the part.',
        'UploadPartCopyRequest$PartNumber' => 'Part number of part being copied.',
        'UploadPartRequest$PartNumber' => 'Part number of part being uploaded.',
      ],
    ],
    'PartNumberMarker' => [
      'base' => NULL,
      'refs' => [
        'ListPartsOutput$PartNumberMarker' => 'Part number after which listing begins.',
        'ListPartsRequest$PartNumberMarker' => 'Specifies the part after which listing should begin. Only parts with higher part numbers will be listed.',
      ],
    ],
    'Parts' => [
      'base' => NULL,
      'refs' => [
        'ListPartsOutput$Parts' => NULL,
      ],
    ],
    'Payer' => [
      'base' => NULL,
      'refs' => [
        'GetBucketRequestPaymentOutput$Payer' => 'Specifies who pays for the download and request fees.',
        'RequestPaymentConfiguration$Payer' => 'Specifies who pays for the download and request fees.',
      ],
    ],
    'Permission' => [
      'base' => NULL,
      'refs' => [
        'Grant$Permission' => 'Specifies the permission given to the grantee.',
      ],
    ],
    'Policy' => [
      'base' => NULL,
      'refs' => [
        'GetBucketPolicyOutput$Policy' => 'The bucket policy as a JSON document.',
        'PutBucketPolicyRequest$Policy' => 'The bucket policy as a JSON document.',
      ],
    ],
    'Prefix' => [
      'base' => NULL,
      'refs' => [
        'CommonPrefix$Prefix' => NULL,
        'ListMultipartUploadsOutput$Prefix' => 'When a prefix is provided in the request, this field contains the specified prefix. The result contains only keys starting with the specified prefix.',
        'ListMultipartUploadsRequest$Prefix' => 'Lists in-progress uploads only for those keys that begin with the specified prefix.',
        'ListObjectVersionsOutput$Prefix' => NULL,
        'ListObjectVersionsRequest$Prefix' => 'Limits the response to keys that begin with the specified prefix.',
        'ListObjectsOutput$Prefix' => NULL,
        'ListObjectsRequest$Prefix' => 'Limits the response to keys that begin with the specified prefix.',
        'Rule$Prefix' => 'Prefix identifying one or more objects to which the rule applies.',
      ],
    ],
    'Protocol' => [
      'base' => NULL,
      'refs' => [
        'Redirect$Protocol' => 'Protocol to use (http, https] when redirecting requests. The default is the protocol that is used in the original request.',
        'RedirectAllRequestsTo$Protocol' => 'Protocol to use (http, https] when redirecting requests. The default is the protocol that is used in the original request.',
      ],
    ],
    'PutBucketAclRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PutBucketCorsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PutBucketLifecycleRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PutBucketLoggingRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PutBucketNotificationRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PutBucketPolicyRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PutBucketRequestPaymentRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PutBucketTaggingRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PutBucketVersioningRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PutBucketWebsiteRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PutObjectAclRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PutObjectOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PutObjectRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Queue' => [
      'base' => NULL,
      'refs' => [
        'QueueConfiguration$Queue' => NULL,
      ],
    ],
    'QueueConfiguration' => [
      'base' => NULL,
      'refs' => [
        'GetBucketNotificationOutput$QueueConfiguration' => NULL,
        'NotificationConfiguration$QueueConfiguration' => NULL,
      ],
    ],
    'Quiet' => [
      'base' => NULL,
      'refs' => [
        'Delete$Quiet' => 'Element to enable quiet mode for the request. When you add this element, you must set its value to true.',
      ],
    ],
    'Range' => [
      'base' => NULL,
      'refs' => [
        'GetObjectRequest$Range' => 'Downloads the specified range bytes of an object. For more information about the HTTP Range header, go to http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.35.',
        'HeadObjectRequest$Range' => 'Downloads the specified range bytes of an object. For more information about the HTTP Range header, go to http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.35.',
      ],
    ],
    'Redirect' => [
      'base' => NULL,
      'refs' => [
        'RoutingRule$Redirect' => 'Container for redirect information. You can redirect requests to another host, to another page, or with another protocol. In the event of an error, you can can specify a different error code to return.',
      ],
    ],
    'RedirectAllRequestsTo' => [
      'base' => NULL,
      'refs' => [
        'GetBucketWebsiteOutput$RedirectAllRequestsTo' => NULL,
        'WebsiteConfiguration$RedirectAllRequestsTo' => NULL,
      ],
    ],
    'ReplaceKeyPrefixWith' => [
      'base' => NULL,
      'refs' => [
        'Redirect$ReplaceKeyPrefixWith' => 'The object key prefix to use in the redirect request. For example, to redirect requests for all pages with prefix docs/ (objects in the docs/ folder] to documents/, you can set a condition block with KeyPrefixEquals set to docs/ and in the Redirect set ReplaceKeyPrefixWith to /documents. Not required if one of the siblings is present. Can be present only if ReplaceKeyWith is not provided.',
      ],
    ],
    'ReplaceKeyWith' => [
      'base' => NULL,
      'refs' => [
        'Redirect$ReplaceKeyWith' => 'The specific object key to use in the redirect request. For example, redirect request to error.html. Not required if one of the sibling is present. Can be present only if ReplaceKeyPrefixWith is not provided.',
      ],
    ],
    'RequestPaymentConfiguration' => [
      'base' => NULL,
      'refs' => [
        'PutBucketRequestPaymentRequest$RequestPaymentConfiguration' => NULL,
      ],
    ],
    'ResponseCacheControl' => [
      'base' => NULL,
      'refs' => [
        'GetObjectRequest$ResponseCacheControl' => 'Sets the Cache-Control header of the response.',
      ],
    ],
    'ResponseContentDisposition' => [
      'base' => NULL,
      'refs' => [
        'GetObjectRequest$ResponseContentDisposition' => 'Sets the Content-Disposition header of the response',
      ],
    ],
    'ResponseContentEncoding' => [
      'base' => NULL,
      'refs' => [
        'GetObjectRequest$ResponseContentEncoding' => 'Sets the Content-Encoding header of the response.',
      ],
    ],
    'ResponseContentLanguage' => [
      'base' => NULL,
      'refs' => [
        'GetObjectRequest$ResponseContentLanguage' => 'Sets the Content-Language header of the response.',
      ],
    ],
    'ResponseContentType' => [
      'base' => NULL,
      'refs' => [
        'GetObjectRequest$ResponseContentType' => 'Sets the Content-Type header of the response.',
      ],
    ],
    'ResponseExpires' => [
      'base' => NULL,
      'refs' => [
        'GetObjectRequest$ResponseExpires' => 'Sets the Expires header of the response.',
      ],
    ],
    'Restore' => [
      'base' => NULL,
      'refs' => [
        'GetObjectOutput$Restore' => 'Provides information about object restoration operation and expiration time of the restored object copy.',
        'HeadObjectOutput$Restore' => 'Provides information about object restoration operation and expiration time of the restored object copy.',
      ],
    ],
    'RestoreObjectRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RestoreRequest' => [
      'base' => NULL,
      'refs' => [
        'RestoreObjectRequest$RestoreRequest' => NULL,
      ],
    ],
    'RoutingRule' => [
      'base' => NULL,
      'refs' => [
        'RoutingRules$member' => NULL,
      ],
    ],
    'RoutingRules' => [
      'base' => NULL,
      'refs' => [
        'GetBucketWebsiteOutput$RoutingRules' => NULL,
        'WebsiteConfiguration$RoutingRules' => NULL,
      ],
    ],
    'Rule' => [
      'base' => NULL,
      'refs' => [
        'Rules$member' => NULL,
      ],
    ],
    'Rules' => [
      'base' => NULL,
      'refs' => [
        'GetBucketLifecycleOutput$Rules' => NULL,
        'LifecycleConfiguration$Rules' => NULL,
      ],
    ],
    'SSECustomerAlgorithm' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectOutput$SSECustomerAlgorithm' => 'If server-side encryption with a customer-provided encryption key was requested, the response will include this header confirming the encryption algorithm used.',
        'CopyObjectRequest$SSECustomerAlgorithm' => 'Specifies the algorithm to use to when encrypting the object (e.g., AES256, aws:kms].',
        'CreateMultipartUploadOutput$SSECustomerAlgorithm' => 'If server-side encryption with a customer-provided encryption key was requested, the response will include this header confirming the encryption algorithm used.',
        'CreateMultipartUploadRequest$SSECustomerAlgorithm' => 'Specifies the algorithm to use to when encrypting the object (e.g., AES256, aws:kms].',
        'GetObjectOutput$SSECustomerAlgorithm' => 'If server-side encryption with a customer-provided encryption key was requested, the response will include this header confirming the encryption algorithm used.',
        'GetObjectRequest$SSECustomerAlgorithm' => 'Specifies the algorithm to use to when encrypting the object (e.g., AES256, aws:kms].',
        'HeadObjectOutput$SSECustomerAlgorithm' => 'If server-side encryption with a customer-provided encryption key was requested, the response will include this header confirming the encryption algorithm used.',
        'HeadObjectRequest$SSECustomerAlgorithm' => 'Specifies the algorithm to use to when encrypting the object (e.g., AES256, aws:kms].',
        'PutObjectOutput$SSECustomerAlgorithm' => 'If server-side encryption with a customer-provided encryption key was requested, the response will include this header confirming the encryption algorithm used.',
        'PutObjectRequest$SSECustomerAlgorithm' => 'Specifies the algorithm to use to when encrypting the object (e.g., AES256, aws:kms].',
        'UploadPartCopyOutput$SSECustomerAlgorithm' => 'If server-side encryption with a customer-provided encryption key was requested, the response will include this header confirming the encryption algorithm used.',
        'UploadPartCopyRequest$SSECustomerAlgorithm' => 'Specifies the algorithm to use to when encrypting the object (e.g., AES256, aws:kms].',
        'UploadPartOutput$SSECustomerAlgorithm' => 'If server-side encryption with a customer-provided encryption key was requested, the response will include this header confirming the encryption algorithm used.',
        'UploadPartRequest$SSECustomerAlgorithm' => 'Specifies the algorithm to use to when encrypting the object (e.g., AES256, aws:kms].',
      ],
    ],
    'SSECustomerKey' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$SSECustomerKey' => 'Specifies the customer-provided encryption key for Amazon S3 to use in encrypting data. This value is used to store the object and then it is discarded; Amazon does not store the encryption key. The key must be appropriate for use with the algorithm specified in the x-amz-server-side&#x200B;-encryption&#x200B;-customer-algorithm header.',
        'CreateMultipartUploadRequest$SSECustomerKey' => 'Specifies the customer-provided encryption key for Amazon S3 to use in encrypting data. This value is used to store the object and then it is discarded; Amazon does not store the encryption key. The key must be appropriate for use with the algorithm specified in the x-amz-server-side&#x200B;-encryption&#x200B;-customer-algorithm header.',
        'GetObjectRequest$SSECustomerKey' => 'Specifies the customer-provided encryption key for Amazon S3 to use in encrypting data. This value is used to store the object and then it is discarded; Amazon does not store the encryption key. The key must be appropriate for use with the algorithm specified in the x-amz-server-side&#x200B;-encryption&#x200B;-customer-algorithm header.',
        'HeadObjectRequest$SSECustomerKey' => 'Specifies the customer-provided encryption key for Amazon S3 to use in encrypting data. This value is used to store the object and then it is discarded; Amazon does not store the encryption key. The key must be appropriate for use with the algorithm specified in the x-amz-server-side&#x200B;-encryption&#x200B;-customer-algorithm header.',
        'PutObjectRequest$SSECustomerKey' => 'Specifies the customer-provided encryption key for Amazon S3 to use in encrypting data. This value is used to store the object and then it is discarded; Amazon does not store the encryption key. The key must be appropriate for use with the algorithm specified in the x-amz-server-side&#x200B;-encryption&#x200B;-customer-algorithm header.',
        'UploadPartCopyRequest$SSECustomerKey' => 'Specifies the customer-provided encryption key for Amazon S3 to use in encrypting data. This value is used to store the object and then it is discarded; Amazon does not store the encryption key. The key must be appropriate for use with the algorithm specified in the x-amz-server-side&#x200B;-encryption&#x200B;-customer-algorithm header. This must be the same encryption key specified in the initiate multipart upload request.',
        'UploadPartRequest$SSECustomerKey' => 'Specifies the customer-provided encryption key for Amazon S3 to use in encrypting data. This value is used to store the object and then it is discarded; Amazon does not store the encryption key. The key must be appropriate for use with the algorithm specified in the x-amz-server-side&#x200B;-encryption&#x200B;-customer-algorithm header. This must be the same encryption key specified in the initiate multipart upload request.',
      ],
    ],
    'SSECustomerKeyMD5' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectOutput$SSECustomerKeyMD5' => 'If server-side encryption with a customer-provided encryption key was requested, the response will include this header to provide round trip message integrity verification of the customer-provided encryption key.',
        'CopyObjectRequest$SSECustomerKeyMD5' => 'Specifies the 128-bit MD5 digest of the encryption key according to RFC 1321. Amazon S3 uses this header for a message integrity check to ensure the encryption key was transmitted without error.',
        'CreateMultipartUploadOutput$SSECustomerKeyMD5' => 'If server-side encryption with a customer-provided encryption key was requested, the response will include this header to provide round trip message integrity verification of the customer-provided encryption key.',
        'CreateMultipartUploadRequest$SSECustomerKeyMD5' => 'Specifies the 128-bit MD5 digest of the encryption key according to RFC 1321. Amazon S3 uses this header for a message integrity check to ensure the encryption key was transmitted without error.',
        'GetObjectOutput$SSECustomerKeyMD5' => 'If server-side encryption with a customer-provided encryption key was requested, the response will include this header to provide round trip message integrity verification of the customer-provided encryption key.',
        'GetObjectRequest$SSECustomerKeyMD5' => 'Specifies the 128-bit MD5 digest of the encryption key according to RFC 1321. Amazon S3 uses this header for a message integrity check to ensure the encryption key was transmitted without error.',
        'HeadObjectOutput$SSECustomerKeyMD5' => 'If server-side encryption with a customer-provided encryption key was requested, the response will include this header to provide round trip message integrity verification of the customer-provided encryption key.',
        'HeadObjectRequest$SSECustomerKeyMD5' => 'Specifies the 128-bit MD5 digest of the encryption key according to RFC 1321. Amazon S3 uses this header for a message integrity check to ensure the encryption key was transmitted without error.',
        'PutObjectOutput$SSECustomerKeyMD5' => 'If server-side encryption with a customer-provided encryption key was requested, the response will include this header to provide round trip message integrity verification of the customer-provided encryption key.',
        'PutObjectRequest$SSECustomerKeyMD5' => 'Specifies the 128-bit MD5 digest of the encryption key according to RFC 1321. Amazon S3 uses this header for a message integrity check to ensure the encryption key was transmitted without error.',
        'UploadPartCopyOutput$SSECustomerKeyMD5' => 'If server-side encryption with a customer-provided encryption key was requested, the response will include this header to provide round trip message integrity verification of the customer-provided encryption key.',
        'UploadPartCopyRequest$SSECustomerKeyMD5' => 'Specifies the 128-bit MD5 digest of the encryption key according to RFC 1321. Amazon S3 uses this header for a message integrity check to ensure the encryption key was transmitted without error.',
        'UploadPartOutput$SSECustomerKeyMD5' => 'If server-side encryption with a customer-provided encryption key was requested, the response will include this header to provide round trip message integrity verification of the customer-provided encryption key.',
        'UploadPartRequest$SSECustomerKeyMD5' => 'Specifies the 128-bit MD5 digest of the encryption key according to RFC 1321. Amazon S3 uses this header for a message integrity check to ensure the encryption key was transmitted without error.',
      ],
    ],
    'SSEKMSKeyId' => [
      'base' => NULL,
      'refs' => [
        'CompleteMultipartUploadOutput$SSEKMSKeyId' => 'If present, specifies the ID of the AWS Key Management Service (KMS] master encryption key that was used for the object.',
        'CopyObjectOutput$SSEKMSKeyId' => 'If present, specifies the ID of the AWS Key Management Service (KMS] master encryption key that was used for the object.',
        'CopyObjectRequest$SSEKMSKeyId' => 'Specifies the AWS KMS key ID to use for object encryption. All GET and PUT requests for an object protected by AWS KMS will fail if not made via SSL or using SigV4. Documentation on configuring any of the officially supported AWS SDKs and CLI can be found at http://docs.aws.amazon.com/AmazonS3/latest/dev/UsingAWSSDK.html#specify-signature-version',
        'CreateMultipartUploadOutput$SSEKMSKeyId' => 'If present, specifies the ID of the AWS Key Management Service (KMS] master encryption key that was used for the object.',
        'CreateMultipartUploadRequest$SSEKMSKeyId' => 'Specifies the AWS KMS key ID to use for object encryption. All GET and PUT requests for an object protected by AWS KMS will fail if not made via SSL or using SigV4. Documentation on configuring any of the officially supported AWS SDKs and CLI can be found at http://docs.aws.amazon.com/AmazonS3/latest/dev/UsingAWSSDK.html#specify-signature-version',
        'GetObjectOutput$SSEKMSKeyId' => 'If present, specifies the ID of the AWS Key Management Service (KMS] master encryption key that was used for the object.',
        'HeadObjectOutput$SSEKMSKeyId' => 'If present, specifies the ID of the AWS Key Management Service (KMS] master encryption key that was used for the object.',
        'PutObjectOutput$SSEKMSKeyId' => 'If present, specifies the ID of the AWS Key Management Service (KMS] master encryption key that was used for the object.',
        'PutObjectRequest$SSEKMSKeyId' => 'Specifies the AWS KMS key ID to use for object encryption. All GET and PUT requests for an object protected by AWS KMS will fail if not made via SSL or using SigV4. Documentation on configuring any of the officially supported AWS SDKs and CLI can be found at http://docs.aws.amazon.com/AmazonS3/latest/dev/UsingAWSSDK.html#specify-signature-version',
        'UploadPartCopyOutput$SSEKMSKeyId' => 'If present, specifies the ID of the AWS Key Management Service (KMS] master encryption key that was used for the object.',
        'UploadPartOutput$SSEKMSKeyId' => 'If present, specifies the ID of the AWS Key Management Service (KMS] master encryption key that was used for the object.',
      ],
    ],
    'ServerSideEncryption' => [
      'base' => NULL,
      'refs' => [
        'CompleteMultipartUploadOutput$ServerSideEncryption' => 'The Server-side encryption algorithm used when storing this object in S3 (e.g., AES256, aws:kms].',
        'CopyObjectOutput$ServerSideEncryption' => 'The Server-side encryption algorithm used when storing this object in S3 (e.g., AES256, aws:kms].',
        'CopyObjectRequest$ServerSideEncryption' => 'The Server-side encryption algorithm used when storing this object in S3 (e.g., AES256, aws:kms].',
        'CreateMultipartUploadOutput$ServerSideEncryption' => 'The Server-side encryption algorithm used when storing this object in S3 (e.g., AES256, aws:kms].',
        'CreateMultipartUploadRequest$ServerSideEncryption' => 'The Server-side encryption algorithm used when storing this object in S3 (e.g., AES256, aws:kms].',
        'GetObjectOutput$ServerSideEncryption' => 'The Server-side encryption algorithm used when storing this object in S3 (e.g., AES256, aws:kms].',
        'HeadObjectOutput$ServerSideEncryption' => 'The Server-side encryption algorithm used when storing this object in S3 (e.g., AES256, aws:kms].',
        'PutObjectOutput$ServerSideEncryption' => 'The Server-side encryption algorithm used when storing this object in S3 (e.g., AES256, aws:kms].',
        'PutObjectRequest$ServerSideEncryption' => 'The Server-side encryption algorithm used when storing this object in S3 (e.g., AES256, aws:kms].',
        'UploadPartCopyOutput$ServerSideEncryption' => 'The Server-side encryption algorithm used when storing this object in S3 (e.g., AES256, aws:kms].',
        'UploadPartOutput$ServerSideEncryption' => 'The Server-side encryption algorithm used when storing this object in S3 (e.g., AES256, aws:kms].',
      ],
    ],
    'Size' => [
      'base' => NULL,
      'refs' => [
        'Object$Size' => NULL,
        'ObjectVersion$Size' => 'Size in bytes of the object.',
        'Part$Size' => 'Size of the uploaded part data.',
      ],
    ],
    'StorageClass' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$StorageClass' => 'The type of storage to use for the object. Defaults to \'STANDARD\'.',
        'CreateMultipartUploadRequest$StorageClass' => 'The type of storage to use for the object. Defaults to \'STANDARD\'.',
        'ListPartsOutput$StorageClass' => 'The class of storage used to store the object.',
        'MultipartUpload$StorageClass' => 'The class of storage used to store the object.',
        'PutObjectRequest$StorageClass' => 'The type of storage to use for the object. Defaults to \'STANDARD\'.',
      ],
    ],
    'Suffix' => [
      'base' => NULL,
      'refs' => [
        'IndexDocument$Suffix' => 'A suffix that is appended to a request that is for a directory on the website endpoint (e.g. if the suffix is index.html and you make a request to samplebucket/images/ the data that is returned will be for the object with the key name images/index.html] The suffix must not be empty and must not include a slash character.',
      ],
    ],
    'Tag' => [
      'base' => NULL,
      'refs' => [
        'TagSet$member' => NULL,
      ],
    ],
    'TagSet' => [
      'base' => NULL,
      'refs' => [
        'GetBucketTaggingOutput$TagSet' => NULL,
        'Tagging$TagSet' => NULL,
      ],
    ],
    'Tagging' => [
      'base' => NULL,
      'refs' => [
        'PutBucketTaggingRequest$Tagging' => NULL,
      ],
    ],
    'TargetBucket' => [
      'base' => NULL,
      'refs' => [
        'LoggingEnabled$TargetBucket' => 'Specifies the bucket where you want Amazon S3 to store server access logs. You can have your logs delivered to any bucket that you own, including the same bucket that is being logged. You can also configure multiple buckets to deliver their logs to the same target bucket. In this case you should choose a different TargetPrefix for each source bucket so that the delivered log files can be distinguished by key.',
      ],
    ],
    'TargetGrant' => [
      'base' => NULL,
      'refs' => [
        'TargetGrants$member' => NULL,
      ],
    ],
    'TargetGrants' => [
      'base' => NULL,
      'refs' => [
        'LoggingEnabled$TargetGrants' => NULL,
      ],
    ],
    'TargetPrefix' => [
      'base' => NULL,
      'refs' => [
        'LoggingEnabled$TargetPrefix' => 'This element lets you specify a prefix for the keys that the log files will be stored under.',
      ],
    ],
    'Topic' => [
      'base' => NULL,
      'refs' => [
        'TopicConfiguration$Topic' => 'Amazon SNS topic to which Amazon S3 will publish a message to report the specified events for the bucket.',
      ],
    ],
    'TopicConfiguration' => [
      'base' => NULL,
      'refs' => [
        'GetBucketNotificationOutput$TopicConfiguration' => NULL,
        'NotificationConfiguration$TopicConfiguration' => NULL,
      ],
    ],
    'Transition' => [
      'base' => NULL,
      'refs' => [
        'Rule$Transition' => NULL,
      ],
    ],
    'TransitionStorageClass' => [
      'base' => NULL,
      'refs' => [
        'NoncurrentVersionTransition$StorageClass' => 'The class of storage used to store the object.',
        'Transition$StorageClass' => 'The class of storage used to store the object.',
      ],
    ],
    'Type' => [
      'base' => NULL,
      'refs' => [
        'Grantee$Type' => 'Type of grantee',
      ],
    ],
    'URI' => [
      'base' => NULL,
      'refs' => [
        'Grantee$URI' => 'URI of the grantee group.',
      ],
    ],
    'UploadIdMarker' => [
      'base' => NULL,
      'refs' => [
        'ListMultipartUploadsOutput$UploadIdMarker' => 'Upload ID after which listing began.',
        'ListMultipartUploadsRequest$UploadIdMarker' => 'Together with key-marker, specifies the multipart upload after which listing should begin. If key-marker is not specified, the upload-id-marker parameter is ignored.',
      ],
    ],
    'UploadPartCopyOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'UploadPartCopyRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'UploadPartOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'UploadPartRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Value' => [
      'base' => NULL,
      'refs' => [
        'Tag$Value' => 'Value of the tag.',
      ],
    ],
    'VersionIdMarker' => [
      'base' => NULL,
      'refs' => [
        'ListObjectVersionsOutput$VersionIdMarker' => NULL,
        'ListObjectVersionsRequest$VersionIdMarker' => 'Specifies the object version you want to start listing from.',
      ],
    ],
    'VersioningConfiguration' => [
      'base' => NULL,
      'refs' => [
        'PutBucketVersioningRequest$VersioningConfiguration' => NULL,
      ],
    ],
    'WebsiteConfiguration' => [
      'base' => NULL,
      'refs' => [
        'PutBucketWebsiteRequest$WebsiteConfiguration' => NULL,
      ],
    ],
    'WebsiteRedirectLocation' => [
      'base' => NULL,
      'refs' => [
        'CopyObjectRequest$WebsiteRedirectLocation' => 'If the bucket is configured as a website, redirects requests for this object to another object in the same bucket or to an external URL. Amazon S3 stores the value of this header in the object metadata.',
        'CreateMultipartUploadRequest$WebsiteRedirectLocation' => 'If the bucket is configured as a website, redirects requests for this object to another object in the same bucket or to an external URL. Amazon S3 stores the value of this header in the object metadata.',
        'GetObjectOutput$WebsiteRedirectLocation' => 'If the bucket is configured as a website, redirects requests for this object to another object in the same bucket or to an external URL. Amazon S3 stores the value of this header in the object metadata.',
        'HeadObjectOutput$WebsiteRedirectLocation' => 'If the bucket is configured as a website, redirects requests for this object to another object in the same bucket or to an external URL. Amazon S3 stores the value of this header in the object metadata.',
        'PutObjectRequest$WebsiteRedirectLocation' => 'If the bucket is configured as a website, redirects requests for this object to another object in the same bucket or to an external URL. Amazon S3 stores the value of this header in the object metadata.',
      ],
    ],
  ],
];
