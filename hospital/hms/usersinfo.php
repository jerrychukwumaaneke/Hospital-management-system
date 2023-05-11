<?php 
session_start();
error_reporting(0);
include("include/config.php");
 ?>

 <?php

$login=$_SESSION['login'];
$query_run=mysqli_query($con, "SELECT * FROM users WHERE id='$login'");
$row=mysqli_fetch_array($query_run);
$fname=$row['fullName'];
$address=$row['address'];
$city=$row['city'];
$gender=$row['gender'];
$email=$row['email'];
$img=$row['profilpic'];

?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<title>User Medical History</title>
		
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
		
		<script type="text/javascript">
//function valid()
// //{
//  if(document.registration.password.value!= document.registration.password_again.value)
// {
// alert("Password and Confirm Password Field do not match  !!");
// document.registration.password_again.focus();
// return false;
// }
// return true;
// }
</script>
		

	</head>

	<body class="login">
		<!-- start: REGISTRATION -->
		<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">User Medhistory</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User</span>
									</li>
									<li class="active">
										<span>Medhistory</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15">User <span class="text-bold">Medhistory</span></h5>


									 <h4 style="color: blue; text-align: center;">Welcome !! <?php echo $fname;?></h4>
									 <div class="box-register">

	                        <div class="form-group">
								
      							<img src="images/patients_images/<?= $img ?>" alt="profilpic" width="80" height="80">
							</div>



     <br>
     <br>  

		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<!-- start: REGISTER BOX -->
				<div class="box-register">

	                        <div class="form-group">
								<label>Full Name</label>
      	<p class="form-control" > <?php echo $fname; ?></p>
							</div>


							<div class="form-group">
								<label>Address</label>
      	<p class="form-control" > <?php echo $address; ?></p>
							</div>


							<div class="form-group">
							<label>City</label>
      	<p class="form-control" > <?php echo $city; ?></p>
							</div>


							<div class="form-group">
								<label>Gender</label>
      	<p class="form-control" > <?php echo $gender; ?></p>
							</div>


							<div class="form-group">
								<label>Email</label>
      	<p class="form-control" > <?php echo $email; ?></p>
							</div>
				

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
				</div>

			</div>
<?php include('include/footer.php'); ?>
<?php include('include/setting.php');?>
</div>
		
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
		
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>	
	
	</body>
	<!-- end: BODY -->
</html>

