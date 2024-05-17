
<?php include_once('../controller/addcontrol4.php');?>
 
     <?php include_once('includes/header.php');?>
  
      <div class="container-fluid page-body-wrapper">
     
      <?php include_once('includes/sidebar.php');?>
      
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add Instructors </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Add Instructors</li>
                </ol>
              </nav>
            </div>
            <div class="row">
          
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                   
                   
                    <form method="post" enctype="" >
                      
     
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">Instructor Name</label>
                        <input type="text" name="uname" value="" class="form-control" required='true'>
                      </div>
             
                     
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">Faculty</label>
                        <input type="text" name="faculty" value="" class="form-control" required='true'>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">Department</label>
                        <input type="text" name="department" value="" class="form-control" required='true'>
                      </div>
                      
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">Specialization</label>
                        <input type="text" name="spl" value="" class="form-control" required='true'>
                      </div>
                   
                      <div class="form-group col-md-12">
                        <label for="exampleInputName1">Email</label>
                        <input type="email" name="stuid" value="" class="form-control" required='true'>
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
 
