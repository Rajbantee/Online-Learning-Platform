<?php
include '../model/dbconnection.php';
/*$name = $email = $username = $gender = $password = $phone = $haserror = "";
$nameError = $usernameError = $emailError = $genderError = $passwordError = $phoneError = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!preg_match("/^[a-zA-Z]+$/", $_POST['AName'])) {
        $nameError = "Name should contain only alphabets";
    } else if (!empty($_POST["AName"])) {
        $name = $_POST["AName"];
    } else {
        $haserror = 1;
        $nameError = "Enter a name";
    }
 
    if (!preg_match("/^[a-zA-Z]+$/", $_POST['username'])) {
        $usernameError = "UserName should contain only alphabets";
    } else if (!empty($_POST["username"])) {
        $username = $_POST["username"];
    } else {
        $haserror = 1;
        $usernameError = "Enter a username";
    }
 
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || !strpos($_POST['email'], '.xyz')) {
        $emailError = "Invalid email format or not using .xyz domain";
    } else if (!empty($_POST["email"])) {
        $email = $_POST["email"];
    } else {
        $haserror = 1;
        $emailError = "Email is required";
    }
 
    if (!preg_match("/^(?=.*\d).{8,}$/", $_POST['pass'])) {
        $passwordError = "Password must contain at least one numeric character";
    } else if (!empty($_POST["pass"])) {
        $password = $_POST["pass"];
    } else {
        $haserror = 1;
        $passwordError = "Password must be filled";
    }
 
    if (isset($_POST['Gender'])) {
        $gender = $_POST['Gender'];
    } else {
        $hasError = 1;
        $genderError = "Must check one role";
    }
 
    if (!preg_match("/^\d{3}-\d{7}$/", $_POST['mblnum'])) {
        $phoneError = "Invalid phone number format (should be 018-#######)";
    } else if (!empty($_POST["mblnum"])) {
        $phone = $_POST["mblnum"];
    } else {
        $haserror = 1;
        $phoneError = "Type your phone number";
    }
}*/
    if ($haserror != 1) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
 
        $mydb = new Model();
        $conobj = $mydb->OpenCon();
        $result = $mydb->AddManager($conobj, "tbladmin", $name, $username, $phone, $email, $password_hash);
        if ($result === TRUE) {
            echo "Successfully Added";
            header('location: ../view/index.php');
        } else {
            echo "Error Occurred" . $conobj->error;
        }
    } else {
        echo "Please complete the validation ";
    }