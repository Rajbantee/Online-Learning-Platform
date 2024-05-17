<?php 
	session_start();
	include('../Controller/header.php');
	include('../Controller/authentication.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Course Evaluation</title>
	<style>
		
		table {
			width: 80%;
			margin: 20px auto;
			border-collapse: collapse;
			background-color: #fff;
		}
		th, td {
			padding: 10px;
			text-align: left;
			border: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
		}
	</style>

	<script>
        function showCourseEvaluationMessage() {
            const urlParams = new URLSearchParams(window.location.search);
            const registrationStatus = urlParams.get('status');
            if (registrationStatus === 'success') {
                alert("Course Evaluation Added");
                window.location.href = '../Controller/courseEvaluationAction.php';
            } else if (registrationStatus === 'failed') {
                alert("Failed. Please try again.");
                window.location.href = '../Controller/courseEvaluationAction.php';
            }
            else if (registrationStatus === 'withoutmarks') {
            	alert("Total marks is not equal to 100");
            	window.location.href = '../Controller/courseEvaluationAction.php';
            }
            else if (registrationStatus === 'notEqual') {
            	alert("Total marks is not equal to 100");
            	window.location.href = '../Controller/courseEvaluationAction.php';
            }
        }

        function deleteCourseEvaluation(id) {
		    if (confirm("Are you sure you want to delete this assignment?")) {
		        
		        var form = document.createElement('form');
		        form.method = 'GET'; 
		        form.action = '../Controller/deleteCourseEvaluation.php';
		        var input = document.createElement('input');
		        input.type = 'hidden';
		        input.name = 'id'; 
		        input.value = id; 
		        form.appendChild(input);
		        document.body.appendChild(form);
		        form.submit();
		    }
		}
    </script>

</head>
<body>

<div style="text-align: right;">
    <button onclick="window.location.href='../view/addCourseEvaluation.php';" style="background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;">Add Course Evaluation</button>
</div>


	<div align="center">
		<?php 
			$x = $_SESSION['course'];
			if(empty($x)) {
				echo "<p>No course found.</p>";
			} else {
				echo "<table>";
				echo "<tr>";
				echo "<th>Serial No</th>";
				echo "<th>Course ID</th>";
				echo "<th>Course Name</th>";
				echo "<th>Evaluation Method</th>";
				echo "<th>Action</th>";
				echo "</tr>";
				for($i=0; $i<sizeof($x); $i++) {
					echo "<tr>";
					echo "<td>" . $i+1 . "</td>";
					echo "<td>" . $x[$i]['courseId'] . "</td>";
					echo "<td>" . $x[$i]['name'] . "</td>";
					echo "<td>" . "Attendance: " . $x[$i]['attendance'] . "<br>"
					            . "Assignment: " . $x[$i]['assignment'] . "<br>"
					            . "Quiz: " . $x[$i]['quiz'] . "<br>"
					            . "Presentation: " . $x[$i]['presentation'] . "<br>"
					            . "Term Exam: " . $x[$i]['termExam'] . "</td>";
					echo "<td><button onclick='deleteCourseEvaluation(" . $x[$i]['id'] . ")'>Delete</button></td>";

					echo "</tr>";
				}
				echo "</table>";
			}
		?>
	</div>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        showCourseEvaluationMessage();
    });
</script>
</html>
