# # ActionTransfer

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
**target** | **string** | The phone number to route the call to in E164 format. |
**timeout** | **float** | The number of seconds, if a call is not answered, before it is sent to the next action. If the value is 0, a platform wide error-prevention rule of 25 seconds will be applied to the transfer. | [optional] [default to 0]
**record** | **string** | Whether the call will be recorded or not. | [optional] [default to 'no']
**recording** | **string** | The call recording preamble to be played on recorded calls. Can be a Text to speech or URI to an MP3 file. | [optional]
**whisper** | **string** | The whisper message to be played to the answering party. Can be a Text to speech or URI to an MP3 file. | [optional]
**force_caller** | **string** | The phone number to force as the caller ID when calling the target (must be a WildJar geo or mobile number). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
