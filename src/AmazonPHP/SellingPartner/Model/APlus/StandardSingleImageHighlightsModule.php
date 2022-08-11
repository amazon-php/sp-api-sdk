<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\APlus;

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
class StandardSingleImageHighlightsModule implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'StandardSingleImageHighlightsModule';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'image' => '\AmazonPHP\SellingPartner\Model\APlus\ImageComponent',
        'headline' => '\AmazonPHP\SellingPartner\Model\APlus\TextComponent',
        'text_block1' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock',
        'text_block2' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock',
        'text_block3' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock',
        'bulleted_list_block' => '\AmazonPHP\SellingPartner\Model\APlus\StandardHeaderTextListBlock',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'image' => null,
        'headline' => null,
        'text_block1' => null,
        'text_block2' => null,
        'text_block3' => null,
        'bulleted_list_block' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'image' => 'image',
        'headline' => 'headline',
        'text_block1' => 'textBlock1',
        'text_block2' => 'textBlock2',
        'text_block3' => 'textBlock3',
        'bulleted_list_block' => 'bulletedListBlock',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'image' => 'setImage',
        'headline' => 'setHeadline',
        'text_block1' => 'setTextBlock1',
        'text_block2' => 'setTextBlock2',
        'text_block3' => 'setTextBlock3',
        'bulleted_list_block' => 'setBulletedListBlock',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'image' => 'getImage',
        'headline' => 'getHeadline',
        'text_block1' => 'getTextBlock1',
        'text_block2' => 'getTextBlock2',
        'text_block3' => 'getTextBlock3',
        'bulleted_list_block' => 'getBulletedListBlock',
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
        $this->container['image'] = $data['image'] ?? null;
        $this->container['headline'] = $data['headline'] ?? null;
        $this->container['text_block1'] = $data['text_block1'] ?? null;
        $this->container['text_block2'] = $data['text_block2'] ?? null;
        $this->container['text_block3'] = $data['text_block3'] ?? null;
        $this->container['bulleted_list_block'] = $data['bulleted_list_block'] ?? null;
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
        if ($this->container['image'] !== null) {
            $this->container['image']->validate();
        }

        if ($this->container['headline'] !== null) {
            $this->container['headline']->validate();
        }

        if ($this->container['text_block1'] !== null) {
            $this->container['text_block1']->validate();
        }

        if ($this->container['text_block2'] !== null) {
            $this->container['text_block2']->validate();
        }

        if ($this->container['text_block3'] !== null) {
            $this->container['text_block3']->validate();
        }

        if ($this->container['bulleted_list_block'] !== null) {
            $this->container['bulleted_list_block']->validate();
        }
    }

    /**
     * Gets image.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\APlus\ImageComponent
     */
    public function getImage() : ?ImageComponent
    {
        return $this->container['image'];
    }

    /**
     * Sets image.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\ImageComponent $image image
     *
     * @return self
     */
    public function setImage(?ImageComponent $image) : self
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets headline.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\APlus\TextComponent
     */
    public function getHeadline() : ?TextComponent
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\TextComponent $headline headline
     *
     * @return self
     */
    public function setHeadline(?TextComponent $headline) : self
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets text_block1.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock
     */
    public function getTextBlock1() : ?StandardTextBlock
    {
        return $this->container['text_block1'];
    }

    /**
     * Sets text_block1.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock $text_block1 text_block1
     *
     * @return self
     */
    public function setTextBlock1(?StandardTextBlock $text_block1) : self
    {
        $this->container['text_block1'] = $text_block1;

        return $this;
    }

    /**
     * Gets text_block2.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock
     */
    public function getTextBlock2() : ?StandardTextBlock
    {
        return $this->container['text_block2'];
    }

    /**
     * Sets text_block2.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock $text_block2 text_block2
     *
     * @return self
     */
    public function setTextBlock2(?StandardTextBlock $text_block2) : self
    {
        $this->container['text_block2'] = $text_block2;

        return $this;
    }

    /**
     * Gets text_block3.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock
     */
    public function getTextBlock3() : ?StandardTextBlock
    {
        return $this->container['text_block3'];
    }

    /**
     * Sets text_block3.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock $text_block3 text_block3
     *
     * @return self
     */
    public function setTextBlock3(?StandardTextBlock $text_block3) : self
    {
        $this->container['text_block3'] = $text_block3;

        return $this;
    }

    /**
     * Gets bulleted_list_block.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\APlus\StandardHeaderTextListBlock
     */
    public function getBulletedListBlock() : ?StandardHeaderTextListBlock
    {
        return $this->container['bulleted_list_block'];
    }

    /**
     * Sets bulleted_list_block.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardHeaderTextListBlock $bulleted_list_block bulleted_list_block
     *
     * @return self
     */
    public function setBulletedListBlock(?StandardHeaderTextListBlock $bulleted_list_block) : self
    {
        $this->container['bulleted_list_block'] = $bulleted_list_block;

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
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
