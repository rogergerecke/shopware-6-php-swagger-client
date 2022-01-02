# # OrderDeliveryPosition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**version_id** | **string** |  | [optional]
**order_delivery_id** | **string** |  |
**order_delivery_version_id** | **string** |  | [optional]
**order_line_item_id** | **string** |  |
**order_line_item_version_id** | **string** |  | [optional]
**price** | [**\OpenAPI\Client\Model\OrderShippingCosts**](OrderShippingCosts.md) |  | [optional]
**unit_price** | **float** |  | [optional]
**total_price** | **float** |  | [optional]
**quantity** | **int** |  | [optional]
**custom_fields** | **object** |  | [optional]
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**order_delivery** | [**\OpenAPI\Client\Model\OrderDelivery**](OrderDelivery.md) |  | [optional]
**order_line_item** | [**\OpenAPI\Client\Model\OrderLineItem**](OrderLineItem.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
