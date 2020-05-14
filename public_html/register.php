<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Inventory Management</title>
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>

	<?php include("./templates/navbar.php"); ?>
	<div class="container" style="margin-top:3%">
		<div class="card mx-auto" style="width: 25rem;margin: 0 auto;">
			<img src="images/user_register.png" class="card-img-top mx-auto" style="width:60%;margin-top:5%" alt="user login">
			<div class="card-body">
			<h2 class="card-title">Register</h2>
		    <form method="POST" id ="register_form">
			  <div class="form-group">
			    <label for="username">User Name</label>
			    <input type="text" class="form-control" id="username" name="username" placeholder="Enter User Name" required>
			  </div>
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email" required>
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
			  </div>
			  <div class="form-group">
			    <label for="repassword">Confirm Password</label>
			    <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Confirm Password" required>
			  </div>
			  <div class="form-group">
			    <label for="usertype">User Type</label>
			    <select class="form-control" id="usertype" name="usertype">
			    	<option value="1">Admin</option>
			    	<option value="2">Other</option>
			    </select>
			  </div>
			  <button type="submit" class="btn btn-primary"><i class="fas fa-lock">&nbsp;</i>Register</button>
			  <span><a href="register.php" >Login</a></span>
			</form>
  		</div>
  		<!-- <div>
  			<div class="card-footer">
  				<a href="#">Forget Password?</a>
  			</div>
  		</div> -->
	</div>
</div>

</body>
</html>
