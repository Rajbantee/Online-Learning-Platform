<?php
session_start();

if (!isset($_SESSION['username']) && !isset($_COOKIE['user_login']) && !isset($_COOKIE['userpassword'])) {
    header('Location: logout.php');
    exit();
}
$servername = "localhost"; 
$username = "root";
$password = ""; 
$database = "eduauth"; 
 
$conn = new mysqli($servername, $username, $password, $database);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$course = []; 
 
if ($_SERVER["REQUEST_METHOD"] == "GET") {
   
    if (isset($_GET['course_id'])) {
        $courseID = $_GET['course_id'];
 
        $sql = "SELECT * FROM tblstudent WHERE CourseID='$courseID'";
        $result = $conn->query($sql);
 
        if ($result->num_rows > 0) {
            $course = $result->fetch_assoc();
        } else {
            echo "Course not found";
            exit;
        }
    } else {
        echo "Course ID not provided";
        exit;
    }
}
 
function updateCourse($conn, $courseID, $courseName, $category, $coursePrice, $courseDetails) {
    $sql = "UPDATE tblstudent SET CourseName='$courseName', Category='$category', Price='$coursePrice', CourseDetails='$courseDetails' WHERE CourseID='$courseID'";
    return $conn->query($sql);
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $courseID = $_POST['course_id'];
        $courseName = $_POST['uname'];
        $category = $_POST['stuclass'];
        $coursePrice = $_POST['connum'];
        $courseDetails = $_POST['address'];
 
        if (updateCourse($conn, $courseID, $courseName, $category, $coursePrice, $courseDetails)) {
            echo "Course updated successfully";
            header("Location: manage-students.php");
            exit;
        } else {
            echo "Error updating course";
        }
    }
}
?>