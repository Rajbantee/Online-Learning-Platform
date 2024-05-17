<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once('../controller/editcontrol3.php');?>

<?php include_once('includes/header.php');?>

 <div class="container-fluid page-body-wrapper">

 <?php include_once('includes/sidebar.php');?>

   <div class="main-panel">
     <div class="content-wrapper">
       <div class="page-header">
         <h3 class="page-title"> Update Notices </h3>
         <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
             <li class="breadcrumb-item active" aria-current="page"> Update Notices</li>
           </ol>
         </nav>
       </div>
       <div class="row">
     
         <div class="col-12 grid-margin stretch-card">
           <div class="card">
             <div class="card-body">
               <h4 class="card-title" style="text-align: center;">Update Notices</h4>
              
    
<?php include_once('../controller/editcontrol3.php');?>
    <div class="container">
        <h2>Edit Notice</h2>
        <form method="post">
            <input type="hidden" name="notice_id" value="<?php echo $notice['NoticeID']; ?>">
            <div class="form-group">
                        <label for="exampleInputName1">Notice Title</label>
                        <input type="text" name="nottitle" value="<?php echo $notice['NoticeTitle']; ?>" class="form-control" required='true'>
                      </div>
                      <div class="form-group col-md-6">
                                        <label for="exampleInputEmail3">Category</label>
                                        <select name="classid" class="form-control" required>
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
                        <label for="exampleInputName1">Notice Message</label>
                        <textarea name="notmsg" class="form-control" required='true'><?php echo $notice['NoticeMessage']; ?></textarea>
                      </div>

    
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Update</button>
        </form>
    </div>
</body>
</html>
 