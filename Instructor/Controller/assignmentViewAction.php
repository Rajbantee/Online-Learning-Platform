<?php
	session_start();
	require('../model/User.php');

	$_SESSION['assignmentInfo'] = getAssignment();

	if(isset($_SESSION['assignmentInfo'])){
		header("Location: ../view/assignmentView.php");
	}
?>