# # StateMachine

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**technical_name** | **string** |  |
**name** | **string** |  |
**custom_fields** | **object** |  | [optional]
**initial_state_id** | **string** |  | [optional]
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**states** | [**\OpenAPI\Client\Model\StateMachineState**](StateMachineState.md) |  | [optional]
**transitions** | [**\OpenAPI\Client\Model\StateMachineTransition**](StateMachineTransition.md) |  | [optional]
**history_entries** | [**\OpenAPI\Client\Model\StateMachineHistory**](StateMachineHistory.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
