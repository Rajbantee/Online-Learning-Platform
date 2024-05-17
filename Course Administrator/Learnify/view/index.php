<!DOCTYPE html>
<html lang="en">
<head>
  <title>Learnify || Login Page</title>
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .content-wrapper {
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
              <form class="pt-3" id="login" method="post" name="login" action="../controller/logincontrol.php">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" placeholder="enter your username" required="true" name="username" value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>" >
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" placeholder="enter your password" name="password" required="true" value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>">
                </div>
                <div class="mt-3">
                  <button class="btn btn-success btn-block loginbtn" name="login" type="submit">Login</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                  <input type="checkbox" id="remember" name="remember" <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?> /> Keep me signed in
                  </div>
                  <div class="form-check">
                    <a href="registration.php" class="auth-link text-black">Don't have an account?</a>
                  </div>
                  <div class="form-check">
                    <a href="forgot-password.php" class="auth-link text-black">Forgot Password?</a>
                  </div>
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
