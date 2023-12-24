<?php
ini_set('display_errors', 'On');
require __DIR__ . '/vendor/autoload.php';
require_once('storage.php');

$storage = new StorageClass();

if ($storage->getHasExpired()) {
        
    $dotenv = new \Symfony\Component\Dotenv\Dotenv();
    $dotenv->loadEnv(__DIR__.'/.env');

    $provider = new \League\OAuth2\Client\Provider\GenericProvider([
        'clientId'                => $_ENV['WILDJAR_OAUTH_CLIENT_ID'],
        'clientSecret'            => $_ENV['WILDJAR_OAUTH_CLIENT_SECRET'],
        'redirectUri'             => $_ENV['WILDJAR_OAUTH_REDIRECT_URI'],
        'urlAuthorize'            => 'https://'.$_ENV['WILDJAR_DASHBOARD_DOMAIN'].'/oauth2/'.$_ENV['WILDJAR_OAUTH_CLIENT_ID'].'/',
        'urlAccessToken'          => 'https://'.$_ENV['WILDJAR_DASHBOARD_DOMAIN'].'/oauth2/'.$_ENV['WILDJAR_OAUTH_CLIENT_ID'].'/token/',
        'urlResourceOwnerDetails' => 'https://'.$_ENV['WILDJAR_API_DOMAIN'].'/v2/user/me'
    ]);    
    $guzzyClient = new GuzzleHttp\Client([
        'defaults' => [
            \GuzzleHttp\RequestOptions::CONNECT_TIMEOUT => 5,
            \GuzzleHttp\RequestOptions::ALLOW_REDIRECTS => true
        ],
        \GuzzleHttp\RequestOptions::VERIFY => false,
    ]);
    $provider->setHttpClient($guzzyClient);

    $newToken = $provider->getAccessToken('refresh_token', [ 'refresh_token' => $storage->getRefreshToken() ]);
    
    // Save my token, expiration and refresh token
    $storage->setToken( $newToken->getToken(), $newToken->getExpires(), $newToken->getRefreshToken());
}

\WildJar\ApiClient\Configuration::init( (string)$storage->getSession()['token'], 'https://api.bebbo.it/v2', false );

if (!isset($_GET['step'])) {
    ?>
    Choose an account to use: <br />
    <?

    $wild = new \WildJar\ApiClient\Api\AccountApi();
    $params = new \WildJar\ApiClient\Api\RequestParams_AccountApi_listAccounts();
    // $params->page = 1;
    // $params->per_page = 25;
    $res = $wild->listAccounts();
    if ($res->resStatus!=="ok") {
        echo "Error: invalid reply with status: ".$res->resStatus;
        print_r($res);
        exit;
    }
    foreach ($res->data as $account) {
        ?>
        &nbsp; <a href="authorizedResource.php?step=1&account=<? echo $account->getId(); ?>"><? echo $account->getName(); ?></a><br>
        <?
    }
   
    exit;
}

if ($_GET['step'] == 1 && isset($_GET['account'])) {
    try {
        $accApi = new \WildJar\ApiClient\Api\AccountApi();
        $acc = $accApi->getAccount($_GET['account']);
    } catch (\WildJar\ApiClient\ApiException $e) {
        $error = json_decode($e->getResponseBody());
        echo "Invalid account - " . @$error->errorCode . " - " . @$error->info;
        exit;
    }
    echo "Pick a DID to provision for account {$_GET['account']}: <br />";
    $wild = new \WildJar\ApiClient\Api\NumbersApi();
    $params = new \WildJar\ApiClient\Api\RequestParams_NumbersApi_listAvailableNumbers();
    $params->page = 1;
    $params->per_page = 25;
    $res = $wild->listAvailableNumbers('AU',$params);
    foreach ($res->data as $did) {
        ?> &nbsp; <a href="authorizedResource.php?step=2&account=<?=$_GET['account']?>&did=<?=$did->getDid()?>"><?=$did->getDid()?></a><br><?
    }
    exit;
}

if ($_GET['step'] == 2 && isset($_GET['account']) && isset($_GET['did'])) {
    echo "Provisioning DID {$_GET['did']} for account {$_GET['account']}<br />";
    /*
    $wild = new \WildJar\ApiClient\Api\NumbersApi( $guzzyClient, $config );
    $number = new \WildJar\ApiClient\Model\Number();
    try {
        $number->setName('test')->setAction('hangup');
        $res = $wild->orderNumber($_GET['account'],$_GET['did'],$number);
        if ($res->getStatus()!=="ok") {
            echo "Error: invalid reply";
            exit;
        }
        echo "DID " . $res->getData()->getDid(). " assigned";
    } catch (\WildJar\ApiClient\ApiException $e) {
        $error = json_decode($e->getResponseBody());
        echo "ApiException - " . @$error->errorCode . " - " . @$error->info;
    }
    */
    exit;
}
/*

    if ($_GET["action"] === 'show1account') {
        $wild = new \WildJar\ApiClient\Api\AccountApi( $guzzyClient, $config );
        $acc = $wild->listAccounts();
        if ($acc->getStatus()!=="ok") {
            $message = "Error: invalid reply";
        } else {
            $message = '1st Account Name: ' . $acc->getData()[0]->getName();
        }
    }

    if ($_GET["action"] === 'createDidi') {
        $wild = new \WildJar\ApiClient\Api\NumbersApi( $guzzyClient, $config );
        $available = $wild->listAvailableNumbers('AU');
        print_r($available);

        */
        /*
        $number = new \WildJar\ApiClient\Model\Number();
        try {
            $number->setName('test')->setAction('hangup');
            $res = $wild->orderNumber('20000',"61253182214",$number);
            if ($acc->getStatus()!=="ok") {
                $message = "Error: invalid reply";
            } else {
                $message = 'DID ' . $res->getData()->getDid(). ' assigned';
            }
        } catch (\WildJar\ApiClient\ApiException $e) {
            $error = json_decode($e->getResponseBody());
            $message = "ApiException - " . @$error->errorCode . " - " . @$error->info;
        }
        */
        
        /*
        try {
            $can = $wild->decommissionNumber('61253182214'); // 61253182211
            $message = 'DID decommissioned';
        } catch (\WildJar\ApiClient\ApiException $e) {
            $error = json_decode($e->getResponseBody());
            $message = "ApiException - " . @$error->errorCode . " - " . @$error->info;
        }
*/
        // $wild = new \WildJar\ApiClient\Api\AddressBookApi( $guzzyClient, $config );
        // $contact = new \WildJar\ApiClient\Model\AddressBookContact(['account' => '20000']);
        // $contact->setFirstName("Albert")->setLastName("Einstein")->setNumber("+61451234599");
        
        // $wild->createContact($contact);
        /*
    }
}

*/

// $x = new \WildJar\ApiClient\Configuration();
/*
$config = \WildJar\Configuration::getDefaultConfiguration()->setAccessToken( (string)$storage->getSession()['token'] );
$wild = new \WildJar\Api\AccountApi(
    new GuzzleHttp\Client(),
    $config
);

$account = new \Wildjar\Model\Account(); // \Wildjar\Model\Account
$acc = $wild->listAccounts();
print_r($acc);
*/
/*
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken( (string)$storage->getSession()['token'] );
$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    new GuzzleHttp\Client(),
    $config
);

if (isset($_GET['action'])) {
    if ($_GET["action"] == 1) {
        // Get Organisation details
        $apiResponse = $apiInstance->getOrganisations($xeroTenantId);
        $message = 'Organisation Name: ' . $apiResponse->getOrganisations()[0]->getName();
    } else if ($_GET["action"] == 2) {
        // Create Contact
        try {
            $person = new XeroAPI\XeroPHP\Models\Accounting\ContactPerson;
            $person->setFirstName("John")
            ->setLastName("Smith")
            ->setEmailAddress("john.smith@24locks.com")
            ->setIncludeInEmails(true);
            
            $arr_persons = [];
            array_push($arr_persons, $person);
            
            $contact = new XeroAPI\XeroPHP\Models\Accounting\Contact;
            $contact->setName('FooBar')
            ->setFirstName("Foo")
            ->setLastName("Bar")
            ->setEmailAddress("ben.bowden@24locks.com")
            ->setContactPersons($arr_persons);
            
            $arr_contacts = [];
            array_push($arr_contacts, $contact);
            $contacts = new XeroAPI\XeroPHP\Models\Accounting\Contacts;
            $contacts->setContacts($arr_contacts);
            
            $apiResponse = $apiInstance->createContacts($xeroTenantId,$contacts);
            $message = 'New Contact Name: ' . $apiResponse->getContacts()[0]->getName();
        } catch (\XeroAPI\XeroPHP\ApiException $e) {
            $error = AccountingObjectSerializer::deserialize(
                $e->getResponseBody(),
                '\XeroAPI\XeroPHP\Models\Accounting\Error',
                []
            );
            $message = "ApiException - " . $error->getElements()[0]["validation_errors"][0]["message"];
        }
        
    } else if ($_GET["action"] == 3) {
        $if_modified_since = new \DateTime("2019-01-02T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
        $if_modified_since = null;
        $where = 'Type=="ACCREC"'; // string
        $where = null;
        $order = null; // string
        $ids = null; // string[] | Filter by a comma-separated list of Invoice Ids.
        $invoice_numbers = null; // string[] |  Filter by a comma-separated list of Invoice Numbers.
        $contact_ids = null; // string[] | Filter by a comma-separated list of ContactIDs.
        $statuses = array("DRAFT", "SUBMITTED");;
        $page = 1; // int | e.g. page=1 – Up to 100 invoices will be returned in a single API call with line items
        $include_archived = null; // bool | e.g. includeArchived=true - Contacts with a status of ARCHIVED will be included
        $created_by_my_app = null; // bool | When set to true you'll only retrieve Invoices created by your app
        $unitdp = null; // int | e.g. unitdp=4 – You can opt in to use four decimal places for unit amounts
        
        try {
            $apiResponse = $apiInstance->getInvoices($xeroTenantId, $if_modified_since, $where, $order, $ids, $invoice_numbers, $contact_ids, $statuses, $page, $include_archived, $created_by_my_app, $unitdp);
            if (  count($apiResponse->getInvoices()) > 0 ) {
                $message = 'Total invoices found: ' . count($apiResponse->getInvoices());
            } else {
                $message = "No invoices found matching filter criteria";
            }
        } catch (Exception $e) {
            echo 'Exception when calling AccountingApi->getInvoices: ', $e->getMessage(), PHP_EOL;
        }
    } else if ($_GET["action"] == 4) {
        // Create Multiple Contacts
        try {
            $contact = new XeroAPI\XeroPHP\Models\Accounting\Contact;
            $contact->setName('George Jetson')
            ->setFirstName("George")
            ->setLastName("Jetson")
            ->setEmailAddress("george.jetson@aol.com");
            
            // Add the same contact twice - the first one will succeed, but the
            // second contact will throw a validation error which we'll catch.
            $arr_contacts = [];
            array_push($arr_contacts, $contact);
            array_push($arr_contacts, $contact);
            $contacts = new XeroAPI\XeroPHP\Models\Accounting\Contacts;
            $contacts->setContacts($arr_contacts);
            
            $apiResponse = $apiInstance->createContacts($xeroTenantId,$contacts,false);
            $message = 'First contacts created: ' . $apiResponse->getContacts()[0]->getName();
            
            if ($apiResponse->getContacts()[1]->getHasValidationErrors()) {
                $message = $message . '<br> Second contact validation error : ' . $apiResponse->getContacts()[1]->getValidationErrors()[0]["message"];
            }
            
        } catch (\XeroAPI\XeroPHP\ApiException $e) {
            $error = AccountingObjectSerializer::deserialize(
                $e->getResponseBody(),
                '\XeroAPI\XeroPHP\Models\Accounting\Error',
                []
            );
            $message = "ApiException - " . $error->getElements()[0]["validation_errors"][0]["message"];
        }
    } else if ($_GET["action"] == 5) {
        
        $if_modified_since = new \DateTime("2019-01-02T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
        $where = null;
        $order = null; // string
        $ids = null; // string[] | Filter by a comma-separated list of Invoice Ids.
        $page = 1; // int | e.g. page=1 – Up to 100 invoices will be returned in a single API call with line items
        $include_archived = null; // bool | e.g. includeArchived=true - Contacts with a status of ARCHIVED will be included
        
        try {
            $apiResponse = $apiInstance->getContacts($xeroTenantId, $if_modified_since, $where, $order, $ids, $page, $include_archived);
            if (  count($apiResponse->getContacts()) > 0 ) {
                $message = 'Total contacts found: ' . count($apiResponse->getContacts());
            } else {
                $message = "No contacts found matching filter criteria";
            }
        } catch (Exception $e) {
            echo 'Exception when calling AccountingApi->getContacts: ', $e->getMessage(), PHP_EOL;
        }
    } else if ($_GET["action"] == 6) {
        
        
        echo("sub:" . $jwt->getSub() . "<br>");
        echo("sid:" . $jwt->getSid() . "<br>");
        echo("iss:" . $jwt->getIss() . "<br>");
        echo("exp:" . $jwt->getExp() . "<br>");
        echo("given name:" . $jwt->getGivenName() . "<br>");
        echo("family name:" . $jwt->getFamilyName() . "<br>");
        echo("email:" . $jwt->getEmail() . "<br>");
        echo("user id:" . $jwt->getXeroUserId() . "<br>");
        echo("username:" . $jwt->getPreferredUsername() . "<br>");
        echo("session id:" . $jwt->getGlobalSessionId() . "<br>");
        echo("authentication_event_id:" . $jwt->getAuthenticationEventId() . "<br>");
        
    }
}
*/
?>
<html>
<body>
<ul>
<li><a href="authorizedResource.php?action=show1account">Show 1st account name</a></li>
<li><a href="authorizedResource.php?action=2">Create one Contact</a></li>
<li><a href="authorizedResource.php?action=3">Get Invoice with Filters</a></li>
<li><a href="authorizedResource.php?action=4">Create multiple contacts and summarizeErrors</a></li>
<li><a href="authorizedResource.php?action=5">Get Contact with Filters</a></li>
<li><a href="authorizedResource.php?action=6">Get JWT Claims</a></li>
</ul>
<div>
<?php
echo($message );
?>
</div>
</body>
</html>