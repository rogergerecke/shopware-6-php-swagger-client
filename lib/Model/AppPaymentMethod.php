<?php
/**
 * AppPaymentMethod
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Shopware Admin API
 *
 * This endpoint reference contains an overview of all endpoints comprising the Shopware Admin API.  For a better overview, all CRUD-endpoints are hidden by default. If you want to show also CRUD-endpoints add the query parameter `type=jsonapi`.
 *
 * OpenAPI spec version: 6.4.7.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.29
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * AppPaymentMethod Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.4.1.0
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppPaymentMethod implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AppPaymentMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'app_name' => 'string',
'identifier' => 'string',
'pay_url' => 'string',
'finalize_url' => 'string',
'app_id' => 'string',
'original_media_id' => 'string',
'payment_method_id' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'app' => '\Swagger\Client\Model\App',
'original_media' => '\Swagger\Client\Model\Media',
'payment_method' => '\Swagger\Client\Model\PaymentMethod'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'app_name' => null,
'identifier' => null,
'pay_url' => null,
'finalize_url' => null,
'app_id' => null,
'original_media_id' => null,
'payment_method_id' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'app' => null,
'original_media' => null,
'payment_method' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
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
'identifier' => 'identifier',
'pay_url' => 'payUrl',
'finalize_url' => 'finalizeUrl',
'app_id' => 'appId',
'original_media_id' => 'originalMediaId',
'payment_method_id' => 'paymentMethodId',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'app' => 'app',
'original_media' => 'originalMedia',
'payment_method' => 'paymentMethod'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'app_name' => 'setAppName',
'identifier' => 'setIdentifier',
'pay_url' => 'setPayUrl',
'finalize_url' => 'setFinalizeUrl',
'app_id' => 'setAppId',
'original_media_id' => 'setOriginalMediaId',
'payment_method_id' => 'setPaymentMethodId',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'app' => 'setApp',
'original_media' => 'setOriginalMedia',
'payment_method' => 'setPaymentMethod'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'app_name' => 'getAppName',
'identifier' => 'getIdentifier',
'pay_url' => 'getPayUrl',
'finalize_url' => 'getFinalizeUrl',
'app_id' => 'getAppId',
'original_media_id' => 'getOriginalMediaId',
'payment_method_id' => 'getPaymentMethodId',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'app' => 'getApp',
'original_media' => 'getOriginalMedia',
'payment_method' => 'getPaymentMethod'    ];

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
        return self::$swaggerModelName;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['app_name'] = isset($data['app_name']) ? $data['app_name'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['pay_url'] = isset($data['pay_url']) ? $data['pay_url'] : null;
        $this->container['finalize_url'] = isset($data['finalize_url']) ? $data['finalize_url'] : null;
        $this->container['app_id'] = isset($data['app_id']) ? $data['app_id'] : null;
        $this->container['original_media_id'] = isset($data['original_media_id']) ? $data['original_media_id'] : null;
        $this->container['payment_method_id'] = isset($data['payment_method_id']) ? $data['payment_method_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['original_media'] = isset($data['original_media']) ? $data['original_media'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['app_name'] === null) {
            $invalidProperties[] = "'app_name' can't be null";
        }
        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
        }
        if ($this->container['payment_method_id'] === null) {
            $invalidProperties[] = "'payment_method_id' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets app_name
     *
     * @return string
     */
    public function getAppName()
    {
        return $this->container['app_name'];
    }

    /**
     * Sets app_name
     *
     * @param string $app_name app_name
     *
     * @return $this
     */
    public function setAppName($app_name)
    {
        $this->container['app_name'] = $app_name;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier identifier
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets pay_url
     *
     * @return string
     */
    public function getPayUrl()
    {
        return $this->container['pay_url'];
    }

    /**
     * Sets pay_url
     *
     * @param string $pay_url pay_url
     *
     * @return $this
     */
    public function setPayUrl($pay_url)
    {
        $this->container['pay_url'] = $pay_url;

        return $this;
    }

    /**
     * Gets finalize_url
     *
     * @return string
     */
    public function getFinalizeUrl()
    {
        return $this->container['finalize_url'];
    }

    /**
     * Sets finalize_url
     *
     * @param string $finalize_url finalize_url
     *
     * @return $this
     */
    public function setFinalizeUrl($finalize_url)
    {
        $this->container['finalize_url'] = $finalize_url;

        return $this;
    }

    /**
     * Gets app_id
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->container['app_id'];
    }

    /**
     * Sets app_id
     *
     * @param string $app_id app_id
     *
     * @return $this
     */
    public function setAppId($app_id)
    {
        $this->container['app_id'] = $app_id;

        return $this;
    }

    /**
     * Gets original_media_id
     *
     * @return string
     */
    public function getOriginalMediaId()
    {
        return $this->container['original_media_id'];
    }

    /**
     * Sets original_media_id
     *
     * @param string $original_media_id original_media_id
     *
     * @return $this
     */
    public function setOriginalMediaId($original_media_id)
    {
        $this->container['original_media_id'] = $original_media_id;

        return $this;
    }

    /**
     * Gets payment_method_id
     *
     * @return string
     */
    public function getPaymentMethodId()
    {
        return $this->container['payment_method_id'];
    }

    /**
     * Sets payment_method_id
     *
     * @param string $payment_method_id payment_method_id
     *
     * @return $this
     */
    public function setPaymentMethodId($payment_method_id)
    {
        $this->container['payment_method_id'] = $payment_method_id;

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
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets app
     *
     * @return \Swagger\Client\Model\App
     */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
     * Sets app
     *
     * @param \Swagger\Client\Model\App $app app
     *
     * @return $this
     */
    public function setApp($app)
    {
        $this->container['app'] = $app;

        return $this;
    }

    /**
     * Gets original_media
     *
     * @return \Swagger\Client\Model\Media
     */
    public function getOriginalMedia()
    {
        return $this->container['original_media'];
    }

    /**
     * Sets original_media
     *
     * @param \Swagger\Client\Model\Media $original_media original_media
     *
     * @return $this
     */
    public function setOriginalMedia($original_media)
    {
        $this->container['original_media'] = $original_media;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \Swagger\Client\Model\PaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \Swagger\Client\Model\PaymentMethod $payment_method payment_method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
