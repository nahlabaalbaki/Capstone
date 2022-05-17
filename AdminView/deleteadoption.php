<?php

include("../connection.php");

$adoption_id = $_GET['adoption_id']; // get id through query string

$del = mysqli_query($connection,"Delete from adoption where adoption_id = '$adoption_id'"); // delete query

if($del)
{
    mysqli_close($connection); // Close connection
    header("Location:adoption.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>