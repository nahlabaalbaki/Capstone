<?php

include("../connection.php");

// $owner_id= $_SESSION['owner_id'];

if(isset($_POST['submit'])){

	if(isset($_POST["name"]) && $_POST["name"] != ""){
		$name =  $_POST["name"];
	
	}else{
		die("No access");

	}
	if(isset($_POST["email"]) && $_POST["email"] != ""){
		$email =  $_POST["email"];
	
	}else{
		die("No access");

	}

	if(isset($_POST["service"]) && $_POST["service"] != ""){
		$service =  $_POST["service"];
	}else{
		die("No access");
	}

	if(isset($_POST["rate"]) && $_POST["rate"] != ""){
		$rate =  $_POST["rate"];
	}else{
		die("No access");
	}

	if(isset($_POST["message"]) && $_POST["message"] != ""){
		$message = $_POST["message"];
	
	}else{
		die("No access");
	}


    $query = $connection->prepare("INSERT INTO feedback(name,email,service,message,rate) VALUES (?,?,?,?,?)");
    $query->bind_param("ssssi",$name,$email,$service,$message,$rate);
    $query->execute();
    
	$query->close();
$connection->close();

}
?>