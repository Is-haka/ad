<?php
    $db = mysqli_connect("localhost", "root", "", "islamedu");
    if($db == TRUE){
        echo "Connected successfully";
    }
    else{
        echo "Failed to connect to the database";
    }
$api_key='f1866a0ab57e8609';
$secret_key = 'MmE3MjlmZjQ2MmFjNDViZmZjMzMzZDM2MTg5NWE2ODEwYjkzMDk1YWNhMTE0MjExYWJlOTA1YmYwNjIxOTEwMQ==';

    $collect = "SELECT * FROM users";
    $check = mysqli_query($db, $collect);

$postData = array(
    'source_addr' => 'INFO',
    'encoding'=>0,
    'schedule_time' => '',
    'message' => 'Hello There we are glad you joined our company',
    'recipients' => [array('recipient_id' => '1','dest_addr'=>'255758315305')]);

$Url ='https://apisms.beem.africa/v1/send';

$ch = curl_init($Url);
error_reporting(E_ALL);
ini_set('display_errors', 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => array(
        'Authorization:Basic ' . base64_encode("$api_key:$secret_key"),
        'Content-Type: application/json'
    ),
    CURLOPT_POSTFIELDS => json_encode($postData)
));

$response = curl_exec($ch);

if($response === FALSE){
        echo $response;

    die(curl_error($ch));
}
else{
    echo "Message sent successfully";
}
// var_dump($response);