# WildJar\ApiClient\DNIApi

All URIs are relative to https://api.trkcall.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addDNI()**](DNIApi.md#addDNI) | **PUT** /web | Create a DNI configuration |
| [**addToDNIPool()**](DNIApi.md#addToDNIPool) | **POST** /web/{code}/pool | Add to DNI number pool |
| [**getDNI()**](DNIApi.md#getDNI) | **GET** /web/{code} | Get DNI configuration details |
| [**listDNI()**](DNIApi.md#listDNI) | **GET** /web | Get list of DNI configurations |
| [**listDNIAll()**](DNIApi.md#listDNIAll) | **GET** /web/all | Get list of all DNI configurations including aliases |
| [**patchDNI()**](DNIApi.md#patchDNI) | **PATCH** /web/{code} | Force update DNI script |
| [**patchDNIToVersion()**](DNIApi.md#patchDNIToVersion) | **PATCH** /web/{code}/{version} | Force update DNI script to specific version |
| [**removeDNI()**](DNIApi.md#removeDNI) | **DELETE** /web/{code} | Remove a DNI configuration |
| [**updateDNI()**](DNIApi.md#updateDNI) | **POST** /web/{code} | Update DNI configuration |


## `addDNI()`

```php
addDNI($web_domain): \WildJar\ApiClient\Model\AddDNI200Response
```

Create a DNI configuration

Add a new domain for Dynamic Number Insertion (DNI).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\DNIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_domain = new \WildJar\ApiClient\Model\WebDomain(); // \WildJar\ApiClient\Model\WebDomain

try {
    $result = $apiInstance->addDNI($web_domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNIApi->addDNI: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_domain** | [**\WildJar\ApiClient\Model\WebDomain**](../Model/WebDomain.md)|  | |

### Return type

[**\WildJar\ApiClient\Model\AddDNI200Response**](../Model/AddDNI200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addToDNIPool()`

```php
addToDNIPool($code, $request_body): \WildJar\ApiClient\Model\AddDNI200Response
```

Add to DNI number pool

Add numbers to a DNI number pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\DNIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 56; // int | The DNI tracking code ID.
$request_body = NULL; // array<string,string[]>

try {
    $result = $apiInstance->addToDNIPool($code, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNIApi->addToDNIPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **int**| The DNI tracking code ID. | |
| **request_body** | [**array<string,string[]>**](../Model/array.md)|  | |

### Return type

[**\WildJar\ApiClient\Model\AddDNI200Response**](../Model/AddDNI200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDNI()`

```php
getDNI($code): \WildJar\ApiClient\Model\AddDNI200Response
```

Get DNI configuration details

Show detailed information DNI configuration including insertion criteria, number pools and aliases.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\DNIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 56; // int | The DNI tracking code ID.

try {
    $result = $apiInstance->getDNI($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNIApi->getDNI: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **int**| The DNI tracking code ID. | |

### Return type

[**\WildJar\ApiClient\Model\AddDNI200Response**](../Model/AddDNI200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDNI()`

```php
listDNI(): \WildJar\ApiClient\Model\ListDNI200Response
```

Get list of DNI configurations

Get a list of active DNI codes configured.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\DNIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listDNI();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNIApi->listDNI: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\WildJar\ApiClient\Model\ListDNI200Response**](../Model/ListDNI200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDNIAll()`

```php
listDNIAll(): \WildJar\ApiClient\Model\ListDNIAll200Response
```

Get list of all DNI configurations including aliases

Get a list of all DNI codes configured including aliases.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\DNIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listDNIAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNIApi->listDNIAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\WildJar\ApiClient\Model\ListDNIAll200Response**](../Model/ListDNIAll200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchDNI()`

```php
patchDNI($code): \WildJar\ApiClient\Model\AddDNI200Response
```

Force update DNI script

Force update the DNI JavaScript file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\DNIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 56; // int | The DNI tracking code ID.

try {
    $result = $apiInstance->patchDNI($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNIApi->patchDNI: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **int**| The DNI tracking code ID. | |

### Return type

[**\WildJar\ApiClient\Model\AddDNI200Response**](../Model/AddDNI200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchDNIToVersion()`

```php
patchDNIToVersion($code, $version): \WildJar\ApiClient\Model\AddDNI200Response
```

Force update DNI script to specific version

Force update the DNI JavaScript file to a specific version of the WildJar tracking code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\DNIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 56; // int | The DNI tracking code ID.
$version = 56; // int | The DNI tracking code version to update to.

try {
    $result = $apiInstance->patchDNIToVersion($code, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNIApi->patchDNIToVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **int**| The DNI tracking code ID. | |
| **version** | **int**| The DNI tracking code version to update to. | |

### Return type

[**\WildJar\ApiClient\Model\AddDNI200Response**](../Model/AddDNI200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeDNI()`

```php
removeDNI($code)
```

Remove a DNI configuration

Remove a DNI configuruation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\DNIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | The DNI tracking code ID.

try {
    $apiInstance->removeDNI($code);
} catch (Exception $e) {
    echo 'Exception when calling DNIApi->removeDNI: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The DNI tracking code ID. | |

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

## `updateDNI()`

```php
updateDNI($code, $web_configuration): \WildJar\ApiClient\Model\AddDNI200Response
```

Update DNI configuration

Update a DNI configuration, including adding, modifying and removing swap criteria and domain aliases.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\DNIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 56; // int | The DNI tracking code ID.
$web_configuration = new \WildJar\ApiClient\Model\WebConfiguration(); // \WildJar\ApiClient\Model\WebConfiguration

try {
    $result = $apiInstance->updateDNI($code, $web_configuration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNIApi->updateDNI: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **int**| The DNI tracking code ID. | |
| **web_configuration** | [**\WildJar\ApiClient\Model\WebConfiguration**](../Model/WebConfiguration.md)|  | |

### Return type

[**\WildJar\ApiClient\Model\AddDNI200Response**](../Model/AddDNI200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
