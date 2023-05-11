<?php 
session_start();
//error_reporting(0);
include('include/config.php');
if(isset($_POST['submit']))
  {
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from users where  (Email='$email') && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['login']=$ret['ID'];
     echo "<script type='text/javascript'> document.location ='usersinfo.php'; </script>";
    }
    else{
    echo "<script>alert('Invalid Details');</script>";
    }
  }
  ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>User-Login</title>
    
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
    <link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />


 <style type="text/css">
    body{ 
        background-image: url('../images/slider-image2.jpg');      
        background-repeat: no-repeat;
        background-size: cover;
    }
    .reg{
        border-radius: 30px;
    }
</style>

  </head>
  <body class="login">
    <div class="row">
      <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="logo margin-top-30">
        <a href="../index.html"><h2> JCTH | Patient Login</h2></a>
      
        <form class="form-login" method="post">
        <fieldset>
              <legend>
                Sign in to your account
              </legend>
              <div>Please enter your email and password to log in</div>
              <div>
                <br>
<span class="input-icon">
<input type="email" name="email" class="form-control" required="true" placeholder="email" autofocus="true"/>  
<i class="fa fa-user"></i></span>
</div>
<br>
        <div>
            <span class="input-icon">
        <input type="password" class="form-control" required="true" name="password" placeholder="Password" />
        <i class="fa fa-lock"></i>
         </span><a href="forgot-password.php">
                  Forgot Password ?
                </a>
              </div>
              <div class="form-actions">
                
                <button type="submit" class="btn btn-primary pull-right" name="submit">
                  Login <i class="fa fa-arrow-circle-right"></i>
                </button>
              </div>
              <div class="new-account">
                Don't have an account yet?
                <a href="registration.php">
                  Create an account
                </a>
              </div>
            </fieldset>
</form>
<div class="copyright">
            &copy; <span class="current-year"></span><span class="text-bold text-uppercase"> JCTH</span>. <span>All rights reserved</span>
          </div>
</div>
</div>
</div>
</body>
</html>
