<?php
$servername = "127.10.2.130";
$username = "adminaUhCbR5";
$password = "QNY_rBRexWvR";
$dbname = "sas";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>