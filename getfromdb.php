<?php 
	
	require_once 'connectdb.php';
		
	echo 'hello';
	//$msg = $_GET['msg'];
	$sql = "SELECT * FROM smsstore1 ORDER BY id DESC LIMIT 1";
	$retval = mysql_query( $sql, $conn );

	echo $retval;

	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Tutorial ID :{$row['id']}  <br> ".
         "Title: {$row['name']} <br> ".
         "Author: {$row['phonenu']} <br> ".
         "Submission Date : {$row['lon']} <br> ".
         "--------------------------------<br>";
} 

echo "Fetched data successfully\n";


?>