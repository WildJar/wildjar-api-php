# # ActionVoicemailFull

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | **mixed** | The account ID. | [optional] [readonly]
**id** | **mixed** | The action ID. | [optional] [readonly]
**name** | **mixed** | Friendly name of the call flow action. Used to easily identify an action in the call flow. | [optional]
**next_action** | **mixed** | Next action type to route to in the call flow. | [optional]
**next_action_id** | **mixed** | Next action ID to route to in the call flow. | [optional]
**play** | **mixed** | The URI to an MP3 file to play as a voicemail message. Only populate if **not** using TTS. | [optional]
**read** | **mixed** | The voicemail message to be read to the caller using Text-to-Speech (TTS). Only populate if **not** using a recording MP3. | [optional]
**group_id** | **mixed** | The contact group ID the notifications will be sent to. | [optional]
**notify** | **mixed** | When notifications are sent to email or SMS contacts:   * &#x60;always&#x60; - Notify for all call types (email only).   * &#x60;missed&#x60; - Notify for missed call types only.   * &#x60;no&#x60; - No not send call notifications by email or SMS. **Note**: Requires a voicemail action to be the next action in the call flow. | [optional]
**action** | **mixed** | The action type. | [optional] [readonly]
**contacts** | **mixed** |  | [optional] [readonly]
**mcn_mails** | **mixed** |  | [optional]
**sms_phone** | **mixed** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
