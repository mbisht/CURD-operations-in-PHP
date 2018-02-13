<?php
	include("dbconfig.php");
	
	$name=$_POST['name'];
	//echo $name;
	$designation=$_POST['designation'];
	//echo $username;
	$experience=$_POST['experience'];
	//echo $email;
	$salary=$_POST['salary'];
	//echo $password;
	
	
	$sql="insert into form1(name,designation,experience,salary)
	values('$name','$designation','$experience','$salary')";
	
	mysqli_query($con1,$sql);
	
	header("lOcation: form1.php");
	
?>
