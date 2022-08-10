<?php declare(strict_types=1);

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
class Carton implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Carton';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'carton_identifiers' => '\AmazonPHP\SellingPartner\Model\VendorShipments\ContainerIdentification[]',
        'carton_sequence_number' => 'string',
        'dimensions' => '\AmazonPHP\SellingPartner\Model\VendorShipments\Dimensions',
        'weight' => '\AmazonPHP\SellingPartner\Model\VendorShipments\Weight',
        'tracking_number' => 'string',
        'items' => '\AmazonPHP\SellingPartner\Model\VendorShipments\ContainerItem[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'carton_identifiers' => null,
        'carton_sequence_number' => null,
        'dimensions' => null,
        'weight' => null,
        'tracking_number' => null,
        'items' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'carton_identifiers' => 'cartonIdentifiers',
        'carton_sequence_number' => 'cartonSequenceNumber',
        'dimensions' => 'dimensions',
        'weight' => 'weight',
        'tracking_number' => 'trackingNumber',
        'items' => 'items',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'carton_identifiers' => 'setCartonIdentifiers',
        'carton_sequence_number' => 'setCartonSequenceNumber',
        'dimensions' => 'setDimensions',
        'weight' => 'setWeight',
        'tracking_number' => 'setTrackingNumber',
        'items' => 'setItems',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'carton_identifiers' => 'getCartonIdentifiers',
        'carton_sequence_number' => 'getCartonSequenceNumber',
        'dimensions' => 'getDimensions',
        'weight' => 'getWeight',
        'tracking_number' => 'getTrackingNumber',
        'items' => 'getItems',
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
        $this->container['carton_identifiers'] = $data['carton_identifiers'] ?? null;
        $this->container['carton_sequence_number'] = $data['carton_sequence_number'] ?? null;
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
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
     *
     * @return string
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
        if ($this->container['carton_sequence_number'] === null) {
            throw new AssertionException("'carton_sequence_number' can't be null");
        }

        if ($this->container['dimensions'] !== null) {
            $this->container['dimensions']->validate();
        }

        if ($this->container['weight'] !== null) {
            $this->container['weight']->validate();
        }

        if ($this->container['items'] === null) {
            throw new AssertionException("'items' can't be null");
        }
    }

    /**
     * Gets carton_identifiers.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorShipments\ContainerIdentification[]
     */
    public function getCartonIdentifiers() : ?array
    {
        return $this->container['carton_identifiers'];
    }

    /**
     * Sets carton_identifiers.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\ContainerIdentification[] $carton_identifiers a list of carton identifiers
     *
     * @return self
     */
    public function setCartonIdentifiers(?array $carton_identifiers) : self
    {
        $this->container['carton_identifiers'] = $carton_identifiers;

        return $this;
    }

    /**
     * Gets carton_sequence_number.
     */
    public function getCartonSequenceNumber() : string
    {
        return $this->container['carton_sequence_number'];
    }

    /**
     * Sets carton_sequence_number.
     *
     * @param string $carton_sequence_number Carton sequence number for the carton. The first carton will be 001, the second 002, and so on. This number is used as a reference to refer to this carton from the pallet level.
     *
     * @return self
     */
    public function setCartonSequenceNumber(string $carton_sequence_number) : self
    {
        $this->container['carton_sequence_number'] = $carton_sequence_number;

        return $this;
    }

    /**
     * Gets dimensions.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorShipments\Dimensions
     */
    public function getDimensions() : ?Dimensions
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\Dimensions $dimensions dimensions
     *
     * @return self
     */
    public function setDimensions(?Dimensions $dimensions) : self
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets weight.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorShipments\Weight
     */
    public function getWeight() : ?Weight
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\Weight $weight weight
     *
     * @return self
     */
    public function setWeight(?Weight $weight) : self
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets tracking_number.
     *
     * @return null|string
     */
    public function getTrackingNumber() : ?string
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number.
     *
     * @param null|string $tracking_number this is required to be provided for every carton in the small parcel shipments
     *
     * @return self
     */
    public function setTrackingNumber(?string $tracking_number) : self
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorShipments\ContainerItem[]
     */
    public function getItems() : array
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorShipments\ContainerItem[] $items a list of container item details
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @return bool
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
    public function offsetGet($offset)
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
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
