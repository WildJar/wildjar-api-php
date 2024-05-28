# # ActionIVR

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** | The action ID. | [optional] [readonly]
**account** | **float** | The account ID. | [optional] [readonly]
**name** | **string** | Friendly name of the call flow action. Used to easily identify an action in the call flow. | [optional]
**next_action** | **string** | Next action type to route to in the call flow. | [optional]
**next_action_id** | **float** | Next action ID to route to in the call flow. | [optional]
**notify** | **string** | When notifications are sent to email or SMS contacts:   * &#x60;always&#x60; - Notify for all call types (email only).   * &#x60;missed&#x60; - Notify for missed call types only.   * &#x60;no&#x60; - No not send call notifications by email or SMS. **Note**: Requires a voicemail action to be the next action in the call flow. | [optional] [default to 'no']
**group_id** | **float** | The contact group ID the notifications will be sent to. | [optional] [default to 0]
**timeout** | **float** | The number of seconds, if no IVR selection is made, before it is sent to the next action. | [optional] [default to 5]
**digit_timeout** | **float** | The number of seconds to listen for a digit before sending the user to the next action. | [optional] [default to 3]
**finish_on_key** | **string** | The digit which indicates the input is finished. Standard behaviour and default is to use the hash key (\&quot;#\&quot;). | [optional] [default to '#']
**digits** | **float** | The number of digits required for input to be valid and routed to that option. If fewer digits are requierd for an option, it can be overridden by pressing the digit set in finishOnKey. | [optional] [default to 1]
**retries** | **float** | The number of attempts allowed before the IVR message is replayed. | [optional] [default to 1]
**message** | **string** | The message to be played to the caller on the IVR menu. Can be Text to speech or a URI to an MP3 file. |
**invalid_text** | **string** | The message to be read to the caller using Text-to-Speech (TTS) after an invalid input. Only populate if **not** using a recording MP3 in invalidPlay. | [optional] [default to '']
**invalid_play** | **string** | The URI to an MP3 file to play after an invalid input. Only populate if **not** using TTS in invalidText. | [optional]
**invalid_action** | **string** | The action type to route to in the call flow if an invalid option is entered. | [optional] [default to 'hangup']
**invalid_action_id** | **float** | The action ID to route to in the call flow if an invalid option is entered. | [optional] [default to 0]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
