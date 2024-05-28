# # WebhookDetailedAllOfMatch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**field_name** | **string** | The WildJar field to perform the match. Calls have a special field, &#x60;event&#x60;, which contains the stage of the call (&#x60;start&#x60;, &#x60;completed&#x60;) the webhook will fire at. | [optional]
**operator** | **string** | The operator used to perform the match:   * &#x60;EQUAL&#x60;   * &#x60;GREATER&#x60;   * &#x60;LESS&#x60;   * &#x60;ISDEFINED&#x60; - The value of the field must be defined.   * &#x60;IN&#x60; - The value of the field must be in the specified array.   * &#x60;NOTIN&#x60; - The value of the field must **not** be in the specified array. | [optional]
**value** | **string** | The value in the field to match to. | [optional]
**only_if_defined** | **bool** | Only fire the webhook if the field is defined. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
