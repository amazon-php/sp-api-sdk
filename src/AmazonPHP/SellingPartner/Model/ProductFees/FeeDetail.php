<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\ProductFees;

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
class FeeDetail implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'FeeDetail';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'fee_type' => 'string',
        'fee_amount' => '\AmazonPHP\SellingPartner\Model\ProductFees\MoneyType',
        'fee_promotion' => '\AmazonPHP\SellingPartner\Model\ProductFees\MoneyType',
        'tax_amount' => '\AmazonPHP\SellingPartner\Model\ProductFees\MoneyType',
        'final_fee' => '\AmazonPHP\SellingPartner\Model\ProductFees\MoneyType',
        'included_fee_detail_list' => '\AmazonPHP\SellingPartner\Model\ProductFees\IncludedFeeDetail[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'fee_type' => null,
        'fee_amount' => null,
        'fee_promotion' => null,
        'tax_amount' => null,
        'final_fee' => null,
        'included_fee_detail_list' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'fee_type' => 'FeeType',
        'fee_amount' => 'FeeAmount',
        'fee_promotion' => 'FeePromotion',
        'tax_amount' => 'TaxAmount',
        'final_fee' => 'FinalFee',
        'included_fee_detail_list' => 'IncludedFeeDetailList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'fee_type' => 'setFeeType',
        'fee_amount' => 'setFeeAmount',
        'fee_promotion' => 'setFeePromotion',
        'tax_amount' => 'setTaxAmount',
        'final_fee' => 'setFinalFee',
        'included_fee_detail_list' => 'setIncludedFeeDetailList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'fee_type' => 'getFeeType',
        'fee_amount' => 'getFeeAmount',
        'fee_promotion' => 'getFeePromotion',
        'tax_amount' => 'getTaxAmount',
        'final_fee' => 'getFinalFee',
        'included_fee_detail_list' => 'getIncludedFeeDetailList',
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
        $this->container['fee_type'] = $data['fee_type'] ?? null;
        $this->container['fee_amount'] = $data['fee_amount'] ?? null;
        $this->container['fee_promotion'] = $data['fee_promotion'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['final_fee'] = $data['final_fee'] ?? null;
        $this->container['included_fee_detail_list'] = $data['included_fee_detail_list'] ?? null;
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
        if ($this->container['fee_type'] === null) {
            throw new AssertionException("'fee_type' can't be null");
        }

        if ($this->container['fee_amount'] === null) {
            throw new AssertionException("'fee_amount' can't be null");
        }

        $this->container['fee_amount']->validate();

        if ($this->container['fee_promotion'] !== null) {
            $this->container['fee_promotion']->validate();
        }

        if ($this->container['tax_amount'] !== null) {
            $this->container['tax_amount']->validate();
        }

        if ($this->container['final_fee'] === null) {
            throw new AssertionException("'final_fee' can't be null");
        }

        $this->container['final_fee']->validate();
    }

    /**
     * Gets fee_type.
     */
    public function getFeeType() : string
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type.
     *
     * @param string $fee_type the type of fee charged to a seller
     *
     * @return self
     */
    public function setFeeType(string $fee_type) : self
    {
        $this->container['fee_type'] = $fee_type;

        return $this;
    }

    /**
     * Gets fee_amount.
     */
    public function getFeeAmount() : MoneyType
    {
        return $this->container['fee_amount'];
    }

    /**
     * Sets fee_amount.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductFees\MoneyType $fee_amount fee_amount
     *
     * @return self
     */
    public function setFeeAmount(MoneyType $fee_amount) : self
    {
        $this->container['fee_amount'] = $fee_amount;

        return $this;
    }

    /**
     * Gets fee_promotion.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ProductFees\MoneyType
     */
    public function getFeePromotion() : ?MoneyType
    {
        return $this->container['fee_promotion'];
    }

    /**
     * Sets fee_promotion.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductFees\MoneyType $fee_promotion fee_promotion
     *
     * @return self
     */
    public function setFeePromotion(?MoneyType $fee_promotion) : self
    {
        $this->container['fee_promotion'] = $fee_promotion;

        return $this;
    }

    /**
     * Gets tax_amount.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ProductFees\MoneyType
     */
    public function getTaxAmount() : ?MoneyType
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductFees\MoneyType $tax_amount tax_amount
     *
     * @return self
     */
    public function setTaxAmount(?MoneyType $tax_amount) : self
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets final_fee.
     */
    public function getFinalFee() : MoneyType
    {
        return $this->container['final_fee'];
    }

    /**
     * Sets final_fee.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductFees\MoneyType $final_fee final_fee
     *
     * @return self
     */
    public function setFinalFee(MoneyType $final_fee) : self
    {
        $this->container['final_fee'] = $final_fee;

        return $this;
    }

    /**
     * Gets included_fee_detail_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ProductFees\IncludedFeeDetail[]
     */
    public function getIncludedFeeDetailList() : ?array
    {
        return $this->container['included_fee_detail_list'];
    }

    /**
     * Sets included_fee_detail_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductFees\IncludedFeeDetail[] $included_fee_detail_list a list of other fees that contribute to a given fee
     *
     * @return self
     */
    public function setIncludedFeeDetailList(?array $included_fee_detail_list) : self
    {
        $this->container['included_fee_detail_list'] = $included_fee_detail_list;

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
