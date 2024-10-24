<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TrackingDetails implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'TrackingDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'ltl_tracking_detail' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\LtlTrackingDetail',
        'spd_tracking_detail' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\SpdTrackingDetail',
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
        'ltl_tracking_detail' => null,
        'spd_tracking_detail' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'ltl_tracking_detail' => 'ltlTrackingDetail',
        'spd_tracking_detail' => 'spdTrackingDetail',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'ltl_tracking_detail' => 'setLtlTrackingDetail',
        'spd_tracking_detail' => 'setSpdTrackingDetail',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'ltl_tracking_detail' => 'getLtlTrackingDetail',
        'spd_tracking_detail' => 'getSpdTrackingDetail',
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
        $this->container['ltl_tracking_detail'] = $data['ltl_tracking_detail'] ?? null;
        $this->container['spd_tracking_detail'] = $data['spd_tracking_detail'] ?? null;
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
        if ($this->container['ltl_tracking_detail'] !== null) {
            $this->container['ltl_tracking_detail']->validate();
        }

        if ($this->container['spd_tracking_detail'] !== null) {
            $this->container['spd_tracking_detail']->validate();
        }
    }

    /**
     * Gets ltl_tracking_detail.
     */
    public function getLtlTrackingDetail() : ?LtlTrackingDetail
    {
        return $this->container['ltl_tracking_detail'];
    }

    /**
     * Sets ltl_tracking_detail.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\LtlTrackingDetail $ltl_tracking_detail ltl_tracking_detail
     */
    public function setLtlTrackingDetail(?LtlTrackingDetail $ltl_tracking_detail) : self
    {
        $this->container['ltl_tracking_detail'] = $ltl_tracking_detail;

        return $this;
    }

    /**
     * Gets spd_tracking_detail.
     */
    public function getSpdTrackingDetail() : ?SpdTrackingDetail
    {
        return $this->container['spd_tracking_detail'];
    }

    /**
     * Sets spd_tracking_detail.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\SpdTrackingDetail $spd_tracking_detail spd_tracking_detail
     */
    public function setSpdTrackingDetail(?SpdTrackingDetail $spd_tracking_detail) : self
    {
        $this->container['spd_tracking_detail'] = $spd_tracking_detail;

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