<?php
session_start();
error_reporting(0);
include('include/config.php');
//include('include/checklogin.php');
//check_login();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Clinic |  Manage Patient</title>
		
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
	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
<div class="app-content">
<?php include('include/header.php');?>
<div class="main-content" >
<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle">Clinic | Manage Patient</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Clinic</span>
</li>
<li class="active">
<span>Manage Patient</span>
</li>
</ol>
</div>
</section>
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<h5 class="over-title margin-bottom-15">Clinic<span class="text-bold">Medical History</span></h5>




<br><br>

<form role="form" method="post" name="search">

<div class="form-group">
<label for="doctorname">
Search by Name.
</label>
<input type="text" name="searchdata" id="searchdata" class="form-control" value="" required='true'>
</div>

<button type="submit" name="search" id="submit" class="btn btn-o btn-primary">
Search
</button>
</form>
<?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4>
<table class="table table-hover" id="sample-table-1">
	<thead>
<tr>
<th class="center">s/n</th>
<th>Patient Name</th>
<th>Blood Pressure</th>
<th>Blood Sugar</th>
<th>Weight </th>
<th>Temperature </th>
<th>Medical Pressure</th>
<!-- <th>Creation Date </th>
<th>Updation Date </th>
<th>Action</th> -->
</tr>
</thead>
<tbody>
<?php

$sql=mysqli_query($con,"select * from tblmedicalhistory where patientname like '%$sdata%'");
$cnt=1;
if (mysqli_num_rows($sql)>0) 
{
 foreach ($sql as $tblmedicalhistory)
  {
?>
<tr>
<td><?php echo $cnt;?></td>


	<td><?= $tblmedicalhistory['patientname']?></td>
	<td><?= $tblmedicalhistory['BloodPressure']?></td>
	<td><?= $tblmedicalhistory['BloodSugar']?></td>
	<td><?= $tblmedicalhistory['Weight']?></td>
	<td><?= $tblmedicalhistory['Temperature']?></td>
	<td><?= $tblmedicalhistory['MedicalPres']?></td>
	<!-- <td><?= $tblmedicalhistory//['PatientMedhis']?></td> -->
	<!-- <td><?= $tblpatient//['CreationDate']?></td>
	<td><?= $tblpatient//['updationDate']?></td>
 -->	<!-- <td>
  <a href="view-medhistory.php?viewid=<?=$tblpatient//['ID']; ?>" title="view"><i class="fa fa-eye" style="color: black;"></i></a>
  <a href="update.php?id=<?=$tblpatient//['ID'];?>"   title="edit"><i class="fa fa-edit" style="color: blue;"></i></a>
  <a onclick="return confirm('Are you sure, you want to delete?')" href="delete.php?id=<?=$tblpatient//['ID']; ?>"  title="delete" ><i class="fa fa-trash" style="color: red;"></i></a>
    </td> -->	
</tr>
<?php 
$cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="8"> No record found against this search</td>

  </tr>
   
<?php } }?></tbody>
</table>







<br>
<br>
<br>




































	
<table class="table table-hover" id="sample-table-1">
<thead>
<tr>
<th class="center">s/n</th>
<th>Patient Name</th>
<th>Blood Pressure</th>
<th>Blood Sugar</th>
<th>Weight </th>
<th>Temperature </th>
<th>Medical Pressure</th>
<!-- <th>Creation Date </th>
<th>Updation Date </th>
<th>Action</th> -->
</tr>
</thead>
<tbody>
<?php
//$uid=$_SESSION['id'];
$query= "SELECT * FROM tblmedicalhistory";
$sql=mysqli_query($con, $query);
$cnt=1;
if (mysqli_num_rows($sql)>0) 
{
 foreach ($sql as $tblmedicalhistory) {
    	//echo $students['name'];
?>
<tr>
	<td><?php echo $cnt;?></td>

	<td><?= $tblmedicalhistory['patientname']?></td>
	<td><?= $tblmedicalhistory['BloodPressure']?></td>
	<td><?= $tblmedicalhistory['BloodSugar']?></td>
	<td><?= $tblmedicalhistory['Weight']?></td>
	<td><?= $tblmedicalhistory['Temperature']?></td>
	<td><?= $tblmedicalhistory['MedicalPres']?></td>
	<!-- <td><?= $tblmedicalhistory//['PatientMedhis']?></td> -->
	<!-- <td><?= $tblpatient//['CreationDate']?></td>
	<td><?= $tblpatient//['updationDate']?></td>
 -->	<!-- <td>
  <a href="view-medhistory.php?viewid=<?=$tblpatient//['ID']; ?>" title="view"><i class="fa fa-eye" style="color: black;"></i></a>
  <a href="update.php?id=<?=$tblpatient//['ID'];?>"   title="edit"><i class="fa fa-edit" style="color: blue;"></i></a>
  <a onclick="return confirm('Are you sure, you want to delete?')" href="delete.php?id=<?=$tblpatient//['ID']; ?>"  title="delete" ><i class="fa fa-trash" style="color: red;"></i></a>
    </td> -->	
</tr>
<?php 
$cnt=$cnt+1;
 }
   }
      ?>
</tbody>
</table>

<br>
					<br>
<button><a href="dashboard.php" style="text-decoration: none;">Back</a></button>


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
