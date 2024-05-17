<?php
session_start();
 
if (!isset($_SESSION['username']) && !isset($_COOKIE['user_login']) && !isset($_COOKIE['userpassword'])) {
    header('Location: logout.php');
    exit();
} else {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "eduauth";
    $conn = mysqli_connect($servername, $username, $password, $database);
 
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $adminName = $_POST['adminName'];
        $username = $_POST['username'];
        $mobileNumber = $_POST['mobileNumber'];
        $email = $_POST['email'];
 
        $sql = "UPDATE tbladmin SET AdminName='$adminName', MobileNumber='$mobileNumber', Email='$email' WHERE UserName='$username'";
        if (mysqli_query($conn, $sql)) {
            echo "Profile updated successfully";
        } else {
            echo "Error updating profile: " . mysqli_error($conn);
        }
    }
 
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM tbladmin WHERE UserName = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        form {
            background-color: #fff;
            padding: 20px;
            width: 300px;
            margin: 20px auto;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"] {
            width: calc(100% - 12px);
            padding: 6px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Edit Profile</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="adminName">Admin Name:</label>
        <input type="text" id="adminName" name="adminName" value="<?php echo htmlentities($row['AdminName']); ?>">
        <br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo htmlentities($row['UserName']); ?>" readonly>
        <br>
        <label for="mobileNumber">Mobile Number:</label>
        <input type="text" id="mobileNumber" name="mobileNumber" value="<?php echo htmlentities($row['MobileNumber']); ?>">
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlentities($row['Email']); ?>">
        <br>
        <button type="submit">Update Profile</button>
    </form>
    <form action="profile.php">
        <button type="submit">View Profile</button>
    </form>
</body>
</html>
 
<?php
}
?>
