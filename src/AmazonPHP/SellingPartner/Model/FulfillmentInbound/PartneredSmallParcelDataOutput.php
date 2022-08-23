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
class PartneredSmallParcelDataOutput implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'PartneredSmallParcelDataOutput';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'package_list' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PartneredSmallParcelPackageOutput[]',
        'partnered_estimate' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PartneredEstimate',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'package_list' => null,
        'partnered_estimate' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'package_list' => 'PackageList',
        'partnered_estimate' => 'PartneredEstimate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'package_list' => 'setPackageList',
        'partnered_estimate' => 'setPartneredEstimate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'package_list' => 'getPackageList',
        'partnered_estimate' => 'getPartneredEstimate',
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
        $this->container['package_list'] = $data['package_list'] ?? null;
        $this->container['partnered_estimate'] = $data['partnered_estimate'] ?? null;
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
        if ($this->container['package_list'] === null) {
            throw new AssertionException("'package_list' can't be null");
        }

        if ($this->container['partnered_estimate'] !== null) {
            $this->container['partnered_estimate']->validate();
        }
    }

    /**
     * Gets package_list.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\PartneredSmallParcelPackageOutput[]
     */
    public function getPackageList() : array
    {
        return $this->container['package_list'];
    }

    /**
     * Sets package_list.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\PartneredSmallParcelPackageOutput[] $package_list a list of packages, including shipping information from the Amazon-partnered carrier
     *
     * @return self
     */
    public function setPackageList(array $package_list) : self
    {
        $this->container['package_list'] = $package_list;

        return $this;
    }

    /**
     * Gets partnered_estimate.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PartneredEstimate
     */
    public function getPartneredEstimate() : ?PartneredEstimate
    {
        return $this->container['partnered_estimate'];
    }

    /**
     * Sets partnered_estimate.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PartneredEstimate $partnered_estimate partnered_estimate
     *
     * @return self
     */
    public function setPartneredEstimate(?PartneredEstimate $partnered_estimate) : self
    {
        $this->container['partnered_estimate'] = $partnered_estimate;

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
