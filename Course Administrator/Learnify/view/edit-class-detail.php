<!DOCTYPE html>
<html lang="en">
<head>
  <body>
<?php include_once('../controller/editcontrol1.php');?>

<?php include_once('includes/header.php');?>

 <div class="container-fluid page-body-wrapper">

 <?php include_once('includes/sidebar.php');?>

   <div class="main-panel">
     <div class="content-wrapper">
       <div class="page-header">
         <h3 class="page-title"> Update Categories </h3>
         <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
             <li class="breadcrumb-item active" aria-current="page"> Update Categories</li>
           </ol>
         </nav>
       </div>
       <div class="row">
     
         <div class="col-12 grid-margin stretch-card">
           <div class="card">
             <div class="card-body">
               <h4 class="card-title" style="text-align: center;">Update Categories</h4>
              
    <div class="container">
        <h2>Edit Category</h2>
        <form method="post">
            <div class="form-group">
                        <label for="exampleInputName1">Category Name</label>
                        <input type="text" name="cname" value="<?php echo $category['CategoryName']; ?>" class="form-control" required='true'>
                      </div>
                      
                     <div class="form-group">
                        <label for="exampleInputName1">Category ID</label>
                        <input type="text" name="cid" value="<?php echo $category['CategoryID']; ?>" class="form-control" required='true'>
                      </div>

    
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Update</button>
        </form>
    </div>
</body>
</html>
 