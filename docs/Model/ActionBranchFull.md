# # ActionBranchFull

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | **mixed** | The account ID. | [optional] [readonly]
**id** | **mixed** | The action ID. | [optional] [readonly]
**name** | **mixed** | Friendly name of the call flow action. Used to easily identify an action in the call flow. | [optional]
**next_action** | **mixed** | Next action type to route to in the call flow. | [optional]
**next_action_id** | **mixed** | Next action ID to route to in the call flow. | [optional]
**address** | **mixed** | The full address of the branch. | [optional]
**auto_routing** | **mixed** | Whether the branch will be included in the automatic routing. | [optional]
**code** | **mixed** | The branch code used to identify this branch in the routing. |
**country** | **mixed** | The 2 character country code (ie. AU, GB, NZ, US) the branch is located in. Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. | [optional]
**force_account** | **mixed** | The account ID where calls to this branch will be stored for reporting purposes. If the value is \&quot;0\&quot;, calls will be stored in the account of the location action. | [optional]
**lat** | **mixed** | The latitude of the branch. | [optional]
**location_id** | **mixed** | The location action ID the branch belongs to |
**lon** | **mixed** | The longitude of the branch. | [optional]
**postcode** | **mixed** | The postcode of the branch. | [optional]
**state** | **mixed** | The state the branch is located in. | [optional]
**action** | **string** | The action type. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
