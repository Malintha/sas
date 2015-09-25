<?php 
	
	require_once 'connectdb.php';
		
	echo 'hello';
	//$msg = $_GET['msg'];
	$sql = "SELECT * FROM smsstore1 ORDER BY id DESC LIMIT 1";
	$retval = mysql_query( $sql, $conn );

	// echo $retval;
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_assoc($retval))
{
    echo "Tutorial ID :{$row['id']}  <br> ".
         "Title: {$row['name']} <br> ".
         "Author: {$row['lon']} <br> ".
         "Submission Date : {$row['lat']} <br> ".
         "--------------------------------<br>";
} 

echo "Fetched data successfully\n";


?>