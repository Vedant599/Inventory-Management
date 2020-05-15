<?php

include("user.php");
include("DBOperation.php");

if (isset($_POST["username"]) AND isset($_POST["email"])) {
	$user = new User();
	echo $user ->createUserAccount($_POST["username"],$_POST["email"],$_POST["password"],$_POST["usertype"]);
	exit();
}
elseif (isset($_POST["password"]) AND isset($_POST["email"])) {
	$user = new User();
	echo $user ->userLogin($_POST["email"],$_POST["password"]);
	exit();
}


//to get cattegory

if(isset($_POST["getCategory"]))
{
	$obj = new DBOperation();
	$rows=$obj->getAllRecord("categories");
	foreach ($rows as $row) {
		echo "<option value=".$row["cid"].">".$row["category_name"]."</option>";
	}
	exit();
}
?>