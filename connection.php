<?php
session_start();
//username:admin pass:1234
//username:nahla pass:0000
$server = "localhost:3310"; //could be 3306 depending on the port you use
$username = "root";
$password = "";
$dbname = "petshopdb";

$connection = new mysqli($server, $username, $password, $dbname);

if ($connection->connect_error) {
	die("Connection Failed". $connection->connect_error);
}