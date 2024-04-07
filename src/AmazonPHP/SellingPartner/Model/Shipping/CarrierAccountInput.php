<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\Shipping;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Amazon Shipping API
*
* The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
*
* The version of the OpenAPI document: v2
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CarrierAccountInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CarrierAccountInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'description_localization_key' => 'string',
        'name' => 'string',
        'group_name' => 'string',
        'input_type' => '\AmazonPHP\SellingPartner\Model\Shipping\InputType',
        'is_mandatory' => 'bool',
        'is_confidential' => 'bool',
        'is_hidden' => 'bool',
        'validation_metadata' => '\AmazonPHP\SellingPartner\Model\Shipping\ValidationMetadata[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'description_localization_key' => null,
        'name' => null,
        'group_name' => null,
        'input_type' => null,
        'is_mandatory' => null,
        'is_confidential' => null,
        'is_hidden' => null,
        'validation_metadata' => null
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
        'description_localization_key' => 'descriptionLocalizationKey',
        'name' => 'name',
        'group_name' => 'groupName',
        'input_type' => 'inputType',
        'is_mandatory' => 'isMandatory',
        'is_confidential' => 'isConfidential',
        'is_hidden' => 'isHidden',
        'validation_metadata' => 'validationMetadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'description_localization_key' => 'setDescriptionLocalizationKey',
        'name' => 'setName',
        'group_name' => 'setGroupName',
        'input_type' => 'setInputType',
        'is_mandatory' => 'setIsMandatory',
        'is_confidential' => 'setIsConfidential',
        'is_hidden' => 'setIsHidden',
        'validation_metadata' => 'setValidationMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'description_localization_key' => 'getDescriptionLocalizationKey',
        'name' => 'getName',
        'group_name' => 'getGroupName',
        'input_type' => 'getInputType',
        'is_mandatory' => 'getIsMandatory',
        'is_confidential' => 'getIsConfidential',
        'is_hidden' => 'getIsHidden',
        'validation_metadata' => 'getValidationMetadata'
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
        $this->container['description_localization_key'] = $data['description_localization_key'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['group_name'] = $data['group_name'] ?? null;
        $this->container['input_type'] = $data['input_type'] ?? null;
        $this->container['is_mandatory'] = $data['is_mandatory'] ?? null;
        $this->container['is_confidential'] = $data['is_confidential'] ?? null;
        $this->container['is_hidden'] = $data['is_hidden'] ?? null;
        $this->container['validation_metadata'] = $data['validation_metadata'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
    }


    /**
     * Gets description_localization_key
     *
     * @return string|null
     */
    public function getDescriptionLocalizationKey()
    {
        return $this->container['description_localization_key'];
    }

    /**
     * Sets description_localization_key
     *
     * @param string|null $description_localization_key descriptionLocalizationKey value .
     *
     * @return self
     */
    public function setDescriptionLocalizationKey($description_localization_key) : self
    {
        $this->container['description_localization_key'] = $description_localization_key;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name value .
     *
     * @return self
     */
    public function setName($name) : self
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets group_name
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->container['group_name'];
    }

    /**
     * Sets group_name
     *
     * @param string|null $group_name groupName value .
     *
     * @return self
     */
    public function setGroupName($group_name) : self
    {
        $this->container['group_name'] = $group_name;

        return $this;
    }

    /**
     * Gets input_type
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\InputType|null
     */
    public function getInputType()
    {
        return $this->container['input_type'];
    }

    /**
     * Sets input_type
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\InputType|null $input_type input_type
     *
     * @return self
     */
    public function setInputType($input_type) : self
    {
        $this->container['input_type'] = $input_type;

        return $this;
    }

    /**
     * Gets is_mandatory
     *
     * @return bool|null
     */
    public function getIsMandatory()
    {
        return $this->container['is_mandatory'];
    }

    /**
     * Sets is_mandatory
     *
     * @param bool|null $is_mandatory mandatory or not  value .
     *
     * @return self
     */
    public function setIsMandatory($is_mandatory) : self
    {
        $this->container['is_mandatory'] = $is_mandatory;

        return $this;
    }

    /**
     * Gets is_confidential
     *
     * @return bool|null
     */
    public function getIsConfidential()
    {
        return $this->container['is_confidential'];
    }

    /**
     * Sets is_confidential
     *
     * @param bool|null $is_confidential is value is Confidential .
     *
     * @return self
     */
    public function setIsConfidential($is_confidential) : self
    {
        $this->container['is_confidential'] = $is_confidential;

        return $this;
    }

    /**
     * Gets is_hidden
     *
     * @return bool|null
     */
    public function getIsHidden()
    {
        return $this->container['is_hidden'];
    }

    /**
     * Sets is_hidden
     *
     * @param bool|null $is_hidden is value is hidden .
     *
     * @return self
     */
    public function setIsHidden($is_hidden) : self
    {
        $this->container['is_hidden'] = $is_hidden;

        return $this;
    }

    /**
     * Gets validation_metadata
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\ValidationMetadata[]|null
     */
    public function getValidationMetadata()
    {
        return $this->container['validation_metadata'];
    }

    /**
     * Sets validation_metadata
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\ValidationMetadata[]|null $validation_metadata A list of ValidationMetadata
     *
     * @return self
     */
    public function setValidationMetadata($validation_metadata) : self
    {
        $this->container['validation_metadata'] = $validation_metadata;

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

