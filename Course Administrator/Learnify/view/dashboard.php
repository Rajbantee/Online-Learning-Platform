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
?>

<?php include_once('includes/header.php');?>
<div class="container-fluid page-body-wrapper">
    <?php include_once('includes/sidebar.php');?>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-sm-flex align-items-baseline report-summary-header">
                                        <h5 class="font-weight-semibold">Report Summary</h5> <span class="ml-auto">Updated Report</span> <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class=" col-md-6 report-inner-cards-wrapper">
                                    <div class="report-inner-card color-1">
                                        <div class="inner-card-text text-white">
                                            <?php
                                                $sql1 = "SELECT * from tblclass";
                                                $result1 = mysqli_query($conn, $sql1);
                                                $totclass = mysqli_num_rows($result1);
                                            ?>
                                            <span class="report-title">Total Categories</span>
                                            <h4><?php echo htmlentities($totclass);?></h4>
                                            <a href="manage-class.php"><span class="report-count"> View Categories</span></a>
                                        </div>
                                        <div class="inner-card-icon">
                                            <i class="icon-menu"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 report-inner-cards-wrapper">
                                    <div class="report-inner-card color-2">
                                        <div class="inner-card-text text-white">
                                            <?php
                                                $sql2 = "SELECT * from tblstudent";
                                                $result2 = mysqli_query($conn, $sql2);
                                                $totstu = mysqli_num_rows($result2);
                                            ?>
                                            <span class="report-title">Total Courses</span>
                                            <h4><?php echo htmlentities($totstu);?></h4>
                                            <a href="manage-students.php"><span class="report-count"> View Courses</span></a>
                                        </div>
                                        <div class="inner-card-icon ">
                                            <i class="icon-book-open"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 report-inner-cards-wrapper">
                                    <div class="report-inner-card color-3">
                                        <div class="inner-card-text text-white">
                                            <?php
                                                $sql3 = "SELECT * from tblnotice";
                                                $result3 = mysqli_query($conn, $sql3);
                                                $totnotice = mysqli_num_rows($result3);
                                            ?>
                                            <span class="report-title">Total Notice</span>
                                            <h4><?php echo htmlentities($totnotice);?></h4>
                                            <a href="manage-notice.php"><span class="report-count"> View Notices</span></a>
                                        </div>
                                        <div class="inner-card-icon ">
                                            <i class="icon-doc"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 report-inner-cards-wrapper">
                                    <div class="report-inner-card color-4">
                                        <div class="inner-card-text text-white">
                                            <?php
                                                $sql4 = "SELECT * from facultys";
                                                $result4 = mysqli_query($conn, $sql4);
                                                $totpublicnotice = mysqli_num_rows($result4);
                                            ?>
                                            <span class="report-title">Total Instructor</span>
                                            <h4><?php echo htmlentities($totpublicnotice);?></h4>
                                            <a href="manage-public-notice.php"><span class="report-count"> View Instructors</span></a>
                                        </div>
                                        <div class="inner-card-icon">
                                            <i class="icon-people"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="piechart" style="width: 100%; height: 500px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
        <?php include_once('includes/footer.php');?>
 
    </div>

</div>
</div>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Total Category', 4],
            ['Total Course', 10],
            ['Total Notice', 2],
            ['Total Instructor', 2]
        ]);

        var options = {
            title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>

<?php } ?>
