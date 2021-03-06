<?php
namespace Aws\DynamoDb;

use GuzzleHttp\Stream\Stream;

/**
 * Special object to represent a DynamoDB binary (B) value.
 */
class BinaryValue implements \JsonSerializable
{
    /** @var string Binary value. */
    private $value;

    /**
     * @param mixed $value A binary value compatible with Guzzle streams.
     *
     * @see GuzzleHttp\Stream\Stream::factory
     */
    public function __construct($value)
    {
        if (!is_string($value)) {
            $value = Stream::factory($value);
        }
        $this->value = (string) $value;
    }

    public function jsonSerialize()
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value;
    }
}
