<?php
session_start();

require_once "google-api-php-client-2.4.1/vendor/autoload.php";

$googleClient = new Google_Client();
$googleClient->setClientId("424852700371-0kehi203td9igup84nvl9q5ooc60p7rl.apps.googleusercontent.com");
$googleClient->setClientSecret("6rGsobTPGDzA7nxpncMHxW7j");
$googleClient->setApplicationName("Signup Test");
$googleClient->setRedirectUri("signup/gchoice.php"); 
$googleClient->addScope("email");
$googleClient->addScope("profile");


?>
