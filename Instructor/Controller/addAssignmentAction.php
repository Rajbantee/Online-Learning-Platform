<?php
	session_start();
	require('../model/User.php');
	include('authentication.php');
?>

<?php  
	$name = $publishDate = $dueDate = $mark = "";
	if ($_SERVER['REQUEST_METHOD'] === "POST"){

			function test_input($data){
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			
			$name = test_input($_POST['name']);	
			$publishDate = test_input($_POST['publishDate']);
			$dueDate = test_input($_POST['dueDate']);
			$mark = test_input($_POST['mark']);

			$message = "";
			
			if (empty($name)) {
				$message .= "Name can't be empty";
				$message .= "<br>";
			}
			if (empty($publishDate)) {
				$message .= "Publish Date can't be empty";
				$message .= "<br>";
			}
			if (empty($dueDate)) {
				$message .= "Due Date can't be empty";
				$message .= "<br>";
			}
			if (empty($mark)) {
				$message .= "Mark can't be empty";
				$message .= "<br>";
			}
		
			if ($message === ""){

				$flag = addAssignment($name, $publishDate, $dueDate, $mark);
				
				if($flag) {
                    header("Location: ../view/assignmentView.php?add=success");
                }
                else {
                    header("Location: ../view/assignmentView.php?add=failed");
                }
			}
			else{
				$_SESSION['update'] = $message;
				header("Location: ../view/addAssignment.php");
			}
	}
	


			
			
		

?>