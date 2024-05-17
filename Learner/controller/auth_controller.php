<?php
require '../model/model.php';

function sign_up($data) {
    $db = new Database();

    // Validate username for alphanumeric characters, period, dash, or underscore
    if (!preg_match("/^[a-zA-Z0-9._-]*$/", test_input($data['username']))) {
        return "Only alphanumeric characters, period, dash or underscore allowed in Username";
    }

    // Validate password length
    else if (strlen(test_input($data['password'])) < 8) {
        return "Password must be at least 8 characters";
    }

    // Validate password for special characters
    else if (!preg_match("/[@,#,$,%]/", test_input($data['password']))) {
        return "Password must contain at least one of the special characters (@, #, $, %)";
    }

    // Check if password and confirm password match
    else if ($data['password'] != $data['confirm_password']) {
        return "Password and Confirm Password must match";
    }

    // Validate email format
    else if (!filter_var(test_input($data['email']), FILTER_VALIDATE_EMAIL)) {
        return "Email must be a valid email address";
    }

    // Check if username already exists
    if ($db->doesUsernameExist($data['username'])) {
        return "Username already exists";
    }

    // If all checks pass, hash the password and insert the user
    $data['password'] = password_hash(test_input($data['password']), PASSWORD_DEFAULT);
    $data['type'] = "learner"; 

    // Insert the user using the Database method
    $db->insertUser($data['username'], $data['password'], $data['email'], $data['type']);

    // Redirect to sign-in page upon successful registration
    header('Location: ../view/sign_in.php');
    exit();
}

// cleaning up user input before inserting into database
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data); //converts to HTML entities
    return $data;
}



function sign_in($data){
    $db = new Database();
    $row = $db->checkLogin($data['username']);

    if ($row == null) {
        return "Username not found";
    } else if (!password_verify($data['password'], $row['password'])) {
        return "Password incorrect";
    }

    session_start();
    $_SESSION['username'] = $data['username'];
    $_SESSION['access'] = $row['access'];  // Ensure database query results

    $db->set_learner($data['username'], $row['username']);  // Assuming username is the required field for Name as well

    header('Location: ../view/home.php');
    exit();
}


?>
