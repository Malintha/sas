<?php 
	
	require_once 'connectdb.php';
		
	//$msg = $_GET['msg'];
	$sql = "SELECT * FROM smsstore1 ORDER BY id DESC LIMIT 1";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["id"]."#".$row["name"]."#".$row["phonenu"]."#".$row["lon"]."#".$row["lat"]."#".$row["type"];
    }
} else {
    echo "0 results";
}


?>