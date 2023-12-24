<?php
ini_set('display_errors', 'On');
require __DIR__ . '/vendor/autoload.php';
require_once('storage.php');

$storage = new StorageClass();

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
$options = [ 'scope' => ['a_reports','offline','info'] ];

$authorizationUrl = $provider->getAuthorizationUrl($options);

$_SESSION['oauth2state'] = $provider->getState();

// Redirect the user to the authorization URL.
header('Location: ' . $authorizationUrl);
exit();
?>