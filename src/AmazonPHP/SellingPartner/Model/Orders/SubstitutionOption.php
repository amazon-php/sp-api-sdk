<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Orders;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Orders.
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools. The Orders API supports orders that are two years old or less. Orders more than two years old will not show in the API response.  _Note:_ The Orders API supports orders from 2016 and after for the JP, AU, and SG marketplaces.
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
class SubstitutionOption implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'SubstitutionOption';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'asin' => 'string',
        'quantity_ordered' => 'int',
        'seller_sku' => 'string',
        'title' => 'string',
        'measurement' => '\AmazonPHP\SellingPartner\Model\Orders\Measurement',
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
        'asin' => null,
        'quantity_ordered' => null,
        'seller_sku' => null,
        'title' => null,
        'measurement' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'asin' => 'ASIN',
        'quantity_ordered' => 'QuantityOrdered',
        'seller_sku' => 'SellerSKU',
        'title' => 'Title',
        'measurement' => 'Measurement',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'asin' => 'setAsin',
        'quantity_ordered' => 'setQuantityOrdered',
        'seller_sku' => 'setSellerSku',
        'title' => 'setTitle',
        'measurement' => 'setMeasurement',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'asin' => 'getAsin',
        'quantity_ordered' => 'getQuantityOrdered',
        'seller_sku' => 'getSellerSku',
        'title' => 'getTitle',
        'measurement' => 'getMeasurement',
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
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['quantity_ordered'] = $data['quantity_ordered'] ?? null;
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['measurement'] = $data['measurement'] ?? null;
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
        if ($this->container['measurement'] !== null) {
            $this->container['measurement']->validate();
        }
    }

    /**
     * Gets asin.
     */
    public function getAsin() : ?string
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param null|string $asin the Amazon Standard Identification Number (ASIN) of the item
     */
    public function setAsin(?string $asin) : self
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets quantity_ordered.
     */
    public function getQuantityOrdered() : ?int
    {
        return $this->container['quantity_ordered'];
    }

    /**
     * Sets quantity_ordered.
     *
     * @param null|int $quantity_ordered the number of items to be picked for this substitution option
     */
    public function setQuantityOrdered(?int $quantity_ordered) : self
    {
        $this->container['quantity_ordered'] = $quantity_ordered;

        return $this;
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
     * @param null|string $seller_sku the seller stock keeping unit (SKU) of the item
     */
    public function setSellerSku(?string $seller_sku) : self
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets title.
     */
    public function getTitle() : ?string
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param null|string $title the title of the item
     */
    public function setTitle(?string $title) : self
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets measurement.
     */
    public function getMeasurement() : ?Measurement
    {
        return $this->container['measurement'];
    }

    /**
     * Sets measurement.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\Measurement $measurement measurement
     */
    public function setMeasurement(?Measurement $measurement) : self
    {
        $this->container['measurement'] = $measurement;

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
