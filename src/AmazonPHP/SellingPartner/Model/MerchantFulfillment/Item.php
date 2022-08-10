<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\MerchantFulfillment;

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
class Item implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Item';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'order_item_id' => 'string',
        'quantity' => 'int',
        'item_weight' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\Weight',
        'item_description' => 'string',
        'transparency_code_list' => 'string[]',
        'item_level_seller_inputs_list' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\AdditionalSellerInputs[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'order_item_id' => null,
        'quantity' => 'int32',
        'item_weight' => null,
        'item_description' => null,
        'transparency_code_list' => null,
        'item_level_seller_inputs_list' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'order_item_id' => 'OrderItemId',
        'quantity' => 'Quantity',
        'item_weight' => 'ItemWeight',
        'item_description' => 'ItemDescription',
        'transparency_code_list' => 'TransparencyCodeList',
        'item_level_seller_inputs_list' => 'ItemLevelSellerInputsList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'order_item_id' => 'setOrderItemId',
        'quantity' => 'setQuantity',
        'item_weight' => 'setItemWeight',
        'item_description' => 'setItemDescription',
        'transparency_code_list' => 'setTransparencyCodeList',
        'item_level_seller_inputs_list' => 'setItemLevelSellerInputsList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'order_item_id' => 'getOrderItemId',
        'quantity' => 'getQuantity',
        'item_weight' => 'getItemWeight',
        'item_description' => 'getItemDescription',
        'transparency_code_list' => 'getTransparencyCodeList',
        'item_level_seller_inputs_list' => 'getItemLevelSellerInputsList',
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
        $this->container['order_item_id'] = $data['order_item_id'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['item_weight'] = $data['item_weight'] ?? null;
        $this->container['item_description'] = $data['item_description'] ?? null;
        $this->container['transparency_code_list'] = $data['transparency_code_list'] ?? null;
        $this->container['item_level_seller_inputs_list'] = $data['item_level_seller_inputs_list'] ?? null;
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
        if ($this->container['order_item_id'] === null) {
            throw new AssertionException("'order_item_id' can't be null");
        }

        if ($this->container['quantity'] === null) {
            throw new AssertionException("'quantity' can't be null");
        }

        if ($this->container['item_weight'] !== null) {
            $this->container['item_weight']->validate();
        }
    }

    /**
     * Gets order_item_id.
     */
    public function getOrderItemId() : string
    {
        return $this->container['order_item_id'];
    }

    /**
     * Sets order_item_id.
     *
     * @param string $order_item_id an Amazon-defined identifier for an individual item in an order
     *
     * @return self
     */
    public function setOrderItemId(string $order_item_id) : self
    {
        $this->container['order_item_id'] = $order_item_id;

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
     * @param int $quantity the number of items
     *
     * @return self
     */
    public function setQuantity(int $quantity) : self
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets item_weight.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\Weight
     */
    public function getItemWeight() : ?Weight
    {
        return $this->container['item_weight'];
    }

    /**
     * Sets item_weight.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\Weight $item_weight item_weight
     *
     * @return self
     */
    public function setItemWeight(?Weight $item_weight) : self
    {
        $this->container['item_weight'] = $item_weight;

        return $this;
    }

    /**
     * Gets item_description.
     *
     * @return null|string
     */
    public function getItemDescription() : ?string
    {
        return $this->container['item_description'];
    }

    /**
     * Sets item_description.
     *
     * @param null|string $item_description the description of the item
     *
     * @return self
     */
    public function setItemDescription(?string $item_description) : self
    {
        $this->container['item_description'] = $item_description;

        return $this;
    }

    /**
     * Gets transparency_code_list.
     *
     * @return null|string[]
     */
    public function getTransparencyCodeList() : ?array
    {
        return $this->container['transparency_code_list'];
    }

    /**
     * Sets transparency_code_list.
     *
     * @param null|string[] $transparency_code_list a list of transparency codes
     *
     * @return self
     */
    public function setTransparencyCodeList(?array $transparency_code_list) : self
    {
        $this->container['transparency_code_list'] = $transparency_code_list;

        return $this;
    }

    /**
     * Gets item_level_seller_inputs_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\AdditionalSellerInputs[]
     */
    public function getItemLevelSellerInputsList() : ?array
    {
        return $this->container['item_level_seller_inputs_list'];
    }

    /**
     * Sets item_level_seller_inputs_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\AdditionalSellerInputs[] $item_level_seller_inputs_list a list of additional seller input pairs required to purchase shipping
     *
     * @return self
     */
    public function setItemLevelSellerInputsList(?array $item_level_seller_inputs_list) : self
    {
        $this->container['item_level_seller_inputs_list'] = $item_level_seller_inputs_list;

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
