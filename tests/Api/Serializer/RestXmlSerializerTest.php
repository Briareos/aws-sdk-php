<?php
namespace Aws\Test\Api\Serializer;

use Aws\Api\Serializer\RestXmlSerializer;
use Aws\Test\UsesServiceTrait;
use GuzzleHttp\Command\CommandTransaction;

/**
 * @covers Aws\Api\Serializer\RestXmlSerializer
 */
class RestXmlSerializerTest extends \PHPUnit_Framework_TestCase
{
    use UsesServiceTrait;

    private function getRequest($commandName, $input)
    {
        $client = $this->getTestClient('s3', ['region' => 'us-east-1']);
        $command = $client->getCommand($commandName, $input);
        $xml = new RestXmlSerializer($client->getApi(), $client->getEndpoint());
        $trans = new CommandTransaction($client, $command);

        return $xml($trans);
    }

    public function testPreparesRequestsWithContentType()
    {
        $request = $this->getRequest('PutObject', [
            'Bucket'      => 'foo',
            'Key'         => 'bar',
            'Body'        => 'baz',
            'ContentType' => 'abc'
        ]);
        $this->assertEquals('abc', $request->getHeader('Content-Type'));
    }

    public function testPreparesRequestsWithNoContentType()
    {
        $request = $this->getRequest('PutObject', [
            'Bucket'      => 'foo',
            'Key'         => 'bar',
            'Body'        => 'baz'
        ]);
        $this->assertEquals('', $request->getHeader('Content-Type'));
    }

    public function testPreparesRequestsWithStructurePayloadXmlContentType()
    {
        $request = $this->getRequest('CompleteMultipartUpload', [
            'Bucket'      => 'foo',
            'Key'         => 'bar',
            'UploadId'    => '123',
            'MultipartUpload' => [
                'parts' => [
                    ['ETag' => 'a', 'PartNumber' => '123']
                ]
            ]
        ]);
        $this->assertEquals(
            'application/xml',
            $request->getHeader('Content-Type')
        );
    }
}
