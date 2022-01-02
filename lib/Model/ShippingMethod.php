<?php
/**
 * ShippingMethod
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
 * ShippingMethod Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.0.0.0
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ShippingMethod implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShippingMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'active' => 'bool',
        'custom_fields' => 'object',
        'availability_rule_id' => 'string',
        'media_id' => 'string',
        'delivery_time_id' => 'string',
        'tax_type' => 'string',
        'tax_id' => 'string',
        'description' => 'string',
        'tracking_url' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'translated' => 'object',
        'delivery_time' => '\OpenAPI\Client\Model\DeliveryTime',
        'availability_rule' => '\OpenAPI\Client\Model\Rule',
        'prices' => '\OpenAPI\Client\Model\ShippingMethodPrice',
        'media' => '\OpenAPI\Client\Model\Media',
        'tags' => '\OpenAPI\Client\Model\Tag',
        'order_deliveries' => '\OpenAPI\Client\Model\OrderDelivery',
        'sales_channels' => '\OpenAPI\Client\Model\SalesChannel',
        'sales_channel_default_assignments' => '\OpenAPI\Client\Model\SalesChannel',
        'tax' => '\OpenAPI\Client\Model\Tax'
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
        'name' => null,
        'active' => null,
        'custom_fields' => null,
        'availability_rule_id' => null,
        'media_id' => null,
        'delivery_time_id' => null,
        'tax_type' => null,
        'tax_id' => null,
        'description' => null,
        'tracking_url' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'translated' => null,
        'delivery_time' => null,
        'availability_rule' => null,
        'prices' => null,
        'media' => null,
        'tags' => null,
        'order_deliveries' => null,
        'sales_channels' => null,
        'sales_channel_default_assignments' => null,
        'tax' => null
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
        'name' => 'name',
        'active' => 'active',
        'custom_fields' => 'customFields',
        'availability_rule_id' => 'availabilityRuleId',
        'media_id' => 'mediaId',
        'delivery_time_id' => 'deliveryTimeId',
        'tax_type' => 'taxType',
        'tax_id' => 'taxId',
        'description' => 'description',
        'tracking_url' => 'trackingUrl',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'translated' => 'translated',
        'delivery_time' => 'deliveryTime',
        'availability_rule' => 'availabilityRule',
        'prices' => 'prices',
        'media' => 'media',
        'tags' => 'tags',
        'order_deliveries' => 'orderDeliveries',
        'sales_channels' => 'salesChannels',
        'sales_channel_default_assignments' => 'salesChannelDefaultAssignments',
        'tax' => 'tax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'active' => 'setActive',
        'custom_fields' => 'setCustomFields',
        'availability_rule_id' => 'setAvailabilityRuleId',
        'media_id' => 'setMediaId',
        'delivery_time_id' => 'setDeliveryTimeId',
        'tax_type' => 'setTaxType',
        'tax_id' => 'setTaxId',
        'description' => 'setDescription',
        'tracking_url' => 'setTrackingUrl',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'translated' => 'setTranslated',
        'delivery_time' => 'setDeliveryTime',
        'availability_rule' => 'setAvailabilityRule',
        'prices' => 'setPrices',
        'media' => 'setMedia',
        'tags' => 'setTags',
        'order_deliveries' => 'setOrderDeliveries',
        'sales_channels' => 'setSalesChannels',
        'sales_channel_default_assignments' => 'setSalesChannelDefaultAssignments',
        'tax' => 'setTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'active' => 'getActive',
        'custom_fields' => 'getCustomFields',
        'availability_rule_id' => 'getAvailabilityRuleId',
        'media_id' => 'getMediaId',
        'delivery_time_id' => 'getDeliveryTimeId',
        'tax_type' => 'getTaxType',
        'tax_id' => 'getTaxId',
        'description' => 'getDescription',
        'tracking_url' => 'getTrackingUrl',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'translated' => 'getTranslated',
        'delivery_time' => 'getDeliveryTime',
        'availability_rule' => 'getAvailabilityRule',
        'prices' => 'getPrices',
        'media' => 'getMedia',
        'tags' => 'getTags',
        'order_deliveries' => 'getOrderDeliveries',
        'sales_channels' => 'getSalesChannels',
        'sales_channel_default_assignments' => 'getSalesChannelDefaultAssignments',
        'tax' => 'getTax'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['availability_rule_id'] = $data['availability_rule_id'] ?? null;
        $this->container['media_id'] = $data['media_id'] ?? null;
        $this->container['delivery_time_id'] = $data['delivery_time_id'] ?? null;
        $this->container['tax_type'] = $data['tax_type'] ?? null;
        $this->container['tax_id'] = $data['tax_id'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['tracking_url'] = $data['tracking_url'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['translated'] = $data['translated'] ?? null;
        $this->container['delivery_time'] = $data['delivery_time'] ?? null;
        $this->container['availability_rule'] = $data['availability_rule'] ?? null;
        $this->container['prices'] = $data['prices'] ?? null;
        $this->container['media'] = $data['media'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['order_deliveries'] = $data['order_deliveries'] ?? null;
        $this->container['sales_channels'] = $data['sales_channels'] ?? null;
        $this->container['sales_channel_default_assignments'] = $data['sales_channel_default_assignments'] ?? null;
        $this->container['tax'] = $data['tax'] ?? null;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['availability_rule_id'] === null) {
            $invalidProperties[] = "'availability_rule_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['availability_rule_id'])) {
            $invalidProperties[] = "invalid value for 'availability_rule_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['media_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['media_id'])) {
            $invalidProperties[] = "invalid value for 'media_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['delivery_time_id'] === null) {
            $invalidProperties[] = "'delivery_time_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['delivery_time_id'])) {
            $invalidProperties[] = "invalid value for 'delivery_time_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['tax_type'] === null) {
            $invalidProperties[] = "'tax_type' can't be null";
        }
        if (!is_null($this->container['tax_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['tax_id'])) {
            $invalidProperties[] = "invalid value for 'tax_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
            throw new \InvalidArgumentException("invalid value for $id when calling ShippingMethod., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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
     * Gets availability_rule_id
     *
     * @return string
     */
    public function getAvailabilityRuleId()
    {
        return $this->container['availability_rule_id'];
    }

    /**
     * Sets availability_rule_id
     *
     * @param string $availability_rule_id availability_rule_id
     *
     * @return self
     */
    public function setAvailabilityRuleId($availability_rule_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $availability_rule_id))) {
            throw new \InvalidArgumentException("invalid value for $availability_rule_id when calling ShippingMethod., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['availability_rule_id'] = $availability_rule_id;

        return $this;
    }

    /**
     * Gets media_id
     *
     * @return string|null
     */
    public function getMediaId()
    {
        return $this->container['media_id'];
    }

    /**
     * Sets media_id
     *
     * @param string|null $media_id media_id
     *
     * @return self
     */
    public function setMediaId($media_id)
    {

        if (!is_null($media_id) && (!preg_match("/^[0-9a-f]{32}$/", $media_id))) {
            throw new \InvalidArgumentException("invalid value for $media_id when calling ShippingMethod., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['media_id'] = $media_id;

        return $this;
    }

    /**
     * Gets delivery_time_id
     *
     * @return string
     */
    public function getDeliveryTimeId()
    {
        return $this->container['delivery_time_id'];
    }

    /**
     * Sets delivery_time_id
     *
     * @param string $delivery_time_id delivery_time_id
     *
     * @return self
     */
    public function setDeliveryTimeId($delivery_time_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $delivery_time_id))) {
            throw new \InvalidArgumentException("invalid value for $delivery_time_id when calling ShippingMethod., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['delivery_time_id'] = $delivery_time_id;

        return $this;
    }

    /**
     * Gets tax_type
     *
     * @return string
     */
    public function getTaxType()
    {
        return $this->container['tax_type'];
    }

    /**
     * Sets tax_type
     *
     * @param string $tax_type tax_type
     *
     * @return self
     */
    public function setTaxType($tax_type)
    {
        $this->container['tax_type'] = $tax_type;

        return $this;
    }

    /**
     * Gets tax_id
     *
     * @return string|null
     */
    public function getTaxId()
    {
        return $this->container['tax_id'];
    }

    /**
     * Sets tax_id
     *
     * @param string|null $tax_id tax_id
     *
     * @return self
     */
    public function setTaxId($tax_id)
    {

        if (!is_null($tax_id) && (!preg_match("/^[0-9a-f]{32}$/", $tax_id))) {
            throw new \InvalidArgumentException("invalid value for $tax_id when calling ShippingMethod., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['tax_id'] = $tax_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets tracking_url
     *
     * @return string|null
     */
    public function getTrackingUrl()
    {
        return $this->container['tracking_url'];
    }

    /**
     * Sets tracking_url
     *
     * @param string|null $tracking_url tracking_url
     *
     * @return self
     */
    public function setTrackingUrl($tracking_url)
    {
        $this->container['tracking_url'] = $tracking_url;

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
     * Gets translated
     *
     * @return object|null
     */
    public function getTranslated()
    {
        return $this->container['translated'];
    }

    /**
     * Sets translated
     *
     * @param object|null $translated translated
     *
     * @return self
     */
    public function setTranslated($translated)
    {
        $this->container['translated'] = $translated;

        return $this;
    }

    /**
     * Gets delivery_time
     *
     * @return \OpenAPI\Client\Model\DeliveryTime|null
     */
    public function getDeliveryTime()
    {
        return $this->container['delivery_time'];
    }

    /**
     * Sets delivery_time
     *
     * @param \OpenAPI\Client\Model\DeliveryTime|null $delivery_time delivery_time
     *
     * @return self
     */
    public function setDeliveryTime($delivery_time)
    {
        $this->container['delivery_time'] = $delivery_time;

        return $this;
    }

    /**
     * Gets availability_rule
     *
     * @return \OpenAPI\Client\Model\Rule|null
     */
    public function getAvailabilityRule()
    {
        return $this->container['availability_rule'];
    }

    /**
     * Sets availability_rule
     *
     * @param \OpenAPI\Client\Model\Rule|null $availability_rule availability_rule
     *
     * @return self
     */
    public function setAvailabilityRule($availability_rule)
    {
        $this->container['availability_rule'] = $availability_rule;

        return $this;
    }

    /**
     * Gets prices
     *
     * @return \OpenAPI\Client\Model\ShippingMethodPrice|null
     */
    public function getPrices()
    {
        return $this->container['prices'];
    }

    /**
     * Sets prices
     *
     * @param \OpenAPI\Client\Model\ShippingMethodPrice|null $prices prices
     *
     * @return self
     */
    public function setPrices($prices)
    {
        $this->container['prices'] = $prices;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \OpenAPI\Client\Model\Media|null
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \OpenAPI\Client\Model\Media|null $media media
     *
     * @return self
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \OpenAPI\Client\Model\Tag|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \OpenAPI\Client\Model\Tag|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets order_deliveries
     *
     * @return \OpenAPI\Client\Model\OrderDelivery|null
     */
    public function getOrderDeliveries()
    {
        return $this->container['order_deliveries'];
    }

    /**
     * Sets order_deliveries
     *
     * @param \OpenAPI\Client\Model\OrderDelivery|null $order_deliveries order_deliveries
     *
     * @return self
     */
    public function setOrderDeliveries($order_deliveries)
    {
        $this->container['order_deliveries'] = $order_deliveries;

        return $this;
    }

    /**
     * Gets sales_channels
     *
     * @return \OpenAPI\Client\Model\SalesChannel|null
     */
    public function getSalesChannels()
    {
        return $this->container['sales_channels'];
    }

    /**
     * Sets sales_channels
     *
     * @param \OpenAPI\Client\Model\SalesChannel|null $sales_channels sales_channels
     *
     * @return self
     */
    public function setSalesChannels($sales_channels)
    {
        $this->container['sales_channels'] = $sales_channels;

        return $this;
    }

    /**
     * Gets sales_channel_default_assignments
     *
     * @return \OpenAPI\Client\Model\SalesChannel|null
     */
    public function getSalesChannelDefaultAssignments()
    {
        return $this->container['sales_channel_default_assignments'];
    }

    /**
     * Sets sales_channel_default_assignments
     *
     * @param \OpenAPI\Client\Model\SalesChannel|null $sales_channel_default_assignments sales_channel_default_assignments
     *
     * @return self
     */
    public function setSalesChannelDefaultAssignments($sales_channel_default_assignments)
    {
        $this->container['sales_channel_default_assignments'] = $sales_channel_default_assignments;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \OpenAPI\Client\Model\Tax|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \OpenAPI\Client\Model\Tax|null $tax tax
     *
     * @return self
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

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


