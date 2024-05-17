<?php
session_start();
require('../model/User.php');

// Check if student_id is received via POST
if (isset($_POST['student_id'])) {
    $studentId = $_POST['student_id'];

    if(!empty($studentId)) {
        $_SESSION['studentInfo'] searchStudent($studentId);
        header("Location: ../view/studentView.php");
    }
}
?>
