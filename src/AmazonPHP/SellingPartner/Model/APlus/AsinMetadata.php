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
class AsinMetadata implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'AsinMetadata';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'asin' => 'string',
        'badge_set' => '\AmazonPHP\SellingPartner\Model\APlus\AsinBadge[]',
        'parent' => 'string',
        'title' => 'string',
        'image_url' => 'string',
        'content_reference_key_set' => 'string[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'asin' => null,
        'badge_set' => null,
        'parent' => null,
        'title' => null,
        'image_url' => null,
        'content_reference_key_set' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'asin' => 'asin',
        'badge_set' => 'badgeSet',
        'parent' => 'parent',
        'title' => 'title',
        'image_url' => 'imageUrl',
        'content_reference_key_set' => 'contentReferenceKeySet',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'asin' => 'setAsin',
        'badge_set' => 'setBadgeSet',
        'parent' => 'setParent',
        'title' => 'setTitle',
        'image_url' => 'setImageUrl',
        'content_reference_key_set' => 'setContentReferenceKeySet',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'asin' => 'getAsin',
        'badge_set' => 'getBadgeSet',
        'parent' => 'getParent',
        'title' => 'getTitle',
        'image_url' => 'getImageUrl',
        'content_reference_key_set' => 'getContentReferenceKeySet',
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
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['badge_set'] = $data['badge_set'] ?? null;
        $this->container['parent'] = $data['parent'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['image_url'] = $data['image_url'] ?? null;
        $this->container['content_reference_key_set'] = $data['content_reference_key_set'] ?? null;
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
        if ($this->container['asin'] === null) {
            throw new AssertionException("'asin' can't be null");
        }

        if ((\mb_strlen($this->container['asin']) < 10)) {
            throw new AssertionException("invalid value for 'asin', the character length must be bigger than or equal to 10.");
        }

        if (null !== $this->container['parent'] && (\mb_strlen($this->container['parent']) < 10)) {
            throw new AssertionException("invalid value for 'parent', the character length must be bigger than or equal to 10.");
        }

        if (null !== $this->container['title'] && (\mb_strlen($this->container['title']) < 1)) {
            throw new AssertionException("invalid value for 'title', the character length must be bigger than or equal to 1.");
        }

        if (null !== $this->container['image_url'] && (\mb_strlen($this->container['image_url']) < 1)) {
            throw new AssertionException("invalid value for 'image_url', the character length must be bigger than or equal to 1.");
        }
    }

    /**
     * Gets asin.
     */
    public function getAsin() : string
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param string $asin the Amazon Standard Identification Number (ASIN)
     *
     * @return self
     */
    public function setAsin(string $asin) : self
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets badge_set.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\APlus\AsinBadge[]
     */
    public function getBadgeSet() : ?array
    {
        return $this->container['badge_set'];
    }

    /**
     * Sets badge_set.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\AsinBadge[] $badge_set the set of ASIN badges
     *
     * @return self
     */
    public function setBadgeSet(?array $badge_set) : self
    {
        $this->container['badge_set'] = $badge_set;

        return $this;
    }

    /**
     * Gets parent.
     *
     * @return null|string
     */
    public function getParent() : ?string
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent.
     *
     * @param null|string $parent the Amazon Standard Identification Number (ASIN)
     *
     * @return self
     */
    public function setParent(?string $parent) : self
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets title.
     *
     * @return null|string
     */
    public function getTitle() : ?string
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param null|string $title the title for the ASIN in the Amazon catalog
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets image_url.
     *
     * @return null|string
     */
    public function getImageUrl() : ?string
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url.
     *
     * @param null|string $image_url the default image for the ASIN in the Amazon catalog
     *
     * @return self
     */
    public function setImageUrl(?string $image_url) : self
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets content_reference_key_set.
     *
     * @return null|string[]
     */
    public function getContentReferenceKeySet() : ?array
    {
        return $this->container['content_reference_key_set'];
    }

    /**
     * Sets content_reference_key_set.
     *
     * @param null|string[] $content_reference_key_set a set of content reference keys
     *
     * @return self
     */
    public function setContentReferenceKeySet(?array $content_reference_key_set) : self
    {
        $this->container['content_reference_key_set'] = $content_reference_key_set;

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
