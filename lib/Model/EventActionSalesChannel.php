<?php
/**
 * EventActionSalesChannel
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
 * The version of the OpenAPI document: 6.4.7.0
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
 * EventActionSalesChannel Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.3.3.0
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EventActionSalesChannel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EventActionSalesChannel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'event_action_id' => 'string',
        'sales_channel_id' => 'string',
        'event_action' => '\OpenAPI\Client\Model\EventAction',
        'sales_channel' => '\OpenAPI\Client\Model\SalesChannel'
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
        'event_action_id' => null,
        'sales_channel_id' => null,
        'event_action' => null,
        'sales_channel' => null
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
        'event_action_id' => 'eventActionId',
        'sales_channel_id' => 'salesChannelId',
        'event_action' => 'eventAction',
        'sales_channel' => 'salesChannel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'event_action_id' => 'setEventActionId',
        'sales_channel_id' => 'setSalesChannelId',
        'event_action' => 'setEventAction',
        'sales_channel' => 'setSalesChannel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'event_action_id' => 'getEventActionId',
        'sales_channel_id' => 'getSalesChannelId',
        'event_action' => 'getEventAction',
        'sales_channel' => 'getSalesChannel'
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
        $this->container['event_action_id'] = $data['event_action_id'] ?? null;
        $this->container['sales_channel_id'] = $data['sales_channel_id'] ?? null;
        $this->container['event_action'] = $data['event_action'] ?? null;
        $this->container['sales_channel'] = $data['sales_channel'] ?? null;
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

        if ($this->container['event_action_id'] === null) {
            $invalidProperties[] = "'event_action_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['event_action_id'])) {
            $invalidProperties[] = "invalid value for 'event_action_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['sales_channel_id'] === null) {
            $invalidProperties[] = "'sales_channel_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['sales_channel_id'])) {
            $invalidProperties[] = "invalid value for 'sales_channel_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
            throw new \InvalidArgumentException("invalid value for $id when calling EventActionSalesChannel., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets event_action_id
     *
     * @return string
     */
    public function getEventActionId()
    {
        return $this->container['event_action_id'];
    }

    /**
     * Sets event_action_id
     *
     * @param string $event_action_id event_action_id
     *
     * @return self
     */
    public function setEventActionId($event_action_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $event_action_id))) {
            throw new \InvalidArgumentException("invalid value for $event_action_id when calling EventActionSalesChannel., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['event_action_id'] = $event_action_id;

        return $this;
    }

    /**
     * Gets sales_channel_id
     *
     * @return string
     */
    public function getSalesChannelId()
    {
        return $this->container['sales_channel_id'];
    }

    /**
     * Sets sales_channel_id
     *
     * @param string $sales_channel_id sales_channel_id
     *
     * @return self
     */
    public function setSalesChannelId($sales_channel_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $sales_channel_id))) {
            throw new \InvalidArgumentException("invalid value for $sales_channel_id when calling EventActionSalesChannel., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['sales_channel_id'] = $sales_channel_id;

        return $this;
    }

    /**
     * Gets event_action
     *
     * @return \OpenAPI\Client\Model\EventAction|null
     */
    public function getEventAction()
    {
        return $this->container['event_action'];
    }

    /**
     * Sets event_action
     *
     * @param \OpenAPI\Client\Model\EventAction|null $event_action event_action
     *
     * @return self
     */
    public function setEventAction($event_action)
    {
        $this->container['event_action'] = $event_action;

        return $this;
    }

    /**
     * Gets sales_channel
     *
     * @return \OpenAPI\Client\Model\SalesChannel|null
     */
    public function getSalesChannel()
    {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel
     *
     * @param \OpenAPI\Client\Model\SalesChannel|null $sales_channel sales_channel
     *
     * @return self
     */
    public function setSalesChannel($sales_channel)
    {
        $this->container['sales_channel'] = $sales_channel;

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


