<?php

include ("../connection.php");


if (isset($_POST['submit'])) {

	if (isset($_POST["dateFrom"]) && $_POST["dateFrom"] != "") {
		$dateFrom =  $_POST["dateFrom"];
	} else {
		die("No Date");
	}
	if (isset($_POST["dateTo"]) && $_POST["dateTo"] != "") {
		$dateTo =  $_POST["dateTo"];
	} else {
		die("No Date");
	}

	if (isset($_POST["type"]) && $_POST["type"] != "") {

		if ($_POST["type"] == "multi") {
			$type = "Multiple Room";
		} elseif ($_POST["type"] == "single") {
			$type = "Single Room";
		} else {
			$type = "Not Selected";
		}
	} else {
		die("No Type");
	}

	if (isset($_POST["inputComments"]) && $_POST["inputComments"] != "") {
		$comments = $_POST["inputComments"];
	} else {
		die("No Comment");
	}

	header("Location:../LandingPage/index.php");

	$query = "SELECT * FROM owners where username='".$_SESSION["username"]."'";
	$stmt = $connection->prepare($query);
	$stmt->execute();
	$result = $stmt->get_result();
	$user = $result->fetch_assoc();


	$mysql = $connection->prepare("INSERT into calendar(type,dateFrom,dateTo,comments,owner_id5 VALUES (?,?,?,?,?)");
    $mysql->bind_param("ssssi",$type,$dateFrom,$dateTo,$comments,$user["owner_id"]);
    $mysql->execute();
	
	$mysql->close();
	$connection->close();

}
