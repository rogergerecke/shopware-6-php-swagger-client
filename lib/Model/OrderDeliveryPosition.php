<?php
/**
 * OrderDeliveryPosition
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
 * OrderDeliveryPosition Class Doc Comment
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
class OrderDeliveryPosition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderDeliveryPosition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'version_id' => 'string',
        'order_delivery_id' => 'string',
        'order_delivery_version_id' => 'string',
        'order_line_item_id' => 'string',
        'order_line_item_version_id' => 'string',
        'price' => '\OpenAPI\Client\Model\OrderShippingCosts',
        'unit_price' => 'float',
        'total_price' => 'float',
        'quantity' => 'int',
        'custom_fields' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'order_delivery' => '\OpenAPI\Client\Model\OrderDelivery',
        'order_line_item' => '\OpenAPI\Client\Model\OrderLineItem'
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
        'version_id' => null,
        'order_delivery_id' => null,
        'order_delivery_version_id' => null,
        'order_line_item_id' => null,
        'order_line_item_version_id' => null,
        'price' => null,
        'unit_price' => 'float',
        'total_price' => 'float',
        'quantity' => 'int64',
        'custom_fields' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'order_delivery' => null,
        'order_line_item' => null
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
        'version_id' => 'versionId',
        'order_delivery_id' => 'orderDeliveryId',
        'order_delivery_version_id' => 'orderDeliveryVersionId',
        'order_line_item_id' => 'orderLineItemId',
        'order_line_item_version_id' => 'orderLineItemVersionId',
        'price' => 'price',
        'unit_price' => 'unitPrice',
        'total_price' => 'totalPrice',
        'quantity' => 'quantity',
        'custom_fields' => 'customFields',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'order_delivery' => 'orderDelivery',
        'order_line_item' => 'orderLineItem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'version_id' => 'setVersionId',
        'order_delivery_id' => 'setOrderDeliveryId',
        'order_delivery_version_id' => 'setOrderDeliveryVersionId',
        'order_line_item_id' => 'setOrderLineItemId',
        'order_line_item_version_id' => 'setOrderLineItemVersionId',
        'price' => 'setPrice',
        'unit_price' => 'setUnitPrice',
        'total_price' => 'setTotalPrice',
        'quantity' => 'setQuantity',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'order_delivery' => 'setOrderDelivery',
        'order_line_item' => 'setOrderLineItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'version_id' => 'getVersionId',
        'order_delivery_id' => 'getOrderDeliveryId',
        'order_delivery_version_id' => 'getOrderDeliveryVersionId',
        'order_line_item_id' => 'getOrderLineItemId',
        'order_line_item_version_id' => 'getOrderLineItemVersionId',
        'price' => 'getPrice',
        'unit_price' => 'getUnitPrice',
        'total_price' => 'getTotalPrice',
        'quantity' => 'getQuantity',
        'custom_fields' => 'getCustomFields',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'order_delivery' => 'getOrderDelivery',
        'order_line_item' => 'getOrderLineItem'
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
        $this->container['version_id'] = $data['version_id'] ?? null;
        $this->container['order_delivery_id'] = $data['order_delivery_id'] ?? null;
        $this->container['order_delivery_version_id'] = $data['order_delivery_version_id'] ?? null;
        $this->container['order_line_item_id'] = $data['order_line_item_id'] ?? null;
        $this->container['order_line_item_version_id'] = $data['order_line_item_version_id'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['unit_price'] = $data['unit_price'] ?? null;
        $this->container['total_price'] = $data['total_price'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['order_delivery'] = $data['order_delivery'] ?? null;
        $this->container['order_line_item'] = $data['order_line_item'] ?? null;
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

        if (!is_null($this->container['version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['version_id'])) {
            $invalidProperties[] = "invalid value for 'version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['order_delivery_id'] === null) {
            $invalidProperties[] = "'order_delivery_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['order_delivery_id'])) {
            $invalidProperties[] = "invalid value for 'order_delivery_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['order_delivery_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['order_delivery_version_id'])) {
            $invalidProperties[] = "invalid value for 'order_delivery_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['order_line_item_id'] === null) {
            $invalidProperties[] = "'order_line_item_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['order_line_item_id'])) {
            $invalidProperties[] = "invalid value for 'order_line_item_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['order_line_item_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['order_line_item_version_id'])) {
            $invalidProperties[] = "invalid value for 'order_line_item_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
            throw new \InvalidArgumentException("invalid value for $id when calling OrderDeliveryPosition., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets version_id
     *
     * @return string|null
     */
    public function getVersionId()
    {
        return $this->container['version_id'];
    }

    /**
     * Sets version_id
     *
     * @param string|null $version_id version_id
     *
     * @return self
     */
    public function setVersionId($version_id)
    {

        if (!is_null($version_id) && (!preg_match("/^[0-9a-f]{32}$/", $version_id))) {
            throw new \InvalidArgumentException("invalid value for $version_id when calling OrderDeliveryPosition., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['version_id'] = $version_id;

        return $this;
    }

    /**
     * Gets order_delivery_id
     *
     * @return string
     */
    public function getOrderDeliveryId()
    {
        return $this->container['order_delivery_id'];
    }

    /**
     * Sets order_delivery_id
     *
     * @param string $order_delivery_id order_delivery_id
     *
     * @return self
     */
    public function setOrderDeliveryId($order_delivery_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $order_delivery_id))) {
            throw new \InvalidArgumentException("invalid value for $order_delivery_id when calling OrderDeliveryPosition., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['order_delivery_id'] = $order_delivery_id;

        return $this;
    }

    /**
     * Gets order_delivery_version_id
     *
     * @return string|null
     */
    public function getOrderDeliveryVersionId()
    {
        return $this->container['order_delivery_version_id'];
    }

    /**
     * Sets order_delivery_version_id
     *
     * @param string|null $order_delivery_version_id order_delivery_version_id
     *
     * @return self
     */
    public function setOrderDeliveryVersionId($order_delivery_version_id)
    {

        if (!is_null($order_delivery_version_id) && (!preg_match("/^[0-9a-f]{32}$/", $order_delivery_version_id))) {
            throw new \InvalidArgumentException("invalid value for $order_delivery_version_id when calling OrderDeliveryPosition., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['order_delivery_version_id'] = $order_delivery_version_id;

        return $this;
    }

    /**
     * Gets order_line_item_id
     *
     * @return string
     */
    public function getOrderLineItemId()
    {
        return $this->container['order_line_item_id'];
    }

    /**
     * Sets order_line_item_id
     *
     * @param string $order_line_item_id order_line_item_id
     *
     * @return self
     */
    public function setOrderLineItemId($order_line_item_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $order_line_item_id))) {
            throw new \InvalidArgumentException("invalid value for $order_line_item_id when calling OrderDeliveryPosition., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['order_line_item_id'] = $order_line_item_id;

        return $this;
    }

    /**
     * Gets order_line_item_version_id
     *
     * @return string|null
     */
    public function getOrderLineItemVersionId()
    {
        return $this->container['order_line_item_version_id'];
    }

    /**
     * Sets order_line_item_version_id
     *
     * @param string|null $order_line_item_version_id order_line_item_version_id
     *
     * @return self
     */
    public function setOrderLineItemVersionId($order_line_item_version_id)
    {

        if (!is_null($order_line_item_version_id) && (!preg_match("/^[0-9a-f]{32}$/", $order_line_item_version_id))) {
            throw new \InvalidArgumentException("invalid value for $order_line_item_version_id when calling OrderDeliveryPosition., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['order_line_item_version_id'] = $order_line_item_version_id;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \OpenAPI\Client\Model\OrderShippingCosts|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \OpenAPI\Client\Model\OrderShippingCosts|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return float|null
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float|null $unit_price unit_price
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return float|null
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param float|null $total_price total_price
     *
     * @return self
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
     * Gets order_delivery
     *
     * @return \OpenAPI\Client\Model\OrderDelivery|null
     */
    public function getOrderDelivery()
    {
        return $this->container['order_delivery'];
    }

    /**
     * Sets order_delivery
     *
     * @param \OpenAPI\Client\Model\OrderDelivery|null $order_delivery order_delivery
     *
     * @return self
     */
    public function setOrderDelivery($order_delivery)
    {
        $this->container['order_delivery'] = $order_delivery;

        return $this;
    }

    /**
     * Gets order_line_item
     *
     * @return \OpenAPI\Client\Model\OrderLineItem|null
     */
    public function getOrderLineItem()
    {
        return $this->container['order_line_item'];
    }

    /**
     * Sets order_line_item
     *
     * @param \OpenAPI\Client\Model\OrderLineItem|null $order_line_item order_line_item
     *
     * @return self
     */
    public function setOrderLineItem($order_line_item)
    {
        $this->container['order_line_item'] = $order_line_item;

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


