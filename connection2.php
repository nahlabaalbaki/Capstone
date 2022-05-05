<?php
$host = 'localhost:3310';
$username = 'root';
$pass = '';
$db = 'petshopdb';

$db = new mysqli($host,$username,$pass,$db);

if ($db->connect_error) {
	 die("Connection Failed". $db->connect_error);
}
