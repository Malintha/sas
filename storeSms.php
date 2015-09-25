<?php 

require_once 'connectdb.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\n";

$phone = $_GET['phone'];
$latitude = $_GET['lat'];
$longitude = $_GET['lon'];

echo $location;

$sql = "INSERT INTO smsstore (name,phonenu,longitude,latitude) VALUES ('Ramindu','".$phone."','".$longitude."','".$latitude."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>