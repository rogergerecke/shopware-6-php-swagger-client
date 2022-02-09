# OpenAPI\Client\MailOperationsApi

All URIs are relative to https://redkitty.de/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**build()**](MailOperationsApi.md#build) | **POST** /_action/mail-template/build | Preview a mail template
[**send()**](MailOperationsApi.md#send) | **POST** /_action/mail-template/send | Send a mail
[**validate()**](MailOperationsApi.md#validate) | **POST** /_action/mail-template/validate | Validate a mail content


## `build()`

```php
build($inline_object6): string
```

Preview a mail template

Generates a preview of a mail template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MailOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object6 = new \OpenAPI\Client\Model\InlineObject6(); // \OpenAPI\Client\Model\InlineObject6

try {
    $result = $apiInstance->build($inline_object6);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailOperationsApi->build: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object6** | [**\OpenAPI\Client\Model\InlineObject6**](../Model/InlineObject6.md)|  |

### Return type

**string**

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `send()`

```php
send($inline_object4): \OpenAPI\Client\Model\InlineResponse2001
```

Send a mail

Generates a mail from a mail template and sends it to the customer.  Take a look at the `salesChannel` entity for possible values. For example `{{ salesChannel.name }}` can be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MailOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object4 = new \OpenAPI\Client\Model\InlineObject4(); // \OpenAPI\Client\Model\InlineObject4

try {
    $result = $apiInstance->send($inline_object4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailOperationsApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object4** | [**\OpenAPI\Client\Model\InlineObject4**](../Model/InlineObject4.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validate()`

```php
validate($inline_object5)
```

Validate a mail content

Validates if content for a mail can be rendered without sending an email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MailOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object5 = new \OpenAPI\Client\Model\InlineObject5(); // \OpenAPI\Client\Model\InlineObject5

try {
    $apiInstance->validate($inline_object5);
} catch (Exception $e) {
    echo 'Exception when calling MailOperationsApi->validate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object5** | [**\OpenAPI\Client\Model\InlineObject5**](../Model/InlineObject5.md)|  |

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
