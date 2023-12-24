# wildjar-api-client

The WildJar API allows you to programmatically access call data, create and manage accounts, 
create and configure services, enable features and integrations, and send SMS.


For more information, please visit [http://support.wildjar.com/](http://support.wildjar.com/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/WildJar/wildjar-api-php.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/wildjar-api-client/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: OAuth2
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = WildJar\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WildJar\ApiClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = new \WildJar\ApiClient\Model\Account(); // \WildJar\ApiClient\Model\Account

try {
    $result = $apiInstance->addAccount($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->addAccount: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.trkcall.com/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**addAccount**](docs/Api/AccountApi.md#addaccount) | **PUT** /account | Create a new account
*AccountApi* | [**getAccount**](docs/Api/AccountApi.md#getaccount) | **GET** /account/{id} | Get account details
*AccountApi* | [**listAccounts**](docs/Api/AccountApi.md#listaccounts) | **GET** /account | Get list of accounts
*AccountApi* | [**updateAccount**](docs/Api/AccountApi.md#updateaccount) | **POST** /account/{id} | Update an existing account
*AddressBookApi* | [**getAddressBookContactAssociations**](docs/Api/AddressBookApi.md#getaddressbookcontactassociations) | **GET** /addressbook/full | Show full address book contact associations
*AddressBookApi* | [**getAddressBookContactDetails**](docs/Api/AddressBookApi.md#getaddressbookcontactdetails) | **GET** /addressbook/{uuid} | Show address book contact details
*AddressBookApi* | [**listAddressBookContacts**](docs/Api/AddressBookApi.md#listaddressbookcontacts) | **GET** /addressbook | Get list of contacts in the address book
*AuthenticationApi* | [**login**](docs/Api/AuthenticationApi.md#login) | **POST** /token | Generate the authentication token
*CallsApi* | [**getCallDetails**](docs/Api/CallsApi.md#getcalldetails) | **GET** /call/{id} | Show call details
*CallsApi* | [**getCalls**](docs/Api/CallsApi.md#getcalls) | **GET** /call | List Calls
*CallsApi* | [**getOutboundCallDetails**](docs/Api/CallsApi.md#getoutboundcalldetails) | **GET** /call/outbound/{uuid} | Show outbound call details
*CallsApi* | [**getOutboundCalls**](docs/Api/CallsApi.md#getoutboundcalls) | **GET** /call/outbound | List Outbound Calls
*CallsApi* | [**updateCall**](docs/Api/CallsApi.md#updatecall) | **PATCH** /call/{id} | Add a score, tag or note to a call
*NumbersApi* | [**decommissionNumber**](docs/Api/NumbersApi.md#decommissionnumber) | **DELETE** /number/{did} | Decommission a tracking number
*NumbersApi* | [**deleteInventoryNumber**](docs/Api/NumbersApi.md#deleteinventorynumber) | **DELETE** /number/inventory/{did} | Remove a number from inventory (Internal)
*NumbersApi* | [**getNumber**](docs/Api/NumbersApi.md#getnumber) | **GET** /number/{did} | Get tracking number number details
*NumbersApi* | [**getNumberFull**](docs/Api/NumbersApi.md#getnumberfull) | **GET** /number/{did}/extra | Get full tracking number number details (Dashboard)
*NumbersApi* | [**listAvailableNumbers**](docs/Api/NumbersApi.md#listavailablenumbers) | **GET** /number/available/{country_code} | Get list of available numbers by country
*NumbersApi* | [**listInventoryNumbers**](docs/Api/NumbersApi.md#listinventorynumbers) | **GET** /number/all/{country_code} | Get list of inventory by country (Internal)
*NumbersApi* | [**listNumbers**](docs/Api/NumbersApi.md#listnumbers) | **GET** /number | Get list of numbers
*NumbersApi* | [**orderNumber**](docs/Api/NumbersApi.md#ordernumber) | **PUT** /number/{account}/{did} | Order an tracking number
*NumbersApi* | [**updateNumber**](docs/Api/NumbersApi.md#updatenumber) | **POST** /number/{did} | Update tracking number details
*RoutingApi* | [**blockCaller**](docs/Api/RoutingApi.md#blockcaller) | **POST** /routing/{account}/blocked | Block a caller
*RoutingApi* | [**blockCallerFromCall**](docs/Api/RoutingApi.md#blockcallerfromcall) | **PATCH** /routing/{account}/blocked | Block a caller from a Call record
*RoutingApi* | [**createBranchAction**](docs/Api/RoutingApi.md#createbranchaction) | **PUT** /routing/{account}/branch | Create a location routing branch
*RoutingApi* | [**createIVRAction**](docs/Api/RoutingApi.md#createivraction) | **PUT** /routing/{account}/ivr | Create an IVR action
*RoutingApi* | [**createLocationsAction**](docs/Api/RoutingApi.md#createlocationsaction) | **PUT** /routing/{account}/locations | Create a location routing action
*RoutingApi* | [**createRobinAction**](docs/Api/RoutingApi.md#createrobinaction) | **PUT** /routing/{account}/robin | Create a round robin action
*RoutingApi* | [**createTagAction**](docs/Api/RoutingApi.md#createtagaction) | **PUT** /routing/{account}/tag | Create a tag action
*RoutingApi* | [**createTimeAction**](docs/Api/RoutingApi.md#createtimeaction) | **PUT** /routing/{account}/time | Create a time switch action
*RoutingApi* | [**createTransferAction**](docs/Api/RoutingApi.md#createtransferaction) | **PUT** /routing/{account}/transfer | Create a transfer action
*RoutingApi* | [**createVoicemailAction**](docs/Api/RoutingApi.md#createvoicemailaction) | **PUT** /routing/{account}/voicemail | Create a voicemail action
*RoutingApi* | [**getBranchAction**](docs/Api/RoutingApi.md#getbranchaction) | **GET** /routing/{account}/branch/{action_id} | Show detailed configuration of a branch action
*RoutingApi* | [**getIVRAction**](docs/Api/RoutingApi.md#getivraction) | **GET** /routing/{account}/ivr/{action_id} | Show detailed routing for an IVR action
*RoutingApi* | [**getLocationsAction**](docs/Api/RoutingApi.md#getlocationsaction) | **GET** /routing/{account}/locations/{action_id} | Show detailed configuration of a location action
*RoutingApi* | [**getLocationsMap**](docs/Api/RoutingApi.md#getlocationsmap) | **GET** /routing/{account}/locations/{action_id}/map | Show detailed location mapping
*RoutingApi* | [**getRobinAction**](docs/Api/RoutingApi.md#getrobinaction) | **GET** /routing/{account}/robin/{action_id} | Show detailed routing for a round robin action
*RoutingApi* | [**getTagAction**](docs/Api/RoutingApi.md#gettagaction) | **GET** /routing/{account}/tag/{action_id} | Show tag action details
*RoutingApi* | [**getTimeAction**](docs/Api/RoutingApi.md#gettimeaction) | **GET** /routing/{account}/time/{action_id} | Show detailed routing for a time switch action
*RoutingApi* | [**getTransferAction**](docs/Api/RoutingApi.md#gettransferaction) | **GET** /routing/{account}/transfer/{action_id} | Show detailed routing for a transfer action
*RoutingApi* | [**getVoicemailAction**](docs/Api/RoutingApi.md#getvoicemailaction) | **GET** /routing/{account}/voicemail/{action_id} | Show detailed routing for a voicemail action
*RoutingApi* | [**listBlockedCallers**](docs/Api/RoutingApi.md#listblockedcallers) | **GET** /routing/{account}/blocked | List blocked callers
*RoutingApi* | [**listBranchActions**](docs/Api/RoutingApi.md#listbranchactions) | **GET** /routing/{account}/branch | List location routing branches
*RoutingApi* | [**listIVRs**](docs/Api/RoutingApi.md#listivrs) | **GET** /routing/{account}/ivr | List IVR actions
*RoutingApi* | [**listLocationsActions**](docs/Api/RoutingApi.md#listlocationsactions) | **GET** /routing/{account}/locations | List location routing actions
*RoutingApi* | [**listRobins**](docs/Api/RoutingApi.md#listrobins) | **GET** /routing/{account}/robin | List round robin actions
*RoutingApi* | [**listTagActions**](docs/Api/RoutingApi.md#listtagactions) | **GET** /routing/{account}/tag | List tag actions
*RoutingApi* | [**listTimeActions**](docs/Api/RoutingApi.md#listtimeactions) | **GET** /routing/{account}/time | List time switch actions
*RoutingApi* | [**listTransfers**](docs/Api/RoutingApi.md#listtransfers) | **GET** /routing/{account}/transfer | List transfer actions
*RoutingApi* | [**listVoicemails**](docs/Api/RoutingApi.md#listvoicemails) | **GET** /routing/{account}/voicemail | List voicemail actions
*RoutingApi* | [**unblockNumber**](docs/Api/RoutingApi.md#unblocknumber) | **DELETE** /routing/{account}/blocked/{number} | Unblock a caller
*RoutingApi* | [**updateBranchAction**](docs/Api/RoutingApi.md#updatebranchaction) | **POST** /routing/{account}/branch/{action_id} | Update a location routing branch
*RoutingApi* | [**updateDidRouting**](docs/Api/RoutingApi.md#updatedidrouting) | **POST** /routing/{account}/did/{did} | Update the routing of a tracking number
*RoutingApi* | [**updateIVRAction**](docs/Api/RoutingApi.md#updateivraction) | **POST** /routing/{account}/ivr/{action_id} | Update an IVR action
*RoutingApi* | [**updateLocationsAction**](docs/Api/RoutingApi.md#updatelocationsaction) | **POST** /routing/{account}/locations/{action_id} | Update a location routing action
*RoutingApi* | [**updateRobinAction**](docs/Api/RoutingApi.md#updaterobinaction) | **POST** /routing/{account}/robin/{action_id} | Update a round robin action
*RoutingApi* | [**updateTagAction**](docs/Api/RoutingApi.md#updatetagaction) | **POST** /routing/{account}/tag/{action_id} | Update a tag action
*RoutingApi* | [**updateTimeAction**](docs/Api/RoutingApi.md#updatetimeaction) | **POST** /routing/{account}/time/{action_id} | Update a time switch action
*RoutingApi* | [**updateTransferAction**](docs/Api/RoutingApi.md#updatetransferaction) | **POST** /routing/{account}/transfer/{action_id} | Update a transfer action
*RoutingApi* | [**updateVoicemailAction**](docs/Api/RoutingApi.md#updatevoicemailaction) | **POST** /routing/{account}/voicemail/{action_id} | Update a voicemail action

## Models

- [Account](docs/Model/Account.md)
- [ActionBlocked](docs/Model/ActionBlocked.md)
- [ActionBranch](docs/Model/ActionBranch.md)
- [ActionBranchFull](docs/Model/ActionBranchFull.md)
- [ActionCommon](docs/Model/ActionCommon.md)
- [ActionIVR](docs/Model/ActionIVR.md)
- [ActionIVRFull](docs/Model/ActionIVRFull.md)
- [ActionIVRFullAllOfValidInner](docs/Model/ActionIVRFullAllOfValidInner.md)
- [ActionLocations](docs/Model/ActionLocations.md)
- [ActionLocationsFull](docs/Model/ActionLocationsFull.md)
- [ActionLocationsMap](docs/Model/ActionLocationsMap.md)
- [ActionLocationsMapAllOfMap](docs/Model/ActionLocationsMapAllOfMap.md)
- [ActionLocationsMapUpdate](docs/Model/ActionLocationsMapUpdate.md)
- [ActionLocationsMapUpdateAllOfMap](docs/Model/ActionLocationsMapUpdateAllOfMap.md)
- [ActionNotificationsCommon](docs/Model/ActionNotificationsCommon.md)
- [ActionRobin](docs/Model/ActionRobin.md)
- [ActionRobinFull](docs/Model/ActionRobinFull.md)
- [ActionTag](docs/Model/ActionTag.md)
- [ActionTime](docs/Model/ActionTime.md)
- [ActionTimeFull](docs/Model/ActionTimeFull.md)
- [ActionTransfer](docs/Model/ActionTransfer.md)
- [ActionTransferFull](docs/Model/ActionTransferFull.md)
- [ActionVoicemail](docs/Model/ActionVoicemail.md)
- [ActionVoicemailFull](docs/Model/ActionVoicemailFull.md)
- [AddAccount200Response](docs/Model/AddAccount200Response.md)
- [AddressBook](docs/Model/AddressBook.md)
- [AddressBookContact](docs/Model/AddressBookContact.md)
- [AddressBookContactAssociation](docs/Model/AddressBookContactAssociation.md)
- [AddressBookContactAssociationAccountId](docs/Model/AddressBookContactAssociationAccountId.md)
- [AddressBookContactAssociationAccountIdAddressBookContactNumberE164](docs/Model/AddressBookContactAssociationAccountIdAddressBookContactNumberE164.md)
- [AvailableNumber](docs/Model/AvailableNumber.md)
- [BlockCaller200Response](docs/Model/BlockCaller200Response.md)
- [BlockCallerFromCallRequest](docs/Model/BlockCallerFromCallRequest.md)
- [Call](docs/Model/Call.md)
- [CallIVR](docs/Model/CallIVR.md)
- [CallTag](docs/Model/CallTag.md)
- [CallWeb](docs/Model/CallWeb.md)
- [CreateBranchAction200Response](docs/Model/CreateBranchAction200Response.md)
- [CreateIVRAction200Response](docs/Model/CreateIVRAction200Response.md)
- [CreateLocationsAction200Response](docs/Model/CreateLocationsAction200Response.md)
- [CreateRobinAction200Response](docs/Model/CreateRobinAction200Response.md)
- [CreateTagAction200Response](docs/Model/CreateTagAction200Response.md)
- [CreateTimeAction200Response](docs/Model/CreateTimeAction200Response.md)
- [CreateTransferAction200Response](docs/Model/CreateTransferAction200Response.md)
- [CreateVoicemailAction200Response](docs/Model/CreateVoicemailAction200Response.md)
- [DetailedCall](docs/Model/DetailedCall.md)
- [DetailedCallAllOfWeb](docs/Model/DetailedCallAllOfWeb.md)
- [GetAddressBookContactAssociations200Response](docs/Model/GetAddressBookContactAssociations200Response.md)
- [GetAddressBookContactDetails200Response](docs/Model/GetAddressBookContactDetails200Response.md)
- [GetCallDetails200Response](docs/Model/GetCallDetails200Response.md)
- [GetCalls200Response](docs/Model/GetCalls200Response.md)
- [GetNumber200Response](docs/Model/GetNumber200Response.md)
- [GetOutboundCallDetails200Response](docs/Model/GetOutboundCallDetails200Response.md)
- [GetOutboundCalls200Response](docs/Model/GetOutboundCalls200Response.md)
- [GlobalNumber](docs/Model/GlobalNumber.md)
- [ListAccounts200Response](docs/Model/ListAccounts200Response.md)
- [ListAddressBookContacts200Response](docs/Model/ListAddressBookContacts200Response.md)
- [ListAvailableNumbers200Response](docs/Model/ListAvailableNumbers200Response.md)
- [ListBlockedCallers200Response](docs/Model/ListBlockedCallers200Response.md)
- [ListBranchActions200Response](docs/Model/ListBranchActions200Response.md)
- [ListIVRs200Response](docs/Model/ListIVRs200Response.md)
- [ListInventoryNumbers200Response](docs/Model/ListInventoryNumbers200Response.md)
- [ListLocationsActions200Response](docs/Model/ListLocationsActions200Response.md)
- [ListNumber](docs/Model/ListNumber.md)
- [ListNumbers200Response](docs/Model/ListNumbers200Response.md)
- [ListRobins200Response](docs/Model/ListRobins200Response.md)
- [ListTagActions200Response](docs/Model/ListTagActions200Response.md)
- [ListTimeActions200Response](docs/Model/ListTimeActions200Response.md)
- [ListTransfers200Response](docs/Model/ListTransfers200Response.md)
- [ListVoicemails200Response](docs/Model/ListVoicemails200Response.md)
- [Login200Response](docs/Model/Login200Response.md)
- [Number](docs/Model/Number.md)
- [NumberDetailed](docs/Model/NumberDetailed.md)
- [NumberDetailedFull](docs/Model/NumberDetailedFull.md)
- [NumberDetailedFullAllOfExtra](docs/Model/NumberDetailedFullAllOfExtra.md)
- [NumberDetailedFullAllOfExtraMultiConf](docs/Model/NumberDetailedFullAllOfExtraMultiConf.md)
- [OrderNumber](docs/Model/OrderNumber.md)
- [OrderNumber200Response](docs/Model/OrderNumber200Response.md)
- [OutboundCall](docs/Model/OutboundCall.md)
- [RoutingAction](docs/Model/RoutingAction.md)
- [UpdateDidRouting200Response](docs/Model/UpdateDidRouting200Response.md)
- [UpdateLocationsAction200Response](docs/Model/UpdateLocationsAction200Response.md)

## Authorization

Authentication schemes defined for the API:
### BearerAuth

- **Type**: Bearer authentication

### OAuth2

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `https://portal.wildjar.com/login`
- **Scopes**: 
    - **admin**: administrator access
    - **conf**: access to configuration
    - **reports**: access to reports
    - **super**: reseller super access
    - **users**: access to create users

### userLogin

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@wildjar.com

## About this package

This PHP package is automatically generated project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
