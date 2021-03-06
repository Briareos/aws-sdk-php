<?php
namespace Aws\Test\Api\Serializer;

use Aws\Api\Serializer\JsonRpcSerializer;
use Aws\Api\Service;
use Aws\Test\UsesServiceTrait;
use GuzzleHttp\Client;
use GuzzleHttp\Command\Command;
use GuzzleHttp\Command\CommandTransaction;

/**
 * @covers Aws\Api\Serializer\JsonRpcSerializer
 */
class JsonRpcSerializerTest extends \PHPUnit_Framework_TestCase
{
    use UsesServiceTrait;

    public function testPreparesRequests()
    {
        $service = new Service(function () {
            return [
                'metadata'=> [
                    'targetPrefix' => 'test',
                    'jsonVersion' => '1.1'
                ],
                'operations' => [
                    'foo' => [
                        'http' => ['httpMethod' => 'POST'],
                        'input' => [
                            'type' => 'structure',
                            'members' => [
                                'baz' => ['type' => 'string']
                            ]
                        ]
                    ]
                ]
            ];
        }, 'service', 'region');

        $http = new Client();

        $aws = $this->getMockBuilder('Aws\AwsClient')
            ->setMethods(['getHttpClient'])
            ->disableOriginalConstructor()
            ->getMock();

        $aws->expects($this->once())
            ->method('getHttpClient')
            ->will($this->returnValue($http));

        $j = new JsonRpcSerializer($service, 'http://foo.com');
        $trans = new CommandTransaction(
            $aws,
            new Command('foo', ['baz' => 'bam'])
        );
        $trans->request = $j($trans);
        $request = $trans->request;
        $this->assertEquals('POST', $request->getMethod());
        $this->assertEquals('http://foo.com', $request->getUrl());
        $this->assertTrue($request->hasHeader('User-Agent'));
        $this->assertEquals(
            'application/x-amz-json-1.1',
            $request->getHeader('Content-Type')
        );
        $this->assertEquals('test.foo', $request->getHeader('X-Amz-Target'));
        $this->assertEquals('{"baz":"bam"}', $request->getBody());
    }
}
