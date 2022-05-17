<?php

include("../connection.php");

if(isset($_POST['submit'])){

	if(isset($_POST["name"]) && $_POST["name"] != ""){
		$sitter =  $_POST["name"];
	
	}else{
		die("No access");

	}


	header("Location:../LandingPage/index.php");

	$query = "SELECT * FROM owners where username='".$_SESSION["username"]."'";
	$stmt = $connection->prepare($query);
	$stmt->execute();
	$result = $stmt->get_result();
	$user = $result->fetch_assoc();


	$mysql = $connection->prepare("INSERT into chosenSitter(sitter,owner_id4) VALUES (?,?)");
    $mysql->bind_param("si",$sitter,$user["owner_id"]);
    $mysql->execute();
	
	$mysql->close();
	$connection->close();




}
?>