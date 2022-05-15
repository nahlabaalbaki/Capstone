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

	$query = "SELECT * FROM owners where username='".$_SESSION["username"]."'";
	$stmt = $connection->prepare($query);
	$stmt->execute();
	$result = $stmt->get_result();
	$user = $result->fetch_assoc();


	$mysql = $connection->prepare("INSERT into adoption(experience,financial,household,work,document,owner_id4) VALUES (?,?,?,?,?,?)");
    $mysql->bind_param("sssssi",$experience,$financial,$household,$work,$document,$user["owner_id"]);
    $mysql->execute();
	
	$mysql->close();
	$connection->close();




}
?>