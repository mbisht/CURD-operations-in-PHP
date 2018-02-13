<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  <!--	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>-->
	
	
	<!--<script src="assets/js/validation123.js"></script>-->
	<!--<script src="assets/js/jquery-3.1.1"></script>-->
	
	
  
  
 
  
</head>


<body>

<div class="container">
  <h2><u>View Page</u></h2>
  <p></p> 
  
  


<?php
	include("dbconfig.php");
	$id=$_REQUEST['id'];
	$sql="select * from form1 where id='$id'";
	
	$res=mysqli_query($con1,$sql);
	$row=mysqli_fetch_array($res);
  
	//mysqli_close($con1);
?>
<form id="form1" action="editpif.php?id=<?php echo $id;?>" method="POST">
  <table class="table table-bordered">
   
    <tbody>
      <tr>
        <td>Name</td>
		<td><input type="text" value="<?php echo $row['name']; ?>" name="name" class="form-control" id="name" style="border:none;background: transparent;border-style:none;"></td>
	 </tr>
	 
	 <tr>
        <td>Designation</td>
		<td><input type="text" value="<?php echo $row['designation']; ?>" name="designation"  class="form-control" id="name" style="border:none;background: transparent;border-style:none;"></td>
	 </tr>
	 
	 <tr>
        <td>Experience</td>
		<td><input type="text" value="<?php echo $row['experience']; ?>" name="experience"  class="form-control" id="experience" style="border:none;background: transparent;border-style:none;"></td>
	 </tr>
	 
	 <tr>
        <td>Salary</td>
		<td><input type="text" value="<?php echo $row['salary']; ?>" name="salary"  class="form-control" id="salary" style="border:none;background: transparent;border-style:none;"></td>
	 </tr>
	 
	   
	  
	<!--hidden id-->  
	
	<input type="hidden" value="<?php echo $row['id']; ?>" name="id" placeholder="" class="form-control" id="id" >	
     
    </tbody>
	
  </table>
  <center><b><i><a href="form1listing.php">BACK</a></center>
  <!--&nbsp;&nbsp;
  <button type="reset" name="reset" class="btn btn-danger btn-md">RESET</button>-->
  </form>
  
</div>

</body>
</html>