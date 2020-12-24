<?php
//MySQL Database Connect include 'datalogin.php';
include 'dblogin.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
$conn->close();
?>
