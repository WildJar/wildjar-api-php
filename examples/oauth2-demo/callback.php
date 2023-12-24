<?php
ini_set('display_errors', 'On');

require __DIR__ . '/vendor/autoload.php';

require_once('storage.php');

// Storage Classe uses sessions for storing token > extend to your DB of choice
$storage = new StorageClass();

// Load .env file
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


// If we don't have an authorization code then get one
if (!isset($_GET['code'])) {
	echo "Something went wrong, no authorization code found";
	
	// Check given state against previously stored one to mitigate CSRF attack
} elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
	echo "Invalid State";
	unset($_SESSION['oauth2state']);
	exit('Invalid state');
}
	
try {
	// Try to get an access token using the authorization code grant.
	$accessToken = $provider->getAccessToken('authorization_code', [ 'code' => $_GET['code'] ]);
	
	// Save my tokens, expiration tenant_id
	$storage->setToken( $accessToken->getToken(), $accessToken->getExpires(), $accessToken->getRefreshToken() );
	
	header('Location: ' . './authorizedResource.php');
	exit();
	
} catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
	echo "Callback failed";
	print_r($e->getMessage());
	exit();
}

?>