<?php
	session_start();
	include("dbconfig.php");
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$sql="select * from registration where email='$email' And password='$password'";
	
	$res=mysqli_query($con1,$sql);
	$totalnousers=mysqli_num_rows($res);
	
	if($totalnousers>0)
	{
		$_SESSION['email']=$email;
		header("Location:home.php");
	}
	else
	{
	header("Location:index.php");
	}
?>