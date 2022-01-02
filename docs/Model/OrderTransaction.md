# # OrderTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**version_id** | **string** |  | [optional]
**order_id** | **string** |  |
**order_version_id** | **string** |  | [optional]
**payment_method_id** | **string** |  |
**amount** | [**\OpenAPI\Client\Model\OrderShippingCosts**](OrderShippingCosts.md) |  |
**state_id** | **string** |  |
**custom_fields** | **object** |  | [optional]
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**state_machine_state** | [**\OpenAPI\Client\Model\StateMachineState**](StateMachineState.md) |  | [optional]
**order** | [**\OpenAPI\Client\Model\Order**](Order.md) |  | [optional]
**payment_method** | [**\OpenAPI\Client\Model\PaymentMethod**](PaymentMethod.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
