<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: sign_in.php");
}

if (isset($_POST['C_id'])) {
    $courseId = $_POST['C_id'];

    if (($key = array_search($courseId, $_SESSION['cart'])) !== false) {
        unset($_SESSION['cart'][$key]);
        echo 'Course removed from cart';
    } else {
        echo 'Course not found in cart';
    }
} else {
    echo 'No courseId provided';
}
header('Location: view_cart.php');
?>