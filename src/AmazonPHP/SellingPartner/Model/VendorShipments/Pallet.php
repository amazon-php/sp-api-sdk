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
class Pallet implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Pallet';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'pallet_identifiers' => '\AmazonPHP\SellingPartner\Model\VendorShipments\ContainerIdentification[]',
        'tier' => 'int',
        'block' => 'int',
        'dimensions' => '\AmazonPHP\SellingPartner\Model\VendorShipments\Dimensions',
        'weight' => '\AmazonPHP\SellingPartner\Model\VendorShipments\Weight',
        'carton_reference_details' => '\AmazonPHP\SellingPartner\Model\VendorShipments\CartonReferenceDetails',
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
        'pallet_identifiers' => null,
        'tier' => null,
        'block' => null,
        'dimensions' => null,
        'weight' => null,
        'carton_reference_details' => null,
        'items' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'pallet_identifiers' => 'palletIdentifiers',
        'tier' => 'tier',
        'block' => 'block',
        'dimensions' => 'dimensions',
        'weight' => 'weight',
        'carton_reference_details' => 'cartonReferenceDetails',
        'items' => 'items',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'pallet_identifiers' => 'setPalletIdentifiers',
        'tier' => 'setTier',
        'block' => 'setBlock',
        'dimensions' => 'setDimensions',
        'weight' => 'setWeight',
        'carton_reference_details' => 'setCartonReferenceDetails',
        'items' => 'setItems',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'pallet_identifiers' => 'getPalletIdentifiers',
        'tier' => 'getTier',
        'block' => 'getBlock',
        'dimensions' => 'getDimensions',
        'weight' => 'getWeight',
        'carton_reference_details' => 'getCartonReferenceDetails',
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
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['pallet_identifiers'] = $data['pallet_identifiers'] ?? null;
        $this->container['tier'] = $data['tier'] ?? null;
        $this->container['block'] = $data['block'] ?? null;
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['carton_reference_details'] = $data['carton_reference_details'] ?? null;
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
        if ($this->container['pallet_identifiers'] === null) {
            throw new AssertionException("'pallet_identifiers' can't be null");
        }

        if ($this->container['dimensions'] !== null) {
            $this->container['dimensions']->validate();
        }

        if ($this->container['weight'] !== null) {
            $this->container['weight']->validate();
        }

        if ($this->container['carton_reference_details'] !== null) {
            $this->container['carton_reference_details']->validate();
        }
    }

    /**
     * Gets pallet_identifiers.
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorShipments\ContainerIdentification[]
     */
    public function getPalletIdentifiers() : array
    {
        return $this->container['pallet_identifiers'];
    }

    /**
     * Sets pallet_identifiers.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorShipments\ContainerIdentification[] $pallet_identifiers a list of pallet identifiers
     *
     * @return self
     */
    public function setPalletIdentifiers(array $pallet_identifiers) : self
    {
        $this->container['pallet_identifiers'] = $pallet_identifiers;

        return $this;
    }

    /**
     * Gets tier.
     *
     * @return null|int
     */
    public function getTier() : ?int
    {
        return $this->container['tier'];
    }

    /**
     * Sets tier.
     *
     * @param null|int $tier number of layers per pallet
     *
     * @return self
     */
    public function setTier(?int $tier) : self
    {
        $this->container['tier'] = $tier;

        return $this;
    }

    /**
     * Gets block.
     *
     * @return null|int
     */
    public function getBlock() : ?int
    {
        return $this->container['block'];
    }

    /**
     * Sets block.
     *
     * @param null|int $block number of cartons per layer on the pallet
     *
     * @return self
     */
    public function setBlock(?int $block) : self
    {
        $this->container['block'] = $block;

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
     * Gets carton_reference_details.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorShipments\CartonReferenceDetails
     */
    public function getCartonReferenceDetails() : ?CartonReferenceDetails
    {
        return $this->container['carton_reference_details'];
    }

    /**
     * Sets carton_reference_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\CartonReferenceDetails $carton_reference_details carton_reference_details
     *
     * @return self
     */
    public function setCartonReferenceDetails(?CartonReferenceDetails $carton_reference_details) : self
    {
        $this->container['carton_reference_details'] = $carton_reference_details;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorShipments\ContainerItem[]
     */
    public function getItems() : ?array
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\ContainerItem[] $items a list of container item details
     *
     * @return self
     */
    public function setItems(?array $items) : self
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return bool|string
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
