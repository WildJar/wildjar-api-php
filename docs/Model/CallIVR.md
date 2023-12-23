# # CallIVR

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** | The ID of the IVR option. | [optional] [readonly]
**option** | **string** | The IVR digit the caller entered and was routed to. | [optional] [readonly]
**action** | **string** | Call flow action type this number routes to | [optional] [readonly]
**action_id** | **string** | Action ID of the call flow action | [optional] [readonly]
**name** | **string** | The IVR option name the caller was routed to. | [optional] [readonly]
**branch_code** | **string** | **Location routing only**: The branch code the call was answered at. | [optional] [readonly]
**branch_name** | **string** | **Location routing only**: The branch name the call was answered at. | [optional] [readonly]
**remote_code** | **string** | An optional option code used for integrations into a 3rd party platform. | [optional] [readonly]
**history** | **string** | The full history of all IVR digits pressed on the call, including multiple IVR menu levels. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
