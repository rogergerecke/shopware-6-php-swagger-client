# PHP Classe für Shopware 6.4.7.0

Mit diesen classen kann man die Shopware API ansprechen.  Am besten über composer Installieren und
so von der DI profitieren.




# SwaggerClient-php
This endpoint reference contains an overview of all endpoints comprising the Shopware Admin API.  For a better overview, all CRUD-endpoints are hidden by default. If you want to show also CRUD-endpoints add the query parameter `type=jsonapi`.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 6.4.7.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "http://github.com/rogergerecke/shopware-6-php-swagger-client.git"
    }
  ],
  "require": {
    "rogergerecke/shopware-6-php-swagger-client": "1.0.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$extension = "extension_example"; // string | Extension of the uploaded file. For example `png`
$media_id = "media_id_example"; // string | Identifier of the media entity.
$body = new \Swagger\Client\Model\Object(); // Object | 
$file_name = "file_name_example"; // string | Name of the uploaded file. If not provided the media identifier will be used as name

try {
    $apiInstance->upload($extension, $media_id, $body, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->upload: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *http://redkitty.de/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AssetManagementApi* | [**upload**](docs/Api/AssetManagementApi.md#upload) | **POST** /_action/media/{mediaId}/upload | Upload a file to a media entity
*AuthorizationAuthenticationApi* | [**token**](docs/Api/AuthorizationAuthenticationApi.md#token) | **POST** /oauth/token | Fetch an access token
*BulkOperationsApi* | [**sync**](docs/Api/BulkOperationsApi.md#sync) | **POST** /_action/sync | Bulk edit entities
*DatabaseMigrationsApi* | [**migrate**](docs/Api/DatabaseMigrationsApi.md#migrate) | **POST** /_action/database/migrate | Execute migrations
*DatabaseMigrationsApi* | [**migrateDestructive**](docs/Api/DatabaseMigrationsApi.md#migratedestructive) | **POST** /_action/database/migrate-destructive | Execute destructive migrations
*DatabaseMigrationsApi* | [**syncMigrations**](docs/Api/DatabaseMigrationsApi.md#syncmigrations) | **POST** /_action/database/sync-migration | Sync migrations to the database
*DocumentManagementApi* | [**createDocument**](docs/Api/DocumentManagementApi.md#createdocument) | **POST** /_action/order/{orderId}/document/{documentTypeName} | Create a document for an order
*DocumentManagementApi* | [**downloadDocument**](docs/Api/DocumentManagementApi.md#downloaddocument) | **GET** /_action/document/{documentId}/{deepLinkCode} | Download a document
*DocumentManagementApi* | [**numberRangeReserve**](docs/Api/DocumentManagementApi.md#numberrangereserve) | **GET** /_action/number-range/reserve/{type}/{saleschannel?} | Reserve or preview a document number
*DocumentManagementApi* | [**uploadToDocument**](docs/Api/DocumentManagementApi.md#uploadtodocument) | **POST** /_action/document/{documentId}/upload | Upload a file for a document
*MailOperationsApi* | [**build**](docs/Api/MailOperationsApi.md#build) | **POST** /_action/mail-template/build | Preview a mail template
*MailOperationsApi* | [**send**](docs/Api/MailOperationsApi.md#send) | **POST** /_action/mail-template/send | Send a mail
*MailOperationsApi* | [**validate**](docs/Api/MailOperationsApi.md#validate) | **POST** /_action/mail-template/validate | Validate a mail content
*OrderManagementApi* | [**orderDeliveryStateTransition**](docs/Api/OrderManagementApi.md#orderdeliverystatetransition) | **POST** /_action/order_delivery/{orderDeliveryId}/state/{transition} | Transition an order delivery to a new state
*OrderManagementApi* | [**orderStateTransition**](docs/Api/OrderManagementApi.md#orderstatetransition) | **POST** /_action/order/{orderId}/state/{transition} | Transition an order to a new state
*OrderManagementApi* | [**orderTransactionStateTransition**](docs/Api/OrderManagementApi.md#ordertransactionstatetransition) | **POST** /_action/order_transaction/{orderTransactionId}/state/{transition} | Transition an order transaction to a new state
*SystemInfoHealthcheckApi* | [**apiInfo**](docs/Api/SystemInfoHealthcheckApi.md#apiinfo) | **GET** /_info/openapi3.json | Get OpenAPI Specification
*SystemInfoHealthcheckApi* | [**businessEvents**](docs/Api/SystemInfoHealthcheckApi.md#businessevents) | **GET** /_info/events.json | Get Business events
*SystemInfoHealthcheckApi* | [**config**](docs/Api/SystemInfoHealthcheckApi.md#config) | **GET** /_info/config | Get API information
*SystemInfoHealthcheckApi* | [**flowActions**](docs/Api/SystemInfoHealthcheckApi.md#flowactions) | **GET** /_info/flow-actions.json | Get actions for flow builder
*SystemInfoHealthcheckApi* | [**infoShopwareVersion**](docs/Api/SystemInfoHealthcheckApi.md#infoshopwareversion) | **GET** /_info/version | Get the Shopware version
*SystemOperationsApi* | [**clearCache**](docs/Api/SystemOperationsApi.md#clearcache) | **DELETE** /_action/cache | Clear caches
*SystemOperationsApi* | [**clearCacheAndScheduleWarmUp**](docs/Api/SystemOperationsApi.md#clearcacheandschedulewarmup) | **DELETE** /_action/cache_warmup | Clear and warm up caches
*SystemOperationsApi* | [**clearContainerCache**](docs/Api/SystemOperationsApi.md#clearcontainercache) | **DELETE** /_action/container_cache | Clear container caches
*SystemOperationsApi* | [**clearOldCacheFolders**](docs/Api/SystemOperationsApi.md#clearoldcachefolders) | **DELETE** /_action/cleanup | Clear old cache folders
*SystemOperationsApi* | [**consumeMessages**](docs/Api/SystemOperationsApi.md#consumemessages) | **POST** /_action/message-queue/consume | Consume messages from the message queue.
*SystemOperationsApi* | [**getMinRunInterval**](docs/Api/SystemOperationsApi.md#getminruninterval) | **GET** /_action/scheduled-task/min-run-interval | Get the minimum schedules task interval
*SystemOperationsApi* | [**index**](docs/Api/SystemOperationsApi.md#index) | **POST** /_action/index | Run indexer
*SystemOperationsApi* | [**indexing**](docs/Api/SystemOperationsApi.md#indexing) | **POST** /_action/indexing | Run indexer
*SystemOperationsApi* | [**indexing_0**](docs/Api/SystemOperationsApi.md#indexing_0) | **POST** /_action/indexing/products | Send product indexing message
*SystemOperationsApi* | [**info**](docs/Api/SystemOperationsApi.md#info) | **GET** /_action/cache_info | Get cache information
*SystemOperationsApi* | [**iterate**](docs/Api/SystemOperationsApi.md#iterate) | **POST** /_action/indexing/{indexer} | Iterate an indexer
*SystemOperationsApi* | [**runScheduledTasks**](docs/Api/SystemOperationsApi.md#runscheduledtasks) | **POST** /_action/scheduled-task/run | Run scheduled tasks.

## Documentation For Models

 - [AclRole](docs/Model/AclRole.md)
 - [AclUserRole](docs/Model/AclUserRole.md)
 - [ActionIndexBody](docs/Model/ActionIndexBody.md)
 - [ActionSyncBody](docs/Model/ActionSyncBody.md)
 - [ActionmailtemplatebuildMailTemplate](docs/Model/ActionmailtemplatebuildMailTemplate.md)
 - [ActionmailtemplatebuildMailTemplateType](docs/Model/ActionmailtemplatebuildMailTemplateType.md)
 - [ActionmailtemplatesendBinAttachments](docs/Model/ActionmailtemplatesendBinAttachments.md)
 - [ActionorderorderIddocumentdocumentTypeNameConfig](docs/Model/ActionorderorderIddocumentdocumentTypeNameConfig.md)
 - [AllOfrelationshipLinksSelf](docs/Model/AllOfrelationshipLinksSelf.md)
 - [AllOfsuccessLinks](docs/Model/AllOfsuccessLinks.md)
 - [AnyOfrelationships](docs/Model/AnyOfrelationships.md)
 - [App](docs/Model/App.md)
 - [AppActionButton](docs/Model/AppActionButton.md)
 - [AppCmsBlock](docs/Model/AppCmsBlock.md)
 - [AppPaymentMethod](docs/Model/AppPaymentMethod.md)
 - [AppTemplate](docs/Model/AppTemplate.md)
 - [Attributes](docs/Model/Attributes.md)
 - [BfCategoryMapping](docs/Model/BfCategoryMapping.md)
 - [BfConfig](docs/Model/BfConfig.md)
 - [BfMarketplace](docs/Model/BfMarketplace.md)
 - [BfMarketplaceSalesChannel](docs/Model/BfMarketplaceSalesChannel.md)
 - [BfMarketplaceSettings](docs/Model/BfMarketplaceSettings.md)
 - [BfSupport](docs/Model/BfSupport.md)
 - [BusinessEventsResponse](docs/Model/BusinessEventsResponse.md)
 - [BusinessEventsResponseInner](docs/Model/BusinessEventsResponseInner.md)
 - [Category](docs/Model/Category.md)
 - [CategoryTag](docs/Model/CategoryTag.md)
 - [CmsBlock](docs/Model/CmsBlock.md)
 - [CmsPage](docs/Model/CmsPage.md)
 - [CmsPageConfig](docs/Model/CmsPageConfig.md)
 - [CmsSection](docs/Model/CmsSection.md)
 - [CmsSlot](docs/Model/CmsSlot.md)
 - [Country](docs/Model/Country.md)
 - [CountryCustomerTax](docs/Model/CountryCustomerTax.md)
 - [CountryState](docs/Model/CountryState.md)
 - [Currency](docs/Model/Currency.md)
 - [CurrencyCountryRounding](docs/Model/CurrencyCountryRounding.md)
 - [CurrencyItemRounding](docs/Model/CurrencyItemRounding.md)
 - [CustomField](docs/Model/CustomField.md)
 - [CustomFieldSet](docs/Model/CustomFieldSet.md)
 - [CustomFieldSetRelation](docs/Model/CustomFieldSetRelation.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerAddress](docs/Model/CustomerAddress.md)
 - [CustomerGroup](docs/Model/CustomerGroup.md)
 - [CustomerGroupRegistrationSalesChannels](docs/Model/CustomerGroupRegistrationSalesChannels.md)
 - [CustomerRecovery](docs/Model/CustomerRecovery.md)
 - [CustomerTag](docs/Model/CustomerTag.md)
 - [CustomerWishlist](docs/Model/CustomerWishlist.md)
 - [CustomerWishlistProduct](docs/Model/CustomerWishlistProduct.md)
 - [Data](docs/Model/Data.md)
 - [DatabaseMigrateBody](docs/Model/DatabaseMigrateBody.md)
 - [DatabaseMigratedestructiveBody](docs/Model/DatabaseMigratedestructiveBody.md)
 - [DatabaseSyncmigrationBody](docs/Model/DatabaseSyncmigrationBody.md)
 - [DeadMessage](docs/Model/DeadMessage.md)
 - [DeliveryTime](docs/Model/DeliveryTime.md)
 - [Document](docs/Model/Document.md)
 - [DocumentBaseConfig](docs/Model/DocumentBaseConfig.md)
 - [DocumentBaseConfigSalesChannel](docs/Model/DocumentBaseConfigSalesChannel.md)
 - [DocumentDocumentTypeNameBody](docs/Model/DocumentDocumentTypeNameBody.md)
 - [DocumentIdUploadBody](docs/Model/DocumentIdUploadBody.md)
 - [DocumentType](docs/Model/DocumentType.md)
 - [Error](docs/Model/Error.md)
 - [ErrorSource](docs/Model/ErrorSource.md)
 - [EventAction](docs/Model/EventAction.md)
 - [EventActionRule](docs/Model/EventActionRule.md)
 - [EventActionSalesChannel](docs/Model/EventActionSalesChannel.md)
 - [Failure](docs/Model/Failure.md)
 - [Flow](docs/Model/Flow.md)
 - [FlowBulderActionsResponse](docs/Model/FlowBulderActionsResponse.md)
 - [FlowBulderActionsResponseInner](docs/Model/FlowBulderActionsResponseInner.md)
 - [FlowSequence](docs/Model/FlowSequence.md)
 - [ImportExportFile](docs/Model/ImportExportFile.md)
 - [ImportExportLog](docs/Model/ImportExportLog.md)
 - [ImportExportProfile](docs/Model/ImportExportProfile.md)
 - [IndexingIndexerBody](docs/Model/IndexingIndexerBody.md)
 - [Info](docs/Model/Info.md)
 - [InfoConfigResponse](docs/Model/InfoConfigResponse.md)
 - [InfoConfigResponseAdminWorker](docs/Model/InfoConfigResponseAdminWorker.md)
 - [InfoConfigResponseBundles](docs/Model/InfoConfigResponseBundles.md)
 - [InfoConfigResponseSettings](docs/Model/InfoConfigResponseSettings.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [Integration](docs/Model/Integration.md)
 - [IntegrationRole](docs/Model/IntegrationRole.md)
 - [Jsonapi](docs/Model/Jsonapi.md)
 - [KlarnaPaymentRequestLog](docs/Model/KlarnaPaymentRequestLog.md)
 - [LandingPage](docs/Model/LandingPage.md)
 - [LandingPageSalesChannel](docs/Model/LandingPageSalesChannel.md)
 - [LandingPageTag](docs/Model/LandingPageTag.md)
 - [Language](docs/Model/Language.md)
 - [Link](docs/Model/Link.md)
 - [Linkage](docs/Model/Linkage.md)
 - [Links](docs/Model/Links.md)
 - [Locale](docs/Model/Locale.md)
 - [LogEntry](docs/Model/LogEntry.md)
 - [MailHeaderFooter](docs/Model/MailHeaderFooter.md)
 - [MailTemplate](docs/Model/MailTemplate.md)
 - [MailTemplateMedia](docs/Model/MailTemplateMedia.md)
 - [MailTemplateType](docs/Model/MailTemplateType.md)
 - [MailtemplateBuildBody](docs/Model/MailtemplateBuildBody.md)
 - [MailtemplateSendBody](docs/Model/MailtemplateSendBody.md)
 - [MailtemplateValidateBody](docs/Model/MailtemplateValidateBody.md)
 - [MainCategory](docs/Model/MainCategory.md)
 - [Media](docs/Model/Media.md)
 - [MediaDefaultFolder](docs/Model/MediaDefaultFolder.md)
 - [MediaFolder](docs/Model/MediaFolder.md)
 - [MediaFolderConfiguration](docs/Model/MediaFolderConfiguration.md)
 - [MediaFolderConfigurationMediaThumbnailSize](docs/Model/MediaFolderConfigurationMediaThumbnailSize.md)
 - [MediaIdUploadBody](docs/Model/MediaIdUploadBody.md)
 - [MediaTag](docs/Model/MediaTag.md)
 - [MediaThumbnail](docs/Model/MediaThumbnail.md)
 - [MediaThumbnailSize](docs/Model/MediaThumbnailSize.md)
 - [MessageQueueStats](docs/Model/MessageQueueStats.md)
 - [MessagequeueConsumeBody](docs/Model/MessagequeueConsumeBody.md)
 - [Meta](docs/Model/Meta.md)
 - [NewsletterRecipient](docs/Model/NewsletterRecipient.md)
 - [NewsletterRecipientTag](docs/Model/NewsletterRecipientTag.md)
 - [NumberRange](docs/Model/NumberRange.md)
 - [NumberRangeSalesChannel](docs/Model/NumberRangeSalesChannel.md)
 - [NumberRangeState](docs/Model/NumberRangeState.md)
 - [NumberRangeType](docs/Model/NumberRangeType.md)
 - [OauthTokenBody](docs/Model/OauthTokenBody.md)
 - [OneOfdata](docs/Model/OneOfdata.md)
 - [OneOflink](docs/Model/OneOflink.md)
 - [Order](docs/Model/Order.md)
 - [OrderAddress](docs/Model/OrderAddress.md)
 - [OrderCustomer](docs/Model/OrderCustomer.md)
 - [OrderDelivery](docs/Model/OrderDelivery.md)
 - [OrderDeliveryPosition](docs/Model/OrderDeliveryPosition.md)
 - [OrderLineItem](docs/Model/OrderLineItem.md)
 - [OrderPrice](docs/Model/OrderPrice.md)
 - [OrderShippingCosts](docs/Model/OrderShippingCosts.md)
 - [OrderShippingCostsListPrice](docs/Model/OrderShippingCostsListPrice.md)
 - [OrderTag](docs/Model/OrderTag.md)
 - [OrderTransaction](docs/Model/OrderTransaction.md)
 - [Pagination](docs/Model/Pagination.md)
 - [PaymentMethod](docs/Model/PaymentMethod.md)
 - [Plugin](docs/Model/Plugin.md)
 - [Product](docs/Model/Product.md)
 - [ProductCategory](docs/Model/ProductCategory.md)
 - [ProductCategoryTree](docs/Model/ProductCategoryTree.md)
 - [ProductConfiguratorSetting](docs/Model/ProductConfiguratorSetting.md)
 - [ProductCrossSelling](docs/Model/ProductCrossSelling.md)
 - [ProductCrossSellingAssignedProducts](docs/Model/ProductCrossSellingAssignedProducts.md)
 - [ProductCustomFieldSet](docs/Model/ProductCustomFieldSet.md)
 - [ProductExport](docs/Model/ProductExport.md)
 - [ProductFeatureSet](docs/Model/ProductFeatureSet.md)
 - [ProductKeywordDictionary](docs/Model/ProductKeywordDictionary.md)
 - [ProductManufacturer](docs/Model/ProductManufacturer.md)
 - [ProductMedia](docs/Model/ProductMedia.md)
 - [ProductOption](docs/Model/ProductOption.md)
 - [ProductPrice](docs/Model/ProductPrice.md)
 - [ProductProperty](docs/Model/ProductProperty.md)
 - [ProductReview](docs/Model/ProductReview.md)
 - [ProductSearchConfig](docs/Model/ProductSearchConfig.md)
 - [ProductSearchConfigField](docs/Model/ProductSearchConfigField.md)
 - [ProductSearchKeyword](docs/Model/ProductSearchKeyword.md)
 - [ProductSorting](docs/Model/ProductSorting.md)
 - [ProductStream](docs/Model/ProductStream.md)
 - [ProductStreamFilter](docs/Model/ProductStreamFilter.md)
 - [ProductStreamMapping](docs/Model/ProductStreamMapping.md)
 - [ProductTag](docs/Model/ProductTag.md)
 - [ProductVisibility](docs/Model/ProductVisibility.md)
 - [Promotion](docs/Model/Promotion.md)
 - [PromotionCartRule](docs/Model/PromotionCartRule.md)
 - [PromotionDiscount](docs/Model/PromotionDiscount.md)
 - [PromotionDiscountPrices](docs/Model/PromotionDiscountPrices.md)
 - [PromotionDiscountRule](docs/Model/PromotionDiscountRule.md)
 - [PromotionIndividualCode](docs/Model/PromotionIndividualCode.md)
 - [PromotionOrderRule](docs/Model/PromotionOrderRule.md)
 - [PromotionPersonaCustomer](docs/Model/PromotionPersonaCustomer.md)
 - [PromotionPersonaRule](docs/Model/PromotionPersonaRule.md)
 - [PromotionSalesChannel](docs/Model/PromotionSalesChannel.md)
 - [PromotionSetgroup](docs/Model/PromotionSetgroup.md)
 - [PromotionSetgroupRule](docs/Model/PromotionSetgroupRule.md)
 - [PropertyGroup](docs/Model/PropertyGroup.md)
 - [PropertyGroupOption](docs/Model/PropertyGroupOption.md)
 - [RelationshipLinks](docs/Model/RelationshipLinks.md)
 - [RelationshipToMany](docs/Model/RelationshipToMany.md)
 - [RelationshipToOne](docs/Model/RelationshipToOne.md)
 - [Relationships](docs/Model/Relationships.md)
 - [Resource](docs/Model/Resource.md)
 - [Rule](docs/Model/Rule.md)
 - [RuleCondition](docs/Model/RuleCondition.md)
 - [SalesChannel](docs/Model/SalesChannel.md)
 - [SalesChannelAnalytics](docs/Model/SalesChannelAnalytics.md)
 - [SalesChannelCountry](docs/Model/SalesChannelCountry.md)
 - [SalesChannelCurrency](docs/Model/SalesChannelCurrency.md)
 - [SalesChannelDomain](docs/Model/SalesChannelDomain.md)
 - [SalesChannelLanguage](docs/Model/SalesChannelLanguage.md)
 - [SalesChannelPaymentMethod](docs/Model/SalesChannelPaymentMethod.md)
 - [SalesChannelShippingMethod](docs/Model/SalesChannelShippingMethod.md)
 - [SalesChannelType](docs/Model/SalesChannelType.md)
 - [Salutation](docs/Model/Salutation.md)
 - [ScheduledTask](docs/Model/ScheduledTask.md)
 - [Script](docs/Model/Script.md)
 - [SeoUrl](docs/Model/SeoUrl.md)
 - [SeoUrlTemplate](docs/Model/SeoUrlTemplate.md)
 - [ShippingMethod](docs/Model/ShippingMethod.md)
 - [ShippingMethodPrice](docs/Model/ShippingMethodPrice.md)
 - [ShippingMethodTag](docs/Model/ShippingMethodTag.md)
 - [Snippet](docs/Model/Snippet.md)
 - [SnippetSet](docs/Model/SnippetSet.md)
 - [StateMachine](docs/Model/StateMachine.md)
 - [StateMachineHistory](docs/Model/StateMachineHistory.md)
 - [StateMachineState](docs/Model/StateMachineState.md)
 - [StateMachineTransition](docs/Model/StateMachineTransition.md)
 - [StateTransitionBody](docs/Model/StateTransitionBody.md)
 - [StateTransitionBody1](docs/Model/StateTransitionBody1.md)
 - [StateTransitionBody2](docs/Model/StateTransitionBody2.md)
 - [Success](docs/Model/Success.md)
 - [SystemConfig](docs/Model/SystemConfig.md)
 - [SystemConfigConfigurationValue](docs/Model/SystemConfigConfigurationValue.md)
 - [Tag](docs/Model/Tag.md)
 - [Tax](docs/Model/Tax.md)
 - [TaxRule](docs/Model/TaxRule.md)
 - [TaxRuleData](docs/Model/TaxRuleData.md)
 - [TaxRuleType](docs/Model/TaxRuleType.md)
 - [Theme](docs/Model/Theme.md)
 - [ThemeMedia](docs/Model/ThemeMedia.md)
 - [ThemeSalesChannel](docs/Model/ThemeSalesChannel.md)
 - [Unit](docs/Model/Unit.md)
 - [User](docs/Model/User.md)
 - [UserAccessKey](docs/Model/UserAccessKey.md)
 - [UserConfig](docs/Model/UserConfig.md)
 - [UserRecovery](docs/Model/UserRecovery.md)
 - [Webhook](docs/Model/Webhook.md)
 - [WebhookEventLog](docs/Model/WebhookEventLog.md)

## Documentation For Authorization


## oAuth

- **Type**: OAuth
- **Flow**: password
- **Authorization URL**: 
- **Scopes**: 
 - **write**: Full write access


## Author



