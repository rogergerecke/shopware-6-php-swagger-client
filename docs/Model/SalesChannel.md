# # SalesChannel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**type_id** | **string** |  |
**language_id** | **string** |  |
**customer_group_id** | **string** |  |
**currency_id** | **string** |  |
**payment_method_id** | **string** |  |
**shipping_method_id** | **string** |  |
**country_id** | **string** |  |
**analytics_id** | **string** |  | [optional]
**navigation_category_id** | **string** |  |
**navigation_category_version_id** | **string** |  | [optional]
**navigation_category_depth** | **int** |  | [optional]
**footer_category_id** | **string** |  | [optional]
**footer_category_version_id** | **string** |  | [optional]
**service_category_id** | **string** |  | [optional]
**service_category_version_id** | **string** |  | [optional]
**mail_header_footer_id** | **string** |  | [optional]
**hreflang_default_domain_id** | **string** |  | [optional]
**name** | **string** |  |
**short_name** | **string** |  | [optional]
**tax_calculation_type** | **string** |  | [optional]
**access_key** | **string** |  |
**configuration** | **object** |  | [optional]
**active** | **bool** |  | [optional]
**hreflang_active** | **bool** |  | [optional]
**maintenance** | **bool** |  | [optional]
**maintenance_ip_whitelist** | **object[]** |  | [optional]
**custom_fields** | **object** |  | [optional]
**payment_method_ids** | **string[]** |  | [optional] [readonly]
**home_cms_page_id** | **string** |  | [optional]
**home_cms_page_version_id** | **string** |  | [optional]
**home_slot_config** | **object** |  | [optional]
**home_enabled** | **bool** |  |
**home_name** | **string** |  | [optional]
**home_meta_title** | **string** |  | [optional]
**home_meta_description** | **string** |  | [optional]
**home_keywords** | **string** |  | [optional]
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**currencies** | [**\OpenAPI\Client\Model\Currency**](Currency.md) |  | [optional]
**languages** | [**\OpenAPI\Client\Model\Language**](Language.md) |  | [optional]
**countries** | [**\OpenAPI\Client\Model\Country**](Country.md) |  | [optional]
**payment_methods** | [**\OpenAPI\Client\Model\PaymentMethod**](PaymentMethod.md) |  | [optional]
**shipping_methods** | [**\OpenAPI\Client\Model\ShippingMethod**](ShippingMethod.md) |  | [optional]
**type** | [**\OpenAPI\Client\Model\SalesChannelType**](SalesChannelType.md) |  | [optional]
**language** | [**\OpenAPI\Client\Model\Language**](Language.md) |  | [optional]
**customer_group** | [**\OpenAPI\Client\Model\CustomerGroup**](CustomerGroup.md) |  | [optional]
**currency** | [**\OpenAPI\Client\Model\Currency**](Currency.md) |  | [optional]
**payment_method** | [**\OpenAPI\Client\Model\PaymentMethod**](PaymentMethod.md) |  | [optional]
**shipping_method** | [**\OpenAPI\Client\Model\ShippingMethod**](ShippingMethod.md) |  | [optional]
**country** | [**\OpenAPI\Client\Model\Country**](Country.md) |  | [optional]
**orders** | [**\OpenAPI\Client\Model\Order**](Order.md) |  | [optional]
**customers** | [**\OpenAPI\Client\Model\Customer**](Customer.md) |  | [optional]
**home_cms_page** | [**\OpenAPI\Client\Model\CmsPage**](CmsPage.md) |  | [optional]
**domains** | [**\OpenAPI\Client\Model\SalesChannelDomain**](SalesChannelDomain.md) |  | [optional]
**system_configs** | [**\OpenAPI\Client\Model\SystemConfig**](SystemConfig.md) |  | [optional]
**navigation_category** | [**\OpenAPI\Client\Model\Category**](Category.md) |  | [optional]
**footer_category** | [**\OpenAPI\Client\Model\Category**](Category.md) |  | [optional]
**service_category** | [**\OpenAPI\Client\Model\Category**](Category.md) |  | [optional]
**product_visibilities** | [**\OpenAPI\Client\Model\ProductVisibility**](ProductVisibility.md) |  | [optional]
**hreflang_default_domain** | [**\OpenAPI\Client\Model\SalesChannelDomain**](SalesChannelDomain.md) |  | [optional]
**mail_header_footer** | [**\OpenAPI\Client\Model\MailHeaderFooter**](MailHeaderFooter.md) |  | [optional]
**newsletter_recipients** | [**\OpenAPI\Client\Model\NewsletterRecipient**](NewsletterRecipient.md) |  | [optional]
**number_range_sales_channels** | [**\OpenAPI\Client\Model\NumberRangeSalesChannel**](NumberRangeSalesChannel.md) |  | [optional]
**promotion_sales_channels** | [**\OpenAPI\Client\Model\PromotionSalesChannel**](PromotionSalesChannel.md) |  | [optional]
**document_base_config_sales_channels** | [**\OpenAPI\Client\Model\DocumentBaseConfigSalesChannel**](DocumentBaseConfigSalesChannel.md) |  | [optional]
**product_reviews** | [**\OpenAPI\Client\Model\ProductReview**](ProductReview.md) |  | [optional]
**seo_urls** | [**\OpenAPI\Client\Model\SeoUrl**](SeoUrl.md) |  | [optional]
**seo_url_templates** | [**\OpenAPI\Client\Model\SeoUrlTemplate**](SeoUrlTemplate.md) |  | [optional]
**main_categories** | [**\OpenAPI\Client\Model\MainCategory**](MainCategory.md) |  | [optional]
**product_exports** | [**\OpenAPI\Client\Model\ProductExport**](ProductExport.md) |  | [optional]
**analytics** | [**\OpenAPI\Client\Model\SalesChannelAnalytics**](SalesChannelAnalytics.md) |  | [optional]
**customer_groups_registrations** | [**\OpenAPI\Client\Model\CustomerGroup**](CustomerGroup.md) |  | [optional]
**event_actions** | [**\OpenAPI\Client\Model\EventAction**](EventAction.md) |  | [optional]
**landing_pages** | [**\OpenAPI\Client\Model\LandingPage**](LandingPage.md) |  | [optional]
**bound_customers** | [**\OpenAPI\Client\Model\Customer**](Customer.md) |  | [optional]
**wishlists** | [**\OpenAPI\Client\Model\CustomerWishlist**](CustomerWishlist.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
