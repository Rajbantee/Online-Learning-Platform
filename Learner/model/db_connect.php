<?php
function db_conn()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "learner";


    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); //used to stop script 
    }
    return $conn;
}
?>
