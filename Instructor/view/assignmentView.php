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
	<title>View Assignment</title>
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
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
		}
	</style>

	<script>
        function showAssignmentMessage() {
            const urlParams = new URLSearchParams(window.location.search);
            const registrationStatus = urlParams.get('add');
            if (registrationStatus === 'success') {
                alert("Assignment Added");
                window.location.href = '../Controller/assignmentViewAction.php';
            } else if (registrationStatus === 'failed') {
                alert("Failed. Please try again.");
                window.location.href = '../Controller/assignmentViewAction.php';
            }
        }

        function deleteAssignment(id) {
		    if (confirm("Are you sure you want to delete this assignment?")) {
		        
		        var form = document.createElement('form');
		        form.method = 'GET'; 
		        form.action = '../Controller/deleteAssignment.php';
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
    <button onclick="window.location.href='../view/addAssignment.php';" style="background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;">Add Assignment</button>
</div>


	<div align="center">
		<?php 
			$x = $_SESSION['assignmentInfo'];
			if(empty($x)) {
				echo "<p>No assignments found.</p>";
			} else {
				echo "<table>";
				echo "<tr>";
				echo "<th>Serial No</th>";
				echo "<th>Name</th>";
				echo "<th>Publish Date</th>";
				echo "<th>Due Date</th>";
				echo "<th>Marks</th>";
				echo "<th>Action</th>";
				echo "</tr>";
				for($i=0; $i<sizeof($x); $i++) {
					echo "<tr>";
					echo "<td>" . $i+1 . "</td>";
					echo "<td>" . $x[$i]['name'] . "</td>";
					echo "<td>" . $x[$i]['dueDate'] . "</td>";
					echo "<td>" . $x[$i]['publishDate'] . "</td>";
					echo "<td>" . $x[$i]['mark'] . "</td>";
					echo "<td><button onclick='deleteAssignment(" . $x[$i]['id'] . ")'>Delete</button></td>";

					echo "</tr>";
				}
				echo "</table>";
			}
		?>
	</div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        showAssignmentMessage();
    });
</script>
</html>
