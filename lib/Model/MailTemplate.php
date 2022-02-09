<?php
/**
 * MailTemplate
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
 * MailTemplate Class Doc Comment
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
class MailTemplate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MailTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'mail_template_type_id' => 'string',
        'system_default' => 'bool',
        'sender_name' => 'string',
        'description' => 'string',
        'subject' => 'string',
        'content_html' => 'string',
        'content_plain' => 'string',
        'custom_fields' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'translated' => 'object',
        'mail_template_type' => '\OpenAPI\Client\Model\MailTemplateType',
        'media' => '\OpenAPI\Client\Model\MailTemplateMedia'
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
        'mail_template_type_id' => null,
        'system_default' => null,
        'sender_name' => null,
        'description' => null,
        'subject' => null,
        'content_html' => null,
        'content_plain' => null,
        'custom_fields' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'translated' => null,
        'mail_template_type' => null,
        'media' => null
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
        'mail_template_type_id' => 'mailTemplateTypeId',
        'system_default' => 'systemDefault',
        'sender_name' => 'senderName',
        'description' => 'description',
        'subject' => 'subject',
        'content_html' => 'contentHtml',
        'content_plain' => 'contentPlain',
        'custom_fields' => 'customFields',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'translated' => 'translated',
        'mail_template_type' => 'mailTemplateType',
        'media' => 'media'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'mail_template_type_id' => 'setMailTemplateTypeId',
        'system_default' => 'setSystemDefault',
        'sender_name' => 'setSenderName',
        'description' => 'setDescription',
        'subject' => 'setSubject',
        'content_html' => 'setContentHtml',
        'content_plain' => 'setContentPlain',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'translated' => 'setTranslated',
        'mail_template_type' => 'setMailTemplateType',
        'media' => 'setMedia'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'mail_template_type_id' => 'getMailTemplateTypeId',
        'system_default' => 'getSystemDefault',
        'sender_name' => 'getSenderName',
        'description' => 'getDescription',
        'subject' => 'getSubject',
        'content_html' => 'getContentHtml',
        'content_plain' => 'getContentPlain',
        'custom_fields' => 'getCustomFields',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'translated' => 'getTranslated',
        'mail_template_type' => 'getMailTemplateType',
        'media' => 'getMedia'
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
        $this->container['mail_template_type_id'] = $data['mail_template_type_id'] ?? null;
        $this->container['system_default'] = $data['system_default'] ?? null;
        $this->container['sender_name'] = $data['sender_name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['content_html'] = $data['content_html'] ?? null;
        $this->container['content_plain'] = $data['content_plain'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['translated'] = $data['translated'] ?? null;
        $this->container['mail_template_type'] = $data['mail_template_type'] ?? null;
        $this->container['media'] = $data['media'] ?? null;
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

        if ($this->container['mail_template_type_id'] === null) {
            $invalidProperties[] = "'mail_template_type_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['mail_template_type_id'])) {
            $invalidProperties[] = "invalid value for 'mail_template_type_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ($this->container['content_html'] === null) {
            $invalidProperties[] = "'content_html' can't be null";
        }
        if ($this->container['content_plain'] === null) {
            $invalidProperties[] = "'content_plain' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $id when calling MailTemplate., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets mail_template_type_id
     *
     * @return string
     */
    public function getMailTemplateTypeId()
    {
        return $this->container['mail_template_type_id'];
    }

    /**
     * Sets mail_template_type_id
     *
     * @param string $mail_template_type_id mail_template_type_id
     *
     * @return self
     */
    public function setMailTemplateTypeId($mail_template_type_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $mail_template_type_id))) {
            throw new \InvalidArgumentException("invalid value for $mail_template_type_id when calling MailTemplate., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['mail_template_type_id'] = $mail_template_type_id;

        return $this;
    }

    /**
     * Gets system_default
     *
     * @return bool|null
     */
    public function getSystemDefault()
    {
        return $this->container['system_default'];
    }

    /**
     * Sets system_default
     *
     * @param bool|null $system_default system_default
     *
     * @return self
     */
    public function setSystemDefault($system_default)
    {
        $this->container['system_default'] = $system_default;

        return $this;
    }

    /**
     * Gets sender_name
     *
     * @return string|null
     */
    public function getSenderName()
    {
        return $this->container['sender_name'];
    }

    /**
     * Sets sender_name
     *
     * @param string|null $sender_name sender_name
     *
     * @return self
     */
    public function setSenderName($sender_name)
    {
        $this->container['sender_name'] = $sender_name;

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
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets content_html
     *
     * @return string
     */
    public function getContentHtml()
    {
        return $this->container['content_html'];
    }

    /**
     * Sets content_html
     *
     * @param string $content_html content_html
     *
     * @return self
     */
    public function setContentHtml($content_html)
    {
        $this->container['content_html'] = $content_html;

        return $this;
    }

    /**
     * Gets content_plain
     *
     * @return string
     */
    public function getContentPlain()
    {
        return $this->container['content_plain'];
    }

    /**
     * Sets content_plain
     *
     * @param string $content_plain content_plain
     *
     * @return self
     */
    public function setContentPlain($content_plain)
    {
        $this->container['content_plain'] = $content_plain;

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
     * Gets mail_template_type
     *
     * @return \OpenAPI\Client\Model\MailTemplateType|null
     */
    public function getMailTemplateType()
    {
        return $this->container['mail_template_type'];
    }

    /**
     * Sets mail_template_type
     *
     * @param \OpenAPI\Client\Model\MailTemplateType|null $mail_template_type mail_template_type
     *
     * @return self
     */
    public function setMailTemplateType($mail_template_type)
    {
        $this->container['mail_template_type'] = $mail_template_type;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \OpenAPI\Client\Model\MailTemplateMedia|null
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \OpenAPI\Client\Model\MailTemplateMedia|null $media media
     *
     * @return self
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

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


