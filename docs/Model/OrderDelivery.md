# # OrderDelivery

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**version_id** | **string** |  | [optional]
**order_id** | **string** |  |
**order_version_id** | **string** |  | [optional]
**shipping_order_address_id** | **string** |  |
**shipping_order_address_version_id** | **string** |  | [optional]
**shipping_method_id** | **string** |  |
**state_id** | **string** |  |
**tracking_codes** | **string[]** |  |
**shipping_date_earliest** | **\DateTime** |  |
**shipping_date_latest** | **\DateTime** |  |
**shipping_costs** | [**\OpenAPI\Client\Model\OrderShippingCosts**](OrderShippingCosts.md) |  | [optional]
**custom_fields** | **object** |  | [optional]
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**state_machine_state** | [**\OpenAPI\Client\Model\StateMachineState**](StateMachineState.md) |  | [optional]
**order** | [**\OpenAPI\Client\Model\Order**](Order.md) |  | [optional]
**shipping_order_address** | [**\OpenAPI\Client\Model\OrderAddress**](OrderAddress.md) |  | [optional]
**shipping_method** | [**\OpenAPI\Client\Model\ShippingMethod**](ShippingMethod.md) |  | [optional]
**positions** | [**\OpenAPI\Client\Model\OrderDeliveryPosition**](OrderDeliveryPosition.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
