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
class ChargeDetails implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const TYPE_FREIGHT = 'Freight';

    final public const TYPE_PACKING = 'Packing';

    final public const TYPE_DUTY = 'Duty';

    final public const TYPE_SERVICE = 'Service';

    final public const TYPE_SMALL_ORDER = 'SmallOrder';

    final public const TYPE_INSURANCE_PLACEMENT_COST = 'InsurancePlacementCost';

    final public const TYPE_INSURANCE_FEE = 'InsuranceFee';

    final public const TYPE_SPECIAL_HANDLING_SERVICE = 'SpecialHandlingService';

    final public const TYPE_COLLECTION_AND_RECYCLING_SERVICE = 'CollectionAndRecyclingService';

    final public const TYPE_ENVIRONMENTAL_PROTECTION_SERVICE = 'EnvironmentalProtectionService';

    final public const TYPE_TAX_COLLECTED_AT_SOURCE = 'TaxCollectedAtSource';

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'ChargeDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'type' => 'string',
        'description' => 'string',
        'charge_amount' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\Money',
        'tax_details' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\TaxDetails[]',
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
        'type' => null,
        'description' => null,
        'charge_amount' => null,
        'tax_details' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'type' => 'type',
        'description' => 'description',
        'charge_amount' => 'chargeAmount',
        'tax_details' => 'taxDetails',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'type' => 'setType',
        'description' => 'setDescription',
        'charge_amount' => 'setChargeAmount',
        'tax_details' => 'setTaxDetails',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'type' => 'getType',
        'description' => 'getDescription',
        'charge_amount' => 'getChargeAmount',
        'tax_details' => 'getTaxDetails',
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['charge_amount'] = $data['charge_amount'] ?? null;
        $this->container['tax_details'] = $data['tax_details'] ?? null;
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
    public function getTypeAllowableValues() : array
    {
        return [
            self::TYPE_FREIGHT,
            self::TYPE_PACKING,
            self::TYPE_DUTY,
            self::TYPE_SERVICE,
            self::TYPE_SMALL_ORDER,
            self::TYPE_INSURANCE_PLACEMENT_COST,
            self::TYPE_INSURANCE_FEE,
            self::TYPE_SPECIAL_HANDLING_SERVICE,
            self::TYPE_COLLECTION_AND_RECYCLING_SERVICE,
            self::TYPE_ENVIRONMENTAL_PROTECTION_SERVICE,
            self::TYPE_TAX_COLLECTED_AT_SOURCE,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['type'] === null) {
            throw new AssertionException("'type' can't be null");
        }

        $allowedValues = $this->getTypeAllowableValues();

        if (null !== $this->container['type'] && !\in_array($this->container['type'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'type', must be one of '%s'",
                    $this->container['type'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['charge_amount'] === null) {
            throw new AssertionException("'charge_amount' can't be null");
        }

        $this->container['charge_amount']->validate();
    }

    /**
     * Gets type.
     */
    public function getType() : string
    {
        return $this->container['type'];
    }

    /**
     * Sets type.
     *
     * @param string $type type of the charge applied
     */
    public function setType(string $type) : self
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets description.
     */
    public function getDescription() : ?string
    {
        return $this->container['description'];
    }

    /**
     * Sets description.
     *
     * @param null|string $description description of the charge
     */
    public function setDescription(?string $description) : self
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets charge_amount.
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorInvoices\Money
     */
    public function getChargeAmount() : Money
    {
        return $this->container['charge_amount'];
    }

    /**
     * Sets charge_amount.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorInvoices\Money $charge_amount charge_amount
     */
    public function setChargeAmount(Money $charge_amount) : self
    {
        $this->container['charge_amount'] = $charge_amount;

        return $this;
    }

    /**
     * Gets tax_details.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorInvoices\TaxDetails[]
     */
    public function getTaxDetails() : ?array
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorInvoices\TaxDetails[] $tax_details tax amount details applied on this charge
     */
    public function setTaxDetails(?array $tax_details) : self
    {
        $this->container['tax_details'] = $tax_details;

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
