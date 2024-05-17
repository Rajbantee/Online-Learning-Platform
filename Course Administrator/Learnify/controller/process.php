<?php
include '../model/dbconnection.php';

$Aname = $username = $mblnum = $gender = $email = $password = "";
$nameError = $usernameError = $emailError = $genderError = $passwordError = $mblnumError = $haserror = "";

if (isset($_REQUEST['submit'])) {
    if (!preg_match("/^[a-zA-Z]+$/", $_POST['AName'])) {
        $nameError = "Name should contain only alphabets";
    } else if (empty($_POST['AName'])) {
        $nameError = "Admin Name is required";
    } else {
        $Aname = $_POST['AName'];
    }

    if (!preg_match("/^[a-zA-Z]+$/", $_POST['username'])) {
        $usernameError = "Username should contain only alphabets";
    } else if (empty($_POST['username'])) {
        $usernameError = "Username is required";
    } else {
        $username = $_POST['username'];
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || !strpos($_POST['email'], '.com')) {
        $emailError = "Invalid email format or not using .com domain";
    } else if (empty($_POST['email'])) {
        $emailError = "Email is required";
    } else {
        $email = $_POST['email'];
    }

    if (!preg_match("/^(?=.*\d).{8,}$/", $_POST['pass'])) {
        $passwordError = "Password must contain at least one numeric character";
    } else if (empty($_POST['pass'])) {
        $passwordError = "Password is required";
    } else {
        $password = $_POST['pass'];
    }

    if (!isset($_POST['Gender'])) {
        $genderError = "Gender is required";
    } else {
        $gender = $_POST['Gender'];
    }

    if (!preg_match("/^018-\d{7}$/", $_POST['mblnum'])) {
        $mblnumError = "Invalid phone number format (should be 018-#######)";
    } else if (empty($_POST['mblnum'])) {
        $mblnumError = "Mobile Number is required";
    } else {
        $mblnum = $_POST['mblnum'];
    }

    if (empty($nameError) && empty($usernameError) && empty($emailError) && empty($passwordError) && empty($genderError) && empty($mblnumError)) {

        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $mydb = new Model();
        $conobj = $mydb->OpenCon();

        $result = $mydb->AddManager($conobj, "tbladmin", $Aname, $username, $mblnum, $email, $password_hash);
        if ($result === TRUE) {
            echo "Successfully Added";
            header('location: ../view/index.php');
            exit; 
        } else {
            echo "Error Occurred" . $conobj->error;
        }
    } else {
     
        $haserror = 1;
    }
}

if ($haserror == 1) {
    echo "Please complete the validation";
}
?>
