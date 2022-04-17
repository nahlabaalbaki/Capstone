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


	$mysql = $connection->prepare("INSERT INTO adoption(experience,financial,household,work) VALUES (?,?,?,?)");
    $mysql->bind_param("ssss",$experience,$financial,$household,$work);
    $mysql->execute();




$mysql->close();
$connection->close();
header("Location:../LandingPage/index.php");
}
?>