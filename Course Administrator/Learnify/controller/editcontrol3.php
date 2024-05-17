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
 
$notice = []; 
 
if ($_SERVER["REQUEST_METHOD"] == "GET") {
   
    if (isset($_GET['notice_id'])) {
        $noticeID = $_GET['notice_id'];
 
       
        $sql = "SELECT * FROM tblnotice WHERE NoticeID='$noticeID'";
        $result = $conn->query($sql);
 
        if ($result->num_rows > 0) {
            $notice = $result->fetch_assoc();
        } else {
            echo "Notice not found";
            exit;
        }
    } else {
        echo "Notice ID not provided";
        exit;
    }
}
 
function updateNotice($conn, $noticeID, $noticeTitle, $noticeFor, $noticeMessage) {
    $sql = "UPDATE tblnotice SET NoticeTitle='$noticeTitle', NoticeFor='$noticeFor', NoticeMessage='$noticeMessage' WHERE NoticeID='$noticeID'";
    return $conn->query($sql);
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $noticeID = $_POST['notice_id'];
        $noticeTitle = $_POST['nottitle'];
        $noticeFor = $_POST['classid'];
        $noticeMessage = $_POST['notmsg'];
     
 
        if (updateNotice($conn,  $noticeID, $noticeTitle, $noticeFor, $noticeMessage)) {
            echo "Notice updated successfully";
            header("Location: manage-notice.php");
            exit;
        } else {
            echo "Error updating notice";
        }
    }
}
?>