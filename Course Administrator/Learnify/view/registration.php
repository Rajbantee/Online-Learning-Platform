<?php 
include('../controller/process.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  
    <title>Learnify|| Registration Page</title>

 
    <link rel="stylesheet" href="assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
   <style>
     .content-wrapper{
          background-image: url('assets/images/background.jpg');
          background-size: cover;
     }
   </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-center p-5">
                <div class="brand-logo">
                  <img src="assets/images/logo.png">
                </div>
                <h4>Course Administrator</h4>
                <form class="forms-sample row" method="post" enctype="multipart/form-data" >

                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">Admin Name</label>
                        <input type="text" name="AName" value="" class="form-control">
                        <?php echo $nameError; ?>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">User Name</label>
                        <input type="text" name="username" value="" class="form-control">
                        <?php echo $usernameError; ?>
                      </div>
                      
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">Mobile Number</label>
                        <input type="text" name="mblnum" value="" class="form-control">
                        <?php echo $mblnumError; ?>
                      </div>

                      <div class="form-check col-md-6">
                        <label for="exampleInputName1">Gender</label>
                        <input type="radio" name="Gender" value="Male"> Male
                        <input type="radio" name="Gender" value="Female"> Female 
                        <?php echo $genderError; ?>
                     </div>
                      
                   
                      <div class="form-group col-md-12">
                        <label for="exampleInputName1">Email</label>
                        <input type="email" name="email" value="" class="form-control">
                        <?php echo $emailError; ?>
                      </div>

                      <div class="form-group col-md-12">
                        <label for="exampleInputName1">Password</label>
                        <input type="passsword" name="pass" value="" class="form-control">
                        <?php echo $passwordError; ?>
                      </div>

         
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Register</button>
                      <button type="reset" class="btn btn-primary mr-2" name="reset">Reset</button>
                    <div class="form-check">
                    <a href="index.php" class="auth-link text-black">Already have an account?</a>
                   </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>