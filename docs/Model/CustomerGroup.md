# # CustomerGroup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  |
**display_gross** | **bool** |  | [optional]
**custom_fields** | **object** |  | [optional]
**registration_active** | **bool** |  | [optional]
**registration_title** | **string** |  | [optional]
**registration_introduction** | **string** |  | [optional]
**registration_only_company_registration** | **bool** |  | [optional]
**registration_seo_meta_description** | **string** |  | [optional]
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**customers** | [**\OpenAPI\Client\Model\Customer**](Customer.md) |  | [optional]
**sales_channels** | [**\OpenAPI\Client\Model\SalesChannel**](SalesChannel.md) |  | [optional]
**registration_sales_channels** | [**\OpenAPI\Client\Model\SalesChannel**](SalesChannel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
