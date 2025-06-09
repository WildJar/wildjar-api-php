# # UserFull

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The email address of the user. |
**username** | **string** | The username of the user. | [optional]
**status** | **string** | The status of the user:  * &#x60;active&#x60; - The user is active  * &#x60;invited&#x60; - The user has been invited but has not yet accepted the invite.  * &#x60;suspended&#x60; - The user has been suspended. Suspended users can be reactivated. | [optional] [readonly]
**level** | **string** | The access level granted to the user. | [optional]
**first_name** | **string** | The first name of the contact. | [optional]
**last_name** | **string** | The last name of the contact. | [optional]
**account** | **float** | The account ID. |
**mobile** | **string** | The user&#39;s mobile number in E164 format including a leading plus (+). | [optional]
**sip** | **string** | The sip extension allocated to the user for use of the web phone, if enabled. | [optional]
**allow** | [**\WildJar\ApiClient\Model\UserAllow**](UserAllow.md) |  |
**portal** | **string** | The URI of the whitelabel portal the invite applies to. If not specified, the whitelabel template of the top level account is applied, if configured. If no whitelabel template is configured, the WildJar branding will be used. | [optional]
**id** | **string** | The ID of the user. | [optional] [readonly]
**block** | **string** | INTERNAL. The billing block that the user belongs to. | [optional] [readonly]
**timezone** | **string** | Local timezone of the user. | [optional]
**acl** | **string[]** | Additional accounts, outside the user&#39;s account hierarchy, that the user is allowed to access. | [optional]
**key** | **string** | The user&#39;s invite code. Only used on users in \&quot;invited\&quot; status, otherwise null. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
