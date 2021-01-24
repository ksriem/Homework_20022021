<?php 
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "myDB";


//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if($conn -> connect_error){
	die ("Connection failed: " . $conn -> connect_error);
}

//sql to create table
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'John@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'Julie@example.com')";

if ($conn -> multi_query ($sql) === TRUE) {
	echo "New record created successsfully";
} else {
	echo "Error : " . $sql . "<br>" . $conn -> error;
}

$conn -> close();
?>