<?php
/**
 * Language
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
 * Language Class Doc Comment
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
class Language implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Language';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'parent_id' => 'string',
        'locale_id' => 'string',
        'translation_code_id' => 'string',
        'name' => 'string',
        'custom_fields' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'parent' => '\OpenAPI\Client\Model\Language',
        'locale' => '\OpenAPI\Client\Model\Locale',
        'translation_code' => '\OpenAPI\Client\Model\Locale',
        'children' => '\OpenAPI\Client\Model\Language',
        'sales_channels' => '\OpenAPI\Client\Model\SalesChannel',
        'sales_channel_default_assignments' => '\OpenAPI\Client\Model\SalesChannel',
        'sales_channel_domains' => '\OpenAPI\Client\Model\SalesChannelDomain',
        'customers' => '\OpenAPI\Client\Model\Customer',
        'newsletter_recipients' => '\OpenAPI\Client\Model\NewsletterRecipient',
        'orders' => '\OpenAPI\Client\Model\Order',
        'product_search_keywords' => '\OpenAPI\Client\Model\ProductSearchKeyword',
        'product_keyword_dictionaries' => '\OpenAPI\Client\Model\ProductKeywordDictionary',
        'product_reviews' => '\OpenAPI\Client\Model\ProductReview',
        'product_search_config' => '\OpenAPI\Client\Model\ProductSearchConfig'
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
        'parent_id' => null,
        'locale_id' => null,
        'translation_code_id' => null,
        'name' => null,
        'custom_fields' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'parent' => null,
        'locale' => null,
        'translation_code' => null,
        'children' => null,
        'sales_channels' => null,
        'sales_channel_default_assignments' => null,
        'sales_channel_domains' => null,
        'customers' => null,
        'newsletter_recipients' => null,
        'orders' => null,
        'product_search_keywords' => null,
        'product_keyword_dictionaries' => null,
        'product_reviews' => null,
        'product_search_config' => null
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
        'parent_id' => 'parentId',
        'locale_id' => 'localeId',
        'translation_code_id' => 'translationCodeId',
        'name' => 'name',
        'custom_fields' => 'customFields',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'parent' => 'parent',
        'locale' => 'locale',
        'translation_code' => 'translationCode',
        'children' => 'children',
        'sales_channels' => 'salesChannels',
        'sales_channel_default_assignments' => 'salesChannelDefaultAssignments',
        'sales_channel_domains' => 'salesChannelDomains',
        'customers' => 'customers',
        'newsletter_recipients' => 'newsletterRecipients',
        'orders' => 'orders',
        'product_search_keywords' => 'productSearchKeywords',
        'product_keyword_dictionaries' => 'productKeywordDictionaries',
        'product_reviews' => 'productReviews',
        'product_search_config' => 'productSearchConfig'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'parent_id' => 'setParentId',
        'locale_id' => 'setLocaleId',
        'translation_code_id' => 'setTranslationCodeId',
        'name' => 'setName',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'parent' => 'setParent',
        'locale' => 'setLocale',
        'translation_code' => 'setTranslationCode',
        'children' => 'setChildren',
        'sales_channels' => 'setSalesChannels',
        'sales_channel_default_assignments' => 'setSalesChannelDefaultAssignments',
        'sales_channel_domains' => 'setSalesChannelDomains',
        'customers' => 'setCustomers',
        'newsletter_recipients' => 'setNewsletterRecipients',
        'orders' => 'setOrders',
        'product_search_keywords' => 'setProductSearchKeywords',
        'product_keyword_dictionaries' => 'setProductKeywordDictionaries',
        'product_reviews' => 'setProductReviews',
        'product_search_config' => 'setProductSearchConfig'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'parent_id' => 'getParentId',
        'locale_id' => 'getLocaleId',
        'translation_code_id' => 'getTranslationCodeId',
        'name' => 'getName',
        'custom_fields' => 'getCustomFields',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'parent' => 'getParent',
        'locale' => 'getLocale',
        'translation_code' => 'getTranslationCode',
        'children' => 'getChildren',
        'sales_channels' => 'getSalesChannels',
        'sales_channel_default_assignments' => 'getSalesChannelDefaultAssignments',
        'sales_channel_domains' => 'getSalesChannelDomains',
        'customers' => 'getCustomers',
        'newsletter_recipients' => 'getNewsletterRecipients',
        'orders' => 'getOrders',
        'product_search_keywords' => 'getProductSearchKeywords',
        'product_keyword_dictionaries' => 'getProductKeywordDictionaries',
        'product_reviews' => 'getProductReviews',
        'product_search_config' => 'getProductSearchConfig'
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
        $this->container['parent_id'] = $data['parent_id'] ?? null;
        $this->container['locale_id'] = $data['locale_id'] ?? null;
        $this->container['translation_code_id'] = $data['translation_code_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['parent'] = $data['parent'] ?? null;
        $this->container['locale'] = $data['locale'] ?? null;
        $this->container['translation_code'] = $data['translation_code'] ?? null;
        $this->container['children'] = $data['children'] ?? null;
        $this->container['sales_channels'] = $data['sales_channels'] ?? null;
        $this->container['sales_channel_default_assignments'] = $data['sales_channel_default_assignments'] ?? null;
        $this->container['sales_channel_domains'] = $data['sales_channel_domains'] ?? null;
        $this->container['customers'] = $data['customers'] ?? null;
        $this->container['newsletter_recipients'] = $data['newsletter_recipients'] ?? null;
        $this->container['orders'] = $data['orders'] ?? null;
        $this->container['product_search_keywords'] = $data['product_search_keywords'] ?? null;
        $this->container['product_keyword_dictionaries'] = $data['product_keyword_dictionaries'] ?? null;
        $this->container['product_reviews'] = $data['product_reviews'] ?? null;
        $this->container['product_search_config'] = $data['product_search_config'] ?? null;
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

        if (!is_null($this->container['parent_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['parent_id'])) {
            $invalidProperties[] = "invalid value for 'parent_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['locale_id'] === null) {
            $invalidProperties[] = "'locale_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['locale_id'])) {
            $invalidProperties[] = "invalid value for 'locale_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['translation_code_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['translation_code_id'])) {
            $invalidProperties[] = "invalid value for 'translation_code_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $id when calling Language., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string|null $parent_id parent_id
     *
     * @return self
     */
    public function setParentId($parent_id)
    {

        if (!is_null($parent_id) && (!preg_match("/^[0-9a-f]{32}$/", $parent_id))) {
            throw new \InvalidArgumentException("invalid value for $parent_id when calling Language., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets locale_id
     *
     * @return string
     */
    public function getLocaleId()
    {
        return $this->container['locale_id'];
    }

    /**
     * Sets locale_id
     *
     * @param string $locale_id locale_id
     *
     * @return self
     */
    public function setLocaleId($locale_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $locale_id))) {
            throw new \InvalidArgumentException("invalid value for $locale_id when calling Language., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['locale_id'] = $locale_id;

        return $this;
    }

    /**
     * Gets translation_code_id
     *
     * @return string|null
     */
    public function getTranslationCodeId()
    {
        return $this->container['translation_code_id'];
    }

    /**
     * Sets translation_code_id
     *
     * @param string|null $translation_code_id translation_code_id
     *
     * @return self
     */
    public function setTranslationCodeId($translation_code_id)
    {

        if (!is_null($translation_code_id) && (!preg_match("/^[0-9a-f]{32}$/", $translation_code_id))) {
            throw new \InvalidArgumentException("invalid value for $translation_code_id when calling Language., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['translation_code_id'] = $translation_code_id;

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
     * Gets parent
     *
     * @return \OpenAPI\Client\Model\Language|null
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \OpenAPI\Client\Model\Language|null $parent parent
     *
     * @return self
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return \OpenAPI\Client\Model\Locale|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param \OpenAPI\Client\Model\Locale|null $locale locale
     *
     * @return self
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets translation_code
     *
     * @return \OpenAPI\Client\Model\Locale|null
     */
    public function getTranslationCode()
    {
        return $this->container['translation_code'];
    }

    /**
     * Sets translation_code
     *
     * @param \OpenAPI\Client\Model\Locale|null $translation_code translation_code
     *
     * @return self
     */
    public function setTranslationCode($translation_code)
    {
        $this->container['translation_code'] = $translation_code;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \OpenAPI\Client\Model\Language|null
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \OpenAPI\Client\Model\Language|null $children children
     *
     * @return self
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

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
     * Gets sales_channel_domains
     *
     * @return \OpenAPI\Client\Model\SalesChannelDomain|null
     */
    public function getSalesChannelDomains()
    {
        return $this->container['sales_channel_domains'];
    }

    /**
     * Sets sales_channel_domains
     *
     * @param \OpenAPI\Client\Model\SalesChannelDomain|null $sales_channel_domains sales_channel_domains
     *
     * @return self
     */
    public function setSalesChannelDomains($sales_channel_domains)
    {
        $this->container['sales_channel_domains'] = $sales_channel_domains;

        return $this;
    }

    /**
     * Gets customers
     *
     * @return \OpenAPI\Client\Model\Customer|null
     */
    public function getCustomers()
    {
        return $this->container['customers'];
    }

    /**
     * Sets customers
     *
     * @param \OpenAPI\Client\Model\Customer|null $customers customers
     *
     * @return self
     */
    public function setCustomers($customers)
    {
        $this->container['customers'] = $customers;

        return $this;
    }

    /**
     * Gets newsletter_recipients
     *
     * @return \OpenAPI\Client\Model\NewsletterRecipient|null
     */
    public function getNewsletterRecipients()
    {
        return $this->container['newsletter_recipients'];
    }

    /**
     * Sets newsletter_recipients
     *
     * @param \OpenAPI\Client\Model\NewsletterRecipient|null $newsletter_recipients newsletter_recipients
     *
     * @return self
     */
    public function setNewsletterRecipients($newsletter_recipients)
    {
        $this->container['newsletter_recipients'] = $newsletter_recipients;

        return $this;
    }

    /**
     * Gets orders
     *
     * @return \OpenAPI\Client\Model\Order|null
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param \OpenAPI\Client\Model\Order|null $orders orders
     *
     * @return self
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets product_search_keywords
     *
     * @return \OpenAPI\Client\Model\ProductSearchKeyword|null
     */
    public function getProductSearchKeywords()
    {
        return $this->container['product_search_keywords'];
    }

    /**
     * Sets product_search_keywords
     *
     * @param \OpenAPI\Client\Model\ProductSearchKeyword|null $product_search_keywords product_search_keywords
     *
     * @return self
     */
    public function setProductSearchKeywords($product_search_keywords)
    {
        $this->container['product_search_keywords'] = $product_search_keywords;

        return $this;
    }

    /**
     * Gets product_keyword_dictionaries
     *
     * @return \OpenAPI\Client\Model\ProductKeywordDictionary|null
     */
    public function getProductKeywordDictionaries()
    {
        return $this->container['product_keyword_dictionaries'];
    }

    /**
     * Sets product_keyword_dictionaries
     *
     * @param \OpenAPI\Client\Model\ProductKeywordDictionary|null $product_keyword_dictionaries product_keyword_dictionaries
     *
     * @return self
     */
    public function setProductKeywordDictionaries($product_keyword_dictionaries)
    {
        $this->container['product_keyword_dictionaries'] = $product_keyword_dictionaries;

        return $this;
    }

    /**
     * Gets product_reviews
     *
     * @return \OpenAPI\Client\Model\ProductReview|null
     */
    public function getProductReviews()
    {
        return $this->container['product_reviews'];
    }

    /**
     * Sets product_reviews
     *
     * @param \OpenAPI\Client\Model\ProductReview|null $product_reviews product_reviews
     *
     * @return self
     */
    public function setProductReviews($product_reviews)
    {
        $this->container['product_reviews'] = $product_reviews;

        return $this;
    }

    /**
     * Gets product_search_config
     *
     * @return \OpenAPI\Client\Model\ProductSearchConfig|null
     */
    public function getProductSearchConfig()
    {
        return $this->container['product_search_config'];
    }

    /**
     * Sets product_search_config
     *
     * @param \OpenAPI\Client\Model\ProductSearchConfig|null $product_search_config product_search_config
     *
     * @return self
     */
    public function setProductSearchConfig($product_search_config)
    {
        $this->container['product_search_config'] = $product_search_config;

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


