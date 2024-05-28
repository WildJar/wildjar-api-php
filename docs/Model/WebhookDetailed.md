# # WebhookDetailed

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | The webhook&#39;s UUID. | [optional]
**account** | **float** | The account ID | [optional]
**name** | **string** | A descriptive name for the webhook. | [optional]
**template** | **string** | If using a predefined webhook template, the name of the template. If custom, &#x60;\&quot;none\&quot;&#x60;. | [optional]
**allow** | **string** | Allow this webhook to process communication to:   * &#x60;strict&#x60; - Only the configured account.   * &#x60;all&#x60; - The configured account and all child accounts.   * &#x60;only-accounts&#x60; - Only child accounts of the configured account. | [optional]
**apply** | **string** | Apply the webhook to which communication types:   * &#x60;call&#x60; - Calls.   * &#x60;sms&#x60; - SMS messages.   * &#x60;all&#x60; - All communication types. | [optional]
**direction** | **string** | The direction of the interaction:   * &#x60;inbound&#x60;   * &#x60;outbound&#x60; | [optional]
**push** | [**\WildJar\ApiClient\Model\WebhookDetailedAllOfPush**](WebhookDetailedAllOfPush.md) |  | [optional]
**reply** | [**\WildJar\ApiClient\Model\WebhookDetailedAllOfReply**](WebhookDetailedAllOfReply.md) |  | [optional]
**match** | [**\WildJar\ApiClient\Model\WebhookDetailedAllOfMatch[]**](WebhookDetailedAllOfMatch.md) | An array of objects which must match for this webhook to fire. | [optional]
**auth** | **object** |  | [optional]
**o_auth** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
