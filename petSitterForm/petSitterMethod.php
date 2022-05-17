<?php

include("../connection.php");

if(isset($_POST['submit'])){

	if(isset($_POST["name"]) && $_POST["name"] != ""){
		$name =  $_POST["name"];
	
	}else{
		die("No access");

	}
	if(isset($_POST["date"]) && $_POST["date"] != ""){
		$date =  $_POST["date"];
	
	}else{
		die("No access");

	}
	if(isset($_POST["duration"]) && $_POST["duration"] != ""){
		$duration =  $_POST["duration"];
	
	}else{
		die("No access");

	}
	


	header("Location:../LandingPage/index.php");

	$query = "SELECT * FROM owners where username='".$_SESSION["username"]."'";
	$stmt = $connection->prepare($query);
	$stmt->execute();
	$result = $stmt->get_result();
	$user = $result->fetch_assoc();


	$mysql = $connection->prepare("INSERT into chosensitter(name,duration,date,owner_id6) VALUES (?,?,?,?)");
    $mysql->bind_param("sssi",$name,$duration,$date,$user["owner_id"]);
    $mysql->execute();
	
	$mysql->close();
	$connection->close();




}
?>