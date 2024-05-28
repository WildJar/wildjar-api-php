# # ActionBlocked

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | **float** | The account ID. | [optional] [readonly]
**number** | **string** | The blocked caller&#39;s phone number in E164 format without a leading plus (\&quot;+\&quot;). |
**reference** | **string** | The blocked caller&#39;s phone number in E164 format without a leading plus (\&quot;+\&quot;), the CDR ID the caller was blocked from or blocked caller&#39;s private reference. | [optional] [readonly]
**date** | **\DateTime** | The date and time the caller was blocked, based on the account time zone, in ISO format. | [optional] [readonly]
**user** | **string** | The user who blocked the caller. | [optional] [readonly]
**reason** | **string** | Reason the caller was blocked. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
