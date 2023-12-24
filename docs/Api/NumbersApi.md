# WildJar\ApiClient\NumbersApi

All URIs are relative to https://api.trkcall.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**decommissionNumber()**](NumbersApi.md#decommissionNumber) | **DELETE** /number/{did} | Decommission a tracking number |
| [**deleteInventoryNumber()**](NumbersApi.md#deleteInventoryNumber) | **DELETE** /number/inventory/{did} | Remove a number from inventory (Internal) |
| [**getNumber()**](NumbersApi.md#getNumber) | **GET** /number/{did} | Get tracking number number details |
| [**getNumberFull()**](NumbersApi.md#getNumberFull) | **GET** /number/{did}/extra | Get full tracking number number details (Dashboard) |
| [**listAvailableNumbers()**](NumbersApi.md#listAvailableNumbers) | **GET** /number/available/{country_code} | Get list of available numbers by country |
| [**listInventoryNumbers()**](NumbersApi.md#listInventoryNumbers) | **GET** /number/all/{country_code} | Get list of inventory by country (Internal) |
| [**listNumbers()**](NumbersApi.md#listNumbers) | **GET** /number | Get list of numbers |
| [**orderNumber()**](NumbersApi.md#orderNumber) | **PUT** /number/{account}/{did} | Order an tracking number |
| [**updateNumber()**](NumbersApi.md#updateNumber) | **POST** /number/{did} | Update tracking number details |


## `decommissionNumber()`

```php
decommissionNumber($did)
```

Decommission a tracking number

Decommission an in-use tracking number. Once decommissioned, the number will move into a decommissioned state and remain in the account for 24 hours, during which time it can be restored by our support team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$did = 'did_example'; // string | Tracking number in E164 format without a leading plus (+).

try {
    $apiInstance->decommissionNumber($did);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->decommissionNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **did** | **string**| Tracking number in E164 format without a leading plus (+). | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInventoryNumber()`

```php
deleteInventoryNumber($did)
```

Remove a number from inventory (Internal)

Removes a number permanently from inventory if cancelled with a provider or ported out.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$did = 'did_example'; // string | Tracking number in E164 format without a leading plus (+).

try {
    $apiInstance->deleteInventoryNumber($did);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->deleteInventoryNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **did** | **string**| Tracking number in E164 format without a leading plus (+). | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNumber()`

```php
getNumber($did): \WildJar\ApiClient\Model\GetNumber200Response
```

Get tracking number number details

Show detailed information about an individual in-use tracking number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$did = 56; // int | Tracking number in E164 format without a leading plus (+).

try {
    $result = $apiInstance->getNumber($did);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->getNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **did** | **int**| Tracking number in E164 format without a leading plus (+). | |

### Return type

[**\WildJar\ApiClient\Model\GetNumber200Response**](../Model/GetNumber200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNumberFull()`

```php
getNumberFull($did): \WildJar\ApiClient\Model\OrderNumber200Response
```

Get full tracking number number details (Dashboard)

Show detailed information about an individual tracking number, including numbers which share the routing of this number, dynamic number insertion (DNI) scripts the number is present in, and the primary email that inbound SMS will be forwarded to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$did = 56; // int | Tracking number in E164 format without a leading plus (+).

try {
    $result = $apiInstance->getNumberFull($did);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->getNumberFull: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **did** | **int**| Tracking number in E164 format without a leading plus (+). | |

### Return type

[**\WildJar\ApiClient\Model\OrderNumber200Response**](../Model/OrderNumber200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAvailableNumbers()`

```php
listAvailableNumbers($country_code, $area, $network, $order, $prefix): \WildJar\ApiClient\Model\ListAvailableNumbers200Response
```

Get list of available numbers by country

Returns a list of available numbers to order based on the selected country code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = AU; // string | 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information.
$area = Sydney; // string | _**\"Geo\" numbers only.**_ Filter results by number location or charge area.
$network = 'network_example'; // string | Filter the results by tracking number type.
$order = 'order_example'; // string | Sort the available number pool by available number in ascending or descending order.
$prefix = 6129; // string | Filter results by the number prefix.

try {
    $result = $apiInstance->listAvailableNumbers($country_code, $area, $network, $order, $prefix);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->listAvailableNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | **string**| 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. | |
| **area** | **string**| _**\&quot;Geo\&quot; numbers only.**_ Filter results by number location or charge area. | [optional] |
| **network** | **string**| Filter the results by tracking number type. | [optional] |
| **order** | **string**| Sort the available number pool by available number in ascending or descending order. | [optional] |
| **prefix** | **string**| Filter results by the number prefix. | [optional] |

### Return type

[**\WildJar\ApiClient\Model\ListAvailableNumbers200Response**](../Model/ListAvailableNumbers200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInventoryNumbers()`

```php
listInventoryNumbers($country_code, $account, $provider, $type): \WildJar\ApiClient\Model\ListInventoryNumbers200Response
```

Get list of inventory by country (Internal)

Returns a list of numbers in inventory based on the selected country code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = AU; // string | 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information.
$account = 20000; // string | Filter tracking numbers by account number
$provider = Symbio; // string | Filter results by number provider.
$type = 'type_example'; // string | Filter the results by tracking number type.

try {
    $result = $apiInstance->listInventoryNumbers($country_code, $account, $provider, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->listInventoryNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | **string**| 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. | |
| **account** | **string**| Filter tracking numbers by account number | [optional] |
| **provider** | **string**| Filter results by number provider. | [optional] |
| **type** | **string**| Filter the results by tracking number type. | [optional] |

### Return type

[**\WildJar\ApiClient\Model\ListInventoryNumbers200Response**](../Model/ListInventoryNumbers200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listNumbers()`

```php
listNumbers($type, $account): \WildJar\ApiClient\Model\ListNumbers200Response
```

Get list of numbers

Returns a list of tracking numbers which have been provisioned to any account you have access to and are currently active or decommissioned in the last 24 hours.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Filter tracking numbers by number type
$account = 20000; // string | Filter tracking numbers by account number

try {
    $result = $apiInstance->listNumbers($type, $account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->listNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Filter tracking numbers by number type | [optional] |
| **account** | **string**| Filter tracking numbers by account number | [optional] |

### Return type

[**\WildJar\ApiClient\Model\ListNumbers200Response**](../Model/ListNumbers200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderNumber()`

```php
orderNumber($account, $did, $order_number): \WildJar\ApiClient\Model\OrderNumber200Response
```

Order an tracking number

Order an tracking number from the WildJar available pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number
$did = 61255501234; // string | Tracking number in E164 format without a leading plus (+).
$order_number = new \WildJar\ApiClient\Model\OrderNumber(); // \WildJar\ApiClient\Model\OrderNumber

try {
    $result = $apiInstance->orderNumber($account, $did, $order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->orderNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number | |
| **did** | **string**| Tracking number in E164 format without a leading plus (+). | |
| **order_number** | [**\WildJar\ApiClient\Model\OrderNumber**](../Model/OrderNumber.md)|  | |

### Return type

[**\WildJar\ApiClient\Model\OrderNumber200Response**](../Model/OrderNumber200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNumber()`

```php
updateNumber($did, $number): \WildJar\ApiClient\Model\GetNumber200Response
```

Update tracking number details

Update details of an in-use tracking number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$did = 56; // int | Tracking number in E164 format without a leading plus (+).
$number = new \WildJar\ApiClient\Model\Number(); // \WildJar\ApiClient\Model\Number

try {
    $result = $apiInstance->updateNumber($did, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->updateNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **did** | **int**| Tracking number in E164 format without a leading plus (+). | |
| **number** | [**\WildJar\ApiClient\Model\Number**](../Model/Number.md)|  | |

### Return type

[**\WildJar\ApiClient\Model\GetNumber200Response**](../Model/GetNumber200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
