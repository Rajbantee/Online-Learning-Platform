<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: sign_in.php");
}

error_reporting(E_ALL);
ini_set('display_errors', 1);


header('Content-Type: application/json');

$response = [];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_POST['courseId'])) {
    $courseId = $_POST['courseId'];

    if (!in_array($courseId, $_SESSION['cart'])) {
        array_push($_SESSION['cart'], $courseId);
        $response['status'] = 'success';
        $response['message'] = 'Course added to cart';
    } else {
        $response['status'] = 'info';
        $response['message'] = 'Course already in cart';
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'No courseId provided';
}

echo json_encode($response);
?>









