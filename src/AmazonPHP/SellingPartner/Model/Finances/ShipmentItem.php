<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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
class ShipmentItem implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ShipmentItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'seller_sku' => 'string',
        'order_item_id' => 'string',
        'order_adjustment_item_id' => 'string',
        'quantity_shipped' => 'int',
        'item_charge_list' => '\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent[]',
        'item_charge_adjustment_list' => '\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent[]',
        'item_fee_list' => '\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]',
        'item_fee_adjustment_list' => '\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]',
        'item_tax_withheld_list' => '\AmazonPHP\SellingPartner\Model\Finances\TaxWithheldComponent[]',
        'promotion_list' => '\AmazonPHP\SellingPartner\Model\Finances\Promotion[]',
        'promotion_adjustment_list' => '\AmazonPHP\SellingPartner\Model\Finances\Promotion[]',
        'cost_of_points_granted' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'cost_of_points_returned' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
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
        'seller_sku' => null,
        'order_item_id' => null,
        'order_adjustment_item_id' => null,
        'quantity_shipped' => 'int32',
        'item_charge_list' => null,
        'item_charge_adjustment_list' => null,
        'item_fee_list' => null,
        'item_fee_adjustment_list' => null,
        'item_tax_withheld_list' => null,
        'promotion_list' => null,
        'promotion_adjustment_list' => null,
        'cost_of_points_granted' => null,
        'cost_of_points_returned' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'seller_sku' => 'SellerSKU',
        'order_item_id' => 'OrderItemId',
        'order_adjustment_item_id' => 'OrderAdjustmentItemId',
        'quantity_shipped' => 'QuantityShipped',
        'item_charge_list' => 'ItemChargeList',
        'item_charge_adjustment_list' => 'ItemChargeAdjustmentList',
        'item_fee_list' => 'ItemFeeList',
        'item_fee_adjustment_list' => 'ItemFeeAdjustmentList',
        'item_tax_withheld_list' => 'ItemTaxWithheldList',
        'promotion_list' => 'PromotionList',
        'promotion_adjustment_list' => 'PromotionAdjustmentList',
        'cost_of_points_granted' => 'CostOfPointsGranted',
        'cost_of_points_returned' => 'CostOfPointsReturned',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'seller_sku' => 'setSellerSku',
        'order_item_id' => 'setOrderItemId',
        'order_adjustment_item_id' => 'setOrderAdjustmentItemId',
        'quantity_shipped' => 'setQuantityShipped',
        'item_charge_list' => 'setItemChargeList',
        'item_charge_adjustment_list' => 'setItemChargeAdjustmentList',
        'item_fee_list' => 'setItemFeeList',
        'item_fee_adjustment_list' => 'setItemFeeAdjustmentList',
        'item_tax_withheld_list' => 'setItemTaxWithheldList',
        'promotion_list' => 'setPromotionList',
        'promotion_adjustment_list' => 'setPromotionAdjustmentList',
        'cost_of_points_granted' => 'setCostOfPointsGranted',
        'cost_of_points_returned' => 'setCostOfPointsReturned',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'seller_sku' => 'getSellerSku',
        'order_item_id' => 'getOrderItemId',
        'order_adjustment_item_id' => 'getOrderAdjustmentItemId',
        'quantity_shipped' => 'getQuantityShipped',
        'item_charge_list' => 'getItemChargeList',
        'item_charge_adjustment_list' => 'getItemChargeAdjustmentList',
        'item_fee_list' => 'getItemFeeList',
        'item_fee_adjustment_list' => 'getItemFeeAdjustmentList',
        'item_tax_withheld_list' => 'getItemTaxWithheldList',
        'promotion_list' => 'getPromotionList',
        'promotion_adjustment_list' => 'getPromotionAdjustmentList',
        'cost_of_points_granted' => 'getCostOfPointsGranted',
        'cost_of_points_returned' => 'getCostOfPointsReturned',
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
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['order_item_id'] = $data['order_item_id'] ?? null;
        $this->container['order_adjustment_item_id'] = $data['order_adjustment_item_id'] ?? null;
        $this->container['quantity_shipped'] = $data['quantity_shipped'] ?? null;
        $this->container['item_charge_list'] = $data['item_charge_list'] ?? null;
        $this->container['item_charge_adjustment_list'] = $data['item_charge_adjustment_list'] ?? null;
        $this->container['item_fee_list'] = $data['item_fee_list'] ?? null;
        $this->container['item_fee_adjustment_list'] = $data['item_fee_adjustment_list'] ?? null;
        $this->container['item_tax_withheld_list'] = $data['item_tax_withheld_list'] ?? null;
        $this->container['promotion_list'] = $data['promotion_list'] ?? null;
        $this->container['promotion_adjustment_list'] = $data['promotion_adjustment_list'] ?? null;
        $this->container['cost_of_points_granted'] = $data['cost_of_points_granted'] ?? null;
        $this->container['cost_of_points_returned'] = $data['cost_of_points_returned'] ?? null;
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
        if ($this->container['cost_of_points_granted'] !== null) {
            $this->container['cost_of_points_granted']->validate();
        }

        if ($this->container['cost_of_points_returned'] !== null) {
            $this->container['cost_of_points_returned']->validate();
        }
    }

    /**
     * Gets seller_sku.
     */
    public function getSellerSku() : ?string
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku.
     *
     * @param null|string $seller_sku The seller SKU of the item. The seller SKU is qualified by the seller's seller ID, which is included with every call to the Selling Partner API.
     */
    public function setSellerSku(?string $seller_sku) : self
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets order_item_id.
     */
    public function getOrderItemId() : ?string
    {
        return $this->container['order_item_id'];
    }

    /**
     * Sets order_item_id.
     *
     * @param null|string $order_item_id an Amazon-defined order item identifier
     */
    public function setOrderItemId(?string $order_item_id) : self
    {
        $this->container['order_item_id'] = $order_item_id;

        return $this;
    }

    /**
     * Gets order_adjustment_item_id.
     */
    public function getOrderAdjustmentItemId() : ?string
    {
        return $this->container['order_adjustment_item_id'];
    }

    /**
     * Sets order_adjustment_item_id.
     *
     * @param null|string $order_adjustment_item_id an Amazon-defined order adjustment identifier defined for refunds, guarantee claims, and chargeback events
     */
    public function setOrderAdjustmentItemId(?string $order_adjustment_item_id) : self
    {
        $this->container['order_adjustment_item_id'] = $order_adjustment_item_id;

        return $this;
    }

    /**
     * Gets quantity_shipped.
     */
    public function getQuantityShipped() : ?int
    {
        return $this->container['quantity_shipped'];
    }

    /**
     * Sets quantity_shipped.
     *
     * @param null|int $quantity_shipped the number of items shipped
     */
    public function setQuantityShipped(?int $quantity_shipped) : self
    {
        $this->container['quantity_shipped'] = $quantity_shipped;

        return $this;
    }

    /**
     * Gets item_charge_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent[]
     */
    public function getItemChargeList() : ?array
    {
        return $this->container['item_charge_list'];
    }

    /**
     * Sets item_charge_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent[] $item_charge_list a list of charge information on the seller's account
     */
    public function setItemChargeList(?array $item_charge_list) : self
    {
        $this->container['item_charge_list'] = $item_charge_list;

        return $this;
    }

    /**
     * Gets item_charge_adjustment_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent[]
     */
    public function getItemChargeAdjustmentList() : ?array
    {
        return $this->container['item_charge_adjustment_list'];
    }

    /**
     * Sets item_charge_adjustment_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent[] $item_charge_adjustment_list a list of charge information on the seller's account
     */
    public function setItemChargeAdjustmentList(?array $item_charge_adjustment_list) : self
    {
        $this->container['item_charge_adjustment_list'] = $item_charge_adjustment_list;

        return $this;
    }

    /**
     * Gets item_fee_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]
     */
    public function getItemFeeList() : ?array
    {
        return $this->container['item_fee_list'];
    }

    /**
     * Sets item_fee_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[] $item_fee_list a list of fee component information
     */
    public function setItemFeeList(?array $item_fee_list) : self
    {
        $this->container['item_fee_list'] = $item_fee_list;

        return $this;
    }

    /**
     * Gets item_fee_adjustment_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]
     */
    public function getItemFeeAdjustmentList() : ?array
    {
        return $this->container['item_fee_adjustment_list'];
    }

    /**
     * Sets item_fee_adjustment_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[] $item_fee_adjustment_list a list of fee component information
     */
    public function setItemFeeAdjustmentList(?array $item_fee_adjustment_list) : self
    {
        $this->container['item_fee_adjustment_list'] = $item_fee_adjustment_list;

        return $this;
    }

    /**
     * Gets item_tax_withheld_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\TaxWithheldComponent[]
     */
    public function getItemTaxWithheldList() : ?array
    {
        return $this->container['item_tax_withheld_list'];
    }

    /**
     * Sets item_tax_withheld_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\TaxWithheldComponent[] $item_tax_withheld_list a list of information about taxes withheld
     */
    public function setItemTaxWithheldList(?array $item_tax_withheld_list) : self
    {
        $this->container['item_tax_withheld_list'] = $item_tax_withheld_list;

        return $this;
    }

    /**
     * Gets promotion_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\Promotion[]
     */
    public function getPromotionList() : ?array
    {
        return $this->container['promotion_list'];
    }

    /**
     * Sets promotion_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Promotion[] $promotion_list a list of promotions
     */
    public function setPromotionList(?array $promotion_list) : self
    {
        $this->container['promotion_list'] = $promotion_list;

        return $this;
    }

    /**
     * Gets promotion_adjustment_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\Promotion[]
     */
    public function getPromotionAdjustmentList() : ?array
    {
        return $this->container['promotion_adjustment_list'];
    }

    /**
     * Sets promotion_adjustment_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Promotion[] $promotion_adjustment_list a list of promotions
     */
    public function setPromotionAdjustmentList(?array $promotion_adjustment_list) : self
    {
        $this->container['promotion_adjustment_list'] = $promotion_adjustment_list;

        return $this;
    }

    /**
     * Gets cost_of_points_granted.
     */
    public function getCostOfPointsGranted() : ?Currency
    {
        return $this->container['cost_of_points_granted'];
    }

    /**
     * Sets cost_of_points_granted.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $cost_of_points_granted cost_of_points_granted
     */
    public function setCostOfPointsGranted(?Currency $cost_of_points_granted) : self
    {
        $this->container['cost_of_points_granted'] = $cost_of_points_granted;

        return $this;
    }

    /**
     * Gets cost_of_points_returned.
     */
    public function getCostOfPointsReturned() : ?Currency
    {
        return $this->container['cost_of_points_returned'];
    }

    /**
     * Sets cost_of_points_returned.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $cost_of_points_returned cost_of_points_returned
     */
    public function setCostOfPointsReturned(?Currency $cost_of_points_returned) : self
    {
        $this->container['cost_of_points_returned'] = $cost_of_points_returned;

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
