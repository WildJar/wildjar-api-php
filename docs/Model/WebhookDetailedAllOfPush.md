# # WebhookDetailedAllOfPush

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The target URL for this webhook. | [optional]
**method** | **string** | The HTTP method to perform. | [optional]
**data_format** | **string** | The format of the data to be sent. | [optional]
**data** | **array<string,mixed>** | The request body data to be pushed. Variables can be included to send call or SMS data at processing time. | [optional]
**headers** | **object** | The request headers to be pushed. | [optional]
**retry** | **int** | Number of retry attempts before considering the push failed. | [optional]
**interval** | **int** | Number of seconds before the next retry is attempted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
