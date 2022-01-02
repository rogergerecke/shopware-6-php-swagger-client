# # FlowSequence

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**flow_id** | **string** |  |
**rule_id** | **string** |  | [optional]
**action_name** | **string** |  | [optional]
**config** | **object** |  | [optional]
**position** | **int** |  | [optional]
**display_group** | **int** |  | [optional]
**true_case** | **bool** |  | [optional]
**parent_id** | **string** |  | [optional]
**custom_fields** | **object** |  | [optional]
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**flow** | [**\OpenAPI\Client\Model\Flow**](Flow.md) |  | [optional]
**rule** | [**\OpenAPI\Client\Model\Rule**](Rule.md) |  | [optional]
**parent** | [**\OpenAPI\Client\Model\FlowSequence**](FlowSequence.md) |  | [optional]
**children** | [**\OpenAPI\Client\Model\FlowSequence**](FlowSequence.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
