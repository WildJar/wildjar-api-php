# WildJar\ApiClient\AccountApi

All URIs are relative to https://api.trkcall.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAccount()**](AccountApi.md#addAccount) | **PUT** /account | Create a new account |
| [**getAccount()**](AccountApi.md#getAccount) | **GET** /account/{id} | Get account details |
| [**listAccount()**](AccountApi.md#listAccount) | **GET** /account | Get list of accounts |
| [**moveAccount()**](AccountApi.md#moveAccount) | **GET** /account/tree/{child}/{parent} | Move an account |
| [**updateAccount()**](AccountApi.md#updateAccount) | **POST** /account/{id} | Update an existing account |


## `addAccount()`

```php
addAccount($account): \WildJar\ApiClient\Model\AddAccount200Response
```

Create a new account

Add a new account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = new \WildJar\ApiClient\Model\Account(); // \WildJar\ApiClient\Model\Account

try {
    $result = $apiInstance->addAccount($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->addAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | [**\WildJar\ApiClient\Model\Account**](../Model/Account.md)|  | |

### Return type

[**\WildJar\ApiClient\Model\AddAccount200Response**](../Model/AddAccount200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccount()`

```php
getAccount($id, $show): \WildJar\ApiClient\Model\AddAccount200Response
```

Get account details

Retrieve list of accounts all accounts availabe, active and disabled

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Account ID
$show = links; // string | Use `links` to include the account's parent and child accounts.

try {
    $result = $apiInstance->getAccount($id, $show);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Account ID | |
| **show** | **string**| Use &#x60;links&#x60; to include the account&#39;s parent and child accounts. | [optional] |

### Return type

[**\WildJar\ApiClient\Model\AddAccount200Response**](../Model/AddAccount200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccount()`

```php
listAccount($page, $per_page, $order, $status, $name): \WildJar\ApiClient\Model\ListAccount200Response
```

Get list of accounts

Retrieve list of accounts all accounts availabe, active and disabled

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number of results to return.
$per_page = 10; // int | Number of results to return per page.
$order = 'order_example'; // string | Field name to sort results by. Prefix the field name by a minus sign (ie. -id) to filter in descending order.
$status = 'status_example'; // string | Filter accounts by their status
$name = 'name_example'; // string | Filter accounts by name

try {
    $result = $apiInstance->listAccount($page, $per_page, $order, $status, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->listAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number of results to return. | [optional] [default to 1] |
| **per_page** | **int**| Number of results to return per page. | [optional] [default to 10] |
| **order** | **string**| Field name to sort results by. Prefix the field name by a minus sign (ie. -id) to filter in descending order. | [optional] |
| **status** | **string**| Filter accounts by their status | [optional] |
| **name** | **string**| Filter accounts by name | [optional] |

### Return type

[**\WildJar\ApiClient\Model\ListAccount200Response**](../Model/ListAccount200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveAccount()`

```php
moveAccount($child, $parent): \WildJar\ApiClient\Model\MoveAccount200Response
```

Move an account

Move an account within the account structure.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$child = 20002; // float | The account ID of the account to be moved
$parent = 20001; // float | The account ID of the new parent account.

try {
    $result = $apiInstance->moveAccount($child, $parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->moveAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **child** | **float**| The account ID of the account to be moved | |
| **parent** | **float**| The account ID of the new parent account. | |

### Return type

[**\WildJar\ApiClient\Model\MoveAccount200Response**](../Model/MoveAccount200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccount()`

```php
updateAccount($id, $account): \WildJar\ApiClient\Model\AddAccount200Response
```

Update an existing account

Update an existing account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Account ID
$account = new \WildJar\ApiClient\Model\Account(); // \WildJar\ApiClient\Model\Account

try {
    $result = $apiInstance->updateAccount($id, $account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->updateAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Account ID | |
| **account** | [**\WildJar\ApiClient\Model\Account**](../Model/Account.md)|  | |

### Return type

[**\WildJar\ApiClient\Model\AddAccount200Response**](../Model/AddAccount200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
