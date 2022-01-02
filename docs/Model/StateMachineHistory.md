# # StateMachineHistory

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**state_machine_id** | **string** |  |
**entity_name** | **string** |  |
**entity_id** | **object** |  |
**from_state_id** | **string** |  |
**to_state_id** | **string** |  |
**transition_action_name** | **string** |  | [optional]
**user_id** | **string** |  | [optional]
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**state_machine** | [**\OpenAPI\Client\Model\StateMachine**](StateMachine.md) |  | [optional]
**from_state_machine_state** | [**\OpenAPI\Client\Model\StateMachineState**](StateMachineState.md) |  | [optional]
**to_state_machine_state** | [**\OpenAPI\Client\Model\StateMachineState**](StateMachineState.md) |  | [optional]
**user** | [**\OpenAPI\Client\Model\User**](User.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
