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
		<div class="card mx-auto" style="width: 20rem; height: 33rem">
			<img src="images/user_login.png" class="card-img-top mx-auto" style="width:45%;margin-top:5%" alt="user login">
			<div class="card-body">
			<h2 class="card-title">Login</h2>
		    <form method="POST">
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" id="password" name="password">
			  </div>
			  <button type="submit" class="btn btn-primary"><i class="fas fa-lock">&nbsp;</i>Login</button>
			  <span><a href="register.php" >Register</a></span>
			</form>
  		</div>
  		<div>
  			<div class="card-footer">
  				<a href="#">Forget Password?</a>
  			</div>
  		</div>
	</div>
</div>

</body>
</html>
