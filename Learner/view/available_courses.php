<?php 
require_once '../controller/course_controller.php';
session_start();


if (!isset($_SESSION['username'])) {
    header("Location: sign_in.php");
    exit;
}

function print_courses() {
    global $db, $_SESSION; 

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    $courses = availableCourses();
    foreach ($courses as $course) {
        $alreadyInCart = in_array($course['C_id'], $_SESSION['cart']);
        $alreadyOwned = $db->userOwnsCourse($_SESSION['username'], $course['C_id']);

        echo '<div class="course" id="course_' . htmlspecialchars($course['C_id']) . '">';
        echo '<img src="' . htmlspecialchars($course['Thumbnail']) . '" alt="' . htmlspecialchars($course['Name']) . '">';
        echo '<h2>' . htmlspecialchars($course['Name']) . '</h2>';
        echo '<p>' . htmlspecialchars($course['Description']) . '</p>';
        echo '<p>Price: $' . htmlspecialchars(number_format($course['Price'])) . '</p>';
        echo '<p>Admin: ' . htmlspecialchars($course['C_Admin']) . '</p>';
        if ($alreadyInCart || $alreadyOwned) {
            echo '<button disabled>Already in Cart/Owned</button>';
        } else {
            echo '<button onclick="addToCart(\'' . htmlspecialchars($course['C_id']) . '\', this)">Add to Cart</button>';
        }
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
    <h1>Available Courses</h1>
    <a href="view_cart.php"><button>View Cart</button></a>
    <?php print_courses(); ?>
    <script>
    function addToCart(courseId, button) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "add_to_cart.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (this.readyState === XMLHttpRequest.DONE && this.status == 200) {
              
                var courseElement = document.getElementById('course_' + courseId);
                if (courseElement) {
                    courseElement.remove();
                }

            
                console.log('Course added to cart: ' + courseId);
            }
        }
        xhr.send("courseId=" + encodeURIComponent(courseId));
    }
    </script>
</body>
</html>
