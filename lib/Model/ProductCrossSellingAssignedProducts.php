<?php
/**
 * ProductCrossSellingAssignedProducts
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
 * ProductCrossSellingAssignedProducts Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.2.0.0
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductCrossSellingAssignedProducts implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductCrossSellingAssignedProducts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'cross_selling_id' => 'string',
        'product_id' => 'string',
        'product_version_id' => 'string',
        'position' => 'int',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'product' => '\OpenAPI\Client\Model\Product',
        'cross_selling' => '\OpenAPI\Client\Model\ProductCrossSelling'
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
        'cross_selling_id' => null,
        'product_id' => null,
        'product_version_id' => null,
        'position' => 'int64',
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'product' => null,
        'cross_selling' => null
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
        'cross_selling_id' => 'crossSellingId',
        'product_id' => 'productId',
        'product_version_id' => 'productVersionId',
        'position' => 'position',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'product' => 'product',
        'cross_selling' => 'crossSelling'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'cross_selling_id' => 'setCrossSellingId',
        'product_id' => 'setProductId',
        'product_version_id' => 'setProductVersionId',
        'position' => 'setPosition',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'product' => 'setProduct',
        'cross_selling' => 'setCrossSelling'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'cross_selling_id' => 'getCrossSellingId',
        'product_id' => 'getProductId',
        'product_version_id' => 'getProductVersionId',
        'position' => 'getPosition',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'product' => 'getProduct',
        'cross_selling' => 'getCrossSelling'
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
        $this->container['cross_selling_id'] = $data['cross_selling_id'] ?? null;
        $this->container['product_id'] = $data['product_id'] ?? null;
        $this->container['product_version_id'] = $data['product_version_id'] ?? null;
        $this->container['position'] = $data['position'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['product'] = $data['product'] ?? null;
        $this->container['cross_selling'] = $data['cross_selling'] ?? null;
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

        if ($this->container['cross_selling_id'] === null) {
            $invalidProperties[] = "'cross_selling_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['cross_selling_id'])) {
            $invalidProperties[] = "invalid value for 'cross_selling_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['product_id'])) {
            $invalidProperties[] = "invalid value for 'product_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['product_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['product_version_id'])) {
            $invalidProperties[] = "invalid value for 'product_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
            throw new \InvalidArgumentException("invalid value for $id when calling ProductCrossSellingAssignedProducts., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets cross_selling_id
     *
     * @return string
     */
    public function getCrossSellingId()
    {
        return $this->container['cross_selling_id'];
    }

    /**
     * Sets cross_selling_id
     *
     * @param string $cross_selling_id cross_selling_id
     *
     * @return self
     */
    public function setCrossSellingId($cross_selling_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $cross_selling_id))) {
            throw new \InvalidArgumentException("invalid value for $cross_selling_id when calling ProductCrossSellingAssignedProducts., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['cross_selling_id'] = $cross_selling_id;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id product_id
     *
     * @return self
     */
    public function setProductId($product_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $product_id))) {
            throw new \InvalidArgumentException("invalid value for $product_id when calling ProductCrossSellingAssignedProducts., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets product_version_id
     *
     * @return string|null
     */
    public function getProductVersionId()
    {
        return $this->container['product_version_id'];
    }

    /**
     * Sets product_version_id
     *
     * @param string|null $product_version_id product_version_id
     *
     * @return self
     */
    public function setProductVersionId($product_version_id)
    {

        if (!is_null($product_version_id) && (!preg_match("/^[0-9a-f]{32}$/", $product_version_id))) {
            throw new \InvalidArgumentException("invalid value for $product_version_id when calling ProductCrossSellingAssignedProducts., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['product_version_id'] = $product_version_id;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int|null $position position
     *
     * @return self
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

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
     * Gets product
     *
     * @return \OpenAPI\Client\Model\Product|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \OpenAPI\Client\Model\Product|null $product product
     *
     * @return self
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets cross_selling
     *
     * @return \OpenAPI\Client\Model\ProductCrossSelling|null
     */
    public function getCrossSelling()
    {
        return $this->container['cross_selling'];
    }

    /**
     * Sets cross_selling
     *
     * @param \OpenAPI\Client\Model\ProductCrossSelling|null $cross_selling cross_selling
     *
     * @return self
     */
    public function setCrossSelling($cross_selling)
    {
        $this->container['cross_selling'] = $cross_selling;

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


