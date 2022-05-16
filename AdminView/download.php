<?php

include("../connection.php");

$sql1 = "SELECT * FROM adoption";
$result = mysqli_query($connection, $sql1);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Downloads files
if (isset($_GET['adoption_id'])) {
    $id = $_GET['adoption_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM adoption WHERE adoption_id=$id";
    $result1 = mysqli_query($connection, $sql);

    $file = mysqli_fetch_assoc($result1);
    $filepath = 'Documents/' . $file['document'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('Documents/' . $file['document']));
        readfile('Documents/' . $file['document']);

        //Now update downloads count
        $newCount = $file['document'] + 1;
        $updateQuery = "UPDATE adoption SET document=$newCount WHERE adoption_id=$id";
        mysqli_query($connection, $updateQuery);
        header("Location:adoption.php");
        exit;
    }

}
?>