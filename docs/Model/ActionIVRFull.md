# # ActionIVRFull

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | The action ID. | [optional] [readonly]
**account** | **mixed** | The account ID. | [optional] [readonly]
**name** | **mixed** | Friendly name of the call flow action. Used to easily identify an action in the call flow. | [optional]
**next_action** | **mixed** | Next action type to route to in the call flow. | [optional]
**next_action_id** | **mixed** | Next action ID to route to in the call flow. | [optional]
**timeout** | **mixed** | The number of seconds, if no IVR selection is made, before it is sent to the next action. | [optional]
**digit_timeout** | **mixed** | The number of seconds to listen for a digit before sending the user to the next action. | [optional]
**finish_on_key** | **mixed** | The digit which indicates the input is finished. Standard behaviour and default is to use the hash key (\&quot;#\&quot;). | [optional]
**digits** | **mixed** | The number of digits required for input to be valid and routed to that option. If fewer digits are requierd for an option, it can be overridden by pressing the digit set in finishOnKey. | [optional]
**retries** | **mixed** | The number of attempts allowed before the IVR message is replayed. | [optional]
**message** | **mixed** | The message to be played to the caller on the IVR menu. Can be Text to speech or a URI to an MP3 file. |
**invalid_text** | **mixed** | The message to be read to the caller using Text-to-Speech (TTS) after an invalid input. Only populate if **not** using a recording MP3 in invalidPlay. | [optional]
**invalid_play** | **mixed** | The URI to an MP3 file to play after an invalid input. Only populate if **not** using TTS in invalidText. | [optional]
**invalid_action** | **mixed** | The action type to route to in the call flow if an invalid option is entered. | [optional]
**invalid_action_id** | **mixed** | The action ID to route to in the call flow if an invalid option is entered. | [optional]
**whisper** | **mixed** | The whisper message to be played to the answering party. Can be a Text to speech or URI to an MP3 file. | [optional]
**force_caller** | **mixed** | The phone number to force as the caller ID when calling the target (must be a WildJar geo or mobile number). | [optional]
**notify** | **mixed** | When notifications are sent to email or SMS contacts:   * &#x60;always&#x60; - Notify for all call types (email only).   * &#x60;missed&#x60; - Notify for missed call types only.   * &#x60;no&#x60; - No not send call notifications by email or SMS. **Note**: Requires a voicemail action to be the next action in the call flow. | [optional]
**group_id** | **mixed** | The contact group ID the notifications will be sent to. | [optional]
**action** | **string** | The action type. | [optional] [readonly]
**valid** | [**\Wildjar\Model\ActionIVRFullAllOfValidInner[]**](ActionIVRFullAllOfValidInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
