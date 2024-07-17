<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\ProductPricing;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Pricing.
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ItemOffersResponse implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'ItemOffersResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'headers' => '\AmazonPHP\SellingPartner\Model\ProductPricing\HttpResponseHeaders',
        'status' => '\AmazonPHP\SellingPartner\Model\ProductPricing\GetOffersHttpStatusLine',
        'body' => '\AmazonPHP\SellingPartner\Model\ProductPricing\GetOffersResponse',
        'request' => '\AmazonPHP\SellingPartner\Model\ProductPricing\ItemOffersRequestParams',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'headers' => null,
        'status' => null,
        'body' => null,
        'request' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'headers' => 'headers',
        'status' => 'status',
        'body' => 'body',
        'request' => 'request',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'headers' => 'setHeaders',
        'status' => 'setStatus',
        'body' => 'setBody',
        'request' => 'setRequest',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'headers' => 'getHeaders',
        'status' => 'getStatus',
        'body' => 'getBody',
        'request' => 'getRequest',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['headers'] = $data['headers'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['body'] = $data['body'] ?? null;
        $this->container['request'] = $data['request'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return (string) \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['status'] !== null) {
            $this->container['status']->validate();
        }

        if ($this->container['body'] === null) {
            throw new AssertionException("'body' can't be null");
        }

        $this->container['body']->validate();

        if ($this->container['request'] === null) {
            throw new AssertionException("'request' can't be null");
        }

        $this->container['request']->validate();
    }

    /**
     * Gets headers.
     */
    public function getHeaders() : ?HttpResponseHeaders
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\HttpResponseHeaders $headers headers
     */
    public function setHeaders(?HttpResponseHeaders $headers) : self
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets status.
     */
    public function getStatus() : ?GetOffersHttpStatusLine
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\GetOffersHttpStatusLine $status status
     */
    public function setStatus(?GetOffersHttpStatusLine $status) : self
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets body.
     */
    public function getBody() : GetOffersResponse
    {
        return $this->container['body'];
    }

    /**
     * Sets body.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\GetOffersResponse $body body
     */
    public function setBody(GetOffersResponse $body) : self
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets request.
     */
    public function getRequest() : ItemOffersRequestParams
    {
        return $this->container['request'];
    }

    /**
     * Sets request.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\ItemOffersRequestParams $request request
     */
    public function setRequest(ItemOffersRequestParams $request) : self
    {
        $this->container['request'] = $request;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset) : mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
