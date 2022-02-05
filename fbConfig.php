<?php
session_start();

//Include Facebook SDK
require_once 'inc/facebook.php';

/*
 * Configuration and setup FB API
 */
/*$appId = '434412236903187'; 								//Facebook App ID(create this from developer.facebook.com)
$appSecret = 'ca559e2eb696ec48a4abba85add9a95f'; 			// Facebook App Secret
$redirectURL = 'http://fb.chasingpapers.com/'; // Callback URL i.e. page where you want to redirect after */
//$appId = '370459317496461'; 								
//$appSecret = 'cafd94302369a1dffefe8c98446e4f5c'; 	

$appId = '281639053441576'; 								
$appSecret = '2fadf9b80d10dd043dfc9539dc7ace81'; 			
//$redirectURL = 'http://localhost/ouslet/login.php'; 
$redirectURL = 'http://localhost/ouslet/login_facebook/index.php'; 
//$redirectURL = 'http://cp.chasingpapers.com/'; // Callback URL
//$redirectURL = 'http://cp4.chasingpapers.com/';
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));
$fbUser = $facebook->getUser();
?>