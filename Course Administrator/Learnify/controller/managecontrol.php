<?php
include '../model/dbconnection.php';

session_start();

if (!isset($_SESSION['username']) && !isset($_COOKIE['user_login']) && !isset($_COOKIE['userpassword'])) {
    header('Location: logout.php');
    exit();
}

    $mydb= new Model();
    $conobj= $mydb->OpenCon();
    $result=$mydb->fetchCategories($conobj,"tblclass");
  
 
    function deleteCategory($conn, $categoryID) {
        $sql = "DELETE FROM tblclass WHERE CategoryID='$categoryID'";
        return $conn->query($sql);
    }
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['delete_category'])) {
            $categoryID = $_POST['category_id'];
            if (deleteCategory($conobj, $categoryID)) {
                echo "Category deleted successfully";
            } else {
                echo "Error deleting category";
            }
        }
    }
    ?>