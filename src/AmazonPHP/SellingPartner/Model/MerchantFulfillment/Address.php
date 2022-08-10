<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\MerchantFulfillment;

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
class Address implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Address';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'name' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'address_line3' => 'string',
        'district_or_county' => 'string',
        'email' => 'string',
        'city' => 'string',
        'state_or_province_code' => 'string',
        'postal_code' => 'string',
        'country_code' => 'string',
        'phone' => 'string',
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
        'address_line1' => null,
        'address_line2' => null,
        'address_line3' => null,
        'district_or_county' => null,
        'email' => null,
        'city' => null,
        'state_or_province_code' => null,
        'postal_code' => null,
        'country_code' => null,
        'phone' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'name' => 'Name',
        'address_line1' => 'AddressLine1',
        'address_line2' => 'AddressLine2',
        'address_line3' => 'AddressLine3',
        'district_or_county' => 'DistrictOrCounty',
        'email' => 'Email',
        'city' => 'City',
        'state_or_province_code' => 'StateOrProvinceCode',
        'postal_code' => 'PostalCode',
        'country_code' => 'CountryCode',
        'phone' => 'Phone',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'name' => 'setName',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'address_line3' => 'setAddressLine3',
        'district_or_county' => 'setDistrictOrCounty',
        'email' => 'setEmail',
        'city' => 'setCity',
        'state_or_province_code' => 'setStateOrProvinceCode',
        'postal_code' => 'setPostalCode',
        'country_code' => 'setCountryCode',
        'phone' => 'setPhone',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'name' => 'getName',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'address_line3' => 'getAddressLine3',
        'district_or_county' => 'getDistrictOrCounty',
        'email' => 'getEmail',
        'city' => 'getCity',
        'state_or_province_code' => 'getStateOrProvinceCode',
        'postal_code' => 'getPostalCode',
        'country_code' => 'getCountryCode',
        'phone' => 'getPhone',
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
        $this->container['address_line1'] = $data['address_line1'] ?? null;
        $this->container['address_line2'] = $data['address_line2'] ?? null;
        $this->container['address_line3'] = $data['address_line3'] ?? null;
        $this->container['district_or_county'] = $data['district_or_county'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['state_or_province_code'] = $data['state_or_province_code'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
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

        if ((\mb_strlen($this->container['name']) > 30)) {
            throw new AssertionException("invalid value for 'name', the character length must be smaller than or equal to 30.");
        }

        if ($this->container['address_line1'] === null) {
            throw new AssertionException("'address_line1' can't be null");
        }

        if ((\mb_strlen($this->container['address_line1']) > 180)) {
            throw new AssertionException("invalid value for 'address_line1', the character length must be smaller than or equal to 180.");
        }

        if (null !== $this->container['address_line2'] && (\mb_strlen($this->container['address_line2']) > 60)) {
            throw new AssertionException("invalid value for 'address_line2', the character length must be smaller than or equal to 60.");
        }

        if (null !== $this->container['address_line3'] && (\mb_strlen($this->container['address_line3']) > 60)) {
            throw new AssertionException("invalid value for 'address_line3', the character length must be smaller than or equal to 60.");
        }

        if ($this->container['email'] === null) {
            throw new AssertionException("'email' can't be null");
        }

        if ($this->container['city'] === null) {
            throw new AssertionException("'city' can't be null");
        }

        if ((\mb_strlen($this->container['city']) > 30)) {
            throw new AssertionException("invalid value for 'city', the character length must be smaller than or equal to 30.");
        }

        if (null !== $this->container['state_or_province_code'] && (\mb_strlen($this->container['state_or_province_code']) > 30)) {
            throw new AssertionException("invalid value for 'state_or_province_code', the character length must be smaller than or equal to 30.");
        }

        if ($this->container['postal_code'] === null) {
            throw new AssertionException("'postal_code' can't be null");
        }

        if ((\mb_strlen($this->container['postal_code']) > 30)) {
            throw new AssertionException("invalid value for 'postal_code', the character length must be smaller than or equal to 30.");
        }

        if ($this->container['country_code'] === null) {
            throw new AssertionException("'country_code' can't be null");
        }

        if ($this->container['phone'] === null) {
            throw new AssertionException("'phone' can't be null");
        }

        if ((\mb_strlen($this->container['phone']) > 30)) {
            throw new AssertionException("invalid value for 'phone', the character length must be smaller than or equal to 30.");
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
     * @param string $name the name of the addressee, or business name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address_line1.
     */
    public function getAddressLine1() : string
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1.
     *
     * @param string $address_line1 the street address information
     *
     * @return self
     */
    public function setAddressLine1(string $address_line1) : self
    {
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2.
     *
     * @return null|string
     */
    public function getAddressLine2() : ?string
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2.
     *
     * @param null|string $address_line2 additional street address information
     *
     * @return self
     */
    public function setAddressLine2(?string $address_line2) : self
    {
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets address_line3.
     *
     * @return null|string
     */
    public function getAddressLine3() : ?string
    {
        return $this->container['address_line3'];
    }

    /**
     * Sets address_line3.
     *
     * @param null|string $address_line3 additional street address information
     *
     * @return self
     */
    public function setAddressLine3(?string $address_line3) : self
    {
        $this->container['address_line3'] = $address_line3;

        return $this;
    }

    /**
     * Gets district_or_county.
     *
     * @return null|string
     */
    public function getDistrictOrCounty() : ?string
    {
        return $this->container['district_or_county'];
    }

    /**
     * Sets district_or_county.
     *
     * @param null|string $district_or_county the district or county
     *
     * @return self
     */
    public function setDistrictOrCounty(?string $district_or_county) : self
    {
        $this->container['district_or_county'] = $district_or_county;

        return $this;
    }

    /**
     * Gets email.
     */
    public function getEmail() : string
    {
        return $this->container['email'];
    }

    /**
     * Sets email.
     *
     * @param string $email the email address
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets city.
     */
    public function getCity() : string
    {
        return $this->container['city'];
    }

    /**
     * Sets city.
     *
     * @param string $city the city
     *
     * @return self
     */
    public function setCity(string $city) : self
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state_or_province_code.
     *
     * @return null|string
     */
    public function getStateOrProvinceCode() : ?string
    {
        return $this->container['state_or_province_code'];
    }

    /**
     * Sets state_or_province_code.
     *
     * @param null|string $state_or_province_code The state or province code. **Note.** Required in the Canada, US, and UK marketplaces. Also required for shipments originating from China.
     *
     * @return self
     */
    public function setStateOrProvinceCode(?string $state_or_province_code) : self
    {
        $this->container['state_or_province_code'] = $state_or_province_code;

        return $this;
    }

    /**
     * Gets postal_code.
     */
    public function getPostalCode() : string
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code.
     *
     * @param string $postal_code the zip code or postal code
     *
     * @return self
     */
    public function setPostalCode(string $postal_code) : self
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets country_code.
     */
    public function getCountryCode() : string
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code.
     *
     * @param string $country_code The country code. A two-character country code, in ISO 3166-1 alpha-2 format.
     *
     * @return self
     */
    public function setCountryCode(string $country_code) : self
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets phone.
     */
    public function getPhone() : string
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone.
     *
     * @param string $phone the phone number
     *
     * @return self
     */
    public function setPhone(string $phone) : self
    {
        $this->container['phone'] = $phone;

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
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
