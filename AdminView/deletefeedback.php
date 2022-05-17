<?php

include("../connection.php");

$feedback_id = $_GET['feedback_id']; // get id through query string

$del = mysqli_query($connection,"Delete from feedback where feedback_id = '$feedback_id'"); // delete query

if($del)
{
    mysqli_close($connection); // Close connection
    header("Location:feedback.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>