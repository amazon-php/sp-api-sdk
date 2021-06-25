<?php declare(strict_types=1);
/**
 * StandardSingleImageSpecsDetailModule.
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
 * Selling Partner API for A+ Content Management.
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace AmazonPHP\SellingPartner\Model\APlus;

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
class StandardSingleImageSpecsDetailModule implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'StandardSingleImageSpecsDetailModule';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'headline' => '\AmazonPHP\SellingPartner\Model\APlus\TextComponent',
        'image' => '\AmazonPHP\SellingPartner\Model\APlus\ImageComponent',
        'description_headline' => '\AmazonPHP\SellingPartner\Model\APlus\TextComponent',
        'description_block1' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock',
        'description_block2' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock',
        'specification_headline' => '\AmazonPHP\SellingPartner\Model\APlus\TextComponent',
        'specification_list_block' => '\AmazonPHP\SellingPartner\Model\APlus\StandardHeaderTextListBlock',
        'specification_text_block' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'headline' => null,
        'image' => null,
        'description_headline' => null,
        'description_block1' => null,
        'description_block2' => null,
        'specification_headline' => null,
        'specification_list_block' => null,
        'specification_text_block' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'headline' => 'headline',
        'image' => 'image',
        'description_headline' => 'descriptionHeadline',
        'description_block1' => 'descriptionBlock1',
        'description_block2' => 'descriptionBlock2',
        'specification_headline' => 'specificationHeadline',
        'specification_list_block' => 'specificationListBlock',
        'specification_text_block' => 'specificationTextBlock',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'headline' => 'setHeadline',
        'image' => 'setImage',
        'description_headline' => 'setDescriptionHeadline',
        'description_block1' => 'setDescriptionBlock1',
        'description_block2' => 'setDescriptionBlock2',
        'specification_headline' => 'setSpecificationHeadline',
        'specification_list_block' => 'setSpecificationListBlock',
        'specification_text_block' => 'setSpecificationTextBlock',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'headline' => 'getHeadline',
        'image' => 'getImage',
        'description_headline' => 'getDescriptionHeadline',
        'description_block1' => 'getDescriptionBlock1',
        'description_block2' => 'getDescriptionBlock2',
        'specification_headline' => 'getSpecificationHeadline',
        'specification_list_block' => 'getSpecificationListBlock',
        'specification_text_block' => 'getSpecificationTextBlock',
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
        $this->container['headline'] = $data['headline'] ?? null;
        $this->container['image'] = $data['image'] ?? null;
        $this->container['description_headline'] = $data['description_headline'] ?? null;
        $this->container['description_block1'] = $data['description_block1'] ?? null;
        $this->container['description_block2'] = $data['description_block2'] ?? null;
        $this->container['specification_headline'] = $data['specification_headline'] ?? null;
        $this->container['specification_list_block'] = $data['specification_list_block'] ?? null;
        $this->container['specification_text_block'] = $data['specification_text_block'] ?? null;
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
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        return [];
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets headline.
     */
    public function getHeadline() : ?TextComponent
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\TextComponent $headline headline
     */
    public function setHeadline(?TextComponent $headline) : self
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets image.
     */
    public function getImage() : ?ImageComponent
    {
        return $this->container['image'];
    }

    /**
     * Sets image.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\ImageComponent $image image
     */
    public function setImage(?ImageComponent $image) : self
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets description_headline.
     */
    public function getDescriptionHeadline() : ?TextComponent
    {
        return $this->container['description_headline'];
    }

    /**
     * Sets description_headline.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\TextComponent $description_headline description_headline
     */
    public function setDescriptionHeadline(?TextComponent $description_headline) : self
    {
        $this->container['description_headline'] = $description_headline;

        return $this;
    }

    /**
     * Gets description_block1.
     */
    public function getDescriptionBlock1() : ?StandardTextBlock
    {
        return $this->container['description_block1'];
    }

    /**
     * Sets description_block1.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock $description_block1 description_block1
     */
    public function setDescriptionBlock1(?StandardTextBlock $description_block1) : self
    {
        $this->container['description_block1'] = $description_block1;

        return $this;
    }

    /**
     * Gets description_block2.
     */
    public function getDescriptionBlock2() : ?StandardTextBlock
    {
        return $this->container['description_block2'];
    }

    /**
     * Sets description_block2.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock $description_block2 description_block2
     */
    public function setDescriptionBlock2(?StandardTextBlock $description_block2) : self
    {
        $this->container['description_block2'] = $description_block2;

        return $this;
    }

    /**
     * Gets specification_headline.
     */
    public function getSpecificationHeadline() : ?TextComponent
    {
        return $this->container['specification_headline'];
    }

    /**
     * Sets specification_headline.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\TextComponent $specification_headline specification_headline
     */
    public function setSpecificationHeadline(?TextComponent $specification_headline) : self
    {
        $this->container['specification_headline'] = $specification_headline;

        return $this;
    }

    /**
     * Gets specification_list_block.
     */
    public function getSpecificationListBlock() : ?StandardHeaderTextListBlock
    {
        return $this->container['specification_list_block'];
    }

    /**
     * Sets specification_list_block.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardHeaderTextListBlock $specification_list_block specification_list_block
     */
    public function setSpecificationListBlock(?StandardHeaderTextListBlock $specification_list_block) : self
    {
        $this->container['specification_list_block'] = $specification_list_block;

        return $this;
    }

    /**
     * Gets specification_text_block.
     */
    public function getSpecificationTextBlock() : ?StandardTextBlock
    {
        return $this->container['specification_text_block'];
    }

    /**
     * Sets specification_text_block.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock $specification_text_block specification_text_block
     */
    public function setSpecificationTextBlock(?StandardTextBlock $specification_text_block) : self
    {
        $this->container['specification_text_block'] = $specification_text_block;

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
