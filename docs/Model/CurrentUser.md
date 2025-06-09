# # CurrentUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**username** | **string** | The username of the user. | [optional]
**email** | **string** | The email address of the user. | [optional]
**mobile** | **string** | The user&#39;s mobile number in E164 format including a leading plus (+). | [optional]
**first_name** | **string** | The first name of the contact. | [optional]
**last_name** | **string** | The last name of the contact. | [optional]
**account** | **float** | The account ID. | [optional]
**tz** | **string** | Local timezone of the user. | [optional]
**country** | **string** | 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. | [optional]
**dash** | [**\WildJar\ApiClient\Model\CurrentUserDash**](CurrentUserDash.md) |  | [optional]
**allow** | [**\WildJar\ApiClient\Model\CurrentUserAllow**](CurrentUserAllow.md) |  | [optional]
**sip** | [**\WildJar\ApiClient\Model\CurrentUserSip**](CurrentUserSip.md) |  | [optional]
**sercret2_fa** | [**\WildJar\ApiClient\Model\CurrentUserSercret2FA**](CurrentUserSercret2FA.md) |  | [optional]
**preferences** | **object** | Preferences | [optional]
**timestamp** | **string** | If logged into the WildJar dashboard, the expiry timestamp in milliseconds. | [optional]
**md5** | **string** | An MD5 hash for the user. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
