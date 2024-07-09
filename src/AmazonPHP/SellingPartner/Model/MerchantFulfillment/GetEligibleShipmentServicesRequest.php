<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\MerchantFulfillment;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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
class GetEligibleShipmentServicesRequest implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'GetEligibleShipmentServicesRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'shipment_request_details' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShipmentRequestDetails',
        'shipping_offering_filter' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShippingOfferingFilter',
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
        'shipment_request_details' => null,
        'shipping_offering_filter' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipment_request_details' => 'ShipmentRequestDetails',
        'shipping_offering_filter' => 'ShippingOfferingFilter',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipment_request_details' => 'setShipmentRequestDetails',
        'shipping_offering_filter' => 'setShippingOfferingFilter',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipment_request_details' => 'getShipmentRequestDetails',
        'shipping_offering_filter' => 'getShippingOfferingFilter',
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
        $this->container['shipment_request_details'] = $data['shipment_request_details'] ?? null;
        $this->container['shipping_offering_filter'] = $data['shipping_offering_filter'] ?? null;
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
        if ($this->container['shipment_request_details'] === null) {
            throw new AssertionException("'shipment_request_details' can't be null");
        }

        $this->container['shipment_request_details']->validate();

        if ($this->container['shipping_offering_filter'] !== null) {
            $this->container['shipping_offering_filter']->validate();
        }
    }

    /**
     * Gets shipment_request_details.
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShipmentRequestDetails
     */
    public function getShipmentRequestDetails() : ShipmentRequestDetails
    {
        return $this->container['shipment_request_details'];
    }

    /**
     * Sets shipment_request_details.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShipmentRequestDetails $shipment_request_details shipment_request_details
     */
    public function setShipmentRequestDetails(ShipmentRequestDetails $shipment_request_details) : self
    {
        $this->container['shipment_request_details'] = $shipment_request_details;

        return $this;
    }

    /**
     * Gets shipping_offering_filter.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShippingOfferingFilter
     */
    public function getShippingOfferingFilter() : ?ShippingOfferingFilter
    {
        return $this->container['shipping_offering_filter'];
    }

    /**
     * Sets shipping_offering_filter.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShippingOfferingFilter $shipping_offering_filter shipping_offering_filter
     */
    public function setShippingOfferingFilter(?ShippingOfferingFilter $shipping_offering_filter) : self
    {
        $this->container['shipping_offering_filter'] = $shipping_offering_filter;

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
