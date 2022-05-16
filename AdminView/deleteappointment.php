<?php

include("../connection.php");

$appointment_id = $_GET['appointment_id']; // get id through query string

$del = mysqli_query($connection,"Delete from appointment where appointment_id = '$appointment_id'"); // delete query

if($del)
{
    mysqli_close($connection); // Close connection
    header("Location:appointment.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>