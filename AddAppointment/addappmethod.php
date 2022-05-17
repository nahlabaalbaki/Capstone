<?php

include("../connection.php");

if(isset($_POST['submit'])){

	if(isset($_POST["name"]) && $_POST["name"] != ""){
		$name =  $_POST["name"];
	
	}else{
		die("No access");

	}
	if(isset($_POST["age"]) && $_POST["age"] != ""){
		$age =  $_POST["age"];
	
	}else{
		die("No access");

	}

	if(isset($_POST["experience"]) && $_POST["experience"] != ""){
		$experience =  $_POST["experience"];
	}else{
		die("No access");
	}

	if(isset($_POST["availability"]) && $_POST["availability"] != ""){
		$availability = $_POST["availability"];
	
	}else{
		die("No access");
	}

	if(isset($_POST["phone_number"]) && $_POST["phone_number"] != ""){
		$phone_number = $_POST["phone_number"];
	
	}else{
		die("No access");
	}

	echo "hey1";

	if(isset($_FILES["file"]["name"]) && $_FILES["file"]["name"] != ""){
		$image =  $_FILES["file"]["name"];
		$tname = $_FILES["file"]["tmp_name"];
	}else{
		die("No access");

	}
	echo "hey2";
	$uploads_dir = '../Images';
    move_uploaded_file($tname, $uploads_dir.'/'.$image);
	header("Location:../AdminView/team.php");



	$mysql = $connection->prepare("INSERT into petsitters(name,age,experience,availability,phone_number,image) VALUES (?,?,?,?,?,?)");
    $mysql->bind_param("sissis",$name,$age,$experience,$availability,$phone_number,$image);
    $mysql->execute();
	
	$mysql->close();
	$connection->close();




}
?>