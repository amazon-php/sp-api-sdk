<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\Shipping;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Amazon Shipping API
*
* The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
*
* The version of the OpenAPI document: v2
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IneligibleRate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'IneligibleRate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'service_id' => 'string',
        'service_name' => 'string',
        'carrier_name' => 'string',
        'carrier_id' => 'string',
        'ineligibility_reasons' => '\AmazonPHP\SellingPartner\Model\Shipping\IneligibilityReason[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'service_id' => null,
        'service_name' => null,
        'carrier_name' => null,
        'carrier_id' => null,
        'ineligibility_reasons' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'service_id' => 'serviceId',
        'service_name' => 'serviceName',
        'carrier_name' => 'carrierName',
        'carrier_id' => 'carrierId',
        'ineligibility_reasons' => 'ineligibilityReasons'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'service_id' => 'setServiceId',
        'service_name' => 'setServiceName',
        'carrier_name' => 'setCarrierName',
        'carrier_id' => 'setCarrierId',
        'ineligibility_reasons' => 'setIneligibilityReasons'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'service_id' => 'getServiceId',
        'service_name' => 'getServiceName',
        'carrier_name' => 'getCarrierName',
        'carrier_id' => 'getCarrierId',
        'ineligibility_reasons' => 'getIneligibilityReasons'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['service_id'] = $data['service_id'] ?? null;
        $this->container['service_name'] = $data['service_name'] ?? null;
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
        $this->container['carrier_id'] = $data['carrier_id'] ?? null;
        $this->container['ineligibility_reasons'] = $data['ineligibility_reasons'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['service_id'] === null) {
            throw new AssertionException("'service_id' can't be null");
        }

        if ($this->container['service_name'] === null) {
            throw new AssertionException("'service_name' can't be null");
        }

        if ($this->container['carrier_name'] === null) {
            throw new AssertionException("'carrier_name' can't be null");
        }

        if ($this->container['carrier_id'] === null) {
            throw new AssertionException("'carrier_id' can't be null");
        }

        if ($this->container['ineligibility_reasons'] === null) {
            throw new AssertionException("'ineligibility_reasons' can't be null");
        }

    }


    /**
     * Gets service_id
     *
     * @return string
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param string $service_id An identifier for the shipping service.
     *
     * @return self
     */
    public function setServiceId($service_id) : self
    {
        $this->container['service_id'] = $service_id;

        return $this;
    }

    /**
     * Gets service_name
     *
     * @return string
     */
    public function getServiceName()
    {
        return $this->container['service_name'];
    }

    /**
     * Sets service_name
     *
     * @param string $service_name The name of the shipping service.
     *
     * @return self
     */
    public function setServiceName($service_name) : self
    {
        $this->container['service_name'] = $service_name;

        return $this;
    }

    /**
     * Gets carrier_name
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name
     *
     * @param string $carrier_name The carrier name for the offering.
     *
     * @return self
     */
    public function setCarrierName($carrier_name) : self
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }

    /**
     * Gets carrier_id
     *
     * @return string
     */
    public function getCarrierId()
    {
        return $this->container['carrier_id'];
    }

    /**
     * Sets carrier_id
     *
     * @param string $carrier_id The carrier identifier for the offering, provided by the carrier.
     *
     * @return self
     */
    public function setCarrierId($carrier_id) : self
    {
        $this->container['carrier_id'] = $carrier_id;

        return $this;
    }

    /**
     * Gets ineligibility_reasons
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\IneligibilityReason[]
     */
    public function getIneligibilityReasons()
    {
        return $this->container['ineligibility_reasons'];
    }

    /**
     * Sets ineligibility_reasons
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\IneligibilityReason[] $ineligibility_reasons A list of reasons why a shipping service offering is ineligible.
     *
     * @return self
     */
    public function setIneligibilityReasons($ineligibility_reasons) : self
    {
        $this->container['ineligibility_reasons'] = $ineligibility_reasons;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @return boolean
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @return void
     */
    public function offsetSet($offset, $value) : void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @return void
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize() : string
    {
       return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString() : string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

