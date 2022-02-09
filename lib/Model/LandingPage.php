<?php
/**
 * LandingPage
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
 * LandingPage Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.4.0.0
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LandingPage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LandingPage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'version_id' => 'string',
        'active' => 'bool',
        'name' => 'string',
        'custom_fields' => 'object',
        'slot_config' => 'object',
        'meta_title' => 'string',
        'meta_description' => 'string',
        'keywords' => 'string',
        'url' => 'string',
        'cms_page_id' => 'string',
        'cms_page_version_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'translated' => 'object',
        'tags' => '\OpenAPI\Client\Model\Tag',
        'cms_page' => '\OpenAPI\Client\Model\CmsPage',
        'sales_channels' => '\OpenAPI\Client\Model\SalesChannel',
        'seo_urls' => '\OpenAPI\Client\Model\SeoUrl'
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
        'active' => null,
        'name' => null,
        'custom_fields' => null,
        'slot_config' => null,
        'meta_title' => null,
        'meta_description' => null,
        'keywords' => null,
        'url' => null,
        'cms_page_id' => null,
        'cms_page_version_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'translated' => null,
        'tags' => null,
        'cms_page' => null,
        'sales_channels' => null,
        'seo_urls' => null
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
        'active' => 'active',
        'name' => 'name',
        'custom_fields' => 'customFields',
        'slot_config' => 'slotConfig',
        'meta_title' => 'metaTitle',
        'meta_description' => 'metaDescription',
        'keywords' => 'keywords',
        'url' => 'url',
        'cms_page_id' => 'cmsPageId',
        'cms_page_version_id' => 'cmsPageVersionId',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'translated' => 'translated',
        'tags' => 'tags',
        'cms_page' => 'cmsPage',
        'sales_channels' => 'salesChannels',
        'seo_urls' => 'seoUrls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'version_id' => 'setVersionId',
        'active' => 'setActive',
        'name' => 'setName',
        'custom_fields' => 'setCustomFields',
        'slot_config' => 'setSlotConfig',
        'meta_title' => 'setMetaTitle',
        'meta_description' => 'setMetaDescription',
        'keywords' => 'setKeywords',
        'url' => 'setUrl',
        'cms_page_id' => 'setCmsPageId',
        'cms_page_version_id' => 'setCmsPageVersionId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'translated' => 'setTranslated',
        'tags' => 'setTags',
        'cms_page' => 'setCmsPage',
        'sales_channels' => 'setSalesChannels',
        'seo_urls' => 'setSeoUrls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'version_id' => 'getVersionId',
        'active' => 'getActive',
        'name' => 'getName',
        'custom_fields' => 'getCustomFields',
        'slot_config' => 'getSlotConfig',
        'meta_title' => 'getMetaTitle',
        'meta_description' => 'getMetaDescription',
        'keywords' => 'getKeywords',
        'url' => 'getUrl',
        'cms_page_id' => 'getCmsPageId',
        'cms_page_version_id' => 'getCmsPageVersionId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'translated' => 'getTranslated',
        'tags' => 'getTags',
        'cms_page' => 'getCmsPage',
        'sales_channels' => 'getSalesChannels',
        'seo_urls' => 'getSeoUrls'
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
        $this->container['active'] = $data['active'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['slot_config'] = $data['slot_config'] ?? null;
        $this->container['meta_title'] = $data['meta_title'] ?? null;
        $this->container['meta_description'] = $data['meta_description'] ?? null;
        $this->container['keywords'] = $data['keywords'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['cms_page_id'] = $data['cms_page_id'] ?? null;
        $this->container['cms_page_version_id'] = $data['cms_page_version_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['translated'] = $data['translated'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['cms_page'] = $data['cms_page'] ?? null;
        $this->container['sales_channels'] = $data['sales_channels'] ?? null;
        $this->container['seo_urls'] = $data['seo_urls'] ?? null;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if (!is_null($this->container['cms_page_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['cms_page_id'])) {
            $invalidProperties[] = "invalid value for 'cms_page_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['cms_page_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['cms_page_version_id'])) {
            $invalidProperties[] = "invalid value for 'cms_page_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
            throw new \InvalidArgumentException("invalid value for $id when calling LandingPage., must conform to the pattern /^[0-9a-f]{32}$/.");
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
            throw new \InvalidArgumentException("invalid value for $version_id when calling LandingPage., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['version_id'] = $version_id;

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
     * Gets slot_config
     *
     * @return object|null
     */
    public function getSlotConfig()
    {
        return $this->container['slot_config'];
    }

    /**
     * Sets slot_config
     *
     * @param object|null $slot_config slot_config
     *
     * @return self
     */
    public function setSlotConfig($slot_config)
    {
        $this->container['slot_config'] = $slot_config;

        return $this;
    }

    /**
     * Gets meta_title
     *
     * @return string|null
     */
    public function getMetaTitle()
    {
        return $this->container['meta_title'];
    }

    /**
     * Sets meta_title
     *
     * @param string|null $meta_title meta_title
     *
     * @return self
     */
    public function setMetaTitle($meta_title)
    {
        $this->container['meta_title'] = $meta_title;

        return $this;
    }

    /**
     * Gets meta_description
     *
     * @return string|null
     */
    public function getMetaDescription()
    {
        return $this->container['meta_description'];
    }

    /**
     * Sets meta_description
     *
     * @param string|null $meta_description meta_description
     *
     * @return self
     */
    public function setMetaDescription($meta_description)
    {
        $this->container['meta_description'] = $meta_description;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string|null
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string|null $keywords keywords
     *
     * @return self
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

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
     * Gets cms_page_id
     *
     * @return string|null
     */
    public function getCmsPageId()
    {
        return $this->container['cms_page_id'];
    }

    /**
     * Sets cms_page_id
     *
     * @param string|null $cms_page_id cms_page_id
     *
     * @return self
     */
    public function setCmsPageId($cms_page_id)
    {

        if (!is_null($cms_page_id) && (!preg_match("/^[0-9a-f]{32}$/", $cms_page_id))) {
            throw new \InvalidArgumentException("invalid value for $cms_page_id when calling LandingPage., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['cms_page_id'] = $cms_page_id;

        return $this;
    }

    /**
     * Gets cms_page_version_id
     *
     * @return string|null
     */
    public function getCmsPageVersionId()
    {
        return $this->container['cms_page_version_id'];
    }

    /**
     * Sets cms_page_version_id
     *
     * @param string|null $cms_page_version_id cms_page_version_id
     *
     * @return self
     */
    public function setCmsPageVersionId($cms_page_version_id)
    {

        if (!is_null($cms_page_version_id) && (!preg_match("/^[0-9a-f]{32}$/", $cms_page_version_id))) {
            throw new \InvalidArgumentException("invalid value for $cms_page_version_id when calling LandingPage., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['cms_page_version_id'] = $cms_page_version_id;

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
     * Gets cms_page
     *
     * @return \OpenAPI\Client\Model\CmsPage|null
     */
    public function getCmsPage()
    {
        return $this->container['cms_page'];
    }

    /**
     * Sets cms_page
     *
     * @param \OpenAPI\Client\Model\CmsPage|null $cms_page cms_page
     *
     * @return self
     */
    public function setCmsPage($cms_page)
    {
        $this->container['cms_page'] = $cms_page;

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
     * Gets seo_urls
     *
     * @return \OpenAPI\Client\Model\SeoUrl|null
     */
    public function getSeoUrls()
    {
        return $this->container['seo_urls'];
    }

    /**
     * Sets seo_urls
     *
     * @param \OpenAPI\Client\Model\SeoUrl|null $seo_urls seo_urls
     *
     * @return self
     */
    public function setSeoUrls($seo_urls)
    {
        $this->container['seo_urls'] = $seo_urls;

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


