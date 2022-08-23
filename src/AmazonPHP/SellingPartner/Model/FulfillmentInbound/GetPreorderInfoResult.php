<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

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
class GetPreorderInfoResult implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'GetPreorderInfoResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'shipment_contains_preorderable_items' => 'bool',
        'shipment_confirmed_for_preorder' => 'bool',
        'need_by_date' => '\DateTimeInterface',
        'confirmed_fulfillable_date' => '\DateTimeInterface',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'shipment_contains_preorderable_items' => null,
        'shipment_confirmed_for_preorder' => null,
        'need_by_date' => 'date',
        'confirmed_fulfillable_date' => 'date',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipment_contains_preorderable_items' => 'ShipmentContainsPreorderableItems',
        'shipment_confirmed_for_preorder' => 'ShipmentConfirmedForPreorder',
        'need_by_date' => 'NeedByDate',
        'confirmed_fulfillable_date' => 'ConfirmedFulfillableDate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipment_contains_preorderable_items' => 'setShipmentContainsPreorderableItems',
        'shipment_confirmed_for_preorder' => 'setShipmentConfirmedForPreorder',
        'need_by_date' => 'setNeedByDate',
        'confirmed_fulfillable_date' => 'setConfirmedFulfillableDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipment_contains_preorderable_items' => 'getShipmentContainsPreorderableItems',
        'shipment_confirmed_for_preorder' => 'getShipmentConfirmedForPreorder',
        'need_by_date' => 'getNeedByDate',
        'confirmed_fulfillable_date' => 'getConfirmedFulfillableDate',
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
        $this->container['shipment_contains_preorderable_items'] = $data['shipment_contains_preorderable_items'] ?? null;
        $this->container['shipment_confirmed_for_preorder'] = $data['shipment_confirmed_for_preorder'] ?? null;
        $this->container['need_by_date'] = $data['need_by_date'] ?? null;
        $this->container['confirmed_fulfillable_date'] = $data['confirmed_fulfillable_date'] ?? null;
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
    }

    /**
     * Gets shipment_contains_preorderable_items.
     *
     * @return null|bool
     */
    public function getShipmentContainsPreorderableItems() : ?bool
    {
        return $this->container['shipment_contains_preorderable_items'];
    }

    /**
     * Sets shipment_contains_preorderable_items.
     *
     * @param null|bool $shipment_contains_preorderable_items Indicates whether the shipment contains items that have been enabled for pre-order. For more information about enabling items for pre-order, see the Seller Central Help.
     *
     * @return self
     */
    public function setShipmentContainsPreorderableItems(?bool $shipment_contains_preorderable_items) : self
    {
        $this->container['shipment_contains_preorderable_items'] = $shipment_contains_preorderable_items;

        return $this;
    }

    /**
     * Gets shipment_confirmed_for_preorder.
     *
     * @return null|bool
     */
    public function getShipmentConfirmedForPreorder() : ?bool
    {
        return $this->container['shipment_confirmed_for_preorder'];
    }

    /**
     * Sets shipment_confirmed_for_preorder.
     *
     * @param null|bool $shipment_confirmed_for_preorder indicates whether this shipment has been confirmed for pre-order
     *
     * @return self
     */
    public function setShipmentConfirmedForPreorder(?bool $shipment_confirmed_for_preorder) : self
    {
        $this->container['shipment_confirmed_for_preorder'] = $shipment_confirmed_for_preorder;

        return $this;
    }

    /**
     * Gets need_by_date.
     *
     * @return null|\DateTimeInterface
     */
    public function getNeedByDate() : ?\DateTimeInterface
    {
        return $this->container['need_by_date'];
    }

    /**
     * Sets need_by_date.
     *
     * @param null|\DateTimeInterface $need_by_date need_by_date
     *
     * @return self
     */
    public function setNeedByDate(?\DateTimeInterface $need_by_date) : self
    {
        $this->container['need_by_date'] = $need_by_date;

        return $this;
    }

    /**
     * Gets confirmed_fulfillable_date.
     *
     * @return null|\DateTimeInterface
     */
    public function getConfirmedFulfillableDate() : ?\DateTimeInterface
    {
        return $this->container['confirmed_fulfillable_date'];
    }

    /**
     * Sets confirmed_fulfillable_date.
     *
     * @param null|\DateTimeInterface $confirmed_fulfillable_date confirmed_fulfillable_date
     *
     * @return self
     */
    public function setConfirmedFulfillableDate(?\DateTimeInterface $confirmed_fulfillable_date) : self
    {
        $this->container['confirmed_fulfillable_date'] = $confirmed_fulfillable_date;

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
