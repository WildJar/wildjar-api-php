# # ActionLocationsFull

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | The action ID. | [optional] [readonly]
**account** | **mixed** | The account ID. | [optional] [readonly]
**name** | **mixed** | Friendly name of the call flow action. Used to easily identify an action in the call flow. | [optional]
**next_action** | **mixed** | Next action type to route to in the call flow. | [optional]
**next_action_id** | **mixed** | Next action ID to route to in the call flow. | [optional]
**geo_location** | **mixed** | Whether the call will be automatically routed based on a landline caller&#39;s exchange. | [optional]
**mobile_location** | **mixed** | Whether the call will be automatically routed based on a mobile caller&#39;s MoLI location (13, 1300 and 1800 tracking numbers only). | [optional]
**postcode_prompt** | **mixed** | Whether the caller will be prompted to enter a postcode before being routed to the nearest branch. | [optional]
**iv_rmessage** | **mixed** | The message to be played to the caller on the IVR menu. Can be Text to speech or a URI to an MP3 file. | [optional]
**iv_rdigits** | **mixed** | The number of digits required for input to be valid and routed to that option. If fewer digits are requierd for an option, it can be overridden by pressing the digit set in finishOnKey. | [optional]
**iv_rattempts** | **mixed** | The number of attempts allowed before the IVR message is replayed. | [optional]
**action** | **string** | The action type. | [optional] [readonly]
**map** | **object** | The postcode to branch mapping for this location based routing action or &#x60;null&#x60; if no update has been made to the branch mapping. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
