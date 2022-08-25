<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

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
class FulfillmentPreviewItem implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const SHIPPING_WEIGHT_CALCULATION_METHOD_PACKAGE = 'Package';

    public const SHIPPING_WEIGHT_CALCULATION_METHOD_DIMENSIONAL = 'Dimensional';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'FulfillmentPreviewItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'seller_sku' => 'string',
        'quantity' => 'int',
        'seller_fulfillment_order_item_id' => 'string',
        'estimated_shipping_weight' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Weight',
        'shipping_weight_calculation_method' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'seller_sku' => null,
        'quantity' => 'int32',
        'seller_fulfillment_order_item_id' => null,
        'estimated_shipping_weight' => null,
        'shipping_weight_calculation_method' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'seller_sku' => 'sellerSku',
        'quantity' => 'quantity',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
        'estimated_shipping_weight' => 'estimatedShippingWeight',
        'shipping_weight_calculation_method' => 'shippingWeightCalculationMethod',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'seller_sku' => 'setSellerSku',
        'quantity' => 'setQuantity',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
        'estimated_shipping_weight' => 'setEstimatedShippingWeight',
        'shipping_weight_calculation_method' => 'setShippingWeightCalculationMethod',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'seller_sku' => 'getSellerSku',
        'quantity' => 'getQuantity',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
        'estimated_shipping_weight' => 'getEstimatedShippingWeight',
        'shipping_weight_calculation_method' => 'getShippingWeightCalculationMethod',
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
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['seller_fulfillment_order_item_id'] = $data['seller_fulfillment_order_item_id'] ?? null;
        $this->container['estimated_shipping_weight'] = $data['estimated_shipping_weight'] ?? null;
        $this->container['shipping_weight_calculation_method'] = $data['shipping_weight_calculation_method'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getShippingWeightCalculationMethodAllowableValues() : array
    {
        return [
            self::SHIPPING_WEIGHT_CALCULATION_METHOD_PACKAGE,
            self::SHIPPING_WEIGHT_CALCULATION_METHOD_DIMENSIONAL,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['seller_sku'] === null) {
            throw new AssertionException("'seller_sku' can't be null");
        }

        if ($this->container['quantity'] === null) {
            throw new AssertionException("'quantity' can't be null");
        }

        if ($this->container['seller_fulfillment_order_item_id'] === null) {
            throw new AssertionException("'seller_fulfillment_order_item_id' can't be null");
        }

        if ($this->container['estimated_shipping_weight'] !== null) {
            $this->container['estimated_shipping_weight']->validate();
        }

        $allowedValues = $this->getShippingWeightCalculationMethodAllowableValues();

        if (null !== $this->container['shipping_weight_calculation_method'] && !\in_array($this->container['shipping_weight_calculation_method'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'shipping_weight_calculation_method', must be one of '%s'",
                    $this->container['shipping_weight_calculation_method'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets seller_sku.
     */
    public function getSellerSku() : string
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku.
     *
     * @param string $seller_sku the seller SKU of the item
     *
     * @return self
     */
    public function setSellerSku(string $seller_sku) : self
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets quantity.
     */
    public function getQuantity() : int
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param int $quantity the item quantity
     *
     * @return self
     */
    public function setQuantity(int $quantity) : self
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets seller_fulfillment_order_item_id.
     */
    public function getSellerFulfillmentOrderItemId() : string
    {
        return $this->container['seller_fulfillment_order_item_id'];
    }

    /**
     * Sets seller_fulfillment_order_item_id.
     *
     * @param string $seller_fulfillment_order_item_id a fulfillment order item identifier that the seller created with a call to the createFulfillmentOrder operation
     *
     * @return self
     */
    public function setSellerFulfillmentOrderItemId(string $seller_fulfillment_order_item_id) : self
    {
        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

        return $this;
    }

    /**
     * Gets estimated_shipping_weight.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Weight
     */
    public function getEstimatedShippingWeight() : ?Weight
    {
        return $this->container['estimated_shipping_weight'];
    }

    /**
     * Sets estimated_shipping_weight.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Weight $estimated_shipping_weight estimated_shipping_weight
     *
     * @return self
     */
    public function setEstimatedShippingWeight(?Weight $estimated_shipping_weight) : self
    {
        $this->container['estimated_shipping_weight'] = $estimated_shipping_weight;

        return $this;
    }

    /**
     * Gets shipping_weight_calculation_method.
     *
     * @return null|string
     */
    public function getShippingWeightCalculationMethod() : ?string
    {
        return $this->container['shipping_weight_calculation_method'];
    }

    /**
     * Sets shipping_weight_calculation_method.
     *
     * @param null|string $shipping_weight_calculation_method the method used to calculate the estimated shipping weight
     *
     * @return self
     */
    public function setShippingWeightCalculationMethod(?string $shipping_weight_calculation_method) : self
    {
        $this->container['shipping_weight_calculation_method'] = $shipping_weight_calculation_method;

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
     * @return string
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
