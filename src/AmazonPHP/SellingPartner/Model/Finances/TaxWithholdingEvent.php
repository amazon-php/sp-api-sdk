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
class TaxWithholdingEvent implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'TaxWithholdingEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'posted_date' => '\DateTimeInterface',
        'base_amount' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'withheld_amount' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'tax_withholding_period' => '\AmazonPHP\SellingPartner\Model\Finances\TaxWithholdingPeriod',
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
        'posted_date' => 'date-time',
        'base_amount' => null,
        'withheld_amount' => null,
        'tax_withholding_period' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'posted_date' => 'PostedDate',
        'base_amount' => 'BaseAmount',
        'withheld_amount' => 'WithheldAmount',
        'tax_withholding_period' => 'TaxWithholdingPeriod',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'posted_date' => 'setPostedDate',
        'base_amount' => 'setBaseAmount',
        'withheld_amount' => 'setWithheldAmount',
        'tax_withholding_period' => 'setTaxWithholdingPeriod',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'posted_date' => 'getPostedDate',
        'base_amount' => 'getBaseAmount',
        'withheld_amount' => 'getWithheldAmount',
        'tax_withholding_period' => 'getTaxWithholdingPeriod',
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
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['base_amount'] = $data['base_amount'] ?? null;
        $this->container['withheld_amount'] = $data['withheld_amount'] ?? null;
        $this->container['tax_withholding_period'] = $data['tax_withholding_period'] ?? null;
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
        if ($this->container['base_amount'] !== null) {
            $this->container['base_amount']->validate();
        }

        if ($this->container['withheld_amount'] !== null) {
            $this->container['withheld_amount']->validate();
        }

        if ($this->container['tax_withholding_period'] !== null) {
            $this->container['tax_withholding_period']->validate();
        }
    }

    /**
     * Gets posted_date.
     */
    public function getPostedDate() : ?\DateTimeInterface
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date.
     *
     * @param null|\DateTimeInterface $posted_date posted_date
     */
    public function setPostedDate(?\DateTimeInterface $posted_date) : self
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets base_amount.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\Currency
     */
    public function getBaseAmount() : ?Currency
    {
        return $this->container['base_amount'];
    }

    /**
     * Sets base_amount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $base_amount base_amount
     */
    public function setBaseAmount(?Currency $base_amount) : self
    {
        $this->container['base_amount'] = $base_amount;

        return $this;
    }

    /**
     * Gets withheld_amount.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\Currency
     */
    public function getWithheldAmount() : ?Currency
    {
        return $this->container['withheld_amount'];
    }

    /**
     * Sets withheld_amount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $withheld_amount withheld_amount
     */
    public function setWithheldAmount(?Currency $withheld_amount) : self
    {
        $this->container['withheld_amount'] = $withheld_amount;

        return $this;
    }

    /**
     * Gets tax_withholding_period.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\TaxWithholdingPeriod
     */
    public function getTaxWithholdingPeriod() : ?TaxWithholdingPeriod
    {
        return $this->container['tax_withholding_period'];
    }

    /**
     * Sets tax_withholding_period.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\TaxWithholdingPeriod $tax_withholding_period tax_withholding_period
     */
    public function setTaxWithholdingPeriod(?TaxWithholdingPeriod $tax_withholding_period) : self
    {
        $this->container['tax_withholding_period'] = $tax_withholding_period;

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
