<?php

include("../connection.php");

if(isset($_POST['submit'])){

	if(isset($_POST["name"]) && $_POST["name"] != ""){
		$name =  $_POST["name"];
	
	}else{
		die("No access");

	}
	if(isset($_POST["service"]) && $_POST["service"] != ""){
		$service =  $_POST["service"];
	
	}else{
		die("No access");

	}

	if(isset($_POST["email"]) && $_POST["email"] != ""){
		$email =  $_POST["email"];
	}else{
		die("No access");
	}

	if(isset($_POST["rate"]) && $_POST["rate"] != ""){
		$rate = $_POST["rate"];
	
	}else{
		die("No access");
	}
	if(isset($_POST["message"]) && $_POST["message"] != ""){
		$message= $_POST["message"];
	
	}else{
		die("No access");
	}

	$query = "SELECT * FROM owners where username='".$_SESSION["username"]."'";
	$stmt = $connection->prepare($query);
	$stmt->execute();
	$result = $stmt->get_result();
	$user = $result->fetch_assoc();

	$mysql = $connection->prepare("INSERT INTO feedback(name,email,service,message,rate, owner_id) VALUES (?,?,?,?,?,?)");
    $mysql->bind_param("ssssii",$name,$email,$service,$message,$rate,$user["owner_id"]);
    $mysql->execute();




$mysql->close();
$connection->close();
header("Location:../LandingPage/index.php");
}
?>