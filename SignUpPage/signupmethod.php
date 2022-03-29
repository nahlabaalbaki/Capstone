<?php

include("../connection.php");

echo $_POST["area_code"];

if(isset($_POST["first_name"]) && $_POST["first_name"] != ""){
	$firstname =  $_POST["first_name"];
	
}else{
	die("No access");

}
if(isset($_POST["last_name"]) && $_POST["last_name"] != ""){
	$lastname =  $_POST["last_name"];
	
}else{
	die("No access");

}
/*
if(isset($_POST["username"]) && $_POST["username"] != ""){
	$username = $_POST["username"];
}else{
	die("No access");
}
*/
if(isset($_POST["password"]) && $_POST["password"] != ""){
	$password = hash("sha256", $_POST["password"]);
	
}else{
	die("No access");
}

if(isset($_POST["email"]) && $_POST["email"] != ""){
	$email = $_POST["email"];

}else{
	die("No access");
}
/*
if(isset($_POST["phone_nb"]) && isset($_POST["area_code"]) && $_POST["phone_nb"] !="" && $_POST["area_code"] !=""){
	$phone_nb = $_POST["area_code"]." ".$_POST["phone_nb"];
}else{
	die("No access");
}


if(isset($_POST["address"]) && $_POST["address"] != ""){
	$address= $_POST["address"];
	
}else{
	die("No access");
}

/*
if(isset($_POST["birth_date"]) && $_POST["birth_date"] != ""){
	$DOB = $_POST["birth_date"];
}else{
	die("No access");
} **/



	//$mysql = $connection->prepare("INSERT INTO owners(first_name,last_name,username,password,phone_nb,email,address) VALUES (?,?,?,?,?,?,?,?,?)");
	$mysql = $connection->prepare("INSERT INTO owners(first_name,last_name,password,email) VALUES (?,?,?,?)");
    $mysql->bind_param("ssssiss",$firstname, $lastname,$username,$password,$email);
    $mysql->execute();




$mysql->close();
$connection->close();
header("Location:../LandingPage/index.php");


?>