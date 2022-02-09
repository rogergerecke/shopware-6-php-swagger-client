<?php
/**
 * WebhookEventLog
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
 * WebhookEventLog Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.4.1.0
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WebhookEventLog implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookEventLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'app_name' => 'string',
        'webhook_name' => 'string',
        'event_name' => 'string',
        'delivery_status' => 'string',
        'timestamp' => 'int',
        'processing_time' => 'int',
        'app_version' => 'string',
        'request_content' => 'object',
        'response_content' => 'object',
        'response_status_code' => 'int',
        'response_reason_phrase' => 'string',
        'url' => 'string',
        'custom_fields' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
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
        'app_name' => null,
        'webhook_name' => null,
        'event_name' => null,
        'delivery_status' => null,
        'timestamp' => 'int64',
        'processing_time' => 'int64',
        'app_version' => null,
        'request_content' => null,
        'response_content' => null,
        'response_status_code' => 'int64',
        'response_reason_phrase' => null,
        'url' => null,
        'custom_fields' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
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
        'app_name' => 'appName',
        'webhook_name' => 'webhookName',
        'event_name' => 'eventName',
        'delivery_status' => 'deliveryStatus',
        'timestamp' => 'timestamp',
        'processing_time' => 'processingTime',
        'app_version' => 'appVersion',
        'request_content' => 'requestContent',
        'response_content' => 'responseContent',
        'response_status_code' => 'responseStatusCode',
        'response_reason_phrase' => 'responseReasonPhrase',
        'url' => 'url',
        'custom_fields' => 'customFields',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'app_name' => 'setAppName',
        'webhook_name' => 'setWebhookName',
        'event_name' => 'setEventName',
        'delivery_status' => 'setDeliveryStatus',
        'timestamp' => 'setTimestamp',
        'processing_time' => 'setProcessingTime',
        'app_version' => 'setAppVersion',
        'request_content' => 'setRequestContent',
        'response_content' => 'setResponseContent',
        'response_status_code' => 'setResponseStatusCode',
        'response_reason_phrase' => 'setResponseReasonPhrase',
        'url' => 'setUrl',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'app_name' => 'getAppName',
        'webhook_name' => 'getWebhookName',
        'event_name' => 'getEventName',
        'delivery_status' => 'getDeliveryStatus',
        'timestamp' => 'getTimestamp',
        'processing_time' => 'getProcessingTime',
        'app_version' => 'getAppVersion',
        'request_content' => 'getRequestContent',
        'response_content' => 'getResponseContent',
        'response_status_code' => 'getResponseStatusCode',
        'response_reason_phrase' => 'getResponseReasonPhrase',
        'url' => 'getUrl',
        'custom_fields' => 'getCustomFields',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['app_name'] = $data['app_name'] ?? null;
        $this->container['webhook_name'] = $data['webhook_name'] ?? null;
        $this->container['event_name'] = $data['event_name'] ?? null;
        $this->container['delivery_status'] = $data['delivery_status'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['processing_time'] = $data['processing_time'] ?? null;
        $this->container['app_version'] = $data['app_version'] ?? null;
        $this->container['request_content'] = $data['request_content'] ?? null;
        $this->container['response_content'] = $data['response_content'] ?? null;
        $this->container['response_status_code'] = $data['response_status_code'] ?? null;
        $this->container['response_reason_phrase'] = $data['response_reason_phrase'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
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

        if ($this->container['webhook_name'] === null) {
            $invalidProperties[] = "'webhook_name' can't be null";
        }
        if ($this->container['event_name'] === null) {
            $invalidProperties[] = "'event_name' can't be null";
        }
        if ($this->container['delivery_status'] === null) {
            $invalidProperties[] = "'delivery_status' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $id when calling WebhookEventLog., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets app_name
     *
     * @return string|null
     */
    public function getAppName()
    {
        return $this->container['app_name'];
    }

    /**
     * Sets app_name
     *
     * @param string|null $app_name app_name
     *
     * @return self
     */
    public function setAppName($app_name)
    {
        $this->container['app_name'] = $app_name;

        return $this;
    }

    /**
     * Gets webhook_name
     *
     * @return string
     */
    public function getWebhookName()
    {
        return $this->container['webhook_name'];
    }

    /**
     * Sets webhook_name
     *
     * @param string $webhook_name webhook_name
     *
     * @return self
     */
    public function setWebhookName($webhook_name)
    {
        $this->container['webhook_name'] = $webhook_name;

        return $this;
    }

    /**
     * Gets event_name
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->container['event_name'];
    }

    /**
     * Sets event_name
     *
     * @param string $event_name event_name
     *
     * @return self
     */
    public function setEventName($event_name)
    {
        $this->container['event_name'] = $event_name;

        return $this;
    }

    /**
     * Gets delivery_status
     *
     * @return string
     */
    public function getDeliveryStatus()
    {
        return $this->container['delivery_status'];
    }

    /**
     * Sets delivery_status
     *
     * @param string $delivery_status delivery_status
     *
     * @return self
     */
    public function setDeliveryStatus($delivery_status)
    {
        $this->container['delivery_status'] = $delivery_status;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int|null $timestamp timestamp
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets processing_time
     *
     * @return int|null
     */
    public function getProcessingTime()
    {
        return $this->container['processing_time'];
    }

    /**
     * Sets processing_time
     *
     * @param int|null $processing_time processing_time
     *
     * @return self
     */
    public function setProcessingTime($processing_time)
    {
        $this->container['processing_time'] = $processing_time;

        return $this;
    }

    /**
     * Gets app_version
     *
     * @return string|null
     */
    public function getAppVersion()
    {
        return $this->container['app_version'];
    }

    /**
     * Sets app_version
     *
     * @param string|null $app_version app_version
     *
     * @return self
     */
    public function setAppVersion($app_version)
    {
        $this->container['app_version'] = $app_version;

        return $this;
    }

    /**
     * Gets request_content
     *
     * @return object|null
     */
    public function getRequestContent()
    {
        return $this->container['request_content'];
    }

    /**
     * Sets request_content
     *
     * @param object|null $request_content request_content
     *
     * @return self
     */
    public function setRequestContent($request_content)
    {
        $this->container['request_content'] = $request_content;

        return $this;
    }

    /**
     * Gets response_content
     *
     * @return object|null
     */
    public function getResponseContent()
    {
        return $this->container['response_content'];
    }

    /**
     * Sets response_content
     *
     * @param object|null $response_content response_content
     *
     * @return self
     */
    public function setResponseContent($response_content)
    {
        $this->container['response_content'] = $response_content;

        return $this;
    }

    /**
     * Gets response_status_code
     *
     * @return int|null
     */
    public function getResponseStatusCode()
    {
        return $this->container['response_status_code'];
    }

    /**
     * Sets response_status_code
     *
     * @param int|null $response_status_code response_status_code
     *
     * @return self
     */
    public function setResponseStatusCode($response_status_code)
    {
        $this->container['response_status_code'] = $response_status_code;

        return $this;
    }

    /**
     * Gets response_reason_phrase
     *
     * @return string|null
     */
    public function getResponseReasonPhrase()
    {
        return $this->container['response_reason_phrase'];
    }

    /**
     * Sets response_reason_phrase
     *
     * @param string|null $response_reason_phrase response_reason_phrase
     *
     * @return self
     */
    public function setResponseReasonPhrase($response_reason_phrase)
    {
        $this->container['response_reason_phrase'] = $response_reason_phrase;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return object|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param object|null $custom_fields custom_fields
     *
     * @return self
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

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


