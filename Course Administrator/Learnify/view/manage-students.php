
<?php include_once('../controller/managecontrol2.php');?>

     <?php include_once('includes/header.php');?>
  
      <div class="container-fluid page-body-wrapper">
      
        <?php include_once('includes/sidebar.php');?>
        <div class="main-panel">
          <div class="content-wrapper">
             <div class="page-header">
              <h3 class="page-title"> Manage Courses </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Manage Courses</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Manage Courses</h4>
                      <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Courses</a>
                    </div>
                    <div class="table-responsive border rounded p-1">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="font-weight-bold">S.No</th>
                            <th class="font-weight-bold">Course ID</th>
                            <th class="font-weight-bold">Category</th>
                            <th class="font-weight-bold">Course Name</th>
                            <th class="font-weight-bold">Price</th>
                            <th class="font-weight-bold">Course Details</th>
                            <th class="font-weight-bold">Adding Time</th>
                            <th class="font-weight-bold">Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                <?php
                // Fetch and display course data
                $cnt=1;
          
                foreach ($result as $course) {
                    echo "<tr>";
                    echo "<td>" . htmlentities($cnt) . "</td>";
                    echo "<td>" . $course['CourseID'] . "</td>";
                    echo "<td>" . $course['Category'] . "</td>";
                    echo "<td>" . $course['CourseName'] . "</td>";
                    echo "<td>" . $course['Price'] . "</td>";
                    echo "<td>" . $course['CourseDetails'] . "</td>";
                    echo "<td>" . $course['DateofAdding'] . "</td>";
                    echo "<td>
                    <form method='post'>
                    <a href='edit_course.php?course_id=". $course['CourseID'] ."' class='btn btn-primary btn-sm'><i class='icon-eye'></i></a>
                                <input type='hidden' name='course_id' value='" . $course['CourseID'] . "' >
                                <button type='submit' class='btn btn-danger btn-sm' name='delete_course' onclick='return confirm('Do you really want to Delete ?');'><i class='icon-trash'></i></button>
                            </form>
                          </td>";
                    echo "</tr>" ;
                    $cnt=$cnt+1;
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
 