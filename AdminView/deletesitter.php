<?php

include("../connection.php");

$sitter_id = $_GET['sitter_id']; // get id through query string

$del = mysqli_query($connection,"Delete from chosensitter where sitter_id = '$sitter_id'"); // delete query

if($del)
{
    mysqli_close($connection); // Close connection
    header("Location:chosenSitters.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>