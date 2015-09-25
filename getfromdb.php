<?php 
	
	require_once 'connectdb.php';
		
	echo 'hello';
	//$msg = $_GET['msg'];
	$sql = "SELECT * FROM smsstore1 ORDER BY id DESC LIMIT 1";
	$retval = mysql_query( $sql, $conn );

	// echo $retval;

	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{

    echo $row['name']; 
} 

// echo "Fetched data successfully\n";


?>