<?php

include("../connection.php");

$boarding_id = $_GET['boarding_id']; // get id through query string

$del = mysqli_query($connection,"Delete from boarding where boarding_id = '$boarding_id'"); // delete query

if($del)
{
    mysqli_close($connection); // Close connection
    header("Location:boarding.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>