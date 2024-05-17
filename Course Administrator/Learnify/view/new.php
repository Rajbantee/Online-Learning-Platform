<?php
error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$database = "eduauth";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

include('includes/header.php');

// Code for deletion
if (isset($_GET['delid'])) {
    $rid = intval($_GET['delid']);
    $sql = "DELETE FROM tblstudent WHERE ID='$rid'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "<script>alert('Data deleted');</script>";
        echo "<script>window.location.href = 'manage-students.php'</script>";
    }
}

?>

<div class="container-fluid page-body-wrapper">
    <?php include_once('includes/sidebar.php');?>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Search Course </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Search Course</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form method="post">
                                <div class="form-group">
                                    <strong>Search Course BY Course ID:</strong>
                                    <select  name="searchdata" class="form-control" required='true'>
                                        <option value="">Select Course</option>
                                        <?php 
                                        $sql2 = "SELECT * FROM tblstudent ";
                                        $query2 = mysqli_query($conn, $sql2);
                                        while ($row1 = mysqli_fetch_assoc($query2)) {
                                        ?>  
                                            <option value="<?php echo htmlentities($row1['CourseID']);?>"> <?php echo htmlentities($row1['CourseID']);?></option>
                                        <?php } ?> 
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary" name="search" id="submit">Search</button>
                            </form>
                            <div class="d-sm-flex align-items-center mb-4">
                                <?php
                                if(isset($_POST['search'])) { 
                                    $sdata = $_POST['searchdata'];
                                ?>
                                <h4 align="center">Result against "<?php echo $sdata;?>" ID </h4>
                            </div>
                            <div class="table-responsive border rounded p-1">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="font-weight-bold">S.No</th>
                                            <th class="font-weight-bold">Course Name</th>
                                            <th class="font-weight-bold">Category</th>
                                            <th class="font-weight-bold">Course ID</th>
                                            <th class="font-weight-bold">Price</th>
                                            <th class="font-weight-bold">Course Details</th>
                                            <th class="font-weight-bold">Image</th>
                                            <th class="font-weight-bold">DateofAdding</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM tblstudent WHERE CourseID LIKE '$sdata%'";
                                        $query = mysqli_query($conn, $sql);
                                        $cnt = 1;
                                        if(mysqli_num_rows($query) > 0) {
                                            while($row = mysqli_fetch_assoc($query)) {
                                        ?>
                                                <tr>
                                                    <td><?php echo htmlentities($cnt);?></td>
                                                    <td><?php echo htmlentities($row['CourseName']);?></td>
                                                    <td><?php echo htmlentities($row['Category']);?></td>
                                                    <td><?php echo htmlentities($row['CourseID']);?></td>
                                                    <td><?php echo htmlentities($row['Price']);?></td>
                                                    <td><?php echo htmlentities($row['CourseDetails']);?></td>
                                                    <td><?php echo htmlentities($row['Image']);?></td>
                                                    <td><?php echo htmlentities($row['DateofAdding']);?></td>
                                                    <td>
                                                        <div>
                                                            <a href="edit-student-detail.php?editid=<?php echo htmlentities($row['ID']);?>"><i class="icon-eye"></i></a>
                                                            || 
                                                            <a href="manage-students.php?delid=<?php echo ($row['ID']);?>" onclick="return confirm('Do you really want to Delete ?');"> <i class="icon-trash"></i></a>
                                                        </div>
                                                    </td> 
                                                </tr>
                                            <?php 
                                                $cnt++;
                                            }
                                        } else { ?>
                                            <tr>
                                                <td colspan="8"> No record found against this search</td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div align="left">
                                <?php include_once('includes/footer.php');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                        <?php }?>