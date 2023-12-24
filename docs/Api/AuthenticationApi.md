# WildJar\ApiClient\AuthenticationApi

All URIs are relative to https://api.trkcall.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**login()**](AuthenticationApi.md#login) | **POST** /token | Generate the authentication token |


## `login()`

```php
login(): \WildJar\ApiClient\Model\Login200Response
```

Generate the authentication token

WildJar Authentication and Security system use only expiring token.  The Bearer token has a Time to Live (TTL) of 1 hou.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: userLogin
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new WildJar\ApiClient\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->login();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->login: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\WildJar\ApiClient\Model\Login200Response**](../Model/Login200Response.md)

### Authorization

[userLogin](../../README.md#userLogin)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
