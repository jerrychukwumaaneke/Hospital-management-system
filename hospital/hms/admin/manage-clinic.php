<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();


if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from clinic where id = '".$_GET['id']."'");
                  $_SESSION['msg']="data deleted !!";
		  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Manage Clinic-Doctors</title>
		
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
					
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | Manage Clinic-Doctors</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Manage Clinic-Doctors</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Docters</span></h5>
									<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	


								<form role="form" method="post" name="search"> 

<div class="form-group">
<label for="doctorname">
Search by Name
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
	<th>Image</th>
		<th class="hidden-xs">Doctor Name</th>
												<th>Doctor Clinic Address </th>
												<th>Doctor Consultance Fees</th>
												<th>Doctor Contact no </th>
												<th>Doctor Email</th>
												
												<th>Action</th>
											
		
							
</tr>
</thead>
<tbody>
<?php

$sql=mysqli_query($con,"select * from hclinic where docname like '%$sdata%'");
$num=mysqli_num_rows($sql);
if($num>0){
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
<tr>
<td class="center"><?php echo $cnt;?>.</td>

<td><img src="../images/docimages/<?php echo $row['profilpic'];?>" width="80" height="80"></td>
												<!-- <td><?= $users//['profilpic']?></td> -->
												<td><?php echo $row['docname']?></td>
												<td><?php echo $row['address']?></td>
												<td><?php echo $row['fees']?></td>
												<td><?php echo $row['contact']?></td>
												<td><?php echo $row['email']?></td>
												<td>


		<div class="visible-md visible-lg hidden-sm hidden-xs">
 <a href="cliviewdoc.php?viewid=<?php echo $row['id'];?>" title="view"><i class="fa fa-eye" style="color: black;"></i></a>

							<a href="cliupdatedoc.php?id=<?php echo $row['id'];?>" title="edit"><i class="fa fa-edit" style="color: blue;"></i></a>
													
	<a onclick="return confirm('Are you sure, you want to delete?')" href="clideldoc.php?id=<?php echo $row['id']; ?>"  title="delete" ><i class="fa fa-trash" style="color: red;"></i></a>
 
												</div>

 
												</td>										
											</tr>
											
											<?php 
$cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="8"> No record found against this search</td>

  </tr>
   
<?php } }?>
											
</tbody>
</table>







<br>
<br>
<br>






















































									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">s/n</th>

												<th>Image</th>
												<th class="hidden-xs">Doctor Name</th>
												<th>Doctor Clinic Address </th>
												<th>Doctor Consultance Fees</th>
												<th>Doctor Contact no </th>
												<th>Doctor Email</th>
												
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
<?php
// $uid=$_SESSION['id'];
$query= "SELECT * FROM hclinic";
$sql=mysqli_query($con, $query);
$cnt=1;
if (mysqli_num_rows($sql)>0) 
{
 foreach ($sql as $hclinic) {
?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td><img src="../images/docimages/<?= $hclinic['profilpic'] ?>" width="80" height="80"></td>
												<td><?= $hclinic['docname']?></td>						
												<td><?= $hclinic['address'];?></td>
											    <td><?= $hclinic['fees'];?></td>
												<td><?= $hclinic['contact'];?></td>
												<td><?= $hclinic['email'];?></td>
												
												</td>
												
												<td >
												<div class="visible-md visible-lg hidden-sm hidden-xs">
 <a href="cliviewdoc.php?viewid=<?=$hclinic['id'];?>" title="view"><i class="fa fa-eye" style="color: black;"></i></a>

							<a href="cliupdatedoc.php?id=<?=$hclinic['id'];?>" title="edit"><i class="fa fa-edit" style="color: blue;"></i></a>
													
	<a onclick="return confirm('Are you sure, you want to delete?')" href="clideldoc.php?id=<?=$hclinic['id']; ?>"  title="delete" ><i class="fa fa-trash" style="color: red;"></i></a>
 
												</div>
												</td>
											</tr>
										
<?php 
$cnt=$cnt+1;
 }
 }  
      ?>	
											
											
										</tbody>
									</table>
									<a href="dashboard.php"  class="btn btn-o btn-primary";>Back</a>
								</div>
							</div>
								</div>
							</div>
						</div>
						<!-- end: BASIC EXAMPLE -->
						<!-- end: SELECT BOXES -->
						
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
