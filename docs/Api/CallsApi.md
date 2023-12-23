# Wildjar\CallsApi

All URIs are relative to https://api.trkcall.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCallDetails()**](CallsApi.md#getCallDetails) | **GET** /call/{id} | Show call details |
| [**getCalls()**](CallsApi.md#getCalls) | **GET** /call | List Calls |
| [**getOutboundCallDetails()**](CallsApi.md#getOutboundCallDetails) | **GET** /call/outbound/{uuid} | Show outbound call details |
| [**getOutboundCalls()**](CallsApi.md#getOutboundCalls) | **GET** /call/outbound | List Outbound Calls |
| [**updateCall()**](CallsApi.md#updateCall) | **PATCH** /call/{id} | Add a score, tag or note to a call |


## `getCallDetails()`

```php
getCallDetails($id): \Wildjar\Model\GetCallDetails200Response
```

Show call details

Show detailed call records for a specific call. If the number is configured for dynamic number insertion, it will also show web attribution information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Call ID

try {
    $result = $apiInstance->getCallDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->getCallDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Call ID | |

### Return type

[**\Wildjar\Model\GetCallDetails200Response**](../Model/GetCallDetails200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalls()`

```php
getCalls($account, $date_from, $date_to, $duration_min, $duration_max, $first_time_caller, $order, $status, $timezone, $tracking_number, $tracking_source): \Wildjar\Model\GetCalls200Response
```

List Calls

Retreive the list of calls in the call log.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // string | Filter calls by account number. You can request multiple accounts by comma separating the account numbers.
$date_from = 2023-12-06T14:00:00+11:00; // \DateTime | Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required.
$date_to = 2023-12-06T15:00:00+11:00; // \DateTime | Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required.
$duration_min = 60; // float | Filter the results by minumum duration in seconds.
$duration_max = 180; // float | Filter the results by maximum duration in seconds.
$first_time_caller = yes; // string | Filter the results by first time caller.
$order = 'order_example'; // string | Sort the call log by the Call ID. To sort ascending, use order=id and to sort descending, use order=-id.
$status = answered; // string | The status of the call:   * `answered` - The call has has been answered (by a person or the answer point phone system).   * `abandoned` - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * `missed` - The call has not been answered (by a person or the answer point phone system) before the missed call timeout.
$timezone = Australia/Sydney; // \DateTime | The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone=Australia%2FSydney. To get the time zone of an account, use the \"timezone\" field from an account or \"tz\" field from a user.
$tracking_number = 61255501234; // string | Filter tracking numbers by inbound tracking number
$tracking_source = Example Website; // string | Filter the results by the tracking source. For example, trackingSource=SMS will show the numbers with the names \"SMS\" and \"SMS Follow Up\".

try {
    $result = $apiInstance->getCalls($account, $date_from, $date_to, $duration_min, $duration_max, $first_time_caller, $order, $status, $timezone, $tracking_number, $tracking_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->getCalls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **string**| Filter calls by account number. You can request multiple accounts by comma separating the account numbers. | [optional] |
| **date_from** | **\DateTime**| Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. | [optional] |
| **date_to** | **\DateTime**| Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. | [optional] |
| **duration_min** | **float**| Filter the results by minumum duration in seconds. | [optional] |
| **duration_max** | **float**| Filter the results by maximum duration in seconds. | [optional] |
| **first_time_caller** | **string**| Filter the results by first time caller. | [optional] |
| **order** | **string**| Sort the call log by the Call ID. To sort ascending, use order&#x3D;id and to sort descending, use order&#x3D;-id. | [optional] |
| **status** | **string**| The status of the call:   * &#x60;answered&#x60; - The call has has been answered (by a person or the answer point phone system).   * &#x60;abandoned&#x60; - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * &#x60;missed&#x60; - The call has not been answered (by a person or the answer point phone system) before the missed call timeout. | [optional] |
| **timezone** | **\DateTime**| The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone&#x3D;Australia%2FSydney. To get the time zone of an account, use the \&quot;timezone\&quot; field from an account or \&quot;tz\&quot; field from a user. | [optional] |
| **tracking_number** | **string**| Filter tracking numbers by inbound tracking number | [optional] |
| **tracking_source** | **string**| Filter the results by the tracking source. For example, trackingSource&#x3D;SMS will show the numbers with the names \&quot;SMS\&quot; and \&quot;SMS Follow Up\&quot;. | [optional] |

### Return type

[**\Wildjar\Model\GetCalls200Response**](../Model/GetCalls200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutboundCallDetails()`

```php
getOutboundCallDetails($uuid): \Wildjar\Model\GetOutboundCallDetails200Response
```

Show outbound call details

Show detailed call record for an outbound call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Outbound call UUID

try {
    $result = $apiInstance->getOutboundCallDetails($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->getOutboundCallDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Outbound call UUID | |

### Return type

[**\Wildjar\Model\GetOutboundCallDetails200Response**](../Model/GetOutboundCallDetails200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutboundCalls()`

```php
getOutboundCalls($account, $date_from, $date_to, $duration_min, $duration_max, $order, $status, $timezone, $tracking_number): \Wildjar\Model\GetOutboundCalls200Response
```

List Outbound Calls

Retreive the list of outbound calls in the call log.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 20001; // string | Filter calls by account number. You can request multiple accounts by comma separating the account numbers.
$date_from = 2023-12-06T14:00:00+11:00; // \DateTime | Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required.
$date_to = 2023-12-06T15:00:00+11:00; // \DateTime | Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required.
$duration_min = 60; // float | Filter the results by minumum duration in seconds.
$duration_max = 180; // float | Filter the results by maximum duration in seconds.
$order = 'order_example'; // string | Sort the call log by the outbound call UUID. To sort ascending, use order=uuid and to sort descending, use order=-uuid.
$status = answered; // string | The status of the call:   * `answered` - The call has has been answered (by a person or the answer point phone system).   * `abandoned` - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * `missed` - The call has not been answered (by a person or the answer point phone system) before the missed call timeout.
$timezone = Australia/Sydney; // \DateTime | The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone=Australia%2FSydney. To get the time zone of an account, use the \"timezone\" field from an account or \"tz\" field from a user.
$tracking_number = 900; // string | Filter tracking numbers by sip extension

try {
    $result = $apiInstance->getOutboundCalls($account, $date_from, $date_to, $duration_min, $duration_max, $order, $status, $timezone, $tracking_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->getOutboundCalls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **string**| Filter calls by account number. You can request multiple accounts by comma separating the account numbers. | [optional] |
| **date_from** | **\DateTime**| Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. | [optional] |
| **date_to** | **\DateTime**| Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. | [optional] |
| **duration_min** | **float**| Filter the results by minumum duration in seconds. | [optional] |
| **duration_max** | **float**| Filter the results by maximum duration in seconds. | [optional] |
| **order** | **string**| Sort the call log by the outbound call UUID. To sort ascending, use order&#x3D;uuid and to sort descending, use order&#x3D;-uuid. | [optional] |
| **status** | **string**| The status of the call:   * &#x60;answered&#x60; - The call has has been answered (by a person or the answer point phone system).   * &#x60;abandoned&#x60; - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * &#x60;missed&#x60; - The call has not been answered (by a person or the answer point phone system) before the missed call timeout. | [optional] |
| **timezone** | **\DateTime**| The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone&#x3D;Australia%2FSydney. To get the time zone of an account, use the \&quot;timezone\&quot; field from an account or \&quot;tz\&quot; field from a user. | [optional] |
| **tracking_number** | **string**| Filter tracking numbers by sip extension | [optional] |

### Return type

[**\Wildjar\Model\GetOutboundCalls200Response**](../Model/GetOutboundCalls200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCall()`

```php
updateCall($id, $call): \Wildjar\Model\GetCallDetails200Response
```

Add a score, tag or note to a call

Update a call by giving it a quality score, tag it or add a note for some context. Only the fields you want to update  need to be sent.  Tag values can be plain text or the UUID of an existing tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Wildjar\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wildjar\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Call ID
$call = new \Wildjar\Model\Call(); // \Wildjar\Model\Call

try {
    $result = $apiInstance->updateCall($id, $call);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->updateCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Call ID | |
| **call** | [**\Wildjar\Model\Call**](../Model/Call.md)|  | |

### Return type

[**\Wildjar\Model\GetCallDetails200Response**](../Model/GetCallDetails200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
