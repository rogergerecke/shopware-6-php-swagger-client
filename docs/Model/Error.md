# # Error

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier for this particular occurrence of the problem. | [optional]
**links** | [**array<string,\OpenAPI\Client\Model\Link>**](Link.md) |  | [optional]
**status** | **string** | The HTTP status code applicable to this problem, expressed as a string value. | [optional]
**code** | **string** | An application-specific error code, expressed as a string value. | [optional]
**title** | **string** | A short, human-readable summary of the problem. It **SHOULD NOT** change from occurrence to occurrence of the problem, except for purposes of localization. | [optional]
**detail** | **string** | A human-readable explanation specific to this occurrence of the problem. | [optional]
**source** | [**\OpenAPI\Client\Model\ErrorSource**](ErrorSource.md) |  | [optional]
**meta** | **array<string,object>** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
