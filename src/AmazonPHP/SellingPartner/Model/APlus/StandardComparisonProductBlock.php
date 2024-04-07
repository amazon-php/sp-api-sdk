<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\APlus;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner API for A+ Content Management
*
* With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
*
* The version of the OpenAPI document: 2020-11-01
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class StandardComparisonProductBlock implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'StandardComparisonProductBlock';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'position' => 'int',
        'image' => '\AmazonPHP\SellingPartner\Model\APlus\ImageComponent',
        'title' => 'string',
        'asin' => 'string',
        'highlight' => 'bool',
        'metrics' => '\AmazonPHP\SellingPartner\Model\APlus\PlainTextItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'position' => null,
        'image' => null,
        'title' => null,
        'asin' => null,
        'highlight' => null,
        'metrics' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'position' => 'position',
        'image' => 'image',
        'title' => 'title',
        'asin' => 'asin',
        'highlight' => 'highlight',
        'metrics' => 'metrics'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'position' => 'setPosition',
        'image' => 'setImage',
        'title' => 'setTitle',
        'asin' => 'setAsin',
        'highlight' => 'setHighlight',
        'metrics' => 'setMetrics'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'position' => 'getPosition',
        'image' => 'getImage',
        'title' => 'getTitle',
        'asin' => 'getAsin',
        'highlight' => 'getHighlight',
        'metrics' => 'getMetrics'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters() : array
    {
        return self::$getters;
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
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['position'] = $data['position'] ?? null;
        $this->container['image'] = $data['image'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['highlight'] = $data['highlight'] ?? null;
        $this->container['metrics'] = $data['metrics'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['position'] === null) {
            throw new AssertionException("'position' can't be null");
        }

        if (($this->container['position'] > 6)) {
            throw new AssertionException("invalid value for 'position', must be smaller than or equal to 6.");
        }

        if (($this->container['position'] < 1)) {
            throw new AssertionException("invalid value for 'position', must be bigger than or equal to 1.");
        }

            if ($this->container['image'] !== null) {
            $this->container['image']->validate();
            }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 80)) {
            throw new AssertionException("invalid value for 'title', the character length must be smaller than or equal to 80.");
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
            throw new AssertionException("invalid value for 'title', the character length must be bigger than or equal to 1.");
        }

        if (!is_null($this->container['asin']) && (mb_strlen($this->container['asin']) < 10)) {
            throw new AssertionException("invalid value for 'asin', the character length must be bigger than or equal to 10.");
        }

        if (!is_null($this->container['metrics']) && (count($this->container['metrics']) > 10)) {
            throw new AssertionException("invalid value for 'metrics', number of items must be less than or equal to 10.");
        }

        if (!is_null($this->container['metrics']) && (count($this->container['metrics']) < 0)) {
            throw new AssertionException("invalid value for 'metrics', number of items must be greater than or equal to 0.");
        }

    }


    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position The rank or index of this comparison product block within the module. Different blocks cannot occupy the same position within a single module.
     *
     * @return self
     */
    public function setPosition($position) : self
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\ImageComponent|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\ImageComponent|null $image image
     *
     * @return self
     */
    public function setImage($image) : self
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The comparison product title.
     *
     * @return self
     */
    public function setTitle($title) : self
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets asin
     *
     * @return string|null
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string|null $asin The Amazon Standard Identification Number (ASIN).
     *
     * @return self
     */
    public function setAsin($asin) : self
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets highlight
     *
     * @return bool|null
     */
    public function getHighlight()
    {
        return $this->container['highlight'];
    }

    /**
     * Sets highlight
     *
     * @param bool|null $highlight Determines whether this block of content is visually highlighted.
     *
     * @return self
     */
    public function setHighlight($highlight) : self
    {
        $this->container['highlight'] = $highlight;

        return $this;
    }

    /**
     * Gets metrics
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\PlainTextItem[]|null
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\PlainTextItem[]|null $metrics Comparison metrics for the product.
     *
     * @return self
     */
    public function setMetrics($metrics) : self
    {
        $this->container['metrics'] = $metrics;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @return boolean
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @return void
     */
    public function offsetSet($offset, $value) : void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @return void
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize() : string
    {
       return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString() : string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

