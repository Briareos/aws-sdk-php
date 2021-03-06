<?php
namespace Aws\Signature;

use Aws\Credentials\CredentialsInterface;
use GuzzleHttp\Message\RequestInterface;

abstract class AbstractSignature implements SignatureInterface
{
    public function createPresignedUrl(
        RequestInterface $request,
        CredentialsInterface $credentials,
        $expires
    ) {
        throw new \BadMethodCallException(__METHOD__ . ' not implemented');
    }
}
