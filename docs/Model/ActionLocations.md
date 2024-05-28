# # ActionLocations

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** | The action ID. | [optional] [readonly]
**account** | **float** | The account ID. | [optional] [readonly]
**name** | **string** | Friendly name of the call flow action. Used to easily identify an action in the call flow. | [optional]
**next_action** | **string** | Next action type to route to in the call flow. | [optional]
**next_action_id** | **float** | Next action ID to route to in the call flow. | [optional]
**geo_location** | **string** | Whether the call will be automatically routed based on a landline caller&#39;s exchange. | [optional] [default to 'yes']
**mobile_location** | **string** | Whether the call will be automatically routed based on a mobile caller&#39;s MoLI location (13, 1300 and 1800 tracking numbers only). | [optional] [default to 'yes']
**postcode_prompt** | **string** | Whether the caller will be prompted to enter a postcode before being routed to the nearest branch. | [optional] [default to 'no']
**iv_rmessage** | **string** | The message to be played to the caller on the IVR menu. Can be Text to speech or a URI to an MP3 file. | [optional]
**iv_rdigits** | **float** | The number of digits required for input to be valid and routed to that option. If fewer digits are requierd for an option, it can be overridden by pressing the digit set in finishOnKey. | [optional] [default to 4]
**iv_rattempts** | **float** | The number of attempts allowed before the IVR message is replayed. | [optional] [default to 2]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
