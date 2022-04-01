<?php

include("../connection.php");


if(isset($_POST['submit'])){


	if(isset($_POST["email"]) && $_POST["email"] != " "){
			$email = $_POST["email"];
		}
		
		else{
			echo ("No access");
		}

		
	
    $query = "SELECT email and password FROM owners";
    $stmt = $connection->prepare($query);
	$stmt->execute();
	$results = $stmt->get_result();

	while($row = $results->fetch_assoc()){

		$email_table = $row["email"];
		$password_table = $row["password"];


		$email_input = $_POST["email"];
		$password_input = hash("sha256", $_POST["password"]);

		if($email_input==$email_table){

			if($password_input==$password_table){
			
					header("Location:../LandingPage/index.php");
			}
			else if($password_input!=$password_table && $password_input!=null){
				echo "Incorrect email or password. Please try again.";
			}
		}
	}		
}	
	

?>