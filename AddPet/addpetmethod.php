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

	
	if(isset($_FILES["file"]["name"]) && $_FILES["file"]["name"] != ""){
        $image =  $_FILES["file"]["name"];
        $tname = $_FILES["file"]["tmp_name"];
    }else{
        die("No access");

    }
	echo "hey2";
	$uploads_dir = '../PetImages';
    move_uploaded_file($tname, $uploads_dir.'/'.$image);
	header("Location:../AdminView/team.php");


	$mysql = $connection->prepare("INSERT INTO petsitters(image,pet_type,pet_age) VALUES (?,?,?)");
    $mysql->bind_param("sss",$image,$pet_type,$pet_age);
    $mysql->execute();
 
$mysql->close();
$connection->close();


}
?>