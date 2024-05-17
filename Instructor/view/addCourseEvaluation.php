<?php 
    session_start();
    include('../Controller/header.php');
    include('../Controller/authentication.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Course Evaluation</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../view/JavaScript/courseEvaluation.js"></script>

<style>
    
    input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        .error-message {
            color: red;
            display: none;
            margin-top: 5px;
            font-size: 14px;
        }
        .profile-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 8px;
            text-align: left;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

</style>
</head>
<body>

<div class="profile-container">
    <h2>Add Course Evaluation</h2>
    <form id="addEvaluationForm" action="../Controller/addCourseEvaluationAction.php" method="POST">
        <label for="courseId">Course ID</label>
        <input type="text" id="courseId" name="courseId">
        <span class="error"></span><br><br>

        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <span class="error"></span><br><br>

        <label for="attendance">Attendance Marks</label>
        <input type="number" id="attendance" name="attendance" value="0"><br><br>

        <label for="assignment">Assignment Marks</label>
        <input type="number" id="assignment" name="assignment" value="0"><br><br>

        <label for="presentation">Presentation Marks</label>
        <input type="number" id="presentation" name="presentation" value="0"><br><br>

        <label for="quiz">Quiz Marks</label>
        <input type="number" id="quiz" name="quiz" value="0"><br><br>

        <label for="termExam">Term Exam Marks</label>
        <input type="number" id="termExam" name="termExam" value="0"><br><br>

        <input type="submit" value="Add Course Evaluation">
    </form>
</div>

</body>
</html>
