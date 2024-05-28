# # ActionBranchFull

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** | The action ID. | [optional] [readonly]
**account** | **float** | The account ID. | [optional] [readonly]
**name** | **string** | Friendly name of the call flow action. Used to easily identify an action in the call flow. | [optional]
**next_action** | **string** | Next action type to route to in the call flow. | [optional]
**next_action_id** | **float** | Next action ID to route to in the call flow. | [optional]
**location_id** | **float** | The location action ID the branch belongs to |
**code** | **string** | The branch code used to identify this branch in the routing. |
**address** | **string** | The full address of the branch. | [optional]
**postcode** | **string** | The postcode of the branch. | [optional]
**state** | **string** | The state the branch is located in. | [optional]
**country** | **string** | The 2 character country code (ie. AU, GB, NZ, US) the branch is located in. Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. | [optional]
**lat** | **float** | The latitude of the branch. | [optional]
**lon** | **float** | The longitude of the branch. | [optional]
**auto_routing** | **string** | Whether the branch will be included in the automatic routing. | [optional] [default to 'yes']
**force_account** | **float** | The account ID where calls to this branch will be stored for reporting purposes. If the value is \&quot;0\&quot;, calls will be stored in the account of the location action. | [optional] [default to 0]
**action** | **string** | The action type. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
