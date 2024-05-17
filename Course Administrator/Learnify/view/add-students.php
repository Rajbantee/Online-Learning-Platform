<?php
include('../controller/addcontrol2.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Courses</title>
</head>
<body>
    <?php include_once('includes/header.php');

    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $database = "eduauth";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>

    <div class="container-fluid page-body-wrapper">
        <?php include_once('includes/sidebar.php');?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">Add Courses</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Courses</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample row" method="post" action="../controller/addcontrol2.php" enctype="multipart/form-data">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputName1">Course Name</label>
                                        <input type="text" name="uname" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail3">Category</label>
                                        <select name="stuclass" class="form-control" required>
                                            <option value="">Select Category</option>
                                            <?php 
                                            $sql = "SELECT * FROM tblclass";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                                    echo "<option value='".$row['CategoryName'].$row['CategoryID']."'>".$row['CategoryName'].$row['CategoryID']."</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputName1">Course ID</label>
                                        <input type="text" name="stuid" class="form-control" required>
                                    </div>
      
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputName1">Course Price</label>
                                        <input type="text" name="connum" class="form-control" required maxlength="10" pattern="[0-9]+">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputName1">Course Details</label>
                                        <textarea name="address" class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2" name="submit">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once('includes/footer.php');
            // Close connection
            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
