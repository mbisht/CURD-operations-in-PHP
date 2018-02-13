<?php
	session_start();
	
	//session_Clear();
	//session_Abandon();
	//setTimeout("preventBack()", 0);
	
	if(empty($_SESSION['email']))
	{
		header("Location:index.php");
	}
?>

<html>
	<head><title>Home page</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
	
	
	<script type="text/javascript" language="javascript">
window.history.forward(1);
document.attachEvent("onkeydown", my_onkeydown_handler);
function my_onkeydown_handler()
{
switch (event.keyCode)
{
case 116 : // F5;
event.returnValue = false;
event.keyCode = 0;
window.status = "We have disabled F5";
break;
}
}
</script>



	
	</head>
	<body onload="disableBackButton()">
	
	
	<nav class="navbar navbar-inverse">
	<div class="container-fluid">
    <div class="navbar-header">
	
	<a class="navbar-brand" href="#">Drivecool	|	
	<?php echo $_SESSION['email'];?>
	</a>
	</div>
		<ul class="nav navbar-nav">
		<li class="active"><a href="home.php">HOME</a></li>
		<li><a href="form1.php">Entry Form</a></li>
		<li><a href="form1listing.php">Listing</a></li>
		<li><a href="#">ABOUT US</a></li>
		</ul>
		
	<ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> </a></li> <?php //echo $_SESSION['email'];?> </a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
    </ul>
		
	</div>
	</nav>