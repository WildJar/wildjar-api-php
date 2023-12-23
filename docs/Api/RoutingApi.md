# Wildjar\RoutingApi

All URIs are relative to https://api.trkcall.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**blockCaller()**](RoutingApi.md#blockCaller) | **POST** /routing/{account}/blocked | Block a caller |
| [**blockCallerFromCall()**](RoutingApi.md#blockCallerFromCall) | **PATCH** /routing/{account}/blocked | Block a caller from a Call record |
| [**createBranchAction()**](RoutingApi.md#createBranchAction) | **PUT** /routing/{account}/branch | Create a location routing branch |
| [**createIVRAction()**](RoutingApi.md#createIVRAction) | **PUT** /routing/{account}/ivr | Create an IVR action |
| [**createLocationsAction()**](RoutingApi.md#createLocationsAction) | **PUT** /routing/{account}/locations | Create a location routing action |
| [**createRobinAction()**](RoutingApi.md#createRobinAction) | **PUT** /routing/{account}/robin | Create a round robin action |
| [**createTagAction()**](RoutingApi.md#createTagAction) | **PUT** /routing/{account}/tag | Create a tag action |
| [**createTimeAction()**](RoutingApi.md#createTimeAction) | **PUT** /routing/{account}/time | Create a time switch action |
| [**createTransferAction()**](RoutingApi.md#createTransferAction) | **PUT** /routing/{account}/transfer | Create a transfer action |
| [**createVoicemailAction()**](RoutingApi.md#createVoicemailAction) | **PUT** /routing/{account}/voicemail | Create a voicemail action |
| [**getBranchAction()**](RoutingApi.md#getBranchAction) | **GET** /routing/{account}/branch/{action_id} | Show detailed configuration of a branch action |
| [**getIVRAction()**](RoutingApi.md#getIVRAction) | **GET** /routing/{account}/ivr/{action_id} | Show detailed routing for an IVR action |
| [**getLocationsAction()**](RoutingApi.md#getLocationsAction) | **GET** /routing/{account}/locations/{action_id} | Show detailed configuration of a location action |
| [**getLocationsMap()**](RoutingApi.md#getLocationsMap) | **GET** /routing/{account}/locations/{action_id}/map | Show detailed location mapping |
| [**getRobinAction()**](RoutingApi.md#getRobinAction) | **GET** /routing/{account}/robin/{action_id} | Show detailed routing for a round robin action |
| [**getTagAction()**](RoutingApi.md#getTagAction) | **GET** /routing/{account}/tag/{action_id} | Show tag action details |
| [**getTimeAction()**](RoutingApi.md#getTimeAction) | **GET** /routing/{account}/time/{action_id} | Show detailed routing for a time switch action |
| [**getTransferAction()**](RoutingApi.md#getTransferAction) | **GET** /routing/{account}/transfer/{action_id} | Show detailed routing for a transfer action |
| [**getVoicemailAction()**](RoutingApi.md#getVoicemailAction) | **GET** /routing/{account}/voicemail/{action_id} | Show detailed routing for a voicemail action |
| [**listBlockedCallers()**](RoutingApi.md#listBlockedCallers) | **GET** /routing/{account}/blocked | List blocked callers |
| [**listBranchActions()**](RoutingApi.md#listBranchActions) | **GET** /routing/{account}/branch | List location routing branches |
| [**listIVRs()**](RoutingApi.md#listIVRs) | **GET** /routing/{account}/ivr | List IVR actions |
| [**listLocationsActions()**](RoutingApi.md#listLocationsActions) | **GET** /routing/{account}/locations | List location routing actions |
| [**listRobins()**](RoutingApi.md#listRobins) | **GET** /routing/{account}/robin | List round robin actions |
| [**listTagActions()**](RoutingApi.md#listTagActions) | **GET** /routing/{account}/tag | List tag actions |
| [**listTimeActions()**](RoutingApi.md#listTimeActions) | **GET** /routing/{account}/time | List time switch actions |
| [**listTransfers()**](RoutingApi.md#listTransfers) | **GET** /routing/{account}/transfer | List transfer actions |
| [**listVoicemails()**](RoutingApi.md#listVoicemails) | **GET** /routing/{account}/voicemail | List voicemail actions |
| [**unblockNumber()**](RoutingApi.md#unblockNumber) | **DELETE** /routing/{account}/blocked/{number} | Unblock a caller |
| [**updateBranchAction()**](RoutingApi.md#updateBranchAction) | **POST** /routing/{account}/branch/{action_id} | Update a location routing branch |
| [**updateDidRouting()**](RoutingApi.md#updateDidRouting) | **POST** /routing/{account}/did/{did} | Update the routing of a tracking number |
| [**updateIVRAction()**](RoutingApi.md#updateIVRAction) | **POST** /routing/{account}/ivr/{action_id} | Update an IVR action |
| [**updateLocationsAction()**](RoutingApi.md#updateLocationsAction) | **POST** /routing/{account}/locations/{action_id} | Update a location routing action |
| [**updateRobinAction()**](RoutingApi.md#updateRobinAction) | **POST** /routing/{account}/robin/{action_id} | Update a round robin action |
| [**updateTagAction()**](RoutingApi.md#updateTagAction) | **POST** /routing/{account}/tag/{action_id} | Update a tag action |
| [**updateTimeAction()**](RoutingApi.md#updateTimeAction) | **POST** /routing/{account}/time/{action_id} | Update a time switch action |
| [**updateTransferAction()**](RoutingApi.md#updateTransferAction) | **POST** /routing/{account}/transfer/{action_id} | Update a transfer action |
| [**updateVoicemailAction()**](RoutingApi.md#updateVoicemailAction) | **POST** /routing/{account}/voicemail/{action_id} | Update a voicemail action |


## `blockCaller()`

```php
blockCaller($account, $action_blocked): \Wildjar\Model\BlockCaller200Response
```

Block a caller

Block a caller from calling any number on the account. If the blocked number dials a tracking number, either presenting  their caller ID or private, the call will be dropped and no call shown in the call log.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_blocked = new \Wildjar\Model\ActionBlocked(); // \Wildjar\Model\ActionBlocked

try {
    $result = $apiInstance->blockCaller($account, $action_blocked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->blockCaller: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_blocked** | [**\Wildjar\Model\ActionBlocked**](../Model/ActionBlocked.md)|  | |

### Return type

[**\Wildjar\Model\BlockCaller200Response**](../Model/BlockCaller200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blockCallerFromCall()`

```php
blockCallerFromCall($account, $block_caller_from_call_request): \Wildjar\Model\BlockCaller200Response
```

Block a caller from a Call record

Block a caller directly from a call log record. This endpoint can be used to block an anonymous or private caller without knowing their phone number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$block_caller_from_call_request = new \Wildjar\Model\BlockCallerFromCallRequest(); // \Wildjar\Model\BlockCallerFromCallRequest

try {
    $result = $apiInstance->blockCallerFromCall($account, $block_caller_from_call_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->blockCallerFromCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **block_caller_from_call_request** | [**\Wildjar\Model\BlockCallerFromCallRequest**](../Model/BlockCallerFromCallRequest.md)|  | |

### Return type

[**\Wildjar\Model\BlockCaller200Response**](../Model/BlockCaller200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBranchAction()`

```php
createBranchAction($account, $action_branch_full): \Wildjar\Model\CreateBranchAction200Response
```

Create a location routing branch

Create a branch to be used in location routing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_branch_full = new \Wildjar\Model\ActionBranchFull(); // \Wildjar\Model\ActionBranchFull

try {
    $result = $apiInstance->createBranchAction($account, $action_branch_full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->createBranchAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_branch_full** | [**\Wildjar\Model\ActionBranchFull**](../Model/ActionBranchFull.md)|  | |

### Return type

[**\Wildjar\Model\CreateBranchAction200Response**](../Model/CreateBranchAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createIVRAction()`

```php
createIVRAction($account, $action_ivr_full): \Wildjar\Model\CreateIVRAction200Response
```

Create an IVR action

Create an IVR menu action in the call flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_ivr_full = new \Wildjar\Model\ActionIVRFull(); // \Wildjar\Model\ActionIVRFull

try {
    $result = $apiInstance->createIVRAction($account, $action_ivr_full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->createIVRAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_ivr_full** | [**\Wildjar\Model\ActionIVRFull**](../Model/ActionIVRFull.md)|  | |

### Return type

[**\Wildjar\Model\CreateIVRAction200Response**](../Model/CreateIVRAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLocationsAction()`

```php
createLocationsAction($account, $action_locations_full): \Wildjar\Model\CreateLocationsAction200Response
```

Create a location routing action

Create a location routing action.  **IMPORTANT**: Location based routing is currently available in Australia only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_locations_full = new \Wildjar\Model\ActionLocationsFull(); // \Wildjar\Model\ActionLocationsFull

try {
    $result = $apiInstance->createLocationsAction($account, $action_locations_full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->createLocationsAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_locations_full** | [**\Wildjar\Model\ActionLocationsFull**](../Model/ActionLocationsFull.md)|  | |

### Return type

[**\Wildjar\Model\CreateLocationsAction200Response**](../Model/CreateLocationsAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRobinAction()`

```php
createRobinAction($account, $action_robin_full): \Wildjar\Model\CreateRobinAction200Response
```

Create a round robin action

Create a round robin action in the call flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_robin_full = new \Wildjar\Model\ActionRobinFull(); // \Wildjar\Model\ActionRobinFull

try {
    $result = $apiInstance->createRobinAction($account, $action_robin_full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->createRobinAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_robin_full** | [**\Wildjar\Model\ActionRobinFull**](../Model/ActionRobinFull.md)|  | |

### Return type

[**\Wildjar\Model\CreateRobinAction200Response**](../Model/CreateRobinAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTagAction()`

```php
createTagAction($account, $action_tag): \Wildjar\Model\CreateTagAction200Response
```

Create a tag action

Create a tag action in the call flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_tag = new \Wildjar\Model\ActionTag(); // \Wildjar\Model\ActionTag

try {
    $result = $apiInstance->createTagAction($account, $action_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->createTagAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_tag** | [**\Wildjar\Model\ActionTag**](../Model/ActionTag.md)|  | |

### Return type

[**\Wildjar\Model\CreateTagAction200Response**](../Model/CreateTagAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTimeAction()`

```php
createTimeAction($account, $action_time_full): \Wildjar\Model\CreateTimeAction200Response
```

Create a time switch action

Create a time switch action in the call flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_time_full = new \Wildjar\Model\ActionTimeFull(); // \Wildjar\Model\ActionTimeFull

try {
    $result = $apiInstance->createTimeAction($account, $action_time_full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->createTimeAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_time_full** | [**\Wildjar\Model\ActionTimeFull**](../Model/ActionTimeFull.md)|  | |

### Return type

[**\Wildjar\Model\CreateTimeAction200Response**](../Model/CreateTimeAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTransferAction()`

```php
createTransferAction($account, $action_transfer_full): \Wildjar\Model\CreateTransferAction200Response
```

Create a transfer action

Create a transfer action in the call flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_transfer_full = new \Wildjar\Model\ActionTransferFull(); // \Wildjar\Model\ActionTransferFull

try {
    $result = $apiInstance->createTransferAction($account, $action_transfer_full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->createTransferAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_transfer_full** | [**\Wildjar\Model\ActionTransferFull**](../Model/ActionTransferFull.md)|  | |

### Return type

[**\Wildjar\Model\CreateTransferAction200Response**](../Model/CreateTransferAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createVoicemailAction()`

```php
createVoicemailAction($account, $action_voicemail_full): \Wildjar\Model\CreateVoicemailAction200Response
```

Create a voicemail action

Create a voicemail action in the call flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_voicemail_full = new \Wildjar\Model\ActionVoicemailFull(); // \Wildjar\Model\ActionVoicemailFull

try {
    $result = $apiInstance->createVoicemailAction($account, $action_voicemail_full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->createVoicemailAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_voicemail_full** | [**\Wildjar\Model\ActionVoicemailFull**](../Model/ActionVoicemailFull.md)|  | |

### Return type

[**\Wildjar\Model\CreateVoicemailAction200Response**](../Model/CreateVoicemailAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBranchAction()`

```php
getBranchAction($account, $action_id): \Wildjar\Model\CreateBranchAction200Response
```

Show detailed configuration of a branch action

Show detailed configuration of a branch used in location based routing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_id = 1234; // float | The action ID of the branch action.

try {
    $result = $apiInstance->getBranchAction($account, $action_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getBranchAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_id** | **float**| The action ID of the branch action. | |

### Return type

[**\Wildjar\Model\CreateBranchAction200Response**](../Model/CreateBranchAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIVRAction()`

```php
getIVRAction($account, $action_id): \Wildjar\Model\CreateIVRAction200Response
```

Show detailed routing for an IVR action

Show detailed routing configuration of an IVR action.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_id = 1234; // float | The action ID of the IVR.

try {
    $result = $apiInstance->getIVRAction($account, $action_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getIVRAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_id** | **float**| The action ID of the IVR. | |

### Return type

[**\Wildjar\Model\CreateIVRAction200Response**](../Model/CreateIVRAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLocationsAction()`

```php
getLocationsAction($account, $action_id): \Wildjar\Model\CreateLocationsAction200Response
```

Show detailed configuration of a location action

Show detailed configuration of a location based routing action.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_id = 1234; // float | The action ID of the locations action.

try {
    $result = $apiInstance->getLocationsAction($account, $action_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getLocationsAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_id** | **float**| The action ID of the locations action. | |

### Return type

[**\Wildjar\Model\CreateLocationsAction200Response**](../Model/CreateLocationsAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLocationsMap()`

```php
getLocationsMap($account, $action_id): \Wildjar\Model\UpdateLocationsAction200Response
```

Show detailed location mapping

Show detailed location mapping including postcode to branch allocation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_id = 1234; // float | The action ID of the IVR.

try {
    $result = $apiInstance->getLocationsMap($account, $action_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getLocationsMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_id** | **float**| The action ID of the IVR. | |

### Return type

[**\Wildjar\Model\UpdateLocationsAction200Response**](../Model/UpdateLocationsAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRobinAction()`

```php
getRobinAction($account, $action_id): \Wildjar\Model\CreateRobinAction200Response
```

Show detailed routing for a round robin action

Show detailed routing configuration of a round robin action.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_id = 1234; // float | The action ID of the round robin.

try {
    $result = $apiInstance->getRobinAction($account, $action_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRobinAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_id** | **float**| The action ID of the round robin. | |

### Return type

[**\Wildjar\Model\CreateRobinAction200Response**](../Model/CreateRobinAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTagAction()`

```php
getTagAction($account, $action_id): \Wildjar\Model\CreateTagAction200Response
```

Show tag action details

Show tag action details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_id = 1234; // float | The action ID of the tag action.

try {
    $result = $apiInstance->getTagAction($account, $action_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getTagAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_id** | **float**| The action ID of the tag action. | |

### Return type

[**\Wildjar\Model\CreateTagAction200Response**](../Model/CreateTagAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTimeAction()`

```php
getTimeAction($account, $action_id): \Wildjar\Model\CreateTimeAction200Response
```

Show detailed routing for a time switch action

Show detailed routing configuration of a time switch action.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_id = 1234; // float | The action ID of the time switch.

try {
    $result = $apiInstance->getTimeAction($account, $action_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getTimeAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_id** | **float**| The action ID of the time switch. | |

### Return type

[**\Wildjar\Model\CreateTimeAction200Response**](../Model/CreateTimeAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransferAction()`

```php
getTransferAction($account, $action_id): \Wildjar\Model\CreateTransferAction200Response
```

Show detailed routing for a transfer action

Show detailed routing configuration of a transfer action.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_id = 1234; // float | The action ID of the transfer.

try {
    $result = $apiInstance->getTransferAction($account, $action_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getTransferAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_id** | **float**| The action ID of the transfer. | |

### Return type

[**\Wildjar\Model\CreateTransferAction200Response**](../Model/CreateTransferAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVoicemailAction()`

```php
getVoicemailAction($account, $action_id): \Wildjar\Model\CreateVoicemailAction200Response
```

Show detailed routing for a voicemail action

Show detailed routing configuration of a voicemail action.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_id = 1234; // float | The action ID of the voicemail.

try {
    $result = $apiInstance->getVoicemailAction($account, $action_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getVoicemailAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_id** | **float**| The action ID of the voicemail. | |

### Return type

[**\Wildjar\Model\CreateVoicemailAction200Response**](../Model/CreateVoicemailAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBlockedCallers()`

```php
listBlockedCallers($account): \Wildjar\Model\ListBlockedCallers200Response
```

List blocked callers

List callers who are blocked on the specified account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.

try {
    $result = $apiInstance->listBlockedCallers($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->listBlockedCallers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |

### Return type

[**\Wildjar\Model\ListBlockedCallers200Response**](../Model/ListBlockedCallers200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBranchActions()`

```php
listBranchActions($account): \Wildjar\Model\ListBranchActions200Response
```

List location routing branches

List location based routing branches on the specified account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.

try {
    $result = $apiInstance->listBranchActions($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->listBranchActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |

### Return type

[**\Wildjar\Model\ListBranchActions200Response**](../Model/ListBranchActions200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIVRs()`

```php
listIVRs($account): \Wildjar\Model\ListIVRs200Response
```

List IVR actions

List IVR menu actions on the specified account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.

try {
    $result = $apiInstance->listIVRs($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->listIVRs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |

### Return type

[**\Wildjar\Model\ListIVRs200Response**](../Model/ListIVRs200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLocationsActions()`

```php
listLocationsActions($account): \Wildjar\Model\ListLocationsActions200Response
```

List location routing actions

List location routing actions on the specified account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.

try {
    $result = $apiInstance->listLocationsActions($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->listLocationsActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |

### Return type

[**\Wildjar\Model\ListLocationsActions200Response**](../Model/ListLocationsActions200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRobins()`

```php
listRobins($account): \Wildjar\Model\ListRobins200Response
```

List round robin actions

List round robin actions on the specified account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.

try {
    $result = $apiInstance->listRobins($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->listRobins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |

### Return type

[**\Wildjar\Model\ListRobins200Response**](../Model/ListRobins200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTagActions()`

```php
listTagActions($account): \Wildjar\Model\ListTagActions200Response
```

List tag actions

List tag actions on the specified account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.

try {
    $result = $apiInstance->listTagActions($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->listTagActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |

### Return type

[**\Wildjar\Model\ListTagActions200Response**](../Model/ListTagActions200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTimeActions()`

```php
listTimeActions($account): \Wildjar\Model\ListTimeActions200Response
```

List time switch actions

List time switch actions on the specified account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.

try {
    $result = $apiInstance->listTimeActions($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->listTimeActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |

### Return type

[**\Wildjar\Model\ListTimeActions200Response**](../Model/ListTimeActions200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransfers()`

```php
listTransfers($account): \Wildjar\Model\ListTransfers200Response
```

List transfer actions

List transfer actions on the specified account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.

try {
    $result = $apiInstance->listTransfers($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->listTransfers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |

### Return type

[**\Wildjar\Model\ListTransfers200Response**](../Model/ListTransfers200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVoicemails()`

```php
listVoicemails($account): \Wildjar\Model\ListVoicemails200Response
```

List voicemail actions

List voicemail actions on the specified account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.

try {
    $result = $apiInstance->listVoicemails($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->listVoicemails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |

### Return type

[**\Wildjar\Model\ListVoicemails200Response**](../Model/ListVoicemails200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unblockNumber()`

```php
unblockNumber($account, $number)
```

Unblock a caller

Unblock a caller and allow them to call any number on the specified account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$number = 'number_example'; // string | A blocked caller's number in E164 format without a leading plus (+).

try {
    $apiInstance->unblockNumber($account, $number);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->unblockNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **number** | **string**| A blocked caller&#39;s number in E164 format without a leading plus (+). | |

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

## `updateBranchAction()`

```php
updateBranchAction($account, $action_id, $action_branch): \Wildjar\Model\CreateBranchAction200Response
```

Update a location routing branch

Update a branch used in location based routing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_id = 1234; // float | The action ID of the branch action.
$action_branch = new \Wildjar\Model\ActionBranch(); // \Wildjar\Model\ActionBranch

try {
    $result = $apiInstance->updateBranchAction($account, $action_id, $action_branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->updateBranchAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_id** | **float**| The action ID of the branch action. | |
| **action_branch** | [**\Wildjar\Model\ActionBranch**](../Model/ActionBranch.md)|  | |

### Return type

[**\Wildjar\Model\CreateBranchAction200Response**](../Model/CreateBranchAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDidRouting()`

```php
updateDidRouting($account, $did, $routing_action): \Wildjar\Model\UpdateDidRouting200Response
```

Update the routing of a tracking number

Update the routing of a tracking number to a specified action. If making the routing blank, use the action `\"hangup\"` and actionId `\"0\"`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$did = 'did_example'; // string | Tracking number in E164 format without a leading plus (+).
$routing_action = new \Wildjar\Model\RoutingAction(); // \Wildjar\Model\RoutingAction

try {
    $result = $apiInstance->updateDidRouting($account, $did, $routing_action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->updateDidRouting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **did** | **string**| Tracking number in E164 format without a leading plus (+). | |
| **routing_action** | [**\Wildjar\Model\RoutingAction**](../Model/RoutingAction.md)|  | |

### Return type

[**\Wildjar\Model\UpdateDidRouting200Response**](../Model/UpdateDidRouting200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIVRAction()`

```php
updateIVRAction($account, $action_id, $action_ivr_full): \Wildjar\Model\CreateIVRAction200Response
```

Update an IVR action

Update routing, options or features on an IVR action in the call flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_id = 1234; // float | The action ID of the IVR.
$action_ivr_full = new \Wildjar\Model\ActionIVRFull(); // \Wildjar\Model\ActionIVRFull

try {
    $result = $apiInstance->updateIVRAction($account, $action_id, $action_ivr_full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->updateIVRAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_id** | **float**| The action ID of the IVR. | |
| **action_ivr_full** | [**\Wildjar\Model\ActionIVRFull**](../Model/ActionIVRFull.md)|  | |

### Return type

[**\Wildjar\Model\CreateIVRAction200Response**](../Model/CreateIVRAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLocationsAction()`

```php
updateLocationsAction($account, $action_id, $action_locations_map_update): \Wildjar\Model\UpdateLocationsAction200Response
```

Update a location routing action

Update location action configuration or routing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_id = 1234; // float | The action ID of the locations action.
$action_locations_map_update = new \Wildjar\Model\ActionLocationsMapUpdate(); // \Wildjar\Model\ActionLocationsMapUpdate

try {
    $result = $apiInstance->updateLocationsAction($account, $action_id, $action_locations_map_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->updateLocationsAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_id** | **float**| The action ID of the locations action. | |
| **action_locations_map_update** | [**\Wildjar\Model\ActionLocationsMapUpdate**](../Model/ActionLocationsMapUpdate.md)|  | |

### Return type

[**\Wildjar\Model\UpdateLocationsAction200Response**](../Model/UpdateLocationsAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRobinAction()`

```php
updateRobinAction($account, $action_id, $action_robin_full): \Wildjar\Model\CreateRobinAction200Response
```

Update a round robin action

Update members and routing on a round robin action in the call flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_id = 1234; // float | The action ID of the round robin.
$action_robin_full = new \Wildjar\Model\ActionRobinFull(); // \Wildjar\Model\ActionRobinFull

try {
    $result = $apiInstance->updateRobinAction($account, $action_id, $action_robin_full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->updateRobinAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_id** | **float**| The action ID of the round robin. | |
| **action_robin_full** | [**\Wildjar\Model\ActionRobinFull**](../Model/ActionRobinFull.md)|  | |

### Return type

[**\Wildjar\Model\CreateRobinAction200Response**](../Model/CreateRobinAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTagAction()`

```php
updateTagAction($account, $action_id, $action_tag): \Wildjar\Model\CreateTagAction200Response
```

Update a tag action

Update a tag action in the call flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_id = 1234; // float | The action ID of the tag action.
$action_tag = new \Wildjar\Model\ActionTag(); // \Wildjar\Model\ActionTag

try {
    $result = $apiInstance->updateTagAction($account, $action_id, $action_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->updateTagAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_id** | **float**| The action ID of the tag action. | |
| **action_tag** | [**\Wildjar\Model\ActionTag**](../Model/ActionTag.md)|  | |

### Return type

[**\Wildjar\Model\CreateTagAction200Response**](../Model/CreateTagAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTimeAction()`

```php
updateTimeAction($account, $action_id, $action_time_full): \Wildjar\Model\CreateTimeAction200Response
```

Update a time switch action

Update rules and/or routing on a time switch action in the call flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_id = 1234; // float | The action ID of the time switch.
$action_time_full = new \Wildjar\Model\ActionTimeFull(); // \Wildjar\Model\ActionTimeFull

try {
    $result = $apiInstance->updateTimeAction($account, $action_id, $action_time_full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->updateTimeAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_id** | **float**| The action ID of the time switch. | |
| **action_time_full** | [**\Wildjar\Model\ActionTimeFull**](../Model/ActionTimeFull.md)|  | |

### Return type

[**\Wildjar\Model\CreateTimeAction200Response**](../Model/CreateTimeAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTransferAction()`

```php
updateTransferAction($account, $action_id, $action_transfer_full): \Wildjar\Model\CreateTransferAction200Response
```

Update a transfer action

Update routing and/or features on a transfer action in the call flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_id = 1234; // float | The action ID of the transfer.
$action_transfer_full = new \Wildjar\Model\ActionTransferFull(); // \Wildjar\Model\ActionTransferFull

try {
    $result = $apiInstance->updateTransferAction($account, $action_id, $action_transfer_full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->updateTransferAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_id** | **float**| The action ID of the transfer. | |
| **action_transfer_full** | [**\Wildjar\Model\ActionTransferFull**](../Model/ActionTransferFull.md)|  | |

### Return type

[**\Wildjar\Model\CreateTransferAction200Response**](../Model/CreateTransferAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVoicemailAction()`

```php
updateVoicemailAction($account, $action_id, $action_voicemail_full): \Wildjar\Model\CreateVoicemailAction200Response
```

Update a voicemail action

Update routing and/or features on a voicemail action in the call flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // int | WildJar account number.
$action_id = 1234; // float | The action ID of the voicemail.
$action_voicemail_full = new \Wildjar\Model\ActionVoicemailFull(); // \Wildjar\Model\ActionVoicemailFull

try {
    $result = $apiInstance->updateVoicemailAction($account, $action_id, $action_voicemail_full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->updateVoicemailAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **int**| WildJar account number. | |
| **action_id** | **float**| The action ID of the voicemail. | |
| **action_voicemail_full** | [**\Wildjar\Model\ActionVoicemailFull**](../Model/ActionVoicemailFull.md)|  | |

### Return type

[**\Wildjar\Model\CreateVoicemailAction200Response**](../Model/CreateVoicemailAction200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
