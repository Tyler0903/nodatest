<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use \Curl\Curl;

$secret = include __DIR__ . "/../../lib/recaptcha_secret.php";
$recaptcha_info = [
  'secret' => $secret,
  'response' => $_REQUEST['g-recaptcha-response'],
  'remoteip' => $_SERVER['REMOTE_ADDR']
];

$recaptcha = new Curl();
$recaptcha->post('https://www.google.com/recaptcha/api/siteverify', $recaptcha_info);

$recaptcha_response = json_decode( $recaptcha->response );

if( !$recaptcha->error && $recaptcha_response->success) {

  $valid = true;
  $contact_info = [];

  if( isset( $_REQUEST['name'] ) && !empty( $_REQUEST['name'] ) ) {

    $contact_info['name'] = $_REQUEST['name'];

  } else {

    $valid = false;

  }

  if( isset( $_REQUEST['email'] ) && !empty( $_REQUEST['email'] ) ) {

    $contact_info['email'] = $_REQUEST['email'];

  } else {

    $valid = false;
    
  }

  if( isset( $_REQUEST['subject'] ) && !empty( $_REQUEST['subject'] ) ) {

    $contact_info['subject'] = $_REQUEST['subject'];

  } else {

    $valid = false;
    
  }

  if( isset( $_REQUEST['message'] ) && !empty( $_REQUEST['message'] ) ) {

    $contact_info['message'] = $_REQUEST['message'];

  } else {

    $valid = false;
    
  }

  if( $valid ) {

    $contact_form = new Curl();
    $contact_form->put('http://sandbox.poolcorp.com/api/contact_forms', $contact_info);
    $contact_form->close();

    header( 'Location: /contact_us/thank_you.html' );

  } else {

    header( 'Location: /contact_us/?invalid=true&' . http_build_query( $contact_info ) );

  }

} else {

  header( 'Location: /contact_us/?invalid=recaptcha&' . http_build_query( $contact_info ) );

}

$recaptcha->close();

?>