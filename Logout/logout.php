<?php
include("../connection.php");

session_destroy();
header("Location:../LoginPage/login.php");

?>