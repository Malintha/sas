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



echo 'test2';

?>