<?php
	include("dbconfig.php");

	$id=$_REQUEST['id'];
	
	$sql="delete from form1 where id='$id'";
	mysqli_query($con1,$sql);
	echo "data deleted";
	header("Location:form1listing.php");

	//mysqli_close($con1);
?>