# # OrderAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**version_id** | **string** |  | [optional]
**country_id** | **string** |  |
**country_state_id** | **string** |  | [optional]
**order_id** | **string** |  |
**order_version_id** | **string** |  | [optional]
**salutation_id** | **string** |  |
**first_name** | **string** |  |
**last_name** | **string** |  |
**street** | **string** |  |
**zipcode** | **string** |  |
**city** | **string** |  |
**company** | **string** |  | [optional]
**department** | **string** |  | [optional]
**title** | **string** |  | [optional]
**vat_id** | **string** |  | [optional]
**phone_number** | **string** |  | [optional]
**additional_address_line1** | **string** |  | [optional]
**additional_address_line2** | **string** |  | [optional]
**custom_fields** | **object** |  | [optional]
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**country** | [**\OpenAPI\Client\Model\Country**](Country.md) |  | [optional]
**country_state** | [**\OpenAPI\Client\Model\CountryState**](CountryState.md) |  | [optional]
**order** | [**\OpenAPI\Client\Model\Order**](Order.md) |  | [optional]
**order_deliveries** | [**\OpenAPI\Client\Model\OrderDelivery**](OrderDelivery.md) |  | [optional]
**salutation** | [**\OpenAPI\Client\Model\Salutation**](Salutation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
