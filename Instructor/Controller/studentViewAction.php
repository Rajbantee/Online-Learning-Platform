<?php
	session_start();
	require('../model/User.php');

	$_SESSION['studentInfo'] = getStudents();

	if(isset($_SESSION['studentInfo'])){
		header("Location: ../view/studentView.php");
	}
?>