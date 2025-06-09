# WildJar\ApiClient\UserApi

All URIs are relative to https://api.trkcall.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addUser()**](UserApi.md#addUser) | **PUT** /user | Invite a user |
| [**getCurrentUserWithSIP()**](UserApi.md#getCurrentUserWithSIP) | **GET** /user/me/sip | Get current user details with SIP extension |
| [**getUser()**](UserApi.md#getUser) | **GET** /user/{email} | Get user details |
| [**getUserInfo()**](UserApi.md#getUserInfo) | **GET** /user/me | Get logged user details |
| [**listUser()**](UserApi.md#listUser) | **GET** /user | List Users |
| [**removeUser()**](UserApi.md#removeUser) | **DELETE** /user/{email} | Suspend and remove a user |
| [**updateUser()**](UserApi.md#updateUser) | **POST** /user/{email} | Update user details |


## `addUser()`

```php
addUser($user): \WildJar\ApiClient\Model\AddUser200Response
```

Invite a user

Invite a new user to your account or a sub-account. The invite will be sent by email, including a signup link where the user can enter their details and set a password.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = new \WildJar\ApiClient\Model\User(); // \WildJar\ApiClient\Model\User

try {
    $result = $apiInstance->addUser($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->addUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user** | [**\WildJar\ApiClient\Model\User**](../Model/User.md)|  | |

### Return type

[**\WildJar\ApiClient\Model\AddUser200Response**](../Model/AddUser200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrentUserWithSIP()`

```php
getCurrentUserWithSIP(): \WildJar\ApiClient\Model\GetCurrentUserWithSIP200Response
```

Get current user details with SIP extension

Show detailed information about the currently logged in user with SIP extension details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCurrentUserWithSIP();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getCurrentUserWithSIP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\WildJar\ApiClient\Model\GetCurrentUserWithSIP200Response**](../Model/GetCurrentUserWithSIP200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser($email): \WildJar\ApiClient\Model\AddUser200Response
```

Get user details

Show detailed information about a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | The user's email address.

try {
    $result = $apiInstance->getUser($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| The user&#39;s email address. | |

### Return type

[**\WildJar\ApiClient\Model\AddUser200Response**](../Model/AddUser200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserInfo()`

```php
getUserInfo(): \WildJar\ApiClient\Model\AddUser200Response
```

Get logged user details

Show detailed information about the currently logged in user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\WildJar\ApiClient\Model\AddUser200Response**](../Model/AddUser200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUser()`

```php
listUser(): \WildJar\ApiClient\Model\ListUser200Response
```

List Users

List users on your account and/or sub-accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\WildJar\ApiClient\Model\ListUser200Response**](../Model/ListUser200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeUser()`

```php
removeUser($email): \WildJar\ApiClient\Model\AddUser200Response
```

Suspend and remove a user

Suspends a user if the user is in `active` state. Or removes a user that is in `suspended` or `invited` state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | The user's email address.

try {
    $result = $apiInstance->removeUser($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->removeUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| The user&#39;s email address. | |

### Return type

[**\WildJar\ApiClient\Model\AddUser200Response**](../Model/AddUser200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($email, $user_full): \WildJar\ApiClient\Model\AddUser200Response
```

Update user details

Update details of a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 56; // int | The user's email address.
$user_full = new \WildJar\ApiClient\Model\UserFull(); // \WildJar\ApiClient\Model\UserFull

try {
    $result = $apiInstance->updateUser($email, $user_full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **int**| The user&#39;s email address. | |
| **user_full** | [**\WildJar\ApiClient\Model\UserFull**](../Model/UserFull.md)|  | |

### Return type

[**\WildJar\ApiClient\Model\AddUser200Response**](../Model/AddUser200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
