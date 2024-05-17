<?php
require_once '../model/model.php';  
require_once '../controller/course_controller.php';  
require_once '../controller/generate.php';  

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: sign_in.php");
    exit;
}

$db = new Database();

if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    $cart = $_SESSION['cart'];
    foreach ($cart as $Course_id) {
        $own_id = generateUUID();
     
        while ($db->uuidExists($own_id)) {
            $own_id = generateUUID();  
        }
        $data['Own_id'] = $own_id;
        $data['C_id'] = $Course_id;
        $data['L_id'] = $_SESSION['username'];
        add_mycourses($data, $db);  
    }

    $_SESSION['cart'] = []; 
    header("Location: my_courses.php");  
} else {
    echo 'No courses in cart';  
}
?>
