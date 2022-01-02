# # PaymentMethod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**plugin_id** | **string** |  | [optional]
**name** | **string** |  |
**distinguishable_name** | **string** |  | [optional] [readonly]
**description** | **string** |  | [optional]
**position** | **int** |  | [optional]
**active** | **bool** |  | [optional]
**after_order_enabled** | **bool** |  | [optional]
**custom_fields** | **object** |  | [optional]
**availability_rule_id** | **string** |  | [optional]
**media_id** | **string** |  | [optional]
**formatted_handler_identifier** | **string** |  | [optional] [readonly]
**synchronous** | **bool** |  | [optional] [readonly]
**asynchronous** | **bool** |  | [optional] [readonly]
**prepared** | **bool** |  | [optional] [readonly]
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**media** | [**\OpenAPI\Client\Model\Media**](Media.md) |  | [optional]
**availability_rule** | [**\OpenAPI\Client\Model\Rule**](Rule.md) |  | [optional]
**sales_channel_default_assignments** | [**\OpenAPI\Client\Model\SalesChannel**](SalesChannel.md) |  | [optional]
**plugin** | [**\OpenAPI\Client\Model\Plugin**](Plugin.md) |  | [optional]
**customers** | [**\OpenAPI\Client\Model\Customer**](Customer.md) |  | [optional]
**order_transactions** | [**\OpenAPI\Client\Model\OrderTransaction**](OrderTransaction.md) |  | [optional]
**sales_channels** | [**\OpenAPI\Client\Model\SalesChannel**](SalesChannel.md) |  | [optional]
**app_payment_method** | [**\OpenAPI\Client\Model\AppPaymentMethod**](AppPaymentMethod.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
