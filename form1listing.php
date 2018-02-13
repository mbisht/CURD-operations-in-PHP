<?php
	
	
	include("header.php");
	?>
	


<div class="container">
  
  
  <!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--!>
  
  
  <!--all format copied from https://datatables.net/examples/styling/bootstrap.html-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
  
  
  

		<style>
			.navbar-custom {
				background-color: ;
			}
		</style>
  
</head>
<body>
<?php 
	//include("dbconfig.php");
?>			



<div class="container">
  <h3>Form1 Details</h3>
  <!--<p>Use the .navbar-form class to vertically align form elements (same padding as links) inside the navbar.</p>-->
 
<script> 
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
  
  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                
                <th><center>Name</center></th>
                <th><center>Designation</center></th>
                <th><center>Experience</center></th>
				 <th><center>Salary</center></th>
				
                <th><center>Action</center></th>
                <th><center>Action</center></th>
                <th><center>Action</center></th>
            </tr>
        </thead>
        <tbody>
			<?php 
			include("dbconfig.php");
			$sql="select * from form1";
			$res=mysqli_query($con1,$sql);
			while($row=mysqli_fetch_object($res))
			
			{
				echo "<tr>\n";
				
				 //echo '<tr><td><td>';
				
				//echo "<td>".$row->f_name."\t".$row->m_name."\t".$row->l_name."</td>\n";
				echo "<td>".$row->name."</td>\n";
				echo "<td>".$row->designation."</td>\n";
				echo "<td>".$row->experience."</td>\n";
				echo "<td>".$row->salary."</td>\n";
			
				
				//echo "<td><a href='editpif.php?id=".$row->id."'>EDIT</a></td>"; &nbsp;&nbsp;
				//echo "<td><a href='deletepif.php?id=".$row->id."'>DELETE</a></td>";
				
				echo"<td><a href='view.php?id=".$row->id."'  ><span class='glyphicon glyphicon-ok'>VIEW</span></a></td>\n"; 
				echo"<td><a href='edit.php?id=".$row->id."' class='glyphicon glyphicon-pencil'>EDIT</a></td>\n";
				echo"<td><a onclick='myFunction()' href='delete.php?id=".$row->id."' class='glyphicon glyphicon-trash'>DELETE</a></td>\n";
				
				echo "</tr>";
			}
			
		//mysqli_close($con1);
?>
		
        </tbody>
    </table>
  
  
</div>

</body>
<p id="demo"></p>
<script type="text/javascript">

function myFunction() {

    var txt;
    if (confirm("Are you sure you want to delete?") == true) {
		
        txt = "You pressed OK!";
		window.location.href='deletepif.php?id=".$row->id."';
    } else {
		//window.location.href='listpif.php?id=".$row->id."';
		
        txt = "You pressed Cancel!";
		header("Location:listpif.php");
    }
    $("#demo").innerHTML = txt;
}



     <!-- function ConfirmDelete()
    //  {
      //      if (confirm("Are you sure you want to cancel? / Proceed to cancel?"))
				
        //         window.location.href='deletepif.php?id=".$row->id."';
     // } -->
  </script>
</html>
 

  
</div>

<?php
	include("footer.php");
?>