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
class ContentMetadata implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ContentMetadata';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'name' => 'string',
        'marketplace_id' => 'string',
        'status' => '\AmazonPHP\SellingPartner\Model\APlus\ContentStatus',
        'badge_set' => '\AmazonPHP\SellingPartner\Model\APlus\ContentBadge[]',
        'update_time' => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'name' => null,
        'marketplace_id' => null,
        'status' => null,
        'badge_set' => null,
        'update_time' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'name' => 'name',
        'marketplace_id' => 'marketplaceId',
        'status' => 'status',
        'badge_set' => 'badgeSet',
        'update_time' => 'updateTime',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'name' => 'setName',
        'marketplace_id' => 'setMarketplaceId',
        'status' => 'setStatus',
        'badge_set' => 'setBadgeSet',
        'update_time' => 'setUpdateTime',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'name' => 'getName',
        'marketplace_id' => 'getMarketplaceId',
        'status' => 'getStatus',
        'badge_set' => 'getBadgeSet',
        'update_time' => 'getUpdateTime',
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['badge_set'] = $data['badge_set'] ?? null;
        $this->container['update_time'] = $data['update_time'] ?? null;
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
        if ($this->container['name'] === null) {
            throw new AssertionException("'name' can't be null");
        }

        if ((\mb_strlen($this->container['name']) > 100)) {
            throw new AssertionException("invalid value for 'name', the character length must be smaller than or equal to 100.");
        }

        if ((\mb_strlen($this->container['name']) < 1)) {
            throw new AssertionException("invalid value for 'name', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['marketplace_id'] === null) {
            throw new AssertionException("'marketplace_id' can't be null");
        }

        if ((\mb_strlen($this->container['marketplace_id']) < 1)) {
            throw new AssertionException("invalid value for 'marketplace_id', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['status'] === null) {
            throw new AssertionException("'status' can't be null");
        }

        if ($this->container['badge_set'] === null) {
            throw new AssertionException("'badge_set' can't be null");
        }

        if ($this->container['update_time'] === null) {
            throw new AssertionException("'update_time' can't be null");
        }
    }

    /**
     * Gets name.
     */
    public function getName() : string
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string $name the A+ Content document name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets marketplace_id.
     */
    public function getMarketplaceId() : string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id the identifier for the marketplace where the A+ Content is published
     *
     * @return self
     */
    public function setMarketplaceId(string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets status.
     */
    public function getStatus() : ContentStatus
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\ContentStatus $status status
     *
     * @return self
     */
    public function setStatus(ContentStatus $status) : self
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets badge_set.
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\ContentBadge[]
     */
    public function getBadgeSet() : array
    {
        return $this->container['badge_set'];
    }

    /**
     * Sets badge_set.
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\ContentBadge[] $badge_set the set of content badges
     *
     * @return self
     */
    public function setBadgeSet(array $badge_set) : self
    {
        $this->container['badge_set'] = $badge_set;

        return $this;
    }

    /**
     * Gets update_time.
     */
    public function getUpdateTime() : \DateTime
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time.
     *
     * @param \DateTime $update_time the approximate age of the A+ Content document and metadata
     *
     * @return self
     */
    public function setUpdateTime(\DateTime $update_time) : self
    {
        $this->container['update_time'] = $update_time;

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
