

<?php include_once('../controller/editcontrol2.php');?>

     <?php include_once('includes/header.php');?>

      <div class="container-fluid page-body-wrapper">
 
      <?php include_once('includes/sidebar.php');?>

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Update Courses </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Update Courses</li>
                </ol>
              </nav>
            </div>
            <div class="row">
          
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Update Courses</h4>
                   
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                      <?php
$eid=$_GET['editid'];
$sql="SELECT * from tblstudent where ID=:eid";
$query = $dbh -> prepare($sql);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                      <div class="form-group">
                        <label for="exampleInputName1">Course Name</label>
                        <input type="text" name="uname" value="<?php  echo htmlentities($row->CourseName);?>" class="form-control" required='true'>
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputEmail3">Category</label>
                        <select  name="stuclass" class="form-control" required='true'>
                        <option value="">Select Category</option> <?php 

$sql2 = "SELECT * from    tblclass ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$result2=$query2->fetchAll(PDO::FETCH_OBJ);
foreach($result2 as $row1)
{          
    ?>  
<option value="<?php echo htmlentities($row1->CategoryName);?><?php echo htmlentities($row1->CategoryID);?>"><?php echo htmlentities($row1->CategoryName);?> <?php echo htmlentities($row1->CategoryID);?></option>
 <?php } ?> 
                        
</select>
</div>
                      <div class="form-group">
                        <label for="exampleInputName1">Course ID</label>
                        <input type="text" name="stuid" value="<?php  echo htmlentities($row->CourseID);?>" class="form-control" required='true'>
                      </div>
                     
                      <div class="form-group">
                        <label for="exampleInputName1">Price</label>
                        <input type="text" name="connum" value="<?php  echo htmlentities($row->Price);?>" class="form-control" required='true' maxlength="10" pattern="[0-9]+">
                      </div>
                  
                      <div class="form-group">
                        <label for="exampleInputName1">Course Details</label>
                        <textarea name="address" class="form-control" required='true'><?php  echo htmlentities($row->CourseDetails);?></textarea>
                      </div>

                      </div><?php $cnt=$cnt+1;}} ?>
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Update</button>
</div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
       
         <?php include_once('includes/footer.php');?>
          <!-- partial -->
        </div>
     
      </div>
    
    </div>
