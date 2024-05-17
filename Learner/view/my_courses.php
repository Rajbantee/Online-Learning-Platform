<?php 
require_once '../model/model.php';

$db = new Database();

require_once '../controller/course_controller.php';
session_start();
if(!isset($_SESSION['username'])){
    header("Location: sign_in.php");
}
function print_courses() {
    global $db, $_SESSION; 

    
    $ownedCourses = $db->getMyCourses($_SESSION['username']);

    foreach ($ownedCourses as $courseDetails) {
        echo '<div class="course" id="course_' . htmlspecialchars($courseDetails['C_id']) . '">';
        echo '<img src="' . htmlspecialchars($courseDetails['Thumbnail']) . '" alt="' . htmlspecialchars($courseDetails['Name']) . '">';
        echo '<h2>' . htmlspecialchars($courseDetails['Name']) . '<span style="color: green; float: right;">Paid</span></h2>';
        echo '<p>' . htmlspecialchars($courseDetails['Description']) . '</p>';
        echo '<p>Price: $' . htmlspecialchars(number_format($courseDetails['Price'])) . '</p>';
        echo '<p>Admin: ' . htmlspecialchars($courseDetails['C_Admin']) . '</p>';
        echo '</div>';
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <style>
        .course {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
        }
        .course img {
            max-width: 100%;
            height: auto;
        }
    </style>

</head>

<body>
    <h1>My Courses</h1>
    <a href="view_cart.php"><button>View Cart</button></a>
    <?php print_courses(); ?>

</body>
</html>
