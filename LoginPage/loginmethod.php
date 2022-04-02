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

	while($row = $results->fetch_assoc()){

		$username_table = $row["username"];
		$password_table = $row["password"];


		$username_input = $_POST["username"];
		$password_input = hash("sha256", $_POST["pass"]);

		if($username_input==$username_table){

			if($password_input==$password_table){
			
				header("Location:../LandingPage/index.php");
			}
			else if($password_input!=$password_table && $password_input!=null){
				echo "Incorrect username or password. Please try again.";
			}
		}
	}		
}	
	