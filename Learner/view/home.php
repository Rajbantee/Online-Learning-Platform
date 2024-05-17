<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: sign_in.php");
}
if (isset($_POST['submit'])) {
    session_destroy();
    header('Location: sign_in.php');
}
?>
<center>
    <fieldset style="text-align: center;">
        <legend>
            <span style="font-size: 24px; color: #333;">Home</span>
        </legend>
        <br>
     
        <a href="available_courses.php"><span style="font-size: 20px; color: #333;">📚</span> Browse Courses</a>
        <br><br>
        <a href="my_courses.php"><span style="font-size: 20px; color: #333;">📘</span> My Courses</a>
        <br><br> 
        <br>
        <form action="home.php" method="post">
            <input type="submit" value="❌ Logout" name="submit"> 
        </form>
    </fieldset>
</center>
