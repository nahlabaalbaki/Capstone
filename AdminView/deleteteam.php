<?php

include("../connection.php");

$petsitters_id = $_GET['petsitters_id']; // get id through query string

$del = mysqli_query($connection,"Delete from petsitters where petsitters_id = '$petsitters_id'"); // delete query

if($del)
{
    mysqli_close($connection); // Close connection
    header("Location:team.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>