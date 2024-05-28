# # ActionRobinFull

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** | The action ID. | [optional] [readonly]
**account** | **float** | The account ID. | [optional] [readonly]
**name** | **string** | Friendly name of the call flow action. Used to easily identify an action in the call flow. | [optional]
**next_action** | **string** | Next action type to route to in the call flow. | [optional]
**next_action_id** | **float** | Next action ID to route to in the call flow. | [optional]
**counter** | **float** | The counter value to start the round robin on. | [default to 0]
**notify** | **string** | When notifications are sent to email or SMS contacts:   * &#x60;always&#x60; - Notify for all call types (email only).   * &#x60;missed&#x60; - Notify for missed call types only.   * &#x60;no&#x60; - No not send call notifications by email or SMS. **Note**: Requires a voicemail action to be the next action in the call flow. | [optional] [default to 'no']
**group_id** | **float** | The contact group ID the notifications will be sent to. | [optional] [default to 0]
**action** | **string** | The action type. | [optional] [readonly]
**options** | [**\WildJar\ApiClient\Model\ActionRobinFullAllOfOptions[]**](ActionRobinFullAllOfOptions.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
