<!DOCTYPE html>
<html lang="en">
<head>
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
              
    
<?php include_once('../controller/editcontrol2.php');?>
    <div class="container">
        <h2>Edit Course</h2>
        <form method="post">
            <input type="hidden" name="course_id" value="<?php echo $course['CourseID']; ?>">
            <div class="form-group">
                        <label for="exampleInputName1">Course Name</label>
                        <input type="text" name="uname" value="<?php echo $course['CourseName']; ?>" class="form-control" required='true'>
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
                     <div class="form-group">
                        <label for="exampleInputName1">Price</label>
                        <input type="text" name="connum" value="<?php echo $course['Price']; ?>" class="form-control" required='true' maxlength="10" pattern="[0-9]+">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Course Details</label>
                        <textarea name="address" class="form-control" required='true'><?php echo $course['CourseDetails']; ?></textarea>
                      </div>

    
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Update</button>
        </form>
    </div>
</body>
</html>
 