<?php

function getAPI($url) {
// Initiate curl session in a variable (resource) - data van API binnenhalen
$curl_handle = curl_init();

// Set the curl URL option
curl_setopt($curl_handle, CURLOPT_URL, $url);
// This option will return data as a string instead of direct output
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
// Execute curl & store data in a variable
curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, false);
$curl_data = curl_exec($curl_handle);
curl_close($curl_handle);

$response = json_decode($curl_data); 

//opvangen als je API niets geeft, geen response
//als response niet bestaat, geef dan een lege array
if(!$response) {
    return array();
}

if(!isset($response->drinks)) {
    return array();
}

// print '<pre>';
// var_dump($response);
// exit;

return $response->drinks;
}