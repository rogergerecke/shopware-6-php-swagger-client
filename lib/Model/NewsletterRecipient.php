<?php
/**
 * NewsletterRecipient
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
 * NewsletterRecipient Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.0.0.0
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NewsletterRecipient implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NewsletterRecipient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'email' => 'string',
'title' => 'string',
'first_name' => 'string',
'last_name' => 'string',
'zip_code' => 'string',
'city' => 'string',
'street' => 'string',
'status' => 'string',
'hash' => 'string',
'custom_fields' => 'object',
'confirmed_at' => '\DateTime',
'salutation_id' => 'string',
'language_id' => 'string',
'sales_channel_id' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'tags' => '\Swagger\Client\Model\Tag',
'salutation' => '\Swagger\Client\Model\Salutation',
'language' => '\Swagger\Client\Model\Language',
'sales_channel' => '\Swagger\Client\Model\SalesChannel'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'email' => null,
'title' => null,
'first_name' => null,
'last_name' => null,
'zip_code' => null,
'city' => null,
'street' => null,
'status' => null,
'hash' => null,
'custom_fields' => null,
'confirmed_at' => 'date-time',
'salutation_id' => null,
'language_id' => null,
'sales_channel_id' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'tags' => null,
'salutation' => null,
'language' => null,
'sales_channel' => null    ];

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
'email' => 'email',
'title' => 'title',
'first_name' => 'firstName',
'last_name' => 'lastName',
'zip_code' => 'zipCode',
'city' => 'city',
'street' => 'street',
'status' => 'status',
'hash' => 'hash',
'custom_fields' => 'customFields',
'confirmed_at' => 'confirmedAt',
'salutation_id' => 'salutationId',
'language_id' => 'languageId',
'sales_channel_id' => 'salesChannelId',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'tags' => 'tags',
'salutation' => 'salutation',
'language' => 'language',
'sales_channel' => 'salesChannel'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'email' => 'setEmail',
'title' => 'setTitle',
'first_name' => 'setFirstName',
'last_name' => 'setLastName',
'zip_code' => 'setZipCode',
'city' => 'setCity',
'street' => 'setStreet',
'status' => 'setStatus',
'hash' => 'setHash',
'custom_fields' => 'setCustomFields',
'confirmed_at' => 'setConfirmedAt',
'salutation_id' => 'setSalutationId',
'language_id' => 'setLanguageId',
'sales_channel_id' => 'setSalesChannelId',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'tags' => 'setTags',
'salutation' => 'setSalutation',
'language' => 'setLanguage',
'sales_channel' => 'setSalesChannel'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'email' => 'getEmail',
'title' => 'getTitle',
'first_name' => 'getFirstName',
'last_name' => 'getLastName',
'zip_code' => 'getZipCode',
'city' => 'getCity',
'street' => 'getStreet',
'status' => 'getStatus',
'hash' => 'getHash',
'custom_fields' => 'getCustomFields',
'confirmed_at' => 'getConfirmedAt',
'salutation_id' => 'getSalutationId',
'language_id' => 'getLanguageId',
'sales_channel_id' => 'getSalesChannelId',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'tags' => 'getTags',
'salutation' => 'getSalutation',
'language' => 'getLanguage',
'sales_channel' => 'getSalesChannel'    ];

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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['confirmed_at'] = isset($data['confirmed_at']) ? $data['confirmed_at'] : null;
        $this->container['salutation_id'] = isset($data['salutation_id']) ? $data['salutation_id'] : null;
        $this->container['language_id'] = isset($data['language_id']) ? $data['language_id'] : null;
        $this->container['sales_channel_id'] = isset($data['sales_channel_id']) ? $data['sales_channel_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['sales_channel'] = isset($data['sales_channel']) ? $data['sales_channel'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['hash'] === null) {
            $invalidProperties[] = "'hash' can't be null";
        }
        if ($this->container['language_id'] === null) {
            $invalidProperties[] = "'language_id' can't be null";
        }
        if ($this->container['sales_channel_id'] === null) {
            $invalidProperties[] = "'sales_channel_id' can't be null";
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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets zip_code
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string $zip_code zip_code
     *
     * @return $this
     */
    public function setZipCode($zip_code)
    {
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string $hash hash
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return object
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param object $custom_fields custom_fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets confirmed_at
     *
     * @return \DateTime
     */
    public function getConfirmedAt()
    {
        return $this->container['confirmed_at'];
    }

    /**
     * Sets confirmed_at
     *
     * @param \DateTime $confirmed_at confirmed_at
     *
     * @return $this
     */
    public function setConfirmedAt($confirmed_at)
    {
        $this->container['confirmed_at'] = $confirmed_at;

        return $this;
    }

    /**
     * Gets salutation_id
     *
     * @return string
     */
    public function getSalutationId()
    {
        return $this->container['salutation_id'];
    }

    /**
     * Sets salutation_id
     *
     * @param string $salutation_id salutation_id
     *
     * @return $this
     */
    public function setSalutationId($salutation_id)
    {
        $this->container['salutation_id'] = $salutation_id;

        return $this;
    }

    /**
     * Gets language_id
     *
     * @return string
     */
    public function getLanguageId()
    {
        return $this->container['language_id'];
    }

    /**
     * Sets language_id
     *
     * @param string $language_id language_id
     *
     * @return $this
     */
    public function setLanguageId($language_id)
    {
        $this->container['language_id'] = $language_id;

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
     * @return $this
     */
    public function setSalesChannelId($sales_channel_id)
    {
        $this->container['sales_channel_id'] = $sales_channel_id;

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
     * Gets tags
     *
     * @return \Swagger\Client\Model\Tag
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Swagger\Client\Model\Tag $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets salutation
     *
     * @return \Swagger\Client\Model\Salutation
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param \Swagger\Client\Model\Salutation $salutation salutation
     *
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \Swagger\Client\Model\Language
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \Swagger\Client\Model\Language $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets sales_channel
     *
     * @return \Swagger\Client\Model\SalesChannel
     */
    public function getSalesChannel()
    {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel
     *
     * @param \Swagger\Client\Model\SalesChannel $sales_channel sales_channel
     *
     * @return $this
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
