<?php

require_once 'lib/SmsReceiver.php';
require_once 'lib/SmsSender.php';
require_once 'connectdb.php';

echo 'test1';


    $receiver = new SmsReceiver(); 

    $content = $receiver->getMessage(); // get the message content
    $address = $receiver->getAddress(); // get the sender's address
    $requestId = $receiver->getRequestID(); // get the request ID
    $applicationId = $receiver->getApplicationId(); // get application ID
    $encoding = $receiver->getEncoding(); // get the encoding value
    $version = $receiver->getVersion(); // get the version

	$sql = "INSERT INTO smsstore (name,phonenu,longitude,latitude) VALUES ('Ramindu','".$address."','".$content."','".$content."')";	
	if ($conn->query($sql) === TRUE) {
    echo "success";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	if($content=="Sn test"){
	$sender = new SMSSender( SERVER_URL, APP_ID,  APP_PASSWORD); 
	$response=$sender->sms('This message is sent only to one user', $address);
}

	echo 'test2';

?>