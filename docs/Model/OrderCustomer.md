# # OrderCustomer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**version_id** | **string** |  | [optional]
**customer_id** | **string** |  | [optional]
**order_id** | **string** |  |
**order_version_id** | **string** |  | [optional]
**email** | **string** |  |
**salutation_id** | **string** |  |
**first_name** | **string** |  |
**last_name** | **string** |  |
**company** | **string** |  | [optional]
**title** | **string** |  | [optional]
**vat_ids** | **string[]** |  | [optional]
**customer_number** | **string** |  | [optional]
**custom_fields** | **object** |  | [optional]
**remote_address** | **string** |  | [optional]
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**order** | [**\OpenAPI\Client\Model\Order**](Order.md) |  | [optional]
**customer** | [**\OpenAPI\Client\Model\Customer**](Customer.md) |  | [optional]
**salutation** | [**\OpenAPI\Client\Model\Salutation**](Salutation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
