<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Orders;

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
class BuyerTaxInfo implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'BuyerTaxInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'company_legal_name' => 'string',
        'taxing_region' => 'string',
        'tax_classifications' => '\AmazonPHP\SellingPartner\Model\Orders\TaxClassification[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'company_legal_name' => null,
        'taxing_region' => null,
        'tax_classifications' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'company_legal_name' => 'CompanyLegalName',
        'taxing_region' => 'TaxingRegion',
        'tax_classifications' => 'TaxClassifications',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'company_legal_name' => 'setCompanyLegalName',
        'taxing_region' => 'setTaxingRegion',
        'tax_classifications' => 'setTaxClassifications',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'company_legal_name' => 'getCompanyLegalName',
        'taxing_region' => 'getTaxingRegion',
        'tax_classifications' => 'getTaxClassifications',
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
        $this->container['company_legal_name'] = $data['company_legal_name'] ?? null;
        $this->container['taxing_region'] = $data['taxing_region'] ?? null;
        $this->container['tax_classifications'] = $data['tax_classifications'] ?? null;
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
     * Gets company_legal_name.
     *
     * @return null|string
     */
    public function getCompanyLegalName() : ?string
    {
        return $this->container['company_legal_name'];
    }

    /**
     * Sets company_legal_name.
     *
     * @param null|string $company_legal_name the legal name of the company
     *
     * @return self
     */
    public function setCompanyLegalName(?string $company_legal_name) : self
    {
        $this->container['company_legal_name'] = $company_legal_name;

        return $this;
    }

    /**
     * Gets taxing_region.
     *
     * @return null|string
     */
    public function getTaxingRegion() : ?string
    {
        return $this->container['taxing_region'];
    }

    /**
     * Sets taxing_region.
     *
     * @param null|string $taxing_region the country or region imposing the tax
     *
     * @return self
     */
    public function setTaxingRegion(?string $taxing_region) : self
    {
        $this->container['taxing_region'] = $taxing_region;

        return $this;
    }

    /**
     * Gets tax_classifications.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Orders\TaxClassification[]
     */
    public function getTaxClassifications() : ?array
    {
        return $this->container['tax_classifications'];
    }

    /**
     * Sets tax_classifications.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\TaxClassification[] $tax_classifications a list of tax classifications that apply to the order
     *
     * @return self
     */
    public function setTaxClassifications(?array $tax_classifications) : self
    {
        $this->container['tax_classifications'] = $tax_classifications;

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
