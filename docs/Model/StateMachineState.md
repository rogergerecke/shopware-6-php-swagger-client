# # StateMachineState

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**technical_name** | **string** |  |
**name** | **string** |  |
**state_machine_id** | **string** |  |
**custom_fields** | **object** |  | [optional]
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**state_machine** | [**\OpenAPI\Client\Model\StateMachine**](StateMachine.md) |  | [optional]
**from_state_machine_transitions** | [**\OpenAPI\Client\Model\StateMachineTransition**](StateMachineTransition.md) |  | [optional]
**to_state_machine_transitions** | [**\OpenAPI\Client\Model\StateMachineTransition**](StateMachineTransition.md) |  | [optional]
**order_transactions** | [**\OpenAPI\Client\Model\OrderTransaction**](OrderTransaction.md) |  | [optional]
**order_deliveries** | [**\OpenAPI\Client\Model\OrderDelivery**](OrderDelivery.md) |  | [optional]
**orders** | [**\OpenAPI\Client\Model\Order**](Order.md) |  | [optional]
**to_state_machine_history_entries** | [**\OpenAPI\Client\Model\StateMachineHistory**](StateMachineHistory.md) |  | [optional]
**from_state_machine_history_entries** | [**\OpenAPI\Client\Model\StateMachineHistory**](StateMachineHistory.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
