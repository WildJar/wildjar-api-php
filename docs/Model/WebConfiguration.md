# # WebConfiguration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **float** | The DNI tracking code ID. | [optional]
**account** | **float** | The account ID. |
**domain** | **string** | The domain the tracking code will be placed on. |
**type** | **string** | Whether the code is for a domain or is an additional domain alias. | [optional]
**owner** | **string** | Name of the account the tracking code belongs to. | [optional]
**conf** | [**\WildJar\ApiClient\Model\WebConfigurationAllOfConf[]**](WebConfigurationAllOfConf.md) | The dynamic number insertion (DNI) criteria configured for this domain and/or alias. | [optional]
**alias** | [**\WildJar\ApiClient\Model\WebConfigurationAllOfAlias[]**](WebConfigurationAllOfAlias.md) | If tracking multiple domains, the additional alias domains. If using one domain across multiple accounts, the additional accounts associated with the domain. | [optional]
**pool** | **array<string,string[]>** | The base tracking number the pool will be configured for or false if not configured for dynamic number pools. | [optional]
**file** | **string** |  | [optional]
**v** | **string** | The version of the DNI code to be fired. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
