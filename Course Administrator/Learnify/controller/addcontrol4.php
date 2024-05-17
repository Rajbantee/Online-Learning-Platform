<?php
include '../model/dbconnection.php';
session_start();

if (!isset($_SESSION['username']) && !isset($_COOKIE['user_login']) && !isset($_COOKIE['userpassword'])) {
    header('Location: logout.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

     
       $uname=$_POST['uname'];
 $faculty=$_POST['faculty'];
 $department=$_POST['department'];
 $spl=$_POST['spl'];
 $stuid=$_POST['stuid'];

  
   
      $mydb= new Model();
      $conobj= $mydb->OpenCon();
      $result=$mydb->addInstructor($conobj,"facultys",$_REQUEST["uname"],$_REQUEST["faculty"],
      $_REQUEST["department"],$_REQUEST["spl"],$_REQUEST["stuid"]);
   
      if ($result === TRUE) {
          header("Location: ../view/manage-public-notice.php");
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
  
      // Close connection
      $conn->close();
  }


