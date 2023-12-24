# # ActionTransfer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | **mixed** | The account ID. | [optional] [readonly]
**id** | **mixed** | The action ID. | [optional] [readonly]
**name** | **mixed** | Friendly name of the call flow action. Used to easily identify an action in the call flow. | [optional]
**next_action** | **mixed** | Next action type to route to in the call flow. | [optional]
**next_action_id** | **mixed** | Next action ID to route to in the call flow. | [optional]
**group_id** | **mixed** | The contact group ID the notifications will be sent to. | [optional]
**notify** | **mixed** | When notifications are sent to email or SMS contacts:   * &#x60;always&#x60; - Notify for all call types (email only).   * &#x60;missed&#x60; - Notify for missed call types only.   * &#x60;no&#x60; - No not send call notifications by email or SMS. **Note**: Requires a voicemail action to be the next action in the call flow. | [optional]
**force_caller** | **mixed** | The phone number to force as the caller ID when calling the target (must be a WildJar geo or mobile number). | [optional]
**record** | **mixed** | Whether the call will be recorded or not. | [optional]
**recording** | **mixed** | The call recording preamble to be played on recorded calls. Can be a Text to speech or URI to an MP3 file. | [optional]
**target** | **mixed** | The phone number to route the call to in E164 format. |
**timeout** | **mixed** | The number of seconds, if a call is not answered, before it is sent to the next action. If the value is 0, a platform wide error-prevention rule of 25 seconds will be applied to the transfer. | [optional]
**whisper** | **mixed** | The whisper message to be played to the answering party. Can be a Text to speech or URI to an MP3 file. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
