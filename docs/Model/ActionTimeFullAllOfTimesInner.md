# # ActionTimeFullAllOfTimesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** | The ID number for the time switch rule. | [optional] [readonly]
**priority** | **float** | The priority this rule will have if it overlaps with another rule. 0 indicates the lowest priority. | [optional] [default to 0]
**option** | **string** | The day(s) that this time switch rule will be applied. Only one option can be applied per rule. Multiple rules can be used when different routing is needed on non-consecutive days (ie. Monday, Wednesday, Friday).   * &#x60;*&#x60; - Everyday   * &#x60;00&#x60; - Monday to Friday   * &#x60;Mon&#x60; - Monday only   * &#x60;Tue&#x60; - Tuesday only   * &#x60;Wed&#x60; - Wednesday only   * &#x60;Thu&#x60; - Thursday only   * &#x60;Fri&#x60; - Friday only   * &#x60;Sat&#x60; - Saturday only   * &#x60;Sun&#x60; - Sunday only |
**from_time** | **string** | The time the time switch rule will be appled from, use 24 hour (HHMM) format. |
**to_time** | **string** | The time the time switch rule will be appled until, use 24 hour (HHMM) format. |
**action** | **string** | The action type to route to in the call flow for this menu option. |
**action_id** | **float** | The action ID to route to in the call flow for this menu option. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
