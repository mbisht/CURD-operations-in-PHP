<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script src="validation.js"></script>
  
   <script language="javascript" type="text/javascript">
            function dynamicdropdown(listindex)
            {
                document.getElementById("area").length = 0;
                switch (listindex)
                {
                    case "Bangalore" :
                        document.getElementById("area").options[0]=new Option("Please select area","");
                        document.getElementById("area").options[1]=new Option("Marathahalli","Marathahalli");
                        document.getElementById("area").options[2]=new Option("HSR","HSR");
                        document.getElementById("area").options[3]=new Option("BTM","BTM");
                        document.getElementById("area").options[4]=new Option("Whitefield","Whitefield");
                        document.getElementById("area").options[5]=new Option("Kamanhaali","Kamanhaali");
                        break;
                    
                    case "Mysore" :
                        document.getElementById("area").options[0]=new Option("Please select area","");
                        document.getElementById("area").options[1]=new Option("MysoreFord","MysoreFord");
                        document.getElementById("area").options[2]=new Option("Mvillage","Mvillage");
                        break;
                }
                return true;
            }
       </script>
  
  
  
</head>
<body>

<div class="container">
<form name="form1" id="form1" action="saveregistration.php" method="POST">
  <h2>Registration Form</h2>
  <p>Please * fill all the deatils</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
		<th><input type="text" name="name" class="form-control" id="name" placeholder="please enter the name"></th>
      </tr>
    </thead>
	 <thead>
      <tr>
        <th>Username</th>
		<th><input type="text" name="username" class="form-control" id="username" placeholder="please enter the name"></th>
      </tr>
    </thead>
	 <thead>
      <tr>
        <th>Email</th>
		<th><input type="text" name="email" class="form-control" id="email" placeholder="please enter the name"></th>
      </tr>
    </thead>
	 <thead>
      <tr>
        <th>Password</th>
		<th><input type="password" name="password" class="form-control" id="password" placeholder="please enter the name"></th>
      </tr>
    </thead>
	 <thead>
      <tr>
        <th>City</th>
	<th>
		
		
		<select name="city" class="required-entry" id="city" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
                <option value="">Choose any one city</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Mysore">Mysore</option>
                <option value="Coorg">Coorg</option>
                <option value="Hampi">Hampi</option>
            </select>
		
		
		
	</th>
      </tr>
    </thead>
	
	 <thead>
      <tr>
        <th>Area</th>
		
		<th>
            <script type="text/javascript" language="JavaScript">
                document.write('<select name="area" id="area"><option value="">Please select area</option></select>')
            </script>
		
			
            <noscript>
                <select name="area" id="area" >
                    <option value="">Please select area</option>
                </select>
            </noscript>
       
	</th>	
		
      </tr>
    </thead>
   	
  </table>
  
	<div class="checkbox">
      <label><input type="checkbox" id="tick" name ="tick" required="required" /></label>
	  &nbsp;Agreed to all <a href="/terms-conditions" target="_blank">Terms &amp; Conditions</a>
    </div>
	
	
		<center><button type="submit" name="btn1"id="btn1" class="btn btn-success btn-lg">submit</button></center>
<a href="index.php">If you have want Login, Please click here...</a>		
	</form>
	
</div>
</body>
	</html>