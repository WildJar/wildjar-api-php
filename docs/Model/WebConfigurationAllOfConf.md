# # WebConfigurationAllOfConf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID for the DNI configuration criteria. Leave empty when adding a criteria. | [optional]
**account** | **string** | The account ID. | [optional]
**delete** | **string** | Use the value &#x60;\&quot;yes\&quot;&#x60; if deleting a DNI criteria. If omitted or an empty string is sent, the criteria is updated. | [optional] [default to '']
**utmtag** | **string** | The UTM tags to configure for this criteria. | [optional] [default to '']
**did** | **string** | The tracking number to show on the website for this criteria in E164 format. | [optional]
**content** | **string** | The number appearing on the website in E164 format. This is the number which will be swapped out with a tracking number. | [optional]
**content_type** | **string** | The content type of the number being swapped on the website:   * &#x60;text&#x60; - A phone number in the text of the website.   * &#x60;custom&#x60; - A piece of custom text on the website (ie. \&quot;Click to call now!\&quot;).   * &#x60;image&#x60; - An image containing a phone number.   * &#x60;js&#x60; - A custom piece of javascript. | [optional]
**content_format** | **string** | The content of a custom return - for example, if overriding the local number formatting or returning text - or javascript to be run. | [optional]
**medium** | **string** | The visitor&#39;s medium to show this number for. | [optional]
**source** | **string** | The visitor&#39;s source to show this number for. | [optional]
**campaign** | **string** | The visitor&#39;s utm_campaign parameter value to show this number for. | [optional]
**keyword** | **string** | The visitor&#39;s keyword or utm_term parameter value to swap this number for. | [optional]
**priority** | **string** | The priority assigned to this criteria. The higher the number, the higher priority if there are multiple rules for a source, medium or campaign. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
