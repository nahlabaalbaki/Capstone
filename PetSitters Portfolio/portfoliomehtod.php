<?php
// include("../connection.php");

// $id=$_GET['petsitters_id'];

// $count="SELECT *  FROM student where id=1";

// if($stmt = $connection->prepare($count)){
//     $stmt->bind_param('i',$id);
//     $stmt->execute();
  
//    $result = $stmt->get_result();
//    echo "No of records : ".$result->num_rows."<br>";
   $row=$result->fetch_object();


// $query="select * from petsitters limit 1"; // Fetch all the data from the table customers
// $result=mysqli_query($connection,$query);
// $singleRow = mysqli_fetch_row($result);


?>
