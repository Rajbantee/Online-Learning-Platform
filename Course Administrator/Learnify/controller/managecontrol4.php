<?php
include '../model/dbconnection.php';
session_start();

if (!isset($_SESSION['username']) && !isset($_COOKIE['user_login']) && !isset($_COOKIE['userpassword'])) {
    header('Location: logout.php');
    exit();

}
    $mydb= new Model();
    $conobj= $mydb->OpenCon();
    $result=$mydb->fetchInstructors($conobj,"facultys");

     function deleteCourse($conn, $instructorID) {
        $sql = "DELETE FROM facultys WHERE id='$instructorID'";
        return $conn->query($sql);
    }
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['delete_instructor'])) {
            $instructorID = $_POST['instructor_id'];
            if (deleteCourse($conobj, $instructorID)) {
                echo "Course deleted successfully";
            } else {
                echo "Error deleting course";
            }
        }
    }
    ?>