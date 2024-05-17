<?php
	session_start();
	require('../model/User.php');
	include('authentication.php');
?>

<?php
function cleanInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $courseId = cleanInput($_POST["courseId"]);
    $name = cleanInput($_POST["name"]);

    $message = "";

    $attendance = $assignment = $quiz = $presentation = $termExam = 0;

    if (empty($courseId)) {
        $message .= "Course ID is required";
        $message .= "<br>";
    }

    if (empty($name)) {
        $message .= "Name is required";
        $message .= "<br>";
    }

    if (empty($message)) {
        
        $attendance = isset($_POST["attendance"]) ? cleanInput($_POST["attendance"]) : 0;
		$assignment = isset($_POST["assignment"]) ? cleanInput($_POST["assignment"]) : 0;
		$presentation = isset($_POST["presentation"]) ? cleanInput($_POST["presentation"]) : 0;
		$quiz = isset($_POST["quiz"]) ? cleanInput($_POST["quiz"]) : 0;
		$termExam = isset($_POST["termExam"]) ? cleanInput($_POST["termExam"]) : 0;

		echo "Hello";
        if (is_numeric($attendance) && is_numeric($assignment) && is_numeric($presentation) && is_numeric($quiz) && is_numeric($termExam)) {
		   
		    $total = $attendance + $assignment + $presentation + $quiz + $termExam;

		    if ($total == 100) {
		        
		        $flag = addCourseEvaluation($courseId, $name, $attendance, $assignment, $presentation, $quiz, $termExam);

		        if ($flag) {
		        	header("Location: ../view/viewCourseEvaluation.php?status=success");
		        }
		        else {
		        	header("Location: ../view/viewCourseEvaluation.php?status=failed");
		        }

		    } else {
		        header("Location: ../view/viewCourseEvaluation.php?status=notEqual");
		    }
		}

		else {
			header("Location: ../view/viewCourseEvaluation.php?status=withoutmarks");
		}

    } else {
        $_SESSION['course'] = $message;
		header("Location: ../view/addCourseEvaluation.php");
    }
}


?>
