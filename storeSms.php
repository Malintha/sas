<?php 

require_once 'connectdb.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\n";

$name = $_GET['name'];
$latitude = $_GET['lat'];
$longitude = $_GET['lon'];

echo $location;

$sql = "INSERT INTO smsstore (name,phonenu,longitude,latitude) VALUES ('Ramindu','".$location."','".$longitude."','".$latitude."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>