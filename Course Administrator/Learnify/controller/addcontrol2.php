<?php

include '../model/dbconnection.php';
session_start();

if (!isset($_SESSION['username']) && !isset($_COOKIE['user_login']) && !isset($_COOKIE['userpassword'])) {
    header('Location: logout.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $courseName = $_POST['uname'];
      $category = $_POST['stuclass'];
      $courseID = $_POST['stuid'];
      $coursePrice = $_POST['connum'];
      $courseDetails = $_POST['address'];
  
      $mydb= new Model();
        $conobj= $mydb->OpenCon();
        $result=$mydb->addCourse($conobj,"tblstudent",$_REQUEST["uname"], $_REQUEST["stuclass"],
        $_REQUEST["stuid"],$_REQUEST["connum"],$_REQUEST["address"]);
  
      if ($result === TRUE) {
          header("Location: ../view/manage-students.php");
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
  
      $conn->close();
  }


?>
