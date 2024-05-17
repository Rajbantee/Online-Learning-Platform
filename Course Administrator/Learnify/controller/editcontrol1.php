<?php
session_start();

if (!isset($_SESSION['username']) && !isset($_COOKIE['user_login']) && !isset($_COOKIE['userpassword'])) {
    header('Location: logout.php');
    exit();
}
$servername = "localhost"; 
$username = "root";
$password = ""; 
$database = "eduauth"; 
 
$conn = new mysqli($servername, $username, $password, $database);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$category = []; 
 
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['cid'])) {
        $categoryID = $_GET['cid'];
 
        $sql = "SELECT * FROM tblclass WHERE CategoryID='$categoryID'";
        $result = $conn->query($sql);
 
        if ($result->num_rows > 0) {
            $category = $result->fetch_assoc();
        } else {
            echo "Category not found";
            exit;
        }
    } else {
        echo "Category ID not provided";
        exit;
    }
}
 
function updateCategory($conn, $categoryName, $categoryID) {
    $sql = "UPDATE tblclass SET CategoryName='$categoryName', CategoryID='$categoryID' WHERE CategoryID='$categoryID'";
    return $conn->query($sql);
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $categoryID = $_POST['cid'];
        $categoryName = $_POST['cname'];
       
 
        if (updateCategory($conn,$categoryName, $categoryID)) {
            echo "Category updated successfully";
            header("Location: ../view/manage-class.php");
            exit;
        } else {
            echo "Error updating Category";
        }
    }
}
?>