<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
//create connection
$conn = new mysqli($servername, $username, $password);
//check connection
if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>