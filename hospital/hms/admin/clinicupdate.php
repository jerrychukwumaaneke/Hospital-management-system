<?php 
include('include/config.php');
$id=$_GET['id'];
$select="SELECT * FROM tblmedicalhistory WHERE id='$id'";
$query_run=mysqli_query($con, $select);
if (mysqli_num_rows($query_run)>0) 
{
 foreach ($query_run as $tblmedicalhistory) {
 }
 }
 ?>
 <?php
 if(isset($_POST['submit']))
 {
	 //$vid=$_GET['viewid'];
    $pname=$_POST['name'];
    $bp=$_POST['bp'];
    $bs=$_POST['bs'];
    $weight=$_POST['weight'];
    $temp=$_POST['temp'];
   $pres=$_POST['pres'];


   
 $update="UPDATE tblmedicalhistory SET patientname='$pname',BloodPressure='$bp',BloodSugar='$bs',Weight='$weight',Temperature='$temp',Medicalpres='$pres' WHERE id='$id'";
    $ret=mysqli_query($con,$update);
    if ($ret)
    {
    ?>
    <script type="text/javascript">
    	alert("Data Updated Successfully");
    	window.open("http://localhost/hospital management system project/hospital/hms/admin/clinic.php",
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
		<title>Admin |Clinic-Patient</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />

	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#patemail").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
<div class="app-content">
<?php  include('include/header.php');?>
						
<div class="main-content" >
<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle">Admin | Update Patient</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Admin</span>
</li>
<li class="active">
<span>Clinic-Patient</span>
</li>
</ol>
</div>
</section>
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<div class="row margin-top-30">
<div class="col-lg-8 col-md-12">
<div class="panel panel-white">
<div class="panel-heading">
<h5 class="panel-title">Clinic-Patient</h5>
</div>
<div class="panel-body">
<form role="form" name="" method="post">
<div class="form-group">
<label for="doctorname">
Patient Name
</label>
<input type="text" name="name" class="form-control" value="<?=$tblmedicalhistory['patientname']; ?>"  placeholder="Patient Name" required="true">
</div>
<div class="form-group">
<label for="fess">
 Blood Pressure
</label>
<input type="text" name="bp" class="form-control"  value="<?=$tblmedicalhistory['BloodPressure']; ?>"   placeholder="Blood Pressure" required="true">
</div>
<div class="form-group">
<label for="fess">
Blood Sugar
</label>
<input type="text" name="bs" class="form-control"  value="<?=$tblmedicalhistory['BloodSugar']; ?>" placeholder="Blood Sugar" required="true">
</div>
<div class="form-group">
<label for="address">
Weight
</label>
<input type="text" name="weight" class="form-control"  placeholder="Weight"  value="<?=$tblmedicalhistory['Weight']; ?>" required="true">
</div>
<div class="form-group">
<label for="fess">
 Temperature
</label>
<textarea  name="temp" class="form-control"  placeholder="Temperature" required="true"><?=$tblmedicalhistory['Temperature']; ?></textarea>
</div>
<div class="form-group">
<label for="fess">
 Medical Pressure
</label>
<input type="text" name="pres" class="form-control"  value="<?=$tblmedicalhistory['MedicalPres']; ?>" placeholder="Medical Pressure" required="true">
</div>	




<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
Update
</button>
<button><a href="clinic.php" style="text-decoration: none;">Back</a></button>


</form>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="panel panel-white">
</div>
</div>
</div>
</div>
</div>
</div>				
</div>
</div>
</div>
			<!-- start: FOOTER -->
<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
