<?php
namespace Aws\Ec2;

use Aws\AwsClientInterface;
use Aws\Signature\SignatureV4;
use Aws\Endpoint\EndpointProvider;
use GuzzleHttp\Command\CommandInterface;
use GuzzleHttp\Command\Event\InitEvent;
use GuzzleHttp\Event\RequestEvents;
use GuzzleHttp\Event\SubscriberInterface;
use GuzzleHttp\Url;

/**
 * @internal Adds computed values to the CopySnapshot operation.
 */
class CopySnapshotSubscriber implements SubscriberInterface
{
    private $endpointProvider;

    public function __construct(callable $endpointProvider)
    {
        $this->endpointProvider = $endpointProvider;
    }

    public function getEvents()
    {
        return ['init' => ['onInit', RequestEvents::LATE]];
    }

    public function onInit(InitEvent $event)
    {
        $cmd = $event->getCommand();
        if ($cmd->getName() == 'CopySnapshot') {
            /** @var AwsClientInterface $client */
            $client = $event->getClient();
            $cmd['PresignedUrl'] = $this->createPresignedUrl($client, $cmd);
            $cmd['DestinationRegion'] = $client->getRegion();
        }
    }

    private function createPresignedUrl(
        AwsClientInterface $client,
        CommandInterface $cmd
    ) {
        $newCmd = $client->getCommand('CopySnapshot', $cmd->toArray());
        $newCmd->getEmitter()->detach($this);
        // Serialize a request for the CopySnapshot operation.
        $request = $client->initTransaction($newCmd)->request;
        // Create the new endpoint for the target endpoint.
        $endpoint = EndpointProvider::resolve($this->endpointProvider, [
            'region'  => $cmd['SourceRegion'],
            'service' => 'ec2'
        ])['endpoint'];
        // Set the request to hit the target endpoint.
        $request->setHost(Url::fromString($endpoint)->getHost());
        // Create a presigned URL for our generated request.
        $signer = new SignatureV4('ec2', $cmd['SourceRegion']);
        return $signer->createPresignedUrl(
            SignatureV4::convertPostToGet($request),
            $client->getCredentials(),
            '+1 hour'
        );
    }
}
