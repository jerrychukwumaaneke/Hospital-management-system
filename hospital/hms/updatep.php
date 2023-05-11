<?php
include('include/config.php');
$id=$_GET['id'];
$select="SELECT * FROM users WHERE id='$id'";
$query_run=mysqli_query($con, $select);
if (mysqli_num_rows($query_run)>0) 
{
 foreach ($query_run as $users) {
 }
 }
 ?>
 <?php 
if(isset($_POST['submit']))
{
  $login=$_SESSION['login'];
$fname=$_POST['full_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$email=$_POST['patemail'];
 $file_name=$_FILES['image']['name'];
 $file_path= 'images/patients_images/'. $file_name;
  move_uploaded_file($_FILES['image']['tmp_name'], $file_path);

$update="UPDATE users SET profilpic='$file_name',fullName='$fname',address='$address',city='$city',gender='$gender',email='$email' WHERE id='$id'";
    $ret=mysqli_query($con,$update);
    if ($ret)
    {
    ?>
    <script type="text/javascript">
    	alert("Data Updated Successfully");
    	window.open("http://localhost/hospital management system project/hospital/hms/usersinfo.php",
    		"_self");
    </script>	
    <?php
    }
    else {
    	?>
    	<script type="text/javascript">
    		alert("Data not updated")
    	</script>
    	<?php
    }
}
   ?>


<!DOCTYPE html>
<html lang="en">

	<head>
		<title>User Update</title>
		
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
									<h1 class="mainTitle">Users | Update Profile</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Users</span>
									</li>
									<li class="active">
										<span>Update Profile</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15">Users <span class="text-bold">Edit/Update Profile</span></h5>

		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<!-- start: REGISTER BOX -->
				<div class="box-register">
					<form role="form" name="" method="post" enctype="multipart/form-data">
						<fieldset>
							<legend>
								Edit Profile
							</legend>
							<p>
								Edit your personal details below:
							</p>
							<div class="form-group">
								<input type="text" class="form-control" name="full_name" placeholder="Full Name"  value="<?=$users['fullName']; ?>" required="true"   pattern="^[a-zA-z ]*$" title="only letters and blankspace required">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="address"  value="<?=$users['address']; ?>"placeholder="Address" required="true">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="city" placeholder="City"  value="<?=$users['city']; ?>"  required="true" pattern="^[a-zA-z ]*$" title="only letters and blankspace required">
							</div>
							<div class="form-group">
								<label class="block">
									Gender
								</label>
								<div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="gender" value="female" checked required>
									<label for="rg-female">
										Female
									</label>
									<input type="radio" id="rg-male" name="gender" value="male"  required>
									<label for="rg-male">
										Male
									</label>
								</div>
							</div>
							<div class="form-group">
<label for="fess">
Patient Email
</label>
<input type="email" id="patemail" name="patemail" class="form-control" value="<?=$users['email']; ?>" placeholder="Enter Patient Email id" required="true" onBlur="userAvailability()">
<span id="user-availability-status1" style="font-size:12px;"></span>
</div>



<div class="form-group">
	<p>Image</p>
								<img src="images/patients_images/<?=$users['profilpic'];?>" width="80" height="80">
							</div>






 <div class="form-group">

								<input type="file" name="image" class="form-control" size="60" required>
							</div>
 
							<div class="form-actions">
								<button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
									Update <i class="fa fa-arrow-circle-right"></i>

								</button>
								<a href="dashboard.php"   type=""  class="btn btn-o btn-primary">Back</a>

							</div>

							
						</fieldset>
					</form>
		
					

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

