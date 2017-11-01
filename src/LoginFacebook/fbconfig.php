<?php
session_start();
// added in v4.0.0
require_once 'autoload.php';
/*require 'functions.php';*/
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication( '186507458586591','b64cc0238beb03a0aeb6826773cadfda' );
// login helper with redirect_uri
    $helper = new FacebookRedirectLoginHelper('http://demos.krizna.com/test.php' );
try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
  // graph api request for user data
  
  /*comentado pq no andaba*/
  //$request = new FacebookRequest( $session, 'GET', '/me?locale=en_US&fields=id,name,email' );
  
  $request = new FacebookRequest( $session, 'GET', '/me' );

  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();
     	$fbid = $graphObject->getProperty('id');   
      $fbuname = $graphObject->getProperty('username'); // To Get Facebook ID
 	    $fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
	    $femail = $graphObject->getProperty('email');    // To Get Facebook email ID
	/* ---- Session Variables -----*/
	    $_SESSION['FBID'] = $fbid;      
      $_SESSION['USERNAME'] = $fbuname;           
      $_SESSION['FULLNAME'] = $fbfullname;
	    $_SESSION['EMAIL'] =  $femail;
      echo '<pre>' . print_r( $graphObject, 1 ) . '</pre>';
    /* ---- header location after session ----*/
  //header("Location: index.php");
} else {
  /*$loginUrl = $helper->getLoginUrl();
 header("Location: ".$loginUrl);*/

   // show login url
 //echo $helper->getAppId();
  echo '<a href="' . $helper->getLoginUrl() . '">Login</a>';
}
?>