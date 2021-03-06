<?php
namespace Aws\Route53;

use GuzzleHttp\Command\Event\InitEvent;
use GuzzleHttp\Event\SubscriberInterface;

/**
 * Strips prefixes (if present) from operations that uses an Id or
 * HostedZoneId parameter.
 */
class CleanIdSubscriber implements SubscriberInterface
{
    public function getEvents()
    {
        return ['init' => ['onInit']];
    }

    public function onInit(InitEvent $event)
    {
        $c = $event->getCommand();

        if ($c->hasParam('Id')) {
            $c['Id'] = $this->cleanId($c['Id']);
        } elseif ($c->hasParam('HostedZoneId')) {
            $c['HostedZoneId'] = $this->cleanId($c['HostedZoneId']);
        }
    }

    private function cleanId($id)
    {
        return str_replace(['/hostedzone/', '/change/'], '', $id);
    }
}
