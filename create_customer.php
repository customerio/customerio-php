<?php

  $session = curl_init();

  $customer_id = 'prod_1337'; // You'll want to set this dynamically to the unique id of the user
  $customerio_url = 'https://track.customer.io/api/v1/customers/';
  $site_id = 'YOUR-SITE-ID';
  $api_key = 'YOUR-API-KEY';

  $data = array("email" => "test@example.com", "created_at" => time(), "custom_attribute" => "custom_attribute_value");
  // Creates or updates a user with the ID prod_1337, email test@example.com and a created_at timestamp.
  // email and created_at are mandatory
  // Any number of optional custom attributes can be passed as key-value pairs. 
  //     You can pass any other information that would be useful in your triggers.

  curl_setopt($session, CURLOPT_URL, $customerio_url.$customer_id);
  curl_setopt($session, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($session, CURLOPT_HTTPGET, 1);
  curl_setopt($session, CURLOPT_HEADER, false);
  curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($session, CURLOPT_CUSTOMREQUEST, 'PUT');
  curl_setopt($session, CURLOPT_VERBOSE, 1);
  curl_setopt($session, CURLOPT_POSTFIELDS,http_build_query($data));


  curl_setopt($session,CURLOPT_USERPWD,$site_id . ":" . $api_key);

  if(ereg("^(https)",$request)) curl_setopt($session,CURLOPT_SSL_VERIFYPEER,false);

  $response = curl_exec($session);
  echo $response;
  curl_close($session);

?>
