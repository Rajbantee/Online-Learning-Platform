<?php

include '../model/dbconnection.php';
session_start();

if (!isset($_SESSION['username']) && !isset($_COOKIE['user_login']) && !isset($_COOKIE['userpassword'])) {
    header('Location: logout.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $cname=$_POST['cname'];
    $cid=$_POST['cid'];

    $mydb= new Model();
        $conobj= $mydb->OpenCon();
        $result=$mydb->createCategories($conobj,"tblclass",$_REQUEST["cname"],$_REQUEST["cid"]);

    if ($result === TRUE) {
        header("Location: manage-class.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
