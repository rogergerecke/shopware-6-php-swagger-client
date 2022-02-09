<?php
/**
 * ProductSearchConfigField
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
 * ProductSearchConfigField Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.3.5.0
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductSearchConfigField implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductSearchConfigField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'search_config_id' => 'string',
        'custom_field_id' => 'string',
        'field' => 'string',
        'tokenize' => 'bool',
        'searchable' => 'bool',
        'ranking' => 'int',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'search_config' => '\OpenAPI\Client\Model\ProductSearchConfig',
        'custom_field' => '\OpenAPI\Client\Model\CustomField'
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
        'search_config_id' => null,
        'custom_field_id' => null,
        'field' => null,
        'tokenize' => null,
        'searchable' => null,
        'ranking' => 'int64',
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'search_config' => null,
        'custom_field' => null
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
        'search_config_id' => 'searchConfigId',
        'custom_field_id' => 'customFieldId',
        'field' => 'field',
        'tokenize' => 'tokenize',
        'searchable' => 'searchable',
        'ranking' => 'ranking',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'search_config' => 'searchConfig',
        'custom_field' => 'customField'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'search_config_id' => 'setSearchConfigId',
        'custom_field_id' => 'setCustomFieldId',
        'field' => 'setField',
        'tokenize' => 'setTokenize',
        'searchable' => 'setSearchable',
        'ranking' => 'setRanking',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'search_config' => 'setSearchConfig',
        'custom_field' => 'setCustomField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'search_config_id' => 'getSearchConfigId',
        'custom_field_id' => 'getCustomFieldId',
        'field' => 'getField',
        'tokenize' => 'getTokenize',
        'searchable' => 'getSearchable',
        'ranking' => 'getRanking',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'search_config' => 'getSearchConfig',
        'custom_field' => 'getCustomField'
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
        $this->container['search_config_id'] = $data['search_config_id'] ?? null;
        $this->container['custom_field_id'] = $data['custom_field_id'] ?? null;
        $this->container['field'] = $data['field'] ?? null;
        $this->container['tokenize'] = $data['tokenize'] ?? null;
        $this->container['searchable'] = $data['searchable'] ?? null;
        $this->container['ranking'] = $data['ranking'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['search_config'] = $data['search_config'] ?? null;
        $this->container['custom_field'] = $data['custom_field'] ?? null;
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

        if ($this->container['search_config_id'] === null) {
            $invalidProperties[] = "'search_config_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['search_config_id'])) {
            $invalidProperties[] = "invalid value for 'search_config_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['custom_field_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['custom_field_id'])) {
            $invalidProperties[] = "invalid value for 'custom_field_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['field'] === null) {
            $invalidProperties[] = "'field' can't be null";
        }
        if ($this->container['tokenize'] === null) {
            $invalidProperties[] = "'tokenize' can't be null";
        }
        if ($this->container['searchable'] === null) {
            $invalidProperties[] = "'searchable' can't be null";
        }
        if ($this->container['ranking'] === null) {
            $invalidProperties[] = "'ranking' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $id when calling ProductSearchConfigField., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets search_config_id
     *
     * @return string
     */
    public function getSearchConfigId()
    {
        return $this->container['search_config_id'];
    }

    /**
     * Sets search_config_id
     *
     * @param string $search_config_id search_config_id
     *
     * @return self
     */
    public function setSearchConfigId($search_config_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $search_config_id))) {
            throw new \InvalidArgumentException("invalid value for $search_config_id when calling ProductSearchConfigField., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['search_config_id'] = $search_config_id;

        return $this;
    }

    /**
     * Gets custom_field_id
     *
     * @return string|null
     */
    public function getCustomFieldId()
    {
        return $this->container['custom_field_id'];
    }

    /**
     * Sets custom_field_id
     *
     * @param string|null $custom_field_id custom_field_id
     *
     * @return self
     */
    public function setCustomFieldId($custom_field_id)
    {

        if (!is_null($custom_field_id) && (!preg_match("/^[0-9a-f]{32}$/", $custom_field_id))) {
            throw new \InvalidArgumentException("invalid value for $custom_field_id when calling ProductSearchConfigField., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['custom_field_id'] = $custom_field_id;

        return $this;
    }

    /**
     * Gets field
     *
     * @return string
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     *
     * @param string $field field
     *
     * @return self
     */
    public function setField($field)
    {
        $this->container['field'] = $field;

        return $this;
    }

    /**
     * Gets tokenize
     *
     * @return bool
     */
    public function getTokenize()
    {
        return $this->container['tokenize'];
    }

    /**
     * Sets tokenize
     *
     * @param bool $tokenize tokenize
     *
     * @return self
     */
    public function setTokenize($tokenize)
    {
        $this->container['tokenize'] = $tokenize;

        return $this;
    }

    /**
     * Gets searchable
     *
     * @return bool
     */
    public function getSearchable()
    {
        return $this->container['searchable'];
    }

    /**
     * Sets searchable
     *
     * @param bool $searchable searchable
     *
     * @return self
     */
    public function setSearchable($searchable)
    {
        $this->container['searchable'] = $searchable;

        return $this;
    }

    /**
     * Gets ranking
     *
     * @return int
     */
    public function getRanking()
    {
        return $this->container['ranking'];
    }

    /**
     * Sets ranking
     *
     * @param int $ranking ranking
     *
     * @return self
     */
    public function setRanking($ranking)
    {
        $this->container['ranking'] = $ranking;

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
     * Gets search_config
     *
     * @return \OpenAPI\Client\Model\ProductSearchConfig|null
     */
    public function getSearchConfig()
    {
        return $this->container['search_config'];
    }

    /**
     * Sets search_config
     *
     * @param \OpenAPI\Client\Model\ProductSearchConfig|null $search_config search_config
     *
     * @return self
     */
    public function setSearchConfig($search_config)
    {
        $this->container['search_config'] = $search_config;

        return $this;
    }

    /**
     * Gets custom_field
     *
     * @return \OpenAPI\Client\Model\CustomField|null
     */
    public function getCustomField()
    {
        return $this->container['custom_field'];
    }

    /**
     * Sets custom_field
     *
     * @param \OpenAPI\Client\Model\CustomField|null $custom_field custom_field
     *
     * @return self
     */
    public function setCustomField($custom_field)
    {
        $this->container['custom_field'] = $custom_field;

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


