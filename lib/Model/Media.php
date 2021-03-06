<?php
/**
 * Media
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
 * Media Class Doc Comment
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
class Media implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Media';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'user_id' => 'string',
        'media_folder_id' => 'string',
        'mime_type' => 'string',
        'file_extension' => 'string',
        'uploaded_at' => '\DateTime',
        'file_name' => 'string',
        'file_size' => 'int',
        'meta_data' => 'object',
        'media_type' => 'object',
        'alt' => 'string',
        'title' => 'string',
        'url' => 'string',
        'has_file' => 'bool',
        'private' => 'bool',
        'custom_fields' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'translated' => 'object',
        'tags' => '\OpenAPI\Client\Model\Tag',
        'thumbnails' => '\OpenAPI\Client\Model\MediaThumbnail',
        'user' => '\OpenAPI\Client\Model\User',
        'categories' => '\OpenAPI\Client\Model\Category',
        'product_manufacturers' => '\OpenAPI\Client\Model\ProductManufacturer',
        'product_media' => '\OpenAPI\Client\Model\ProductMedia',
        'avatar_user' => '\OpenAPI\Client\Model\User',
        'media_folder' => '\OpenAPI\Client\Model\MediaFolder',
        'property_group_options' => '\OpenAPI\Client\Model\PropertyGroupOption',
        'mail_template_media' => '\OpenAPI\Client\Model\MailTemplateMedia',
        'document_base_configs' => '\OpenAPI\Client\Model\DocumentBaseConfig',
        'shipping_methods' => '\OpenAPI\Client\Model\ShippingMethod',
        'payment_methods' => '\OpenAPI\Client\Model\PaymentMethod',
        'product_configurator_settings' => '\OpenAPI\Client\Model\ProductConfiguratorSetting',
        'order_line_items' => '\OpenAPI\Client\Model\OrderLineItem',
        'cms_blocks' => '\OpenAPI\Client\Model\CmsBlock',
        'cms_sections' => '\OpenAPI\Client\Model\CmsSection',
        'cms_pages' => '\OpenAPI\Client\Model\CmsPage',
        'documents' => '\OpenAPI\Client\Model\Document',
        'app_payment_methods' => '\OpenAPI\Client\Model\AppPaymentMethod'
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
        'user_id' => null,
        'media_folder_id' => null,
        'mime_type' => null,
        'file_extension' => null,
        'uploaded_at' => 'date-time',
        'file_name' => null,
        'file_size' => 'int64',
        'meta_data' => null,
        'media_type' => null,
        'alt' => null,
        'title' => null,
        'url' => null,
        'has_file' => null,
        'private' => null,
        'custom_fields' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'translated' => null,
        'tags' => null,
        'thumbnails' => null,
        'user' => null,
        'categories' => null,
        'product_manufacturers' => null,
        'product_media' => null,
        'avatar_user' => null,
        'media_folder' => null,
        'property_group_options' => null,
        'mail_template_media' => null,
        'document_base_configs' => null,
        'shipping_methods' => null,
        'payment_methods' => null,
        'product_configurator_settings' => null,
        'order_line_items' => null,
        'cms_blocks' => null,
        'cms_sections' => null,
        'cms_pages' => null,
        'documents' => null,
        'app_payment_methods' => null
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
        'user_id' => 'userId',
        'media_folder_id' => 'mediaFolderId',
        'mime_type' => 'mimeType',
        'file_extension' => 'fileExtension',
        'uploaded_at' => 'uploadedAt',
        'file_name' => 'fileName',
        'file_size' => 'fileSize',
        'meta_data' => 'metaData',
        'media_type' => 'mediaType',
        'alt' => 'alt',
        'title' => 'title',
        'url' => 'url',
        'has_file' => 'hasFile',
        'private' => 'private',
        'custom_fields' => 'customFields',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'translated' => 'translated',
        'tags' => 'tags',
        'thumbnails' => 'thumbnails',
        'user' => 'user',
        'categories' => 'categories',
        'product_manufacturers' => 'productManufacturers',
        'product_media' => 'productMedia',
        'avatar_user' => 'avatarUser',
        'media_folder' => 'mediaFolder',
        'property_group_options' => 'propertyGroupOptions',
        'mail_template_media' => 'mailTemplateMedia',
        'document_base_configs' => 'documentBaseConfigs',
        'shipping_methods' => 'shippingMethods',
        'payment_methods' => 'paymentMethods',
        'product_configurator_settings' => 'productConfiguratorSettings',
        'order_line_items' => 'orderLineItems',
        'cms_blocks' => 'cmsBlocks',
        'cms_sections' => 'cmsSections',
        'cms_pages' => 'cmsPages',
        'documents' => 'documents',
        'app_payment_methods' => 'appPaymentMethods'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'media_folder_id' => 'setMediaFolderId',
        'mime_type' => 'setMimeType',
        'file_extension' => 'setFileExtension',
        'uploaded_at' => 'setUploadedAt',
        'file_name' => 'setFileName',
        'file_size' => 'setFileSize',
        'meta_data' => 'setMetaData',
        'media_type' => 'setMediaType',
        'alt' => 'setAlt',
        'title' => 'setTitle',
        'url' => 'setUrl',
        'has_file' => 'setHasFile',
        'private' => 'setPrivate',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'translated' => 'setTranslated',
        'tags' => 'setTags',
        'thumbnails' => 'setThumbnails',
        'user' => 'setUser',
        'categories' => 'setCategories',
        'product_manufacturers' => 'setProductManufacturers',
        'product_media' => 'setProductMedia',
        'avatar_user' => 'setAvatarUser',
        'media_folder' => 'setMediaFolder',
        'property_group_options' => 'setPropertyGroupOptions',
        'mail_template_media' => 'setMailTemplateMedia',
        'document_base_configs' => 'setDocumentBaseConfigs',
        'shipping_methods' => 'setShippingMethods',
        'payment_methods' => 'setPaymentMethods',
        'product_configurator_settings' => 'setProductConfiguratorSettings',
        'order_line_items' => 'setOrderLineItems',
        'cms_blocks' => 'setCmsBlocks',
        'cms_sections' => 'setCmsSections',
        'cms_pages' => 'setCmsPages',
        'documents' => 'setDocuments',
        'app_payment_methods' => 'setAppPaymentMethods'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'media_folder_id' => 'getMediaFolderId',
        'mime_type' => 'getMimeType',
        'file_extension' => 'getFileExtension',
        'uploaded_at' => 'getUploadedAt',
        'file_name' => 'getFileName',
        'file_size' => 'getFileSize',
        'meta_data' => 'getMetaData',
        'media_type' => 'getMediaType',
        'alt' => 'getAlt',
        'title' => 'getTitle',
        'url' => 'getUrl',
        'has_file' => 'getHasFile',
        'private' => 'getPrivate',
        'custom_fields' => 'getCustomFields',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'translated' => 'getTranslated',
        'tags' => 'getTags',
        'thumbnails' => 'getThumbnails',
        'user' => 'getUser',
        'categories' => 'getCategories',
        'product_manufacturers' => 'getProductManufacturers',
        'product_media' => 'getProductMedia',
        'avatar_user' => 'getAvatarUser',
        'media_folder' => 'getMediaFolder',
        'property_group_options' => 'getPropertyGroupOptions',
        'mail_template_media' => 'getMailTemplateMedia',
        'document_base_configs' => 'getDocumentBaseConfigs',
        'shipping_methods' => 'getShippingMethods',
        'payment_methods' => 'getPaymentMethods',
        'product_configurator_settings' => 'getProductConfiguratorSettings',
        'order_line_items' => 'getOrderLineItems',
        'cms_blocks' => 'getCmsBlocks',
        'cms_sections' => 'getCmsSections',
        'cms_pages' => 'getCmsPages',
        'documents' => 'getDocuments',
        'app_payment_methods' => 'getAppPaymentMethods'
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
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['media_folder_id'] = $data['media_folder_id'] ?? null;
        $this->container['mime_type'] = $data['mime_type'] ?? null;
        $this->container['file_extension'] = $data['file_extension'] ?? null;
        $this->container['uploaded_at'] = $data['uploaded_at'] ?? null;
        $this->container['file_name'] = $data['file_name'] ?? null;
        $this->container['file_size'] = $data['file_size'] ?? null;
        $this->container['meta_data'] = $data['meta_data'] ?? null;
        $this->container['media_type'] = $data['media_type'] ?? null;
        $this->container['alt'] = $data['alt'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['has_file'] = $data['has_file'] ?? null;
        $this->container['private'] = $data['private'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['translated'] = $data['translated'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['thumbnails'] = $data['thumbnails'] ?? null;
        $this->container['user'] = $data['user'] ?? null;
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['product_manufacturers'] = $data['product_manufacturers'] ?? null;
        $this->container['product_media'] = $data['product_media'] ?? null;
        $this->container['avatar_user'] = $data['avatar_user'] ?? null;
        $this->container['media_folder'] = $data['media_folder'] ?? null;
        $this->container['property_group_options'] = $data['property_group_options'] ?? null;
        $this->container['mail_template_media'] = $data['mail_template_media'] ?? null;
        $this->container['document_base_configs'] = $data['document_base_configs'] ?? null;
        $this->container['shipping_methods'] = $data['shipping_methods'] ?? null;
        $this->container['payment_methods'] = $data['payment_methods'] ?? null;
        $this->container['product_configurator_settings'] = $data['product_configurator_settings'] ?? null;
        $this->container['order_line_items'] = $data['order_line_items'] ?? null;
        $this->container['cms_blocks'] = $data['cms_blocks'] ?? null;
        $this->container['cms_sections'] = $data['cms_sections'] ?? null;
        $this->container['cms_pages'] = $data['cms_pages'] ?? null;
        $this->container['documents'] = $data['documents'] ?? null;
        $this->container['app_payment_methods'] = $data['app_payment_methods'] ?? null;
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

        if (!is_null($this->container['user_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['user_id'])) {
            $invalidProperties[] = "invalid value for 'user_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['media_folder_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['media_folder_id'])) {
            $invalidProperties[] = "invalid value for 'media_folder_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
            throw new \InvalidArgumentException("invalid value for $id when calling Media., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {

        if (!is_null($user_id) && (!preg_match("/^[0-9a-f]{32}$/", $user_id))) {
            throw new \InvalidArgumentException("invalid value for $user_id when calling Media., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets media_folder_id
     *
     * @return string|null
     */
    public function getMediaFolderId()
    {
        return $this->container['media_folder_id'];
    }

    /**
     * Sets media_folder_id
     *
     * @param string|null $media_folder_id media_folder_id
     *
     * @return self
     */
    public function setMediaFolderId($media_folder_id)
    {

        if (!is_null($media_folder_id) && (!preg_match("/^[0-9a-f]{32}$/", $media_folder_id))) {
            throw new \InvalidArgumentException("invalid value for $media_folder_id when calling Media., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['media_folder_id'] = $media_folder_id;

        return $this;
    }

    /**
     * Gets mime_type
     *
     * @return string|null
     */
    public function getMimeType()
    {
        return $this->container['mime_type'];
    }

    /**
     * Sets mime_type
     *
     * @param string|null $mime_type mime_type
     *
     * @return self
     */
    public function setMimeType($mime_type)
    {
        $this->container['mime_type'] = $mime_type;

        return $this;
    }

    /**
     * Gets file_extension
     *
     * @return string|null
     */
    public function getFileExtension()
    {
        return $this->container['file_extension'];
    }

    /**
     * Sets file_extension
     *
     * @param string|null $file_extension file_extension
     *
     * @return self
     */
    public function setFileExtension($file_extension)
    {
        $this->container['file_extension'] = $file_extension;

        return $this;
    }

    /**
     * Gets uploaded_at
     *
     * @return \DateTime|null
     */
    public function getUploadedAt()
    {
        return $this->container['uploaded_at'];
    }

    /**
     * Sets uploaded_at
     *
     * @param \DateTime|null $uploaded_at uploaded_at
     *
     * @return self
     */
    public function setUploadedAt($uploaded_at)
    {
        $this->container['uploaded_at'] = $uploaded_at;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string|null $file_name file_name
     *
     * @return self
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets file_size
     *
     * @return int|null
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     *
     * @param int|null $file_size file_size
     *
     * @return self
     */
    public function setFileSize($file_size)
    {
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets meta_data
     *
     * @return object|null
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param object|null $meta_data meta_data
     *
     * @return self
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets media_type
     *
     * @return object|null
     */
    public function getMediaType()
    {
        return $this->container['media_type'];
    }

    /**
     * Sets media_type
     *
     * @param object|null $media_type media_type
     *
     * @return self
     */
    public function setMediaType($media_type)
    {
        $this->container['media_type'] = $media_type;

        return $this;
    }

    /**
     * Gets alt
     *
     * @return string|null
     */
    public function getAlt()
    {
        return $this->container['alt'];
    }

    /**
     * Sets alt
     *
     * @param string|null $alt alt
     *
     * @return self
     */
    public function setAlt($alt)
    {
        $this->container['alt'] = $alt;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets has_file
     *
     * @return bool|null
     */
    public function getHasFile()
    {
        return $this->container['has_file'];
    }

    /**
     * Sets has_file
     *
     * @param bool|null $has_file has_file
     *
     * @return self
     */
    public function setHasFile($has_file)
    {
        $this->container['has_file'] = $has_file;

        return $this;
    }

    /**
     * Gets private
     *
     * @return bool|null
     */
    public function getPrivate()
    {
        return $this->container['private'];
    }

    /**
     * Sets private
     *
     * @param bool|null $private private
     *
     * @return self
     */
    public function setPrivate($private)
    {
        $this->container['private'] = $private;

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
     * Gets thumbnails
     *
     * @return \OpenAPI\Client\Model\MediaThumbnail|null
     */
    public function getThumbnails()
    {
        return $this->container['thumbnails'];
    }

    /**
     * Sets thumbnails
     *
     * @param \OpenAPI\Client\Model\MediaThumbnail|null $thumbnails thumbnails
     *
     * @return self
     */
    public function setThumbnails($thumbnails)
    {
        $this->container['thumbnails'] = $thumbnails;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \OpenAPI\Client\Model\User|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \OpenAPI\Client\Model\User|null $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \OpenAPI\Client\Model\Category|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \OpenAPI\Client\Model\Category|null $categories categories
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets product_manufacturers
     *
     * @return \OpenAPI\Client\Model\ProductManufacturer|null
     */
    public function getProductManufacturers()
    {
        return $this->container['product_manufacturers'];
    }

    /**
     * Sets product_manufacturers
     *
     * @param \OpenAPI\Client\Model\ProductManufacturer|null $product_manufacturers product_manufacturers
     *
     * @return self
     */
    public function setProductManufacturers($product_manufacturers)
    {
        $this->container['product_manufacturers'] = $product_manufacturers;

        return $this;
    }

    /**
     * Gets product_media
     *
     * @return \OpenAPI\Client\Model\ProductMedia|null
     */
    public function getProductMedia()
    {
        return $this->container['product_media'];
    }

    /**
     * Sets product_media
     *
     * @param \OpenAPI\Client\Model\ProductMedia|null $product_media product_media
     *
     * @return self
     */
    public function setProductMedia($product_media)
    {
        $this->container['product_media'] = $product_media;

        return $this;
    }

    /**
     * Gets avatar_user
     *
     * @return \OpenAPI\Client\Model\User|null
     */
    public function getAvatarUser()
    {
        return $this->container['avatar_user'];
    }

    /**
     * Sets avatar_user
     *
     * @param \OpenAPI\Client\Model\User|null $avatar_user avatar_user
     *
     * @return self
     */
    public function setAvatarUser($avatar_user)
    {
        $this->container['avatar_user'] = $avatar_user;

        return $this;
    }

    /**
     * Gets media_folder
     *
     * @return \OpenAPI\Client\Model\MediaFolder|null
     */
    public function getMediaFolder()
    {
        return $this->container['media_folder'];
    }

    /**
     * Sets media_folder
     *
     * @param \OpenAPI\Client\Model\MediaFolder|null $media_folder media_folder
     *
     * @return self
     */
    public function setMediaFolder($media_folder)
    {
        $this->container['media_folder'] = $media_folder;

        return $this;
    }

    /**
     * Gets property_group_options
     *
     * @return \OpenAPI\Client\Model\PropertyGroupOption|null
     */
    public function getPropertyGroupOptions()
    {
        return $this->container['property_group_options'];
    }

    /**
     * Sets property_group_options
     *
     * @param \OpenAPI\Client\Model\PropertyGroupOption|null $property_group_options property_group_options
     *
     * @return self
     */
    public function setPropertyGroupOptions($property_group_options)
    {
        $this->container['property_group_options'] = $property_group_options;

        return $this;
    }

    /**
     * Gets mail_template_media
     *
     * @return \OpenAPI\Client\Model\MailTemplateMedia|null
     */
    public function getMailTemplateMedia()
    {
        return $this->container['mail_template_media'];
    }

    /**
     * Sets mail_template_media
     *
     * @param \OpenAPI\Client\Model\MailTemplateMedia|null $mail_template_media mail_template_media
     *
     * @return self
     */
    public function setMailTemplateMedia($mail_template_media)
    {
        $this->container['mail_template_media'] = $mail_template_media;

        return $this;
    }

    /**
     * Gets document_base_configs
     *
     * @return \OpenAPI\Client\Model\DocumentBaseConfig|null
     */
    public function getDocumentBaseConfigs()
    {
        return $this->container['document_base_configs'];
    }

    /**
     * Sets document_base_configs
     *
     * @param \OpenAPI\Client\Model\DocumentBaseConfig|null $document_base_configs document_base_configs
     *
     * @return self
     */
    public function setDocumentBaseConfigs($document_base_configs)
    {
        $this->container['document_base_configs'] = $document_base_configs;

        return $this;
    }

    /**
     * Gets shipping_methods
     *
     * @return \OpenAPI\Client\Model\ShippingMethod|null
     */
    public function getShippingMethods()
    {
        return $this->container['shipping_methods'];
    }

    /**
     * Sets shipping_methods
     *
     * @param \OpenAPI\Client\Model\ShippingMethod|null $shipping_methods shipping_methods
     *
     * @return self
     */
    public function setShippingMethods($shipping_methods)
    {
        $this->container['shipping_methods'] = $shipping_methods;

        return $this;
    }

    /**
     * Gets payment_methods
     *
     * @return \OpenAPI\Client\Model\PaymentMethod|null
     */
    public function getPaymentMethods()
    {
        return $this->container['payment_methods'];
    }

    /**
     * Sets payment_methods
     *
     * @param \OpenAPI\Client\Model\PaymentMethod|null $payment_methods payment_methods
     *
     * @return self
     */
    public function setPaymentMethods($payment_methods)
    {
        $this->container['payment_methods'] = $payment_methods;

        return $this;
    }

    /**
     * Gets product_configurator_settings
     *
     * @return \OpenAPI\Client\Model\ProductConfiguratorSetting|null
     */
    public function getProductConfiguratorSettings()
    {
        return $this->container['product_configurator_settings'];
    }

    /**
     * Sets product_configurator_settings
     *
     * @param \OpenAPI\Client\Model\ProductConfiguratorSetting|null $product_configurator_settings product_configurator_settings
     *
     * @return self
     */
    public function setProductConfiguratorSettings($product_configurator_settings)
    {
        $this->container['product_configurator_settings'] = $product_configurator_settings;

        return $this;
    }

    /**
     * Gets order_line_items
     *
     * @return \OpenAPI\Client\Model\OrderLineItem|null
     */
    public function getOrderLineItems()
    {
        return $this->container['order_line_items'];
    }

    /**
     * Sets order_line_items
     *
     * @param \OpenAPI\Client\Model\OrderLineItem|null $order_line_items order_line_items
     *
     * @return self
     */
    public function setOrderLineItems($order_line_items)
    {
        $this->container['order_line_items'] = $order_line_items;

        return $this;
    }

    /**
     * Gets cms_blocks
     *
     * @return \OpenAPI\Client\Model\CmsBlock|null
     */
    public function getCmsBlocks()
    {
        return $this->container['cms_blocks'];
    }

    /**
     * Sets cms_blocks
     *
     * @param \OpenAPI\Client\Model\CmsBlock|null $cms_blocks cms_blocks
     *
     * @return self
     */
    public function setCmsBlocks($cms_blocks)
    {
        $this->container['cms_blocks'] = $cms_blocks;

        return $this;
    }

    /**
     * Gets cms_sections
     *
     * @return \OpenAPI\Client\Model\CmsSection|null
     */
    public function getCmsSections()
    {
        return $this->container['cms_sections'];
    }

    /**
     * Sets cms_sections
     *
     * @param \OpenAPI\Client\Model\CmsSection|null $cms_sections cms_sections
     *
     * @return self
     */
    public function setCmsSections($cms_sections)
    {
        $this->container['cms_sections'] = $cms_sections;

        return $this;
    }

    /**
     * Gets cms_pages
     *
     * @return \OpenAPI\Client\Model\CmsPage|null
     */
    public function getCmsPages()
    {
        return $this->container['cms_pages'];
    }

    /**
     * Sets cms_pages
     *
     * @param \OpenAPI\Client\Model\CmsPage|null $cms_pages cms_pages
     *
     * @return self
     */
    public function setCmsPages($cms_pages)
    {
        $this->container['cms_pages'] = $cms_pages;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \OpenAPI\Client\Model\Document|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \OpenAPI\Client\Model\Document|null $documents documents
     *
     * @return self
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets app_payment_methods
     *
     * @return \OpenAPI\Client\Model\AppPaymentMethod|null
     */
    public function getAppPaymentMethods()
    {
        return $this->container['app_payment_methods'];
    }

    /**
     * Sets app_payment_methods
     *
     * @param \OpenAPI\Client\Model\AppPaymentMethod|null $app_payment_methods app_payment_methods
     *
     * @return self
     */
    public function setAppPaymentMethods($app_payment_methods)
    {
        $this->container['app_payment_methods'] = $app_payment_methods;

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


