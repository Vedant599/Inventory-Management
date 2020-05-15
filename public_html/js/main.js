$(document).ready(function(){
	var DOMAIN = "http://localhost/InventoryManagement/public_html"
  //alert('Hello');
  $("#register_form").submit(function(){
  	// alert("HI");
  	var status = false;
  	var name = $("#username").val();
  	var email= $("#email").val();
  	var password= $("#password").val();
  	var repassword= $("#repassword").val();
  	var usertype= $("#usertype").val();

  	// var n_patt = new RegExp(/^[A-Za-z _]+$/);
	 	// vedantmehta25001@gmail.com
	var email_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);
	var pass_patt = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
	// alert(email_patt.test(email));
	if(name == "" || name.length < 6)
 	{
 		$("#username").addClass("border-danger");
 		$("#u_error").html("<span class='text-danger'>Please Enter Name and Name Length should be more than 6 charecters</span>");
 		status=false;
 	}
 	else
 	{
 		$("#username").removeClass("border-danger");
 		$("#u_error").html("");
 		status=true;
 	}
 	if(!email_patt.test(email))
 	{
 		$("#email").addClass("border-danger");
 		$("#e_error").html("<span class='text-danger'>Please Enter valid Email Address ex xyz@abc.com</span>");
 		status=false;
 	}
 	else
 	{
 		$("#email").removeClass("border-danger");
 		$("#e_error").html("");
 		status=true;
 	}
 	if(password== "" || !(pass_patt.test(password)))
 	{
 		$("#password").addClass("border-danger");
 		$("#p_error").html("<span class='text-danger'>Please Enter Strong Password</span>");
 		status=false;
 	}
 	else
 	{
 		$("#password").removeClass("border-danger");
 		$("#p_error").html("");
 		status=true;
 	}
 	if(repassword== "")
 	{
 		$("#repassword").addClass("border-danger");
 		$("#rp_error").html("<span class='text-danger'>Please Enter Password</span>");
 		status=false;
 	}
 	else
 	{
 		$("#repassword").removeClass("border-danger");
 		$("#rp_error").html("");
 		status=true;
 	}
 	if(usertype == "")
 	{
 		$("#usertype").addClass("border-danger");
 		$("#t_error").html("<span class='text-danger'>Please Choose User Type</span>");
 		status=false;
 	}
 	else
 	{
 		$("#usertype").removeClass("border-danger");
 		$("#t_error").html("");
 		status=true;
 	}
 	if (password != repassword)
 	{
 		$("#repassword").addClass("border-danger");
 		$("#password").addClass("border-danger");
 		$("#rp_error").html("<span class='text-danger'>Password Doesn't Match</span>");
 		$("#p_error").html("<span class='text-danger'>Password Doesn't Match</span>");
 		status=false;
 	}
 	else
 	{
 		$("#repassword").removeClass("border-danger");
 		$("#password").removeClass("border-danger");
 		$("#rp_error").html("");
 		$("#p_error").html("");
 		if(status == true)
 		{
	 		$.ajax({
	 			url: DOMAIN+"/includes/process.php",
	 			method:"POST",
	 			data: $("#register_form").serialize(),
	 			success: function(data)
	 			{
	 				if(data == "Email_Already_Exist")
	 				{
	 					alert("This Email Is already Used");
	 				}
	 				else
	 				{
	 					if(data == "Some_Error")
	 					{
	 						alert("Please Try Again something went wrong")
	 					}
	 					else
	 					{
	 						window.location.href=encodeURI(DOMAIN + "/index.php?msg=You are registerd Now you can Login");
	 					}
	 				}
	 			}
	 		});
 		}
 	}
  })


  // for login part


$("#login_form").submit(function(){
	var status = false;
	var email = $("#email").val();
	var password = $("#password").val();
	var email_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);
	if(!email_patt.test(email))
 	{
 		$("#email").addClass("border-danger");
 		$("#e_error").html("<span class='text-danger'>Please Enter valid Email Address ex xyz@abc.com</span>");
 		status=false;
 	}
 	else
 	{
 		$("#email").removeClass("border-danger");
 		$("#e_error").html("");
 		status=true;
 	}
 	if(password== "")
 	{
 		$("#password").addClass("border-danger");
 		$("#p_error").html("<span class='text-danger'>Please Enter Password</span>");
 		status=false;
 	}
 	else
 	{
 		$("#password").removeClass("border-danger");
 		$("#p_error").html("");
 		status=true;
 	}
 	if(status ==true)
 	{
 		// alert("ready");
 		$.ajax({
 			url: DOMAIN + "/includes/process.php",
 			method:"POST",
 			data:$("#login_form").serialize(),
 			success : function(data){
 				if(data == "Please Register")
 				{
 					window.location.href=encodeURI(DOMAIN + "/register.php?msg=You aren't registerd So Please Register First");
 				}
 				else
 				{
 					if(data == "Password Doesn't match")
 					{
 						$("#password").addClass("border-danger");
 						$("#p_error").html("<span class='text-danger'>Please Enter Correct Password</span>");
 					}
 					else
 					{
 						window.location.href=encodeURI(DOMAIN + "/dashboard.php");
 					}
 				}
 			}
 		})
 	}
})

//for adding category
fetch_category();
function fetch_category(){
	$.ajax({
		url : DOMAIN + "/includes/process.php",
		method:"POST",
		data:{getCategory:1},
		success: function(data){
			var root="<option value='0'>Root</option>"
			$("#parent_cat").html(root+data);
		}
	})
}
})