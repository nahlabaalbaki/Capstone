<?php

include("../connection.php");

$image_id = $_GET['image_id']; // get id through query string

$del = mysqli_query($connection,"Delete from petimages where image_id = '$image_id'"); // delete query

if($del)
{
    mysqli_close($connection); // Close connection
    header("Location:pet.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>