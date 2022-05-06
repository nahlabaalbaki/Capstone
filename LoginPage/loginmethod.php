<?php

include("../connection.php");


if(isset($_POST["login"])){


	if(isset($_POST["username"]) && $_POST["username"] != " "){
			$username = $_POST["username"];
		}
		
		else{
			echo ("No Access");
		}

		
	
    $query = "SELECT username, password FROM owners";
    $stmt = $connection->prepare($query);
	$stmt->execute();
	$results = $stmt->get_result();
	// $owner_id =$_GET['owner_id'];
	while($row = $results->fetch_assoc()){

		$username_table = $row["username"];
		$password_table = $row["password"];


		$username_input = $_POST["username"];
		$password_input = hash("sha256", $_POST["pass"]);

		// if($username_input == "RN" && $password_input == "1234"){
		// 	header("Location:../AdminView/index.php");
		// }

		if($username_input==$username_table){
				
			if($password_input==$password_table){
				header("Location:../LandingPage/index.php");
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = $username_table;
				// $_SESSION['owner_id'] = $owner_id;
			}
			else if($password_input!=$password_table && $password_input!=null){
				die("Incorrect username or password. Please try again.");
				
			}
		}
	
	}		
}	
	