
<?php include_once('../controller/managecontrol4.php');?>

     <?php include_once('includes/header.php');?>

      <div class="container-fluid page-body-wrapper">

        <?php include_once('includes/sidebar.php');?>

        <div class="main-panel">
          <div class="content-wrapper">
             <div class="page-header">
              <h3 class="page-title"> Manage Instructors </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Manage Instructors</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Manage Instructors</h4>
                      <a  class="text-dark ml-auto mb-3 mb-sm-0"> View all Instructors</a>
                    </div>
                    <div class="table-responsive border rounded p-1">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="font-weight-bold">S.No</th>
                            <th class="font-weight-bold">Instructor ID</th>
                            <th class="font-weight-bold">Instructor Name</th>
                            <th class="font-weight-bold">Faculty</th>
                            <th class="font-weight-bold">Department</th>
                            <th class="font-weight-bold">Assigned Courses</th>
                            <th class="font-weight-bold">Email</th>
                            <th class="font-weight-bold">Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                // Fetch and display course data
                $cnt=1;
               
            
                foreach ($result as $instructor) {
                    echo "<tr>";
                    echo "<td>" . htmlentities($cnt) . "</td>";
                    echo "<td>" . $instructor['id'] . "</td>";
                    echo "<td>" . $instructor['name'] . "</td>";
                    echo "<td>" . $instructor['faculty'] . "</td>";
                    echo "<td>" . $instructor['department'] . "</td>";
                    echo "<td>" . $instructor['specialization'] . "</td>";
                    echo "<td>" . $instructor['email'] . "</td>";
                    echo "<td>
                    <form method='post'>
                    <a href='edit-public-notice-detail.php?instructor_id=". $instructor['id'] ."' class='btn btn-primary btn-sm'><i class='icon-eye'></i></a>
                                <input type='hidden' name='instructor_id' value='" . $instructor['id'] . "' >
                                <button type='submit' class='btn btn-danger btn-sm' name='delete_instructor' onclick='return confirm('Do you really want to Delete ?');'><i class='icon-trash'></i></button>
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
 