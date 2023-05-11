<?php
session_start();
error_reporting(0);
include_once('hms/include/config.php');
if (strlen($_SESSION['uid']==0)) {
  header('location:logout.php');
  } 

?>

 <?php
 $uid=$_SESSION['uid'];
$query_run=mysqli_query($con, "SELECT * FROM tblcontactus WHERE id='$uid' ");
$row=mysqli_fetch_array($query_run);
$name=$row['fullname'];
$email=$row['email'];
$mobileno=$row['contactno'];
$dscrption=$row['message'];
?> 


<!DOCTYPE HTML>
<html>
	<head>
		<title> JTCH | Contact us</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
		<a href="index.html" style="font-size: 30px;">Jerry College Teaching Hospital</a> 
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li><a href="index.html">Home</a></li>
					
						<li class="active"><a href="contact.php">contact</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		    <div class="clear"> </div>


                    <h4 style="color: blue; text-align: center;">Welcome !! <?php echo $name;?></h4>                	


<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<center><h2>Your Contact Details</h2></center>
				  	<br>
				  	<br>
					    <form name="contactus" method="post">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<p> <?php echo $name; ?></p>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<p> <?php echo $email; ?></p>
						    </div>
						    <div>
						     	<span><label>MOBILE.NO</label></span>
						     	<p> <?php echo $mobileno; ?></p>
						    </div>
						    <div>
						    	<span><label>Description</label></span>
						    	<p> <?php echo $dscrption; ?></p>
						    </div>
						     <div>
						   		<a href="contact.php">Back</a>
						  </div>
					    </form>
				    </div>
  				</div>






















	      <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						<li><a href="index.html">Home</a></li>
						
						<li><a href="contact.php">contact</a></li>
					</ul>
		   	</div>
		  
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

