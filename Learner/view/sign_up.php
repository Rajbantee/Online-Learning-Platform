<?php
require '../controller/auth_controller.php';
$message = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if($_POST["submit"]=="Register"){
        $data["username"] = $_POST["username"];
        $data["password"] = $_POST["password"];
        $data["confirm_password"] = $_POST["confirm_password"];
        $data["email"] = $_POST["email"];
    }
    if(empty($data["username"]) || empty($data["password"]) || empty($data["confirm_password"]) || empty($data["email"]))
        $message = "All fields are required";
        else 
        $message=sign_up($data);

}
?>
<center>
    <fieldset style="text-align: center;">
        <legend>Signup</legend>
        <form name="sign_up_form" id="sign_up_id" action="sign_up.php" method="post" onkeyup="validateForm()">
            <br>
            <label for="username">Username: </label><br>
            <input type="text" name="username" id="username" onblur="checkUsername()" onkeyup="checkUsername()">
            <p id="usernameError"></p>
            <br>
            <label for="password">Password: </label><br>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" name="password" id="password" onblur="checkPassword()">
            <span>
                <input type="checkbox" name="showPass" id="showPass" onclick="showPassword()">
                <label for="showPass">Show Password</label>
            </span>
            <p id="passwordError"></p>
            <br>
            <label for="confirm_password">Confirm Password: </label><br>
            <input type="password" name="confirm_password" id="confirmPassword" onblur="checkConfirmPassword()">
            <p id="confirmPasswordError"></p>
            <br>
            <label for="email">Email: </label><br>
            <input type="email" name="email" id="email" onblur="checkEmail()">
            <p id="emailError"></p>
            <input type="submit" name="submit" id="submit" value="Register" disabled>
        </form>
    </fieldset>
</center>
<p><?php echo $message; ?></p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
     function validateForm() {
    // Check if any of the required fields is empty
    if ($("#username").val() === "" || $("#password").val() === "" ||
        $("#confirmPassword").val() === "" || $("#email").val() === "") {
        $("#submit").prop('disabled', true);
        return false;
    }

    // Validate each field using separate functions
    var isValidPassword = checkPassword();         
    var isValidConfirmPassword = checkConfirmPassword(); 
    var isValidEmail = checkEmail();               
    var isValidUsername = checkUsername();         

    if (isValidPassword && isValidConfirmPassword && isValidEmail && isValidUsername) {
        $("#submit").prop('disabled', false);
        return true;
    } else {
        $("#submit").prop('disabled', true);
        return false;
    }
}

        function checkPassword(){
            var password = document.getElementById("password");
            if(password.value == ""){
                document.getElementById("passwordError").innerHTML = "Password cannot be empty";
                password.style.border = "2px solid red";return false;
            } else {
                const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$%@])[a-zA-Z\d#$%@]{8,}$/;
                if(regex.test(password.value) == false){
                    document.getElementById("passwordError").innerHTML = "Password must contain at least 8 characters, 1 uppercase varter, 1 lowercase varter, 1 number and 1 special character(@, #, $, %)";
                    password.style.border = "2px solid red";return false;
                } else {
                    document.getElementById("passwordError").innerHTML = "";
                    password.style.border = "2px solid green";return true;
                }
            }
        }

        function checkConfirmPassword(){
            var confirmPassword = document.getElementById("confirmPassword");
            var password = document.getElementById("password");
            if(confirmPassword.value == ""){
                document.getElementById("confirmPasswordError").innerHTML = "Confirm Password cannot be empty";
                confirmPassword.style.border = "2px solid red";return false;
            } else {
                if(confirmPassword.value !== password.value){
                    document.getElementById("confirmPasswordError").innerHTML = "Confirm Password must match Password";
                    confirmPassword.style.border = "2px solid red";return false;
                } else {
                    document.getElementById("confirmPasswordError").innerHTML = "";
                    confirmPassword.style.border = "2px solid green";return true;
                }
            }
        }

         function showPassword(){
            var password = document.getElementById("password");
            var confirmPassword = document.getElementById("confirmPassword");
            var showPassword = document.getElementById("showPass");
            if(showPassword.checked){
                password.type = "text";
                confirmPassword.type = "text";
            } else {
                password.type = "password";
                confirmPassword.type = "password";
            }
        }

        function checkEmail(){
            var email = document.getElementById("email");
            if(email.value == ""){
                document.getElementById("emailError").innerHTML = "Email cannot be empty";
                email.style.border = "2px solid red";return false;
            } else {
                const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                if(regex.test(email.value) == false){
                    document.getElementById("emailError").innerHTML = "Email is not valid";
                    email.style.border = "2px solid red";return false;
                } else {
                    document.getElementById("emailError").innerHTML = "";
                    email.style.border = "2px solid green";return true;
                }
            }
        }

        function checkUsername(){
            var username = document.getElementById("username");
            if(username.value == ""){
                document.getElementById("usernameError").innerHTML = "Username cannot be empty";
                username.style.border = "2px solid red";return false;
            } else {
                const regex = /^[a-zA-Z0-9._-]+$/;
                if(regex.test(username.value) == false){
                    document.getElementById("usernameError").innerHTML = "Username can only contain varters, numbers, period, underscore and dash";
                    username.style.border = "2px solid red";return false;
                } else {
                    document.getElementById("usernameError").innerHTML = "";
                    username.style.border = "2px solid green";return true;
                }
            }
        }

       
    </script>
