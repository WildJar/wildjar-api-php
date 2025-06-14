# WildJar\ApiClient\CallApi

All URIs are relative to https://api.trkcall.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCall()**](CallApi.md#getCall) | **GET** /call | List Calls |
| [**getCallDetails()**](CallApi.md#getCallDetails) | **GET** /call/{id} | Show call details |
| [**getOutboundCallDetails()**](CallApi.md#getOutboundCallDetails) | **GET** /call/outbound/{uuid} | Show outbound call details |
| [**getOutboundCalls()**](CallApi.md#getOutboundCalls) | **GET** /call/outbound | List Outbound Calls |
| [**updateCall()**](CallApi.md#updateCall) | **PATCH** /call/{id} | Add a score, tag or note to a call |
| [**updateOutboundCall()**](CallApi.md#updateOutboundCall) | **PATCH** /call/outbound/{uuid} | Add a score, tag or note to an outbound call |


## `getCall()`

```php
getCall($page, $per_page, $order, $account, $date_from, $date_to, $duration_min, $duration_max, $first_time_caller, $status, $timezone, $tracking_number, $tracking_source): \WildJar\ApiClient\Model\GetCall200Response
```

List Calls

Retreive the list of calls in the call log.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\CallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number of results to return.
$per_page = 10; // int | Number of results to return per page.
$order = 'order_example'; // string | Field name to sort results by. Prefix the field name by a minus sign (ie. -id) to filter in descending order.
$account = 20001; // string | Filter calls by account number. You can request multiple accounts by comma separating the account numbers.
$date_from = 2023-12-06T14:00:00+11:00; // \DateTime | Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required.
$date_to = 2023-12-06T15:00:00+11:00; // \DateTime | Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required.
$duration_min = 60; // float | Filter the results by minumum duration in seconds.
$duration_max = 180; // float | Filter the results by maximum duration in seconds.
$first_time_caller = yes; // string | Filter the results by first time caller.
$status = answered; // string | The status of the call:   * `answered` - The call has has been answered (by a person or the answer point phone system).   * `abandoned` - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * `missed` - The call has not been answered (by a person or the answer point phone system) before the missed call timeout.
$timezone = Australia/Sydney; // \DateTime | The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone=Australia%2FSydney. To get the time zone of an account, use the \"timezone\" field from an account or \"tz\" field from a user.
$tracking_number = 61255501234; // string | Filter tracking numbers by inbound tracking number
$tracking_source = Example Website; // string | Filter the results by the tracking source. For example, trackingSource=SMS will show the numbers with the names \"SMS\" and \"SMS Follow Up\".

try {
    $result = $apiInstance->getCall($page, $per_page, $order, $account, $date_from, $date_to, $duration_min, $duration_max, $first_time_caller, $status, $timezone, $tracking_number, $tracking_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallApi->getCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number of results to return. | [optional] [default to 1] |
| **per_page** | **int**| Number of results to return per page. | [optional] [default to 10] |
| **order** | **string**| Field name to sort results by. Prefix the field name by a minus sign (ie. -id) to filter in descending order. | [optional] |
| **account** | **string**| Filter calls by account number. You can request multiple accounts by comma separating the account numbers. | [optional] |
| **date_from** | **\DateTime**| Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. | [optional] |
| **date_to** | **\DateTime**| Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. | [optional] |
| **duration_min** | **float**| Filter the results by minumum duration in seconds. | [optional] |
| **duration_max** | **float**| Filter the results by maximum duration in seconds. | [optional] |
| **first_time_caller** | **string**| Filter the results by first time caller. | [optional] |
| **status** | **string**| The status of the call:   * &#x60;answered&#x60; - The call has has been answered (by a person or the answer point phone system).   * &#x60;abandoned&#x60; - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * &#x60;missed&#x60; - The call has not been answered (by a person or the answer point phone system) before the missed call timeout. | [optional] |
| **timezone** | **\DateTime**| The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone&#x3D;Australia%2FSydney. To get the time zone of an account, use the \&quot;timezone\&quot; field from an account or \&quot;tz\&quot; field from a user. | [optional] |
| **tracking_number** | **string**| Filter tracking numbers by inbound tracking number | [optional] |
| **tracking_source** | **string**| Filter the results by the tracking source. For example, trackingSource&#x3D;SMS will show the numbers with the names \&quot;SMS\&quot; and \&quot;SMS Follow Up\&quot;. | [optional] |

### Return type

[**\WildJar\ApiClient\Model\GetCall200Response**](../Model/GetCall200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCallDetails()`

```php
getCallDetails($id): \WildJar\ApiClient\Model\GetCallDetails200Response
```

Show call details

Show detailed call records for a specific call. If the number is configured for dynamic number insertion, it will also show web attribution information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\CallApi(
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
    echo 'Exception when calling CallApi->getCallDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Call ID | |

### Return type

[**\WildJar\ApiClient\Model\GetCallDetails200Response**](../Model/GetCallDetails200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutboundCallDetails()`

```php
getOutboundCallDetails($uuid): \WildJar\ApiClient\Model\GetOutboundCallDetails200Response
```

Show outbound call details

Show detailed call record for an outbound call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\CallApi(
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
    echo 'Exception when calling CallApi->getOutboundCallDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Outbound call UUID | |

### Return type

[**\WildJar\ApiClient\Model\GetOutboundCallDetails200Response**](../Model/GetOutboundCallDetails200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutboundCalls()`

```php
getOutboundCalls($page, $per_page, $order, $account, $date_from, $date_to, $duration_min, $duration_max, $status, $timezone, $tracking_number): \WildJar\ApiClient\Model\GetOutboundCalls200Response
```

List Outbound Calls

Retreive the list of outbound calls in the call log.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\CallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number of results to return.
$per_page = 10; // int | Number of results to return per page.
$order = 'order_example'; // string | Field name to sort results by. Prefix the field name by a minus sign (ie. -id) to filter in descending order.
$account = 20001; // string | Filter calls by account number. You can request multiple accounts by comma separating the account numbers.
$date_from = 2023-12-06T14:00:00+11:00; // \DateTime | Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required.
$date_to = 2023-12-06T15:00:00+11:00; // \DateTime | Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required.
$duration_min = 60; // float | Filter the results by minumum duration in seconds.
$duration_max = 180; // float | Filter the results by maximum duration in seconds.
$status = answered; // string | The status of the call:   * `answered` - The call has has been answered (by a person or the answer point phone system).   * `abandoned` - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * `missed` - The call has not been answered (by a person or the answer point phone system) before the missed call timeout.
$timezone = Australia/Sydney; // \DateTime | The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone=Australia%2FSydney. To get the time zone of an account, use the \"timezone\" field from an account or \"tz\" field from a user.
$tracking_number = 900; // string | Filter tracking numbers by sip extension

try {
    $result = $apiInstance->getOutboundCalls($page, $per_page, $order, $account, $date_from, $date_to, $duration_min, $duration_max, $status, $timezone, $tracking_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallApi->getOutboundCalls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number of results to return. | [optional] [default to 1] |
| **per_page** | **int**| Number of results to return per page. | [optional] [default to 10] |
| **order** | **string**| Field name to sort results by. Prefix the field name by a minus sign (ie. -id) to filter in descending order. | [optional] |
| **account** | **string**| Filter calls by account number. You can request multiple accounts by comma separating the account numbers. | [optional] |
| **date_from** | **\DateTime**| Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. | [optional] |
| **date_to** | **\DateTime**| Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. | [optional] |
| **duration_min** | **float**| Filter the results by minumum duration in seconds. | [optional] |
| **duration_max** | **float**| Filter the results by maximum duration in seconds. | [optional] |
| **status** | **string**| The status of the call:   * &#x60;answered&#x60; - The call has has been answered (by a person or the answer point phone system).   * &#x60;abandoned&#x60; - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * &#x60;missed&#x60; - The call has not been answered (by a person or the answer point phone system) before the missed call timeout. | [optional] |
| **timezone** | **\DateTime**| The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone&#x3D;Australia%2FSydney. To get the time zone of an account, use the \&quot;timezone\&quot; field from an account or \&quot;tz\&quot; field from a user. | [optional] |
| **tracking_number** | **string**| Filter tracking numbers by sip extension | [optional] |

### Return type

[**\WildJar\ApiClient\Model\GetOutboundCalls200Response**](../Model/GetOutboundCalls200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCall()`

```php
updateCall($id, $call): \WildJar\ApiClient\Model\GetCallDetails200Response
```

Add a score, tag or note to a call

Update a call by giving it a quality score, tag it or add a note for some context. Only the fields you want to update  need to be sent.  Tag values can be plain text or the UUID of an existing tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\CallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Call ID
$call = new \WildJar\ApiClient\Model\Call(); // \WildJar\ApiClient\Model\Call

try {
    $result = $apiInstance->updateCall($id, $call);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallApi->updateCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Call ID | |
| **call** | [**\WildJar\ApiClient\Model\Call**](../Model/Call.md)|  | |

### Return type

[**\WildJar\ApiClient\Model\GetCallDetails200Response**](../Model/GetCallDetails200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOutboundCall()`

```php
updateOutboundCall($uuid, $outbound_call): \WildJar\ApiClient\Model\GetOutboundCallDetails200Response
```

Add a score, tag or note to an outbound call

Update a call by giving it a quality score, tag it or add a note for some context. Only the fields you want to update  need to be sent.  Tag values can be plain text or the UUID of an existing tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\CallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Outbound call UUID
$outbound_call = new \WildJar\ApiClient\Model\OutboundCall(); // \WildJar\ApiClient\Model\OutboundCall

try {
    $result = $apiInstance->updateOutboundCall($uuid, $outbound_call);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallApi->updateOutboundCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Outbound call UUID | |
| **outbound_call** | [**\WildJar\ApiClient\Model\OutboundCall**](../Model/OutboundCall.md)|  | |

### Return type

[**\WildJar\ApiClient\Model\GetOutboundCallDetails200Response**](../Model/GetOutboundCallDetails200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
