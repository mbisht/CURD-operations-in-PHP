<?php
	include("dbconfig.php");
	
	$name=$_POST['name'];
	//echo $name;
	$username=$_POST['username'];
	//echo $username;
	$email=$_POST['email'];
	//echo $email;
	$password=$_POST['password'];
	//echo $password;
	$city=$_POST['city'];
	//echo $city;
	$area=$_POST['area'];
	//echo $area;
	
	$tick=$_POST['tick'];
	
	$sql="insert into registration(name,username,email,password,city,area,response)
	values('$name','$username','$email','$password','$city','$area','$tick')";
	
	mysqli_query($con1,$sql);
	
	header("lOcation: index.php");
	
?>
