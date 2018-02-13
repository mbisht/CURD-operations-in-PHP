<?php
    error_reporting(0);
	include("dbconfig.php");
	
	$id=$_POST['id'];
	$name=$_POST['name'];
	$designation=$_POST['designation'];
	$experience=$_POST['experience'];
	$salary=$_POST['salary'];
	
	
	$sql="update form1 set name='$name',designation='$designation',experience='$experience',salary='$salary' where id='$id'";
	mysqli_query($con1,$sql);
	header("location:form1listing.php");
	
	//mysqli_close($con1);
?>