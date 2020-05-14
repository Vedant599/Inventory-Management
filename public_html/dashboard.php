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
	<br>
	<div class="container" style="margin-top: 1%">
		<div class="row">
			<div class="col-md-4">
				<div class="card mx-auto" style="width: 20rem;">
				  <img src="images/user_dashboard.png" class="card-img-top mx-auto" style="width:75%;margin-top:5%" alt="user logged in">
				  <div class="card-body">
				    <h5 class="card-title">Profile Info</h5>				    
				    <p class="card-text"><i class="fas fa-user"></i>&nbsp;&nbsp;<strong>Vedant Mehta</strong></p>
				    <p class="card-text"><i class="fas fa-user-cog"></i>&nbsp;&nbsp;<strong>Admin</strong></p>
				    <p class="card-text"><i class="far fa-clock"></i>&nbsp;&nbsp;Last Login <strong>xxxx-xx-xx</strong></p>
				    <a href="#" class="btn btn-primary"><i class="fas fa-user-edit"></i>&nbsp;&nbsp;Edit Profile</a>
				  </div>
				</div>
			</div>
			<div class="col-md-8">
				
				<div class="jumbotron" style="width: 100%;height: 100%;">
					<h1>Welcome Admin</h1>
					<div class="row">
						<div class="col-sm-6" style="margin-top:2%">
							<iframe src="http://free.timeanddate.com/clock/i7a8f8fk/n44/szw160/szh160/cf100/hnce1ead6" frameborder="0" width="160" height="160"></iframe>
						</div>
						<div class="col-sm-6" style="margin-top:2%">
							<div class="card">
						      <div class="card-body">
						        <h5 class="card-title">New Orders</h5>
						        <p class="card-text">Here you can make invoices and create new Orders</p>
						        <a href="#" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;&nbsp;New Orders</a>
						      </div>
						    </div>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>

<div class="container" style="margin-top: 2%">
	<div class="row">
		<div class="col-md-4">
			<div class="card mx-auto" style="width: 20rem;">
		      <div class="card-body">
		        <h5 class="card-title">Manage Categories</h5>
		        <p class="card-text">Here you can manage your categories and add new parent and sub categories</p>
		        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#category_add_modal"><i class="fas fa-plus"></i>&nbsp;Add</a>
		        <a href="#" class="btn btn-success"><i class="fas fa-edit"></i>&nbsp;Manage</a>
		      </div>
		    </div>
		</div>
		<div class="col-md-4">
			<div class="card " style="width: 21rem;">
		      <div class="card-body">
		        <h5 class="card-title">Brands</h5>
		        <p class="card-text">Here you can manage Brands and add new Brands</p>
		        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#brand_add_modal"><i class="fas fa-plus"></i>&nbsp;Add</a>
		        <a href="#" class="btn btn-success"><i class="fas fa-edit"></i>&nbsp;Manage</a>
		      </div>
		    </div>
		</div>
		<div class="col-md-4">
			<div class="card mx-auto" style="width: 21rem;">
		      <div class="card-body">
		        <h5 class="card-title">Products</h5>
		        <p class="card-text">Here you can manage Products and add new Products</p>
		        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#product_add_modal"><i class="fas fa-plus"></i>&nbsp;Add</a>
		        <a href="#" class="btn btn-success"><i class="fas fa-edit"></i>&nbsp;Manage</a>
		      </div>
		    </div>
		</div>
	</div>
</div>

<?php 

include('templates/category_add_modal.php');
include('templates/brand_add_modal.php');
include('templates/products_add_modal.php');

?>

</body>
</html>
