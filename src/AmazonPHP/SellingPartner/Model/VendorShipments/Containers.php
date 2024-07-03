<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorShipments;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Retail Procurement Shipments.
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Containers implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const CONTAINER_TYPE_CARTON = 'carton';

    final public const CONTAINER_TYPE_PALLET = 'pallet';

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'Containers';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'container_type' => 'string',
        'container_sequence_number' => 'string',
        'container_identifiers' => '\AmazonPHP\SellingPartner\Model\VendorShipments\ContainerIdentification[]',
        'tracking_number' => 'string',
        'dimensions' => '\AmazonPHP\SellingPartner\Model\VendorShipments\Dimensions',
        'weight' => '\AmazonPHP\SellingPartner\Model\VendorShipments\Weight',
        'tier' => 'int',
        'block' => 'int',
        'inner_containers_details' => '\AmazonPHP\SellingPartner\Model\VendorShipments\InnerContainersDetails',
        'packed_items' => '\AmazonPHP\SellingPartner\Model\VendorShipments\PackedItems[]',
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
        'container_type' => null,
        'container_sequence_number' => null,
        'container_identifiers' => null,
        'tracking_number' => null,
        'dimensions' => null,
        'weight' => null,
        'tier' => null,
        'block' => null,
        'inner_containers_details' => null,
        'packed_items' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'container_type' => 'containerType',
        'container_sequence_number' => 'containerSequenceNumber',
        'container_identifiers' => 'containerIdentifiers',
        'tracking_number' => 'trackingNumber',
        'dimensions' => 'dimensions',
        'weight' => 'weight',
        'tier' => 'tier',
        'block' => 'block',
        'inner_containers_details' => 'innerContainersDetails',
        'packed_items' => 'packedItems',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'container_type' => 'setContainerType',
        'container_sequence_number' => 'setContainerSequenceNumber',
        'container_identifiers' => 'setContainerIdentifiers',
        'tracking_number' => 'setTrackingNumber',
        'dimensions' => 'setDimensions',
        'weight' => 'setWeight',
        'tier' => 'setTier',
        'block' => 'setBlock',
        'inner_containers_details' => 'setInnerContainersDetails',
        'packed_items' => 'setPackedItems',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'container_type' => 'getContainerType',
        'container_sequence_number' => 'getContainerSequenceNumber',
        'container_identifiers' => 'getContainerIdentifiers',
        'tracking_number' => 'getTrackingNumber',
        'dimensions' => 'getDimensions',
        'weight' => 'getWeight',
        'tier' => 'getTier',
        'block' => 'getBlock',
        'inner_containers_details' => 'getInnerContainersDetails',
        'packed_items' => 'getPackedItems',
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
        $this->container['container_type'] = $data['container_type'] ?? null;
        $this->container['container_sequence_number'] = $data['container_sequence_number'] ?? null;
        $this->container['container_identifiers'] = $data['container_identifiers'] ?? null;
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['tier'] = $data['tier'] ?? null;
        $this->container['block'] = $data['block'] ?? null;
        $this->container['inner_containers_details'] = $data['inner_containers_details'] ?? null;
        $this->container['packed_items'] = $data['packed_items'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getContainerTypeAllowableValues() : array
    {
        return [
            self::CONTAINER_TYPE_CARTON,
            self::CONTAINER_TYPE_PALLET,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['container_type'] === null) {
            throw new AssertionException("'container_type' can't be null");
        }

        $allowedValues = $this->getContainerTypeAllowableValues();

        if (null !== $this->container['container_type'] && !\in_array($this->container['container_type'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'container_type', must be one of '%s'",
                    $this->container['container_type'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['container_identifiers'] === null) {
            throw new AssertionException("'container_identifiers' can't be null");
        }

        if ($this->container['dimensions'] !== null) {
            $this->container['dimensions']->validate();
        }

        if ($this->container['weight'] !== null) {
            $this->container['weight']->validate();
        }

        if ($this->container['inner_containers_details'] !== null) {
            $this->container['inner_containers_details']->validate();
        }
    }

    /**
     * Gets container_type.
     */
    public function getContainerType() : string
    {
        return $this->container['container_type'];
    }

    /**
     * Sets container_type.
     *
     * @param string $container_type the type of container
     */
    public function setContainerType(string $container_type) : self
    {
        $this->container['container_type'] = $container_type;

        return $this;
    }

    /**
     * Gets container_sequence_number.
     */
    public function getContainerSequenceNumber() : ?string
    {
        return $this->container['container_sequence_number'];
    }

    /**
     * Sets container_sequence_number.
     *
     * @param null|string $container_sequence_number an integer that must be submitted for multi-box shipments only, where one item may come in separate packages
     */
    public function setContainerSequenceNumber(?string $container_sequence_number) : self
    {
        $this->container['container_sequence_number'] = $container_sequence_number;

        return $this;
    }

    /**
     * Gets container_identifiers.
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorShipments\ContainerIdentification[]
     */
    public function getContainerIdentifiers() : array
    {
        return $this->container['container_identifiers'];
    }

    /**
     * Sets container_identifiers.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorShipments\ContainerIdentification[] $container_identifiers a list of carton identifiers
     */
    public function setContainerIdentifiers(array $container_identifiers) : self
    {
        $this->container['container_identifiers'] = $container_identifiers;

        return $this;
    }

    /**
     * Gets tracking_number.
     */
    public function getTrackingNumber() : ?string
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number.
     *
     * @param null|string $tracking_number the tracking number used for identifying the shipment
     */
    public function setTrackingNumber(?string $tracking_number) : self
    {
        $this->container['tracking_number'] = $tracking_number;

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
     */
    public function setWeight(?Weight $weight) : self
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets tier.
     */
    public function getTier() : ?int
    {
        return $this->container['tier'];
    }

    /**
     * Sets tier.
     *
     * @param null|int $tier number of layers per pallet
     */
    public function setTier(?int $tier) : self
    {
        $this->container['tier'] = $tier;

        return $this;
    }

    /**
     * Gets block.
     */
    public function getBlock() : ?int
    {
        return $this->container['block'];
    }

    /**
     * Sets block.
     *
     * @param null|int $block number of cartons per layer on the pallet
     */
    public function setBlock(?int $block) : self
    {
        $this->container['block'] = $block;

        return $this;
    }

    /**
     * Gets inner_containers_details.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorShipments\InnerContainersDetails
     */
    public function getInnerContainersDetails() : ?InnerContainersDetails
    {
        return $this->container['inner_containers_details'];
    }

    /**
     * Sets inner_containers_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\InnerContainersDetails $inner_containers_details inner_containers_details
     */
    public function setInnerContainersDetails(?InnerContainersDetails $inner_containers_details) : self
    {
        $this->container['inner_containers_details'] = $inner_containers_details;

        return $this;
    }

    /**
     * Gets packed_items.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorShipments\PackedItems[]
     */
    public function getPackedItems() : ?array
    {
        return $this->container['packed_items'];
    }

    /**
     * Sets packed_items.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\PackedItems[] $packed_items a list of packed items
     */
    public function setPackedItems(?array $packed_items) : self
    {
        $this->container['packed_items'] = $packed_items;

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
