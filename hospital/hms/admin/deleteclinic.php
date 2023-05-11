<?php 
include ('include/config.php');
$id=$_GET['id'];
$query="DELETE FROM tblmedicalhistory WHERE id='$id'";
$query_run=mysqli_query($con, $query);

echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'clinic.php'</script>";     

if ($query_run){
	?>
<script type="text/javascript">
	alert("Data Deleted Successfully")
	window.open("http://localhost/hospital/hms/admin/clinic.php",
    		"_self");
</script>
	<?php
}
else{
	?>

	<script type="text/javascript">
		alert("Data failed to delete");
	</script>
	<?php
}
?>
