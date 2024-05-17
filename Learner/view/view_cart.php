
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: sign_in.php");
    exit;
}
require_once '../controller/course_controller.php';

function print_cart() {
    if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
        echo '<p>Your cart is empty.</p>';
    } else {
        foreach ($_SESSION['cart'] as $courseId) {
            $course = getCoursesByIds($courseId);
            echo '<div class="course">';
            echo '<img src="' . htmlspecialchars($course['Thumbnail']) . '" alt="' . htmlspecialchars($course['Name']) . '">';
            echo '<h2>' . htmlspecialchars($course['Name']) . '</h2>';
            echo '<p>' . htmlspecialchars($course['Description']) . '</p>';
            echo '<p>Price: $' . htmlspecialchars($course['Price']) . '</p>';
            echo '<p>Admin: ' . htmlspecialchars($course['C_Admin']) . '</p>';
            echo '<form action="remove_from_cart.php" method="post">';
            echo '<input type="hidden" name="C_id" value="' . $course['C_id'] . '">';
            echo '<input type="submit" value="Remove from cart">';
            echo '</form>';
            echo '</div>';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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
    <h1>Your Cart</h1>
    <a href="available_courses.php"><button>Back to Courses</button></a>
    <?php print_cart(); ?>
    <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
        <form action="checkout.php" method="post">
            <input type="submit" value="Checkout">
        </form>
    <?php endif; ?>
</body>
</html>
