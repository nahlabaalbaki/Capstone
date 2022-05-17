<?php

include("../connection.php");

if(isset($_POST['submit'])){

	if(isset($_POST["date"]) && $_POST["date"] != ""){
		$date =  $_POST["date"];
	
	}else{
		die("No access");

	}
	if(isset($_POST["time"]) && $_POST["time"] != ""){
		$time =  $_POST["time"];
	
	}else{
		die("No access");

	}

	

	if(isset($_POST["available"]) && $_POST["available"] != ""){
		$available = $_POST["available"];
	
	}else{
		die("No access");
	}

	header("Location:../AdminView/appointment.php");



	$mysql = $connection->prepare("INSERT into appointment(date,time,available) VALUES (?,?,?)");
    $mysql->bind_param("ssi",$date,$time,$available);
    $mysql->execute();
	
	$mysql->close();
	$connection->close();




}
?>