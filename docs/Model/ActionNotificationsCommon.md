# # ActionNotificationsCommon

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notify** | **string** | When notifications are sent to email or SMS contacts:   * &#x60;always&#x60; - Notify for all call types (email only).   * &#x60;missed&#x60; - Notify for missed call types only.   * &#x60;no&#x60; - No not send call notifications by email or SMS. **Note**: Requires a voicemail action to be the next action in the call flow. | [optional] [default to 'no']
**group_id** | **float** | The contact group ID the notifications will be sent to. | [optional] [default to 0]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
