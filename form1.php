<?php
	
	
	include("header.php");
	?>
	


<div class="container">
  
	<h2>Basic Details</h2>
  <form action="saveform1.php" method="POST">
    <div class="form-group">
      <label for="Name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="Designation">Designation:</label>
      <input type="text" class="form-control" id="designation" placeholder="Enter Designation" name="designation">
    </div>
    <div class="form-group">
      <label for="experience">Experience:</label>
      <input type="text" class="form-control" id="experience" placeholder="Enter experience" name="experience">
    </div>
	<div class="form-group">
      <label for="Salary">Salary:</label>
      <input type="text" class="form-control" id="salary" placeholder="Enter salary" name="salary">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
  
</div>

<?php
	include("footer.php");
?>


