# OpenAPI\Client\BulkOperationsApi

All URIs are relative to http://redkitty.de/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sync()**](BulkOperationsApi.md#sync) | **POST** /_action/sync | Bulk edit entities


## `sync()`

```php
sync($inline_object, $fail_on_error, $single_operation, $indexing_behavior): \OpenAPI\Client\Model\InlineResponse2006
```

Bulk edit entities

Starts a sync process for the list of provided actions. This can be inserts, upserts, updates and deletes on different entities.  to an asynchronous process in the background. You can control the behaviour with the `single-operation` and `indexing-behavior` header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BulkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object = array(new \OpenAPI\Client\Model\InlineObject()); // \OpenAPI\Client\Model\InlineObject[]
$fail_on_error = true; // bool | To continue upcoming actions on errors, set the `fail-on-error` header to `false`.
$single_operation = false; // bool | Controls weather the data is written at once or in seperate transactions. - `true`: Data will be written in a single transaction
$indexing_behavior = 'indexing_behavior_example'; // string | Controls the indexing behavior. - `disable-indexing`: Data indexing is completely disabled

try {
    $result = $apiInstance->sync($inline_object, $fail_on_error, $single_operation, $indexing_behavior);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkOperationsApi->sync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object** | [**\OpenAPI\Client\Model\InlineObject[]**](../Model/InlineObject.md)|  |
 **fail_on_error** | **bool**| To continue upcoming actions on errors, set the &#x60;fail-on-error&#x60; header to &#x60;false&#x60;. | [optional] [default to true]
 **single_operation** | **bool**| Controls weather the data is written at once or in seperate transactions. - &#x60;true&#x60;: Data will be written in a single transaction | [optional] [default to false]
 **indexing_behavior** | **string**| Controls the indexing behavior. - &#x60;disable-indexing&#x60;: Data indexing is completely disabled | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
