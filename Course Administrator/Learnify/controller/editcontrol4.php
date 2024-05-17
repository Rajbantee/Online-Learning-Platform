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
 
$instructor = [];
 
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    if (isset($_GET['instructor_id'])) {
        $instructorID = $_GET['instructor_id'];
 
        $sql = "SELECT * FROM facultys WHERE id='$instructorID'";
        $result = $conn->query($sql);
 
        if ($result->num_rows > 0) {
            $instructor = $result->fetch_assoc();
        } else {
            echo "Instructor not found";
            exit;
        }
    } else {
        echo "Instructor ID not provided";
        exit;
    }
}
 
function updateInstructor($conn, $instructorID, $instructorName, $faculty, $department, $spl,$email) {
    $sql = "UPDATE facultys SET email='$email', name='$instructorName', faculty='$faculty', department='$department' , specialization='$spl' WHERE id='$instructorID'";
    return $conn->query($sql);
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $instructorID = $_POST['instructor_id'];
        $instructorName = $_POST['uname'];
        $faculty = $_POST['faculty'];
        $department = $_POST['department'];
        $spl = $_POST['spl'];
        $email = $_POST['stuid'];
 
        if (updateInstructor($conn, $instructorID, $instructorName, $faculty, $department, $spl, $email)) {
            echo "Course updated successfully";
            header("Location: ../view/manage-public-notice.php");
            exit;
        } else {
            echo "Error updating course";
        }
    }
}
?>