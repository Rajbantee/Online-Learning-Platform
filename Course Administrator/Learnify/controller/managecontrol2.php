<?php
include '../model/dbconnection.php';
session_start();

if (!isset($_SESSION['username']) && !isset($_COOKIE['user_login']) && !isset($_COOKIE['userpassword'])) {
    header('Location: logout.php');
    exit();
}

 
    $mydb= new Model();
    $conobj= $mydb->OpenCon();
    $result=$mydb->fetchCourses($conobj,"tblstudent");

        function deleteCourse($conn, $courseID) {
        $sql = "DELETE FROM tblstudent WHERE CourseID='$courseID'";
        return $conn->query($sql);
    }
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['delete_course'])) {
            $courseID = $_POST['course_id'];
            if (deleteCourse($conobj, $courseID)) {
                echo "Course deleted successfully";
            } else {
                echo "Error deleting course";
            }
        }
    }
    ?>