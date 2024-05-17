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
 
    // Fetch profile details from the database based on session data
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
    <title>User Profile</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
}
 
.profile-container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 30px;
}
 
.profile-container h2 {
    margin-top: 0;
    color: #333;
}
 
.profile-details {
    margin-top: 20px;
}
 
.profile-details table {
    width: 100%;
    border-collapse: collapse;
}
 
.profile-details td {
    padding: 10px 0;
    border-bottom: 1px solid #ddd;
}
 
.profile-details td:first-child {
    font-weight: bold;
    width: 40%;
}
 
.profile-details tr:last-child td {
    border-bottom: none;
}
 
.profile-details tr:nth-child(even) {
    background-color: #f9f9f9;
}
    </style>
</head>
<body>
    <div class="profile-details">
        <h2>User Profile</h2>
        <table>
            <tr>
                <td>Admin Name:</td>
                <td><?php echo htmlentities($row['AdminName']); ?></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><?php echo htmlentities($row['UserName']); ?></td>
            </tr>
            <tr>
                <td>Mobile Number:</td>
                <td><?php echo htmlentities($row['MobileNumber']); ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo htmlentities($row['Email']); ?></td>
            </tr>
        </table>
        <form action="editprofile.php" method="GET">
            <button type="submit">Edit Profile</button>
        </form>
    </div>
</body>
</html>
 
<?php
}
?>
 