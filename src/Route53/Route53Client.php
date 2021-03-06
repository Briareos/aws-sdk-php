<?php
namespace Aws\Route53;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Route 53** service.
 */
class Route53Client extends AwsClient
{
    public function __construct(array $args)
    {
        parent::__construct($args);
        $this->getEmitter()->attach(new CleanIdSubscriber());
    }
}
