<?php
/**
 * NewsletterRecipientTag
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
 * NewsletterRecipientTag Class Doc Comment
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
class NewsletterRecipientTag implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewsletterRecipientTag';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'newsletter_recipient_id' => 'string',
        'tag_id' => 'string',
        'newsletter_recipient' => '\OpenAPI\Client\Model\NewsletterRecipient',
        'tag' => '\OpenAPI\Client\Model\Tag'
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
        'newsletter_recipient_id' => null,
        'tag_id' => null,
        'newsletter_recipient' => null,
        'tag' => null
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
        'newsletter_recipient_id' => 'newsletterRecipientId',
        'tag_id' => 'tagId',
        'newsletter_recipient' => 'newsletterRecipient',
        'tag' => 'tag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'newsletter_recipient_id' => 'setNewsletterRecipientId',
        'tag_id' => 'setTagId',
        'newsletter_recipient' => 'setNewsletterRecipient',
        'tag' => 'setTag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'newsletter_recipient_id' => 'getNewsletterRecipientId',
        'tag_id' => 'getTagId',
        'newsletter_recipient' => 'getNewsletterRecipient',
        'tag' => 'getTag'
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
        $this->container['newsletter_recipient_id'] = $data['newsletter_recipient_id'] ?? null;
        $this->container['tag_id'] = $data['tag_id'] ?? null;
        $this->container['newsletter_recipient'] = $data['newsletter_recipient'] ?? null;
        $this->container['tag'] = $data['tag'] ?? null;
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

        if ($this->container['newsletter_recipient_id'] === null) {
            $invalidProperties[] = "'newsletter_recipient_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['newsletter_recipient_id'])) {
            $invalidProperties[] = "invalid value for 'newsletter_recipient_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['tag_id'] === null) {
            $invalidProperties[] = "'tag_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['tag_id'])) {
            $invalidProperties[] = "invalid value for 'tag_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
            throw new \InvalidArgumentException("invalid value for $id when calling NewsletterRecipientTag., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets newsletter_recipient_id
     *
     * @return string
     */
    public function getNewsletterRecipientId()
    {
        return $this->container['newsletter_recipient_id'];
    }

    /**
     * Sets newsletter_recipient_id
     *
     * @param string $newsletter_recipient_id newsletter_recipient_id
     *
     * @return self
     */
    public function setNewsletterRecipientId($newsletter_recipient_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $newsletter_recipient_id))) {
            throw new \InvalidArgumentException("invalid value for $newsletter_recipient_id when calling NewsletterRecipientTag., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['newsletter_recipient_id'] = $newsletter_recipient_id;

        return $this;
    }

    /**
     * Gets tag_id
     *
     * @return string
     */
    public function getTagId()
    {
        return $this->container['tag_id'];
    }

    /**
     * Sets tag_id
     *
     * @param string $tag_id tag_id
     *
     * @return self
     */
    public function setTagId($tag_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $tag_id))) {
            throw new \InvalidArgumentException("invalid value for $tag_id when calling NewsletterRecipientTag., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['tag_id'] = $tag_id;

        return $this;
    }

    /**
     * Gets newsletter_recipient
     *
     * @return \OpenAPI\Client\Model\NewsletterRecipient|null
     */
    public function getNewsletterRecipient()
    {
        return $this->container['newsletter_recipient'];
    }

    /**
     * Sets newsletter_recipient
     *
     * @param \OpenAPI\Client\Model\NewsletterRecipient|null $newsletter_recipient newsletter_recipient
     *
     * @return self
     */
    public function setNewsletterRecipient($newsletter_recipient)
    {
        $this->container['newsletter_recipient'] = $newsletter_recipient;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return \OpenAPI\Client\Model\Tag|null
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param \OpenAPI\Client\Model\Tag|null $tag tag
     *
     * @return self
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

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


