<?php

  $session = curl_init();
  $customer_id = 'prod_1337'; // You'll want to set this dynamically to the unique id of the user associated with the event
  $customerio_url = 'https://track.customer.io/api/v1/customers/'.$customer_id.'/events';
  
  $site_id = 'YOUR-SITE-ID';
  $api_key = 'YOUR-API-KEY';

  $name = "purchased";
  $attributes = array('price' => 123, 'color' => 'pink');

  $data = array('name' => $name, 'data' => $attributes);
  // Sends a purchased event

  curl_setopt($session, CURLOPT_URL, $customerio_url);
  curl_setopt($session, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($session, CURLOPT_HEADER, false);
  curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($session, CURLOPT_VERBOSE, 1);
  curl_setopt($session, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($session, CURLOPT_POSTFIELDS,http_build_query($data));

  curl_setopt($session,CURLOPT_USERPWD,$site_id . ":" . $api_key);

  if(ereg("^(https)",$request)) curl_setopt($session,CURLOPT_SSL_VERIFYPEER,false);

  $response = curl_exec($session);
  echo $response;
  curl_close($session);

?>
