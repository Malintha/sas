<?php
// ==========================================
// Ideamart : Sample PHP SMS API
// ==========================================
// Author : Pasindu De Silva
// Licence : MIT License
// http://opensource.org/licenses/MIT
// ==========================================

ini_set('error_log', 'sms-app-error.log');
require_once 'lib/Log.php';
require_once 'lib/SMSReceiver.php';
require_once 'lib/SMSSender.php';
require_once 'connectdb.php'

// define('SERVER_URL', 'http://api.dialog.lk:8080/sms/send');	
// define('APP_ID', 'APP_015755');
// define('APP_PASSWORD', '8aa7ec636c0e6e8acdb91d05da00a747');

// $logger = new Logger();
echo 'test';

// try{

	// Creating a receiver and intialze it with the incomming data
	// $receiver = new SMSReceiver(file_get_contents('php://input'));
	
	// //Creating a sender
	// $sender = new SMSSender( SERVER_URL, APP_ID, APP_PASSWORD);
	
	echo 'test2';

	// $message = $receiver->getMessage(); // Get the message sent to the app
	// $address = $receiver->getAddress();	// Get the phone no from which the message was sent 

	// $logger->WriteLog($receiver->getAddress());

	// $sql = "INSERT INTO smsstore (name,phonenu,longitude,latitude) VALUES ('Ramindu','".$address."','89.3636','34.444')";

	// if ($conn->query($sql) === TRUE) {
	//     echo "New record created successfully";
	// } else {
	//     echo "Error: " . $sql . "<br>" . $conn->error;
	// }

	// if ($message=='broadcast') {

	// 	// Send a broadcast message to all the subcribed users
	// 	$response = $sender->broadcast("This is a broadcast message to all the subcribers of the application");
	
	// }else{

	// 	// Send a SMS to a particular user
	// 	$response=$sender->sms('This message is sent only to one user', $address);
	// }

// }catch(SMSServiceException $e){
// 	$logger->WriteLog($e->getErrorCode().' '.$e->getErrorMessage());
// }

?>