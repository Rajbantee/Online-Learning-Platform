<?php

include '../model/dbconnection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

        $mydb= new Model();
        $conobj= $mydb->OpenCon();
        $result=$mydb->checkLoginCredentials($conobj,"tbladmin",$_REQUEST["username"],$_REQUEST["password"]);
   

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row["Password"];
        
        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username;

            if (isset($_POST['remember']) && $_POST['remember'] == 'on') {
                setcookie("user_login", $username, time() + (86400 * 30), "/"); 
                setcookie("userpassword", $password, time() + (86400 * 30), "/");
            } else {
                setcookie("user_login", "", time() - 3600, "/");
                setcookie("userpassword", "", time() - 3600, "/");
            }

            header("Location: ../view/dashboard.php");
            exit();
        } else {
     
            echo "Invalid username or password";
        }
    } else {
        echo "Invalid username or password";
    }
}

?>
