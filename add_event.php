<?php

  $session = curl_init();
  $customer_id = '1337'; // You'll want to set this dynamically
  $customerio_url = 'https://app.customer.io/api/v1/customers/'.$customer_id.'/events';
  $site_id = '42172a79d46b6c2c3e38';
  $api_key = '0d2bceaf886c82c60111';

  $data = array("name" => "purchased", "amount" => "10");

  curl_setopt($session, CURLOPT_URL, $customerio_url);
  curl_setopt($session, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($session, CURLOPT_HEADER, false);
  curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($session, CURLOPT_VERBOSE, 1);
  curl_setopt($session, CURLOPT_POSTFIELDS,http_build_query($data));

  curl_setopt($session,CURLOPT_USERPWD,$site_id . ":" . $api_key);

  if(ereg("^(https)",$request)) curl_setopt($session,CURLOPT_SSL_VERIFYPEER,false);

  $response = curl_exec($session);
  echo $response;
  curl_close($session);

?>
