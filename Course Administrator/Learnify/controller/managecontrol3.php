<?php
include '../model/dbconnection.php';
session_start();

if (!isset($_SESSION['username']) && !isset($_COOKIE['user_login']) && !isset($_COOKIE['userpassword'])) {
    header('Location: logout.php');
    exit();
}
 
    $mydb= new Model();
    $conobj= $mydb->OpenCon();
    $result=$mydb->fetchNotices($conobj,"tblnotice");

     function deleteNotice($conn, $noticeID) {
        $sql = "DELETE FROM tblnotice WHERE NoticeID='$noticeID'";
        return $conn->query($sql);
    }
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['delete_note'])) {
            $noticeID = $_POST['notice_id'];
            if (deleteNotice($conobj, $noticeID)) {
                echo "Notice deleted successfully";
            } else {
                echo "Error deleting notics";
            }
        }
    }
    ?>