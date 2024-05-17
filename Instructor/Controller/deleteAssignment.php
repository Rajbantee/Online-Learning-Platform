<?php
include('../model/Connect.php');
$conn = connect();

if (isset($_GET['id'])) {
    $assignmentId = $_GET['id'];

    $sql = "DELETE FROM assignment WHERE id = '$assignmentId'";

    if (mysqli_query($conn, $sql)) {
        header('Location: ../Controller/assignmentViewAction.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Assignment ID is missing.";
}
?>
