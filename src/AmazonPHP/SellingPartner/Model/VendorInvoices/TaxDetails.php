<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorInvoices;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Retail Procurement Payments.
 *
 * The Selling Partner API for Retail Procurement Payments provides programmatic access to vendors payments data.
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
class TaxDetails implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const TAX_TYPE_CGST = 'CGST';

    final public const TAX_TYPE_SGST = 'SGST';

    final public const TAX_TYPE_CESS = 'CESS';

    final public const TAX_TYPE_UTGST = 'UTGST';

    final public const TAX_TYPE_IGST = 'IGST';

    final public const TAX_TYPE_MW_ST = 'MwSt.';

    final public const TAX_TYPE_PST = 'PST';

    final public const TAX_TYPE_TVA = 'TVA';

    final public const TAX_TYPE_VAT = 'VAT';

    final public const TAX_TYPE_GST = 'GST';

    final public const TAX_TYPE_ST = 'ST';

    final public const TAX_TYPE_CONSUMPTION = 'Consumption';

    final public const TAX_TYPE_MUTUALLY_DEFINED = 'MutuallyDefined';

    final public const TAX_TYPE_DOMESTIC_VAT = 'DomesticVAT';

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'TaxDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'tax_type' => 'string',
        'tax_rate' => 'string',
        'tax_amount' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\Money',
        'taxable_amount' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\Money',
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
        'tax_type' => null,
        'tax_rate' => null,
        'tax_amount' => null,
        'taxable_amount' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'tax_type' => 'taxType',
        'tax_rate' => 'taxRate',
        'tax_amount' => 'taxAmount',
        'taxable_amount' => 'taxableAmount',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'tax_type' => 'setTaxType',
        'tax_rate' => 'setTaxRate',
        'tax_amount' => 'setTaxAmount',
        'taxable_amount' => 'setTaxableAmount',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'tax_type' => 'getTaxType',
        'tax_rate' => 'getTaxRate',
        'tax_amount' => 'getTaxAmount',
        'taxable_amount' => 'getTaxableAmount',
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
        $this->container['tax_type'] = $data['tax_type'] ?? null;
        $this->container['tax_rate'] = $data['tax_rate'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['taxable_amount'] = $data['taxable_amount'] ?? null;
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
    public function getTaxTypeAllowableValues() : array
    {
        return [
            self::TAX_TYPE_CGST,
            self::TAX_TYPE_SGST,
            self::TAX_TYPE_CESS,
            self::TAX_TYPE_UTGST,
            self::TAX_TYPE_IGST,
            self::TAX_TYPE_MW_ST,
            self::TAX_TYPE_PST,
            self::TAX_TYPE_TVA,
            self::TAX_TYPE_VAT,
            self::TAX_TYPE_GST,
            self::TAX_TYPE_ST,
            self::TAX_TYPE_CONSUMPTION,
            self::TAX_TYPE_MUTUALLY_DEFINED,
            self::TAX_TYPE_DOMESTIC_VAT,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['tax_type'] === null) {
            throw new AssertionException("'tax_type' can't be null");
        }

        $allowedValues = $this->getTaxTypeAllowableValues();

        if (null !== $this->container['tax_type'] && !\in_array($this->container['tax_type'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'tax_type', must be one of '%s'",
                    $this->container['tax_type'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['tax_amount'] === null) {
            throw new AssertionException("'tax_amount' can't be null");
        }

        $this->container['tax_amount']->validate();

        if ($this->container['taxable_amount'] !== null) {
            $this->container['taxable_amount']->validate();
        }
    }

    /**
     * Gets tax_type.
     */
    public function getTaxType() : string
    {
        return $this->container['tax_type'];
    }

    /**
     * Sets tax_type.
     *
     * @param string $tax_type type of the tax applied
     */
    public function setTaxType(string $tax_type) : self
    {
        $this->container['tax_type'] = $tax_type;

        return $this;
    }

    /**
     * Gets tax_rate.
     */
    public function getTaxRate() : ?string
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate.
     *
     * @param null|string $tax_rate A decimal number with no loss of precision. Useful when precision loss is unacceptable, as with currencies. Follows RFC7159 for number representation. <br>**Pattern** : `^-?(0|([1-9]\\d*))(\\.\\d+)?([eE][+-]?\\d+)?$`.
     */
    public function setTaxRate(?string $tax_rate) : self
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets tax_amount.
     */
    public function getTaxAmount() : Money
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorInvoices\Money $tax_amount tax_amount
     */
    public function setTaxAmount(Money $tax_amount) : self
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets taxable_amount.
     */
    public function getTaxableAmount() : ?Money
    {
        return $this->container['taxable_amount'];
    }

    /**
     * Sets taxable_amount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorInvoices\Money $taxable_amount taxable_amount
     */
    public function setTaxableAmount(?Money $taxable_amount) : self
    {
        $this->container['taxable_amount'] = $taxable_amount;

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
