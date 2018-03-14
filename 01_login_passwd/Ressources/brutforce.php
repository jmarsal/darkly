<?php

$ip = "192.168.99.100:80";
$mostUsingPasswd = [
    "password",
    "123456",
];

// create curl resource 
$ch = curl_init(); 

// set url 
curl_setopt($ch, CURLOPT_URL, "http://". $ip ."/index.php?page=signin"); 

//return the transfer as a string 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

// $output contains the output string 
$output = curl_exec($ch);

var_dump($output);

// close curl resource to free up system resources 
curl_close($ch);