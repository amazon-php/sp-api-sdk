<?php declare(strict_types=1);
/**
 * ShipmentMeasurements.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Retail Procurement Shipments.
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\VendorShipments;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ShipmentMeasurements implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ShipmentMeasurements';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'gross_shipment_weight' => '\AmazonPHP\SellingPartner\Model\VendorShipments\Weight',
        'shipment_volume' => '\AmazonPHP\SellingPartner\Model\VendorShipments\Volume',
        'carton_count' => 'int',
        'pallet_count' => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'gross_shipment_weight' => null,
        'shipment_volume' => null,
        'carton_count' => null,
        'pallet_count' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'gross_shipment_weight' => 'grossShipmentWeight',
        'shipment_volume' => 'shipmentVolume',
        'carton_count' => 'cartonCount',
        'pallet_count' => 'palletCount',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'gross_shipment_weight' => 'setGrossShipmentWeight',
        'shipment_volume' => 'setShipmentVolume',
        'carton_count' => 'setCartonCount',
        'pallet_count' => 'setPalletCount',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'gross_shipment_weight' => 'getGrossShipmentWeight',
        'shipment_volume' => 'getShipmentVolume',
        'carton_count' => 'getCartonCount',
        'pallet_count' => 'getPalletCount',
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['gross_shipment_weight'] = $data['gross_shipment_weight'] ?? null;
        $this->container['shipment_volume'] = $data['shipment_volume'] ?? null;
        $this->container['carton_count'] = $data['carton_count'] ?? null;
        $this->container['pallet_count'] = $data['pallet_count'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
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
        return \json_encode(
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
        if ($this->container['gross_shipment_weight'] !== null) {
            $this->container['gross_shipment_weight']->validate();
        }

        if ($this->container['shipment_volume'] !== null) {
            $this->container['shipment_volume']->validate();
        }
    }

    /**
     * Gets gross_shipment_weight.
     */
    public function getGrossShipmentWeight() : ?Weight
    {
        return $this->container['gross_shipment_weight'];
    }

    /**
     * Sets gross_shipment_weight.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\Weight $gross_shipment_weight gross_shipment_weight
     */
    public function setGrossShipmentWeight(?Weight $gross_shipment_weight) : self
    {
        $this->container['gross_shipment_weight'] = $gross_shipment_weight;

        return $this;
    }

    /**
     * Gets shipment_volume.
     */
    public function getShipmentVolume() : ?Volume
    {
        return $this->container['shipment_volume'];
    }

    /**
     * Sets shipment_volume.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\Volume $shipment_volume shipment_volume
     */
    public function setShipmentVolume(?Volume $shipment_volume) : self
    {
        $this->container['shipment_volume'] = $shipment_volume;

        return $this;
    }

    /**
     * Gets carton_count.
     */
    public function getCartonCount() : ?int
    {
        return $this->container['carton_count'];
    }

    /**
     * Sets carton_count.
     *
     * @param null|int $carton_count Number of cartons present in the shipment. Provide the cartonCount only for unpalletized shipments.
     */
    public function setCartonCount(?int $carton_count) : self
    {
        $this->container['carton_count'] = $carton_count;

        return $this;
    }

    /**
     * Gets pallet_count.
     */
    public function getPalletCount() : ?int
    {
        return $this->container['pallet_count'];
    }

    /**
     * Sets pallet_count.
     *
     * @param null|int $pallet_count Number of pallets present in the shipment. Provide the palletCount only for palletized shipments.
     */
    public function setPalletCount(?int $pallet_count) : self
    {
        $this->container['pallet_count'] = $pallet_count;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
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
     *
     * @param int $offset Offset
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
