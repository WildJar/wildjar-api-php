# # ActionTimeFull

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | The action ID. | [optional] [readonly]
**account** | **mixed** | The account ID. | [optional] [readonly]
**name** | **mixed** | Friendly name of the call flow action. Used to easily identify an action in the call flow. | [optional]
**next_action** | **mixed** | Next action type to route to in the call flow. | [optional]
**next_action_id** | **mixed** | Next action ID to route to in the call flow. | [optional]
**notify** | **mixed** | When notifications are sent to email or SMS contacts:   * &#x60;always&#x60; - Notify for all call types (email only).   * &#x60;missed&#x60; - Notify for missed call types only.   * &#x60;no&#x60; - No not send call notifications by email or SMS. **Note**: Requires a voicemail action to be the next action in the call flow. | [optional]
**group_id** | **mixed** | The contact group ID the notifications will be sent to. | [optional]
**action** | **string** | The action type. | [optional] [readonly]
**times** | [**\WildJar\ApiClient\Model\ActionTimeFullAllOfTimesInner[]**](ActionTimeFullAllOfTimesInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
