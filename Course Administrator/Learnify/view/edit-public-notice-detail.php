  <?php include_once('../controller/editcontrol4.php');?>
      <?php include_once('includes/header.php');?>
    
      <div class="container-fluid page-body-wrapper">
        
      <?php include_once('includes/sidebar.php');?>
    
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Update Instructors </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Update Instructors</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Update Instructors</h4>
                   
                    <form method="post" enctype="">
                    <?php include_once('../controller/editcontrol4.php');?>
    <div class="container">
        <h2>Edit Instructor</h2>
        <form method="post">
            <input type="hidden" name="instructor_id" value="<?php echo $instructor['id']; ?>">
            <div class="form-group">
                      <div class="form-group">
                        <label for="exampleInputName1">Instructor Name</label>
                        <input type="text" name="uname" value="<?php echo $instructor['name']; ?>" class="form-control" required='true'>
                      </div>
                      
                  
                      <div class="form-group">
                        <label for="exampleInputName1">faculty</label>
                        <input type="text" name="faculty" value="<?php echo $instructor['faculty']; ?>" class="form-control" required='true'>
                      </div>
                     
                      <div class="form-group">
                        <label for="exampleInputName1">Department</label>
                        <input type="text" name="department" value="<?php echo $instructor['department']; ?>" class="form-control" required='true'>
                      </div>
                  
                      <div class="form-group">
                        <label for="exampleInputName1">Specialization</label>
                        <input type="text" name="spl" value ="<?php echo $instructor['specialization']; ?>" class="form-control" required='true'>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="text" name="stuid" value ="<?php echo $instructor['email']; ?>" class="form-control" required='true'>
                      </div>

                  
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Update</button>
                      </div>
                    </form>
                  </div>
                </div>
    
         <?php include_once('includes/footer.php');?>
      
        </div>
  
      </div>
    </div>
