<?php
require_once '../controller/auth_controller.php';
$message = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if($_POST["submit"]=="Sign In"){
        $data["username"] = $_POST["username"];
        $data["password"] = $_POST["password"];
    }
    if(empty($data["username"]) || empty($data["password"]))
        $message = "All fields are required";
        else 
        $message=sign_in($data);

}

?>
<center>
<br><br><br><br> 
<h1>Sign In</h1>
<form name="sign_in_form" id="sign_in_id" action="sign_in.php" method="post">
    <fieldset style="width: 250px;">
        <legend>Login Details</legend>
        <br>
        <div>
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="user_id">
        </div>
        <br>
        
        <div>
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Sign In" name="submit"> 
    </fieldset>
</form>
</center>
<div style="text-align: center;"> 
        <p><?php echo $message; ?></p>
        <p>Don't have an account? <a href="sign_up.php">Register</a></p> <!-- Added hyperlink for registration -->
    </div>
