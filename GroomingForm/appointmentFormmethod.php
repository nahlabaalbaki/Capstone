<?php

include '../connection2.php';

if (isset($_POST['submit'])) {

	if (isset($_POST["date"]) && $_POST["date"] != "") {
		$date =  $_POST["date"];
	} else {
		die("No Date");
	}
	if (isset($_POST["time"]) && $_POST["time"] != "") {
		$time =  $_POST["time"];
	} else {
		die("No Time");
	}

	if (isset($_POST["type"]) && $_POST["type"] != "") {

		if ($_POST["type"] == "nails") {
			$type = "Trim the nails";
		} elseif ($_POST["type"] == "hair") {
			$type = "Hair Cut";
		} elseif ($_POST["type"] == "bath") {
			$type = "Take a bath";
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

	//Change the owner_id3 in the query below from 10 to a dynamic id based on the current user logged in. y3ne badle l 10 be a variable
	$mysql = "Update appointment set available=0,owner_id3=10,comments='$comments',type='$type' where date='$date' and time='$time'";

	$con = mysqli_connect("localhost:3310", "root", "", "petshopdb");
	if (mysqli_query($con, $mysql)) {
		echo '<script type="text/javascript">

        window.onload = function () { alert("Data Updated successfully"); }

		</script>';
	} else {
		echo '<script type="text/javascript">

        window.onload = function () { alert("Data Update Failed"); }

		</script>';
	}


	//header("Location:appointment.php");


}
