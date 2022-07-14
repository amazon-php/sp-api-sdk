<?php declare(strict_types=1);
/**
 * PriceType.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Pricing.
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\ProductPricing;

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
class PriceType implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'PriceType';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'landed_price' => '\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType',
        'listing_price' => '\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType',
        'shipping' => '\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType',
        'points' => '\AmazonPHP\SellingPartner\Model\ProductPricing\Points',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'landed_price' => null,
        'listing_price' => null,
        'shipping' => null,
        'points' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'landed_price' => 'LandedPrice',
        'listing_price' => 'ListingPrice',
        'shipping' => 'Shipping',
        'points' => 'Points',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'landed_price' => 'setLandedPrice',
        'listing_price' => 'setListingPrice',
        'shipping' => 'setShipping',
        'points' => 'setPoints',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'landed_price' => 'getLandedPrice',
        'listing_price' => 'getListingPrice',
        'shipping' => 'getShipping',
        'points' => 'getPoints',
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
        $this->container['landed_price'] = $data['landed_price'] ?? null;
        $this->container['listing_price'] = $data['listing_price'] ?? null;
        $this->container['shipping'] = $data['shipping'] ?? null;
        $this->container['points'] = $data['points'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
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
        return \json_encode(
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
        if ($this->container['landed_price'] !== null) {
            $this->container['landed_price']->validate();
        }

        if ($this->container['listing_price'] === null) {
            throw new AssertionException("'listing_price' can't be null");
        }

        $this->container['listing_price']->validate();

        if ($this->container['shipping'] !== null) {
            $this->container['shipping']->validate();
        }

        if ($this->container['points'] !== null) {
            $this->container['points']->validate();
        }
    }

    /**
     * Gets landed_price.
     */
    public function getLandedPrice() : ?MoneyType
    {
        return $this->container['landed_price'];
    }

    /**
     * Sets landed_price.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType $landed_price landed_price
     */
    public function setLandedPrice(?MoneyType $landed_price) : self
    {
        $this->container['landed_price'] = $landed_price;

        return $this;
    }

    /**
     * Gets listing_price.
     */
    public function getListingPrice() : MoneyType
    {
        return $this->container['listing_price'];
    }

    /**
     * Sets listing_price.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType $listing_price listing_price
     */
    public function setListingPrice(MoneyType $listing_price) : self
    {
        $this->container['listing_price'] = $listing_price;

        return $this;
    }

    /**
     * Gets shipping.
     */
    public function getShipping() : ?MoneyType
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType $shipping shipping
     */
    public function setShipping(?MoneyType $shipping) : self
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets points.
     */
    public function getPoints() : ?Points
    {
        return $this->container['points'];
    }

    /**
     * Sets points.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\Points $points points
     */
    public function setPoints(?Points $points) : self
    {
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
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
     *
     * @param int $offset Offset
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
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
