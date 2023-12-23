# # OutboundCall

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | The Call UUID. | [optional] [readonly]
**sip** | **string** | The SIP extension of the outbound caller. | [optional] [readonly]
**account** | **string** | The account number the outbound call is in. | [optional] [readonly]
**account_name** | **string** | The account name the call is in. | [optional] [readonly]
**channel** | **string** | The outbound channel the call was made on. | [optional] [readonly]
**status** | **string** | The status of the call:   * &#x60;answered&#x60; - The call has has been answered (by a person or the answer point phone system).   * &#x60;abandoned&#x60; - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * &#x60;missed&#x60; - The call has not been answered (by a person or the answer point phone system) before the missed call timeout. | [optional] [readonly]
**talk_time** | **float** | The talk time of the call in seconds. If the call is abandoned or missed, the talk time will be null. | [optional] [readonly]
**caller** | **string** | The caller&#39;s phone number in E164 format or \&quot;anonymous\&quot;, if the number was withheld or private. | [optional] [readonly]
**caller_name** | **string** | The caller&#39;s username in WildJar. | [optional] [readonly]
**target** | **string** | The phone number where this call was answered in E164 format. | [optional] [readonly]
**location** | **string** | The called number&#39;s location. For geo callers, this is the caller&#39;s phone exchange. For mobile callers, this is \&quot;Mobile\&quot;. | [optional] [readonly]
**area** | **string** | The called number&#39;s area. For geo callers, the broad call charging area. For mobiles in Australia calling a 1300 or 1800 number, the region the mobile is calling from. | [optional] [readonly]
**country** | **string** | 2 character country code of the called number (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. | [optional] [readonly]
**state** | **string** | The state the called party number is located in. If the country is not divided by states, the 2 character country code is used. | [optional] [readonly]
**network** | **string** | The called party&#39;s network type. | [optional] [readonly]
**list** | **string** | The campaign list the number was dialed from. | [optional] [readonly]
**audio** | **string** | The recording of the call, if enabled. | [optional] [readonly]
**score** | **float** | The score given to the call by a user or automatically as part of a Smart Tag:   * &#x60;1&#x60; - Poor   * &#x60;2&#x60; - Average   * &#x60;3&#x60; - Good | [optional]
**timestamp** | **string** | The call timestamp in milliseconds. | [optional] [readonly]
**date_start_gmt** | **\DateTime** | The call start date and time in GMT in ISO format. | [optional] [readonly]
**date_stop_gmt** | **\DateTime** | The call end date and time in GMT in ISO format. | [optional] [readonly]
**user_timezone** | **string** | Timezone of the current user. | [optional] [readonly]
**date_start_user** | **\DateTime** | The call start date and time in the user&#39;s timezone in ISO format. | [optional] [readonly]
**date_stop_user** | **\DateTime** | The call end date and time in the user&#39;s timezone in ISO format. | [optional] [readonly]
**local_timezone** | **string** | Local timezone of the account. | [optional] [readonly]
**date_start_local** | **\DateTime** | The call start date and time in the local timezone of the account in ISO format. | [optional] [readonly]
**date_stop_local** | **\DateTime** | The call end date and time in the local timezone of the account in ISO format. | [optional] [readonly]
**tags** | **string[]** |  | [optional]
**notes** | **string** | Notes added to the call by a user. | [optional]
**duration** | **float** | The total duration of the call in seconds, including ringing time and recorded voice announcements. | [optional] [readonly]
**direction** | **string** | Whether the call was inbound or outbound. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
