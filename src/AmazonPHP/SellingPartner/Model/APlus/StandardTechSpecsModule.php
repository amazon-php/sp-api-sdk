<?php
/**
 * StandardTechSpecsModule
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AmazonPHP\SellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\APlus;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class StandardTechSpecsModule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'StandardTechSpecsModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'headline' => '\AmazonPHP\SellingPartner\Model\APlus\TextComponent',
        'specification_list' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextPairBlock[]',
        'table_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'headline' => null,
        'specification_list' => null,
        'table_count' => null
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
        'headline' => 'headline',
        'specification_list' => 'specificationList',
        'table_count' => 'tableCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'headline' => 'setHeadline',
        'specification_list' => 'setSpecificationList',
        'table_count' => 'setTableCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'headline' => 'getHeadline',
        'specification_list' => 'getSpecificationList',
        'table_count' => 'getTableCount'
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
        $this->container['headline'] = $data['headline'] ?? null;
        $this->container['specification_list'] = $data['specification_list'] ?? null;
        $this->container['table_count'] = $data['table_count'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
            if ($this->container['headline'] !== null) {
            $this->container['headline']->validate();
            }

        if ($this->container['specification_list'] === null) {
            throw new AssertionException("'specification_list' can't be null");
        }

        if ((count($this->container['specification_list']) > 16)) {
            throw new AssertionException("invalid value for 'specification_list', number of items must be less than or equal to 16.");
        }

        if ((count($this->container['specification_list']) < 4)) {
            throw new AssertionException("invalid value for 'specification_list', number of items must be greater than or equal to 4.");
        }

        if (!is_null($this->container['table_count']) && ($this->container['table_count'] > 2)) {
            throw new AssertionException("invalid value for 'table_count', must be smaller than or equal to 2.");
        }

        if (!is_null($this->container['table_count']) && ($this->container['table_count'] < 1)) {
            throw new AssertionException("invalid value for 'table_count', must be bigger than or equal to 1.");
        }

    }


    /**
     * Gets headline
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\TextComponent|null
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\TextComponent|null $headline headline
     *
     * @return self
     */
    public function setHeadline($headline) : self
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets specification_list
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardTextPairBlock[]
     */
    public function getSpecificationList()
    {
        return $this->container['specification_list'];
    }

    /**
     * Sets specification_list
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardTextPairBlock[] $specification_list The specification list.
     *
     * @return self
     */
    public function setSpecificationList($specification_list) : self
    {
        $this->container['specification_list'] = $specification_list;

        return $this;
    }

    /**
     * Gets table_count
     *
     * @return int|null
     */
    public function getTableCount()
    {
        return $this->container['table_count'];
    }

    /**
     * Sets table_count
     *
     * @param int|null $table_count The number of tables to present. Features are evenly divided between the tables.
     *
     * @return self
     */
    public function setTableCount($table_count) : self
    {
        $this->container['table_count'] = $table_count;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
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
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * @param integer $offset Offset
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
