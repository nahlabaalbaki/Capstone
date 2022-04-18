<?php

include("../connection.php");

if(isset($_POST['submit'])){

	if(isset($_POST["experience"]) && $_POST["experience"] != ""){
		$experience =  $_POST["experience"];
	
	}else{
		die("No access");

	}
	if(isset($_POST["financial"]) && $_POST["financial"] != ""){
		$financial =  $_POST["financial"];
	
	}else{
		die("No access");

	}

	if(isset($_POST["household"]) && $_POST["household"] != ""){
		$household =  $_POST["household"];
	}else{
		die("No access");
	}

	if(isset($_POST["work"]) && $_POST["work"] != ""){
		$work = $_POST["work"];
	
	}else{
		die("No access");
	}
	if(isset($_FILES["file"]["name"]) && $_FILES["file"]["name"] != ""){
		$document =  $_FILES["file"]["name"];
		$tname = $_FILES["file"]["tmp_name"];
	}else{
		die("No access");

	}
	$uploads_dir = '../Documents';
    move_uploaded_file($tname, $uploads_dir.'/'.$document);
	header("Location:../LandingPage/index.php");

	$mysql = "INSERT into adoption(experience,financial,household,work,document) VALUES ('$experience','$financial','$household','$work','$document')";
    
	if(mysqli_query($connection,$mysql)){
 
    echo "Document Sucessfully uploaded";
    }
    else{
        echo "Error";
    }




}
?>