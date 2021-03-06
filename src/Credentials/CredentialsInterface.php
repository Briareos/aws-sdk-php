<?php
namespace Aws\Credentials;

use GuzzleHttp\ToArrayInterface;

/**
 * Provides access to the AWS credentials used for accessing AWS services: AWS
 * access key ID, secret access key, and security token. These credentials are
 * used to securely sign requests to AWS services.
 */
interface CredentialsInterface extends ToArrayInterface
{
    /**
     * Returns the AWS access key ID for this credentials object.
     *
     * @return string
     */
    public function getAccessKeyId();

    /**
     * Returns the AWS secret access key for this credentials object.
     *
     * @return string
     */
    public function getSecretKey();

    /**
     * Get the associated security token if available
     *
     * @return string|null
     */
    public function getSecurityToken();

    /**
     * Get the UNIX timestamp in which the credentials will expire
     *
     * @return int|null
     */
    public function getExpiration();

    /**
     * Check if the credentials are expired
     *
     * @return bool
     */
    public function isExpired();
}
