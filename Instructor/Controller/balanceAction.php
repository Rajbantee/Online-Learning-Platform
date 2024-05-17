<?php

	session_start();

	require('../model/User.php');

	$_SESSION['balanceCheck'] = accountCheck($_SESSION['username']);

	if(isset($_SESSION['balanceCheck'])){
		header("Location: ../view/balanceView.php");
	}

?>