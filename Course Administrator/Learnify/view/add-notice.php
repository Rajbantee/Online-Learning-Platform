<?php include_once('../controller/addcontrol3.php');?>

     <?php include_once('includes/header.php');?>
  
      <div class="container-fluid page-body-wrapper">

      <?php include_once('includes/sidebar.php');?>

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Add Notice </h3>

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

              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Add Notice</li>
                </ol>
              </nav>
            </div>
            <div class="row">
          
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Add Notice</h4>
                   
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                      
                    <div class="form-group">
                        <label for="exampleInputName1">Notice ID</label>
                        <input type="text" name="noticeID" value="" class="form-control" required='true'>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Notice Title</label>
                        <input type="text" name="nottitle" value="" class="form-control" required='true'>
                      </div>
                     
                      <div class="form-group">
                        <label for="exampleInputEmail3">Notice For</label>
                        <select  name="classid" class="form-control" required='true'>
                          <option value="">Select Course</option>
                          <?php 
                                            $sql = "SELECT * FROM tblstudent";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                                    echo "<option value='".$row['CourseName'].$row['CourseID']."'>".$row['CourseName'].$row['CourseID']."</option>";
                                                }
                                            }
                                            ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Notice Message</label>
                        <textarea name="notmsg" value="" class="form-control"></textarea>
                      </div>
                   
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Add</button>
                     
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

         <?php include_once('includes/footer.php');?>
        </div>
      </div>
    </div>


