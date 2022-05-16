<?php

include("../connection.php");

$owner_id = $_GET['owner_id']; // get id through query string

$del = mysqli_query($connection,"Delete from owners where owner_id = '$owner_id'"); // delete query

if($del)
{
    mysqli_close($connection); // Close connection
    header("Location:owners.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>