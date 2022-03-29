<?php

$server = "localhost:3306"; //could be 3306 depending on the port you use
$username = "root";
$password = "";
$dbname = "petshopdb";

$connection = new mysqli($server, $username, $password, $dbname);

if($connection->connect_error){
	die("Failed");
}
else{
	// echo "Connected";
}

?>