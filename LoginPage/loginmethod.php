<?php

include("../connection.php");

if(isset($_POST['login'])){

$uname = mysqli_real_escape_string($connection,$_POST['username']);
$password = mysqli_real_escape_string($connection,$_POST['password']);

if ($uname != "" && $password != ""){

    $sql_query = "select count(*) as cntUser from owners where username='".$uname."' and password='".$password."'";
    $result = mysqli_query($connection,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['username'] = $uname;
        header('Location: ../LandingPage/index.php');
    }else{
        echo "Invalid username and password";
    }

}

}
?>