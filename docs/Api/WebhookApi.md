# WildJar\ApiClient\WebhookApi

All URIs are relative to https://api.trkcall.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addWebhook()**](WebhookApi.md#addWebhook) | **PUT** /hook | Create a webhook |
| [**getWebhook()**](WebhookApi.md#getWebhook) | **GET** /hook/{uuid} | Get webhook configuration details |
| [**listWebhook()**](WebhookApi.md#listWebhook) | **GET** /hook | Get list of webhooks |
| [**removeWebhook()**](WebhookApi.md#removeWebhook) | **DELETE** /hook/{uuid} | Remove a webhook |
| [**updateWebhook()**](WebhookApi.md#updateWebhook) | **POST** /hook/{uuid} | Update a webhook configuration |


## `addWebhook()`

```php
addWebhook($webhook_detailed): \WildJar\ApiClient\Model\AddWebhook200Response
```

Create a webhook

Create an outbound webhook configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_detailed = new \WildJar\ApiClient\Model\WebhookDetailed(); // \WildJar\ApiClient\Model\WebhookDetailed

try {
    $result = $apiInstance->addWebhook($webhook_detailed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->addWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_detailed** | [**\WildJar\ApiClient\Model\WebhookDetailed**](../Model/WebhookDetailed.md)|  | |

### Return type

[**\WildJar\ApiClient\Model\AddWebhook200Response**](../Model/AddWebhook200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhook()`

```php
getWebhook($uuid): \WildJar\ApiClient\Model\AddWebhook200Response
```

Get webhook configuration details

Show detailed configuration of an outbound webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 56; // int | The webhook UUID.

try {
    $result = $apiInstance->getWebhook($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **int**| The webhook UUID. | |

### Return type

[**\WildJar\ApiClient\Model\AddWebhook200Response**](../Model/AddWebhook200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebhook()`

```php
listWebhook(): \WildJar\ApiClient\Model\ListWebhook200Response
```

Get list of webhooks

Get a list webhooks configured.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWebhook();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->listWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\WildJar\ApiClient\Model\ListWebhook200Response**](../Model/ListWebhook200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeWebhook()`

```php
removeWebhook($uuid)
```

Remove a webhook

Remove an outbound webhook configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The webhook UUID.

try {
    $apiInstance->removeWebhook($uuid);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->removeWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The webhook UUID. | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhook()`

```php
updateWebhook($uuid, $webhook_detailed): \WildJar\ApiClient\Model\AddWebhook200Response
```

Update a webhook configuration

Update the configuration of an outbound webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 56; // int | The webhook UUID.
$webhook_detailed = new \WildJar\ApiClient\Model\WebhookDetailed(); // \WildJar\ApiClient\Model\WebhookDetailed

try {
    $result = $apiInstance->updateWebhook($uuid, $webhook_detailed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **int**| The webhook UUID. | |
| **webhook_detailed** | [**\WildJar\ApiClient\Model\WebhookDetailed**](../Model/WebhookDetailed.md)|  | |

### Return type

[**\WildJar\ApiClient\Model\AddWebhook200Response**](../Model/AddWebhook200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
