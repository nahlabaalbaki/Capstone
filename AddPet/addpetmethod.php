<?php

include("../connection.php");

if(isset($_POST['submit'])){

	if(isset($_POST["pet_type"]) && $_POST["pet_type"] != ""){
		$pet_type =  $_POST["pet_type"];
	
	}else{
		die("No access");

	}
	if(isset($_POST["pet_age"]) && $_POST["pet_age"] != ""){
		$pet_age =  $_POST["pet_age"];
	
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
	$uploads_dir = '../PetImages';
    move_uploaded_file($tname, $uploads_dir.'/'.$image);
	header("Location:../AdminView/pet.php");



	$mysql = $connection->prepare("INSERT into petimages(image,pet_age,pet_type) VALUES (?,?,?)");
    $mysql->bind_param("sss",$image,$pet_age,$pet_type);
    $mysql->execute();
	
	$mysql->close();
	$connection->close();




}
?>