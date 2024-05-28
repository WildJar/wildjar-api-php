# # NumberDetailed

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**did** | **string** | The tracking number in E164 format | [optional] [readonly]
**name** | **string** | Unique name to identify the tracking number | [optional]
**account** | **string** | The account number the tracking number is located in | [optional] [readonly]
**source** | **string** | Grouped source name to identify the call source | [optional]
**type** | **string** | The number&#39;s network type. | [optional] [readonly]
**action** | **string** | Call flow action type this number routes to | [optional]
**action_id** | **string** | Action ID of the call flow action | [optional]
**status** | **string** | Number status | [optional] [readonly]
**activation_date** | **\DateTime** | The date the number was activated in ISO format. | [optional] [readonly]
**cancel_date** | **\DateTime** | The date the number was decommissioned in ISO format. | [optional] [readonly]
**country** | **string** | 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. | [optional] [readonly]
**area** | **string** | The number location or charge area. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
