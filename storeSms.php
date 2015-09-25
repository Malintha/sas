<?php 

require_once 'connectdb.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\n";

$location = $_GET['name'];

echo $location;

$sql = "INSERT INTO smsstore (name,phonenu,longitude,latitude) VALUES ('Ramindu','".$location."','89.3636','34.444')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>