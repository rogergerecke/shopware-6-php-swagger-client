<?php
/**
 * CurrencyCountryRounding
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Shopware Admin API
 *
 * This endpoint reference contains an overview of all endpoints comprising the Shopware Admin API.  For a better overview, all CRUD-endpoints are hidden by default. If you want to show also CRUD-endpoints add the query parameter `type=jsonapi`.
 *
 * The version of the OpenAPI document: 6.4.8.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CurrencyCountryRounding Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.4.0.0
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CurrencyCountryRounding implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CurrencyCountryRounding';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'currency_id' => 'string',
        'country_id' => 'string',
        'item_rounding' => '\OpenAPI\Client\Model\CurrencyItemRounding',
        'total_rounding' => '\OpenAPI\Client\Model\CurrencyItemRounding',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'currency' => '\OpenAPI\Client\Model\Currency',
        'country' => '\OpenAPI\Client\Model\Country'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'currency_id' => null,
        'country_id' => null,
        'item_rounding' => null,
        'total_rounding' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'currency' => null,
        'country' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'currency_id' => 'currencyId',
        'country_id' => 'countryId',
        'item_rounding' => 'itemRounding',
        'total_rounding' => 'totalRounding',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'currency' => 'currency',
        'country' => 'country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'currency_id' => 'setCurrencyId',
        'country_id' => 'setCountryId',
        'item_rounding' => 'setItemRounding',
        'total_rounding' => 'setTotalRounding',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'currency' => 'setCurrency',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'currency_id' => 'getCurrencyId',
        'country_id' => 'getCountryId',
        'item_rounding' => 'getItemRounding',
        'total_rounding' => 'getTotalRounding',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'currency' => 'getCurrency',
        'country' => 'getCountry'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['currency_id'] = $data['currency_id'] ?? null;
        $this->container['country_id'] = $data['country_id'] ?? null;
        $this->container['item_rounding'] = $data['item_rounding'] ?? null;
        $this->container['total_rounding'] = $data['total_rounding'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['currency_id'] === null) {
            $invalidProperties[] = "'currency_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['currency_id'])) {
            $invalidProperties[] = "invalid value for 'currency_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['country_id'] === null) {
            $invalidProperties[] = "'country_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['country_id'])) {
            $invalidProperties[] = "invalid value for 'country_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['item_rounding'] === null) {
            $invalidProperties[] = "'item_rounding' can't be null";
        }
        if ($this->container['total_rounding'] === null) {
            $invalidProperties[] = "'total_rounding' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (!is_null($id) && (!preg_match("/^[0-9a-f]{32}$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling CurrencyCountryRounding., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets currency_id
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param string $currency_id currency_id
     *
     * @return self
     */
    public function setCurrencyId($currency_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $currency_id))) {
            throw new \InvalidArgumentException("invalid value for $currency_id when calling CurrencyCountryRounding., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets country_id
     *
     * @return string
     */
    public function getCountryId()
    {
        return $this->container['country_id'];
    }

    /**
     * Sets country_id
     *
     * @param string $country_id country_id
     *
     * @return self
     */
    public function setCountryId($country_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $country_id))) {
            throw new \InvalidArgumentException("invalid value for $country_id when calling CurrencyCountryRounding., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['country_id'] = $country_id;

        return $this;
    }

    /**
     * Gets item_rounding
     *
     * @return \OpenAPI\Client\Model\CurrencyItemRounding
     */
    public function getItemRounding()
    {
        return $this->container['item_rounding'];
    }

    /**
     * Sets item_rounding
     *
     * @param \OpenAPI\Client\Model\CurrencyItemRounding $item_rounding item_rounding
     *
     * @return self
     */
    public function setItemRounding($item_rounding)
    {
        $this->container['item_rounding'] = $item_rounding;

        return $this;
    }

    /**
     * Gets total_rounding
     *
     * @return \OpenAPI\Client\Model\CurrencyItemRounding
     */
    public function getTotalRounding()
    {
        return $this->container['total_rounding'];
    }

    /**
     * Sets total_rounding
     *
     * @param \OpenAPI\Client\Model\CurrencyItemRounding $total_rounding total_rounding
     *
     * @return self
     */
    public function setTotalRounding($total_rounding)
    {
        $this->container['total_rounding'] = $total_rounding;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \OpenAPI\Client\Model\Currency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \OpenAPI\Client\Model\Currency|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \OpenAPI\Client\Model\Country|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \OpenAPI\Client\Model\Country|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
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
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


