<?php
include('../model/Connect.php');
$conn = connect();

if (isset($_GET['id'])) {
    $evaluationId = $_GET['id'];

    $sql = "DELETE FROM course WHERE id = '$evaluationId'";

    if (mysqli_query($conn, $sql)) {
        header('Location: ../Controller/courseEvaluationAction.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Course Evaluation ID is missing.";
}
?>
