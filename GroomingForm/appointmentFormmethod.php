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

	if(isset($_POST["type"]) && $_POST["type"] != ""){
		$type =  $_POST["type"];
	}else{
		die("No access");
	}

	if(isset($_POST["comments"]) && $_POST["comments"] != ""){
		$comments= $_POST["comments"];
	
	}else{
		die("No access");
	}


	$mysql = $connection->prepare("INSERT INTO appointment(date,time,type,comments) VALUES (?,?,?,?)");

	$mysql->bind_param("ssss",$date, $time, $type, $comments);
    $mysql->execute();




$mysql->close();
$connection->close();
header("Location:../LandingPage/index.php");
}
?>