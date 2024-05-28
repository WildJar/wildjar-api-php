# WildJar\ApiClient\SIPApi

All URIs are relative to https://api.trkcall.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addSIPExtension()**](SIPApi.md#addSIPExtension) | **PUT** /sip | Create a new SIP extension |
| [**getSIPExtension()**](SIPApi.md#getSIPExtension) | **GET** /sip/{uuid} | Show SIP extension details |
| [**init()**](SIPApi.md#init) | **PATCH** /sip/web | Initialise the web phone module for an end-user |
| [**listSIPExtension()**](SIPApi.md#listSIPExtension) | **GET** /sip | Get list of SIP extensions |
| [**updateSIPExtension()**](SIPApi.md#updateSIPExtension) | **POST** /sip/{uuid} | Update SIP extension details |


## `addSIPExtension()`

```php
addSIPExtension($sip_extension_common): \WildJar\ApiClient\Model\AddSIPExtension200Response
```

Create a new SIP extension

Add a new SIP extension

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\SIPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sip_extension_common = new \WildJar\ApiClient\Model\SIPExtensionCommon(); // \WildJar\ApiClient\Model\SIPExtensionCommon

try {
    $result = $apiInstance->addSIPExtension($sip_extension_common);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPApi->addSIPExtension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sip_extension_common** | [**\WildJar\ApiClient\Model\SIPExtensionCommon**](../Model/SIPExtensionCommon.md)|  | |

### Return type

[**\WildJar\ApiClient\Model\AddSIPExtension200Response**](../Model/AddSIPExtension200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSIPExtension()`

```php
getSIPExtension($uuid): \WildJar\ApiClient\Model\AddSIPExtension200Response
```

Show SIP extension details

Show SIP exension details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\SIPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 01234567-1234-1234-1234-0123456789AB; // string | SIP extension UUID

try {
    $result = $apiInstance->getSIPExtension($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPApi->getSIPExtension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| SIP extension UUID | |

### Return type

[**\WildJar\ApiClient\Model\AddSIPExtension200Response**](../Model/AddSIPExtension200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `init()`

```php
init($web_phone_module): \WildJar\ApiClient\Model\Init200Response
```

Initialise the web phone module for an end-user

Initialise the web phone module for an end-user and whitelist their IP address to make outbound calls.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\SIPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_phone_module = new \WildJar\ApiClient\Model\WebPhoneModule(); // \WildJar\ApiClient\Model\WebPhoneModule

try {
    $result = $apiInstance->init($web_phone_module);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPApi->init: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_phone_module** | [**\WildJar\ApiClient\Model\WebPhoneModule**](../Model/WebPhoneModule.md)|  | |

### Return type

[**\WildJar\ApiClient\Model\Init200Response**](../Model/Init200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSIPExtension()`

```php
listSIPExtension(): \WildJar\ApiClient\Model\ListSIPExtension200Response
```

Get list of SIP extensions

Get a list of active SIP extensions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\SIPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listSIPExtension();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPApi->listSIPExtension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\WildJar\ApiClient\Model\ListSIPExtension200Response**](../Model/ListSIPExtension200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSIPExtension()`

```php
updateSIPExtension($uuid, $sip_extension_common): \WildJar\ApiClient\Model\AddSIPExtension200Response
```

Update SIP extension details

Show SIP exension details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\SIPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 01234567-1234-1234-1234-0123456789AB; // string | SIP extension UUID
$sip_extension_common = new \WildJar\ApiClient\Model\SIPExtensionCommon(); // \WildJar\ApiClient\Model\SIPExtensionCommon

try {
    $result = $apiInstance->updateSIPExtension($uuid, $sip_extension_common);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPApi->updateSIPExtension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| SIP extension UUID | |
| **sip_extension_common** | [**\WildJar\ApiClient\Model\SIPExtensionCommon**](../Model/SIPExtensionCommon.md)|  | |

### Return type

[**\WildJar\ApiClient\Model\AddSIPExtension200Response**](../Model/AddSIPExtension200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
