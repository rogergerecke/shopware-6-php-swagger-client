# OpenAPIClient-php

This endpoint reference contains an overview of all endpoints comprising the Shopware Admin API.

For a better overview, all CRUD-endpoints are hidden by default. If you want to show also CRUD-endpoints
add the query parameter `type=jsonapi`.


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_id = 'media_id_example'; // string | Identifier of the media entity.
$extension = 'extension_example'; // string | Extension of the uploaded file. For example `png`
$file_name = 'file_name_example'; // string | Name of the uploaded file. If not provided the media identifier will be used as name
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->upload($media_id, $extension, $file_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->upload: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://redkitty.de/api*

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

## Models

- [AclRole](docs/Model/AclRole.md)
- [AclUserRole](docs/Model/AclUserRole.md)
- [ActionMailTemplateBuildMailTemplate](docs/Model/ActionMailTemplateBuildMailTemplate.md)
- [ActionMailTemplateBuildMailTemplateType](docs/Model/ActionMailTemplateBuildMailTemplateType.md)
- [ActionMailTemplateSendBinAttachments](docs/Model/ActionMailTemplateSendBinAttachments.md)
- [App](docs/Model/App.md)
- [AppActionButton](docs/Model/AppActionButton.md)
- [AppCmsBlock](docs/Model/AppCmsBlock.md)
- [AppPaymentMethod](docs/Model/AppPaymentMethod.md)
- [AppTemplate](docs/Model/AppTemplate.md)
- [BfCategoryMapping](docs/Model/BfCategoryMapping.md)
- [BfConfig](docs/Model/BfConfig.md)
- [BfMarketplace](docs/Model/BfMarketplace.md)
- [BfMarketplaceSalesChannel](docs/Model/BfMarketplaceSalesChannel.md)
- [BfMarketplaceSettings](docs/Model/BfMarketplaceSettings.md)
- [BfProductToDelete](docs/Model/BfProductToDelete.md)
- [BfSupport](docs/Model/BfSupport.md)
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
- [DeadMessage](docs/Model/DeadMessage.md)
- [DeliveryTime](docs/Model/DeliveryTime.md)
- [Document](docs/Model/Document.md)
- [DocumentBaseConfig](docs/Model/DocumentBaseConfig.md)
- [DocumentBaseConfigSalesChannel](docs/Model/DocumentBaseConfigSalesChannel.md)
- [DocumentType](docs/Model/DocumentType.md)
- [Error](docs/Model/Error.md)
- [ErrorSource](docs/Model/ErrorSource.md)
- [EventAction](docs/Model/EventAction.md)
- [EventActionRule](docs/Model/EventActionRule.md)
- [EventActionSalesChannel](docs/Model/EventActionSalesChannel.md)
- [Failure](docs/Model/Failure.md)
- [Flow](docs/Model/Flow.md)
- [FlowSequence](docs/Model/FlowSequence.md)
- [ImportExportFile](docs/Model/ImportExportFile.md)
- [ImportExportLog](docs/Model/ImportExportLog.md)
- [ImportExportProfile](docs/Model/ImportExportProfile.md)
- [Info](docs/Model/Info.md)
- [InfoConfigResponse](docs/Model/InfoConfigResponse.md)
- [InfoConfigResponseAdminWorker](docs/Model/InfoConfigResponseAdminWorker.md)
- [InfoConfigResponseBundles](docs/Model/InfoConfigResponseBundles.md)
- [InfoConfigResponseSettings](docs/Model/InfoConfigResponseSettings.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineObject10](docs/Model/InlineObject10.md)
- [InlineObject11](docs/Model/InlineObject11.md)
- [InlineObject12](docs/Model/InlineObject12.md)
- [InlineObject13](docs/Model/InlineObject13.md)
- [InlineObject2](docs/Model/InlineObject2.md)
- [InlineObject3](docs/Model/InlineObject3.md)
- [InlineObject4](docs/Model/InlineObject4.md)
- [InlineObject5](docs/Model/InlineObject5.md)
- [InlineObject6](docs/Model/InlineObject6.md)
- [InlineObject7](docs/Model/InlineObject7.md)
- [InlineObject8](docs/Model/InlineObject8.md)
- [InlineObject9](docs/Model/InlineObject9.md)
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
- [LandingPage](docs/Model/LandingPage.md)
- [LandingPageSalesChannel](docs/Model/LandingPageSalesChannel.md)
- [LandingPageTag](docs/Model/LandingPageTag.md)
- [Language](docs/Model/Language.md)
- [Link](docs/Model/Link.md)
- [LinkOneOf](docs/Model/LinkOneOf.md)
- [Linkage](docs/Model/Linkage.md)
- [Locale](docs/Model/Locale.md)
- [LogEntry](docs/Model/LogEntry.md)
- [MailHeaderFooter](docs/Model/MailHeaderFooter.md)
- [MailTemplate](docs/Model/MailTemplate.md)
- [MailTemplateMedia](docs/Model/MailTemplateMedia.md)
- [MailTemplateType](docs/Model/MailTemplateType.md)
- [MainCategory](docs/Model/MainCategory.md)
- [Media](docs/Model/Media.md)
- [MediaDefaultFolder](docs/Model/MediaDefaultFolder.md)
- [MediaFolder](docs/Model/MediaFolder.md)
- [MediaFolderConfiguration](docs/Model/MediaFolderConfiguration.md)
- [MediaFolderConfigurationMediaThumbnailSize](docs/Model/MediaFolderConfigurationMediaThumbnailSize.md)
- [MediaTag](docs/Model/MediaTag.md)
- [MediaThumbnail](docs/Model/MediaThumbnail.md)
- [MediaThumbnailSize](docs/Model/MediaThumbnailSize.md)
- [MessageQueueStats](docs/Model/MessageQueueStats.md)
- [NewsletterRecipient](docs/Model/NewsletterRecipient.md)
- [NewsletterRecipientTag](docs/Model/NewsletterRecipientTag.md)
- [Notification](docs/Model/Notification.md)
- [NumberRange](docs/Model/NumberRange.md)
- [NumberRangeSalesChannel](docs/Model/NumberRangeSalesChannel.md)
- [NumberRangeState](docs/Model/NumberRangeState.md)
- [NumberRangeType](docs/Model/NumberRangeType.md)
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
- [RelationshipToOne](docs/Model/RelationshipToOne.md)
- [Relationships](docs/Model/Relationships.md)
- [RelationshipsAnyOf](docs/Model/RelationshipsAnyOf.md)
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

## Authorization

### oAuth

- **Type**: `OAuth`
- **Flow**: `password`
- **Authorization URL**: ``
- **Scopes**: 
    - **write**: Full write access


### oAuth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **write**: Full write access

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `6.4.8.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
