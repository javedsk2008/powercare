<?php 

$conn = mysqli_connect("localhost", "root", "");
$result = mysqli_select_db($conn,'powercare');

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

?>