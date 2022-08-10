<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances;

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
class AdjustmentItem implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'AdjustmentItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'quantity' => 'string',
        'per_unit_amount' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'total_amount' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'seller_sku' => 'string',
        'fn_sku' => 'string',
        'product_description' => 'string',
        'asin' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'quantity' => null,
        'per_unit_amount' => null,
        'total_amount' => null,
        'seller_sku' => null,
        'fn_sku' => null,
        'product_description' => null,
        'asin' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'quantity' => 'Quantity',
        'per_unit_amount' => 'PerUnitAmount',
        'total_amount' => 'TotalAmount',
        'seller_sku' => 'SellerSKU',
        'fn_sku' => 'FnSKU',
        'product_description' => 'ProductDescription',
        'asin' => 'ASIN',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'quantity' => 'setQuantity',
        'per_unit_amount' => 'setPerUnitAmount',
        'total_amount' => 'setTotalAmount',
        'seller_sku' => 'setSellerSku',
        'fn_sku' => 'setFnSku',
        'product_description' => 'setProductDescription',
        'asin' => 'setAsin',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'quantity' => 'getQuantity',
        'per_unit_amount' => 'getPerUnitAmount',
        'total_amount' => 'getTotalAmount',
        'seller_sku' => 'getSellerSku',
        'fn_sku' => 'getFnSku',
        'product_description' => 'getProductDescription',
        'asin' => 'getAsin',
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
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['per_unit_amount'] = $data['per_unit_amount'] ?? null;
        $this->container['total_amount'] = $data['total_amount'] ?? null;
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['fn_sku'] = $data['fn_sku'] ?? null;
        $this->container['product_description'] = $data['product_description'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
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
        if ($this->container['per_unit_amount'] !== null) {
            $this->container['per_unit_amount']->validate();
        }

        if ($this->container['total_amount'] !== null) {
            $this->container['total_amount']->validate();
        }
    }

    /**
     * Gets quantity.
     *
     * @return null|string
     */
    public function getQuantity() : ?string
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param null|string $quantity represents the number of units in the seller's inventory when the AdustmentType is FBAInventoryReimbursement
     *
     * @return self
     */
    public function setQuantity(?string $quantity) : self
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets per_unit_amount.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\Currency
     */
    public function getPerUnitAmount() : ?Currency
    {
        return $this->container['per_unit_amount'];
    }

    /**
     * Sets per_unit_amount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $per_unit_amount per_unit_amount
     *
     * @return self
     */
    public function setPerUnitAmount(?Currency $per_unit_amount) : self
    {
        $this->container['per_unit_amount'] = $per_unit_amount;

        return $this;
    }

    /**
     * Gets total_amount.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\Currency
     */
    public function getTotalAmount() : ?Currency
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $total_amount total_amount
     *
     * @return self
     */
    public function setTotalAmount(?Currency $total_amount) : self
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets seller_sku.
     *
     * @return null|string
     */
    public function getSellerSku() : ?string
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku.
     *
     * @param null|string $seller_sku The seller SKU of the item. The seller SKU is qualified by the seller's seller ID, which is included with every call to the Selling Partner API.
     *
     * @return self
     */
    public function setSellerSku(?string $seller_sku) : self
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets fn_sku.
     *
     * @return null|string
     */
    public function getFnSku() : ?string
    {
        return $this->container['fn_sku'];
    }

    /**
     * Sets fn_sku.
     *
     * @param null|string $fn_sku a unique identifier assigned to products stored in and fulfilled from a fulfillment center
     *
     * @return self
     */
    public function setFnSku(?string $fn_sku) : self
    {
        $this->container['fn_sku'] = $fn_sku;

        return $this;
    }

    /**
     * Gets product_description.
     *
     * @return null|string
     */
    public function getProductDescription() : ?string
    {
        return $this->container['product_description'];
    }

    /**
     * Sets product_description.
     *
     * @param null|string $product_description a short description of the item
     *
     * @return self
     */
    public function setProductDescription(?string $product_description) : self
    {
        $this->container['product_description'] = $product_description;

        return $this;
    }

    /**
     * Gets asin.
     *
     * @return null|string
     */
    public function getAsin() : ?string
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param null|string $asin the Amazon Standard Identification Number (ASIN) of the item
     *
     * @return self
     */
    public function setAsin(?string $asin) : self
    {
        $this->container['asin'] = $asin;

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
