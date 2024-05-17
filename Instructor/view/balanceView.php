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
	<title>Check Balance</title>
	<style>
        .course {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
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

        .profile-title {
            font-size: 32px;
            color: #007bff;
            margin-bottom: 20px;
        }

        .profile-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .profile-table th,
        .profile-table td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        .profile-table th {
            background-color: #f2f2f2;
        }

        .edit-link {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        .edit-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
	<div class="profile-container">
	    <h1 class="profile-title">Balance Check</h1>
	
	    <?php 
	        if(isset($x) && !empty($x)) {
	    ?>
	    <table class="profile-table">
	        <tr><th>Username</th><td><?php echo $x[0]['username']; ?></td></tr>
	        <tr><th>Montly Salary</th><td><?php echo $x[0]['monthly_salary']; ?></td></tr>
	        <tr><th>Current Available Balance</th><td><?php echo $x[0]['current_balance']; ?></td></tr>
	    </table>
	    <?php 
	        } else {
	            echo "No result Found";
	        }
	    ?>
	</div>
</body>
</html>
