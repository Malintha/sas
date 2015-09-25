<?php 
	
	require_once 'connectdb.php';
		
	echo 'hello';
	//$msg = $_GET['msg'];
	$sql = "SELECT * FROM smsstore1";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["phonenu"]. "<br>";
    }
} else {
    echo "0 results";
}


?>