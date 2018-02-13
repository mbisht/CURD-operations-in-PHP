$(function(){
	$("#btn1").click(function(){
		var status=true;
		
		//alert ("hello");
		
		
	var name=$('#name').val().trim();
	 if(name=="")
	{
		status=false;
		$("#name").css({"border":"1px solid red"});
	}
	else{
			$("#name").css({"border":"1px solid green"});
	}
	
	
	var username=$('#username').val().trim();
	 if(username=="")
	{
		status=false;
		$("#username").css({"border":"1px solid red"});
	}
	else{
			$("#username").css({"border":"1px solid green"});
	}
	
	
	var email=$('#email').val().trim();
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	 //if(email_id=="")
	if((email=="") || (!filter.test(email)))
	{
		status=false;
		$("#email").css({"border":"1px solid red"});
	}
	else{
			$("#email").css({"border":"1px solid green"});
	}
	
	
	var password=$('#password').val().trim();
	 if(password=="")
	{
		status=false;
		$("#password").css({"border":"1px solid red"});
	}
	else{
			$("#password").css({"border":"1px solid green"});
	}
	
	
	var city=$('#city').val().trim();
	 if(city=="")
	{
		status=false;
		$("#city").css({"border":"1px solid red"});
	}
	else{
			$("#city").css({"border":"1px solid green"});
	}
	
	
	var area=$('#area').val().trim();
	 if(area=="")
	{
		status=false;
		$("#area").css({"border":"1px solid red"});
	}
	else{
			$("#area").css({"border":"1px solid green"});
	}
	
		
	
	if(status==true)
	{
		$("#form1").submit();
		
	}
	
	
	
	
	//----------------------------//	
	});
});