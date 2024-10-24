<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateInboundPlanRequest implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'CreateInboundPlanRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'destination_marketplaces' => 'string[]',
        'items' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ItemInput[]',
        'name' => 'string',
        'source_address' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\AddressInput',
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
        'destination_marketplaces' => null,
        'items' => null,
        'name' => null,
        'source_address' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'destination_marketplaces' => 'destinationMarketplaces',
        'items' => 'items',
        'name' => 'name',
        'source_address' => 'sourceAddress',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'destination_marketplaces' => 'setDestinationMarketplaces',
        'items' => 'setItems',
        'name' => 'setName',
        'source_address' => 'setSourceAddress',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'destination_marketplaces' => 'getDestinationMarketplaces',
        'items' => 'getItems',
        'name' => 'getName',
        'source_address' => 'getSourceAddress',
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
        $this->container['destination_marketplaces'] = $data['destination_marketplaces'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['source_address'] = $data['source_address'] ?? null;
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
        if ($this->container['destination_marketplaces'] === null) {
            throw new AssertionException("'destination_marketplaces' can't be null");
        }

        if ((\count($this->container['destination_marketplaces']) > 1)) {
            throw new AssertionException("invalid value for 'destination_marketplaces', number of items must be less than or equal to 1.");
        }

        if ((\count($this->container['destination_marketplaces']) < 1)) {
            throw new AssertionException("invalid value for 'destination_marketplaces', number of items must be greater than or equal to 1.");
        }

        if ($this->container['items'] === null) {
            throw new AssertionException("'items' can't be null");
        }

        if ((\count($this->container['items']) > 2000)) {
            throw new AssertionException("invalid value for 'items', number of items must be less than or equal to 2000.");
        }

        if ((\count($this->container['items']) < 1)) {
            throw new AssertionException("invalid value for 'items', number of items must be greater than or equal to 1.");
        }

        if (null !== $this->container['name'] && (\mb_strlen((string) $this->container['name']) > 40)) {
            throw new AssertionException("invalid value for 'name', the character length must be smaller than or equal to 40.");
        }

        if (null !== $this->container['name'] && (\mb_strlen((string) $this->container['name']) < 1)) {
            throw new AssertionException("invalid value for 'name', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['source_address'] === null) {
            throw new AssertionException("'source_address' can't be null");
        }

        $this->container['source_address']->validate();
    }

    /**
     * Gets destination_marketplaces.
     *
     * @return string[]
     */
    public function getDestinationMarketplaces() : array
    {
        return $this->container['destination_marketplaces'];
    }

    /**
     * Sets destination_marketplaces.
     *
     * @param string[] $destination_marketplaces Marketplaces where the items need to be shipped to. Currently only one marketplace can be selected in this request.
     */
    public function setDestinationMarketplaces(array $destination_marketplaces) : self
    {
        $this->container['destination_marketplaces'] = $destination_marketplaces;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ItemInput[]
     */
    public function getItems() : array
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ItemInput[] $items items included in this plan
     */
    public function setItems(array $items) : self
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets name.
     */
    public function getName() : ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param null|string $name Name for the Inbound Plan. If one isn't provided, a default name will be provided.
     */
    public function setName(?string $name) : self
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets source_address.
     */
    public function getSourceAddress() : AddressInput
    {
        return $this->container['source_address'];
    }

    /**
     * Sets source_address.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\AddressInput $source_address source_address
     */
    public function setSourceAddress(AddressInput $source_address) : self
    {
        $this->container['source_address'] = $source_address;

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