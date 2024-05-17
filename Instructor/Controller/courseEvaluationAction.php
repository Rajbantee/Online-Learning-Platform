<?php

	session_start();

	require('../model/User.php');

	$_SESSION['course'] = viewcourseEvaluation();

	if(isset($_SESSION['course'])){
		header("Location: ../view/viewCourseEvaluation.php");
	}

?>