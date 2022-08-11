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
class Decorator implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Decorator';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'type' => '\AmazonPHP\SellingPartner\Model\APlus\DecoratorType',
        'offset' => 'int',
        'length' => 'int',
        'depth' => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'type' => null,
        'offset' => null,
        'length' => null,
        'depth' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'type' => 'type',
        'offset' => 'offset',
        'length' => 'length',
        'depth' => 'depth',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'type' => 'setType',
        'offset' => 'setOffset',
        'length' => 'setLength',
        'depth' => 'setDepth',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'type' => 'getType',
        'offset' => 'getOffset',
        'length' => 'getLength',
        'depth' => 'getDepth',
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['offset'] = $data['offset'] ?? null;
        $this->container['length'] = $data['length'] ?? null;
        $this->container['depth'] = $data['depth'] ?? null;
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
        if (null !== $this->container['offset'] && ($this->container['offset'] > 10000)) {
            throw new AssertionException("invalid value for 'offset', must be smaller than or equal to 10000.");
        }

        if (null !== $this->container['offset'] && ($this->container['offset'] < 0)) {
            throw new AssertionException("invalid value for 'offset', must be bigger than or equal to 0.");
        }

        if (null !== $this->container['length'] && ($this->container['length'] > 10000)) {
            throw new AssertionException("invalid value for 'length', must be smaller than or equal to 10000.");
        }

        if (null !== $this->container['length'] && ($this->container['length'] < 0)) {
            throw new AssertionException("invalid value for 'length', must be bigger than or equal to 0.");
        }

        if (null !== $this->container['depth'] && ($this->container['depth'] > 100)) {
            throw new AssertionException("invalid value for 'depth', must be smaller than or equal to 100.");
        }

        if (null !== $this->container['depth'] && ($this->container['depth'] < 0)) {
            throw new AssertionException("invalid value for 'depth', must be bigger than or equal to 0.");
        }
    }

    /**
     * Gets type.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\APlus\DecoratorType
     */
    public function getType() : ?DecoratorType
    {
        return $this->container['type'];
    }

    /**
     * Sets type.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\DecoratorType $type type
     *
     * @return self
     */
    public function setType(?DecoratorType $type) : self
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets offset.
     *
     * @return null|int
     */
    public function getOffset() : ?int
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset.
     *
     * @param null|int $offset The starting character of this decorator within the content string. Use zero for the first character.
     *
     * @return self
     */
    public function setOffset(?int $offset) : self
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets length.
     *
     * @return null|int
     */
    public function getLength() : ?int
    {
        return $this->container['length'];
    }

    /**
     * Sets length.
     *
     * @param null|int $length The number of content characters to alter with this decorator. Decorators such as line breaks can have zero length and fit between characters.
     *
     * @return self
     */
    public function setLength(?int $length) : self
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets depth.
     *
     * @return null|int
     */
    public function getDepth() : ?int
    {
        return $this->container['depth'];
    }

    /**
     * Sets depth.
     *
     * @param null|int $depth The relative intensity or variation of this decorator. Decorators such as bullet-points, for example, can have multiple indentation depths.
     *
     * @return self
     */
    public function setDepth(?int $depth) : self
    {
        $this->container['depth'] = $depth;

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
