<?php 
	
	require_once 'connectdb.php';
	
	//$msg = $_GET['msg'];
	$sql = "SELECT * FROM smsstore1 ORDER BY id DESC LIMIT 1;"
	$result = $conn->query($sql);
	echo $result;
	echo 'hello';

?>