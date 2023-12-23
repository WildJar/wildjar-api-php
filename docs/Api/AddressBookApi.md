# Wildjar\AddressBookApi

All URIs are relative to https://api.trkcall.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAddressBookContactAssociations()**](AddressBookApi.md#getAddressBookContactAssociations) | **GET** /addressbook/full | Show full address book contact associations |
| [**getAddressBookContactDetails()**](AddressBookApi.md#getAddressBookContactDetails) | **GET** /addressbook/{uuid} | Show address book contact details |
| [**listAddressBookContacts()**](AddressBookApi.md#listAddressBookContacts) | **GET** /addressbook | Get list of contacts in the address book |


## `getAddressBookContactAssociations()`

```php
getAddressBookContactAssociations(): \Wildjar\Model\GetAddressBookContactAssociations200Response
```

Show full address book contact associations

Show full address book contact number to contact mapping by account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAddressBookContactAssociations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->getAddressBookContactAssociations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Wildjar\Model\GetAddressBookContactAssociations200Response**](../Model/GetAddressBookContactAssociations200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddressBookContactDetails()`

```php
getAddressBookContactDetails($uuid): \Wildjar\Model\GetAddressBookContactDetails200Response
```

Show address book contact details

Show detailed call record for an outbound call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 01234567-1234-1234-1234-0123456789AB; // string | Address book contact UUID

try {
    $result = $apiInstance->getAddressBookContactDetails($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->getAddressBookContactDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Address book contact UUID | |

### Return type

[**\Wildjar\Model\GetAddressBookContactDetails200Response**](../Model/GetAddressBookContactDetails200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAddressBookContacts()`

```php
listAddressBookContacts(): \Wildjar\Model\ListAddressBookContacts200Response
```

Get list of contacts in the address book

Returns a list of contacts in the address book.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listAddressBookContacts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->listAddressBookContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Wildjar\Model\ListAddressBookContacts200Response**](../Model/ListAddressBookContacts200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
