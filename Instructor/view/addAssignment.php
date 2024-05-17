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
    <title>Add Assignment</title>
    <script src="../view/JavaScript/assignment.js"></script>
    <style>
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

        .error-message {
            color: red;
            display: none;
            margin-top: 5px;
            font-size: 14px;
        }

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

        .profile-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
        }
        input[type="date"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        margin-bottom: 15px;
        }

        /* Optional: Adjust the appearance of the calendar dropdown icon */
        input[type="date"]::-webkit-calendar-picker-indicator {
            background: transparent;
            bottom: 0;
            color: transparent;
            cursor: pointer;
            height: auto;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: auto;
        }

    </style>
</head>
<body >
    <div class="profile-container">
        <form method="post" action="../Controller/addAssignmentAction.php" novalidate onsubmit="return validateForm()">
            <fieldset>
                <legend>Add Assignment</legend>
                <label>Name</label>
                <input type="text" name="name" id="name">
                <span id="nameError" style="color: red;"></span>
                <br><br>

                <label>Publish Date</label>
                <input type="date" name="publishDate" id="publishDate">
                <span id="publishDateError" style="color: red;"></span>
                <br><br>

                <label>Due Date</label>
                <input type="date" name="dueDate" id="dueDate">
                <span id="dueDateError" style="color: red;"></span>
                <br><br>

                <label>Mark</label>
                <input type="text" name="mark" id="mark">
                <span id="markError" style="color: red;"></span>
                <br><br>

                <input type="submit" name="submit" value="Add">
                <br><br>
            </fieldset>
        </form>
    </div>
</body>
</html>



