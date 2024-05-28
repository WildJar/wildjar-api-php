# # User

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
**allow** | **string[]** | The funcions the user is allowed to access:   * &#x60;reports&#x60; - This gives the user access to only view the dashboards and data without being able to add more phone numbers and change settings.   * &#x60;conf&#x60; - Access to change number configuration settings and order numbers.   * &#x60;users&#x60; - Access to add users to the account and create accounts.   * &#x60;admin&#x60; - Full administrative access to the account.   * &#x60;billing&#x60; - Access to view monthly summary, invoices and payments.   * &#x60;super&#x60; - Access to whitelabel billing, prospects, biller codes and sub-invoicing. |
**portal** | **string** | The URI of the whitelabel portal the invite applies to. If not specified, the whitelabel template of the top level account is applied, if configured. If no whitelabel template is configured, the WildJar branding will be used. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
