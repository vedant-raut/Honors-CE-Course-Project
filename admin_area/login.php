<?php
session_start();
include("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- this tag is for machine purpose-->
	<meta name="description" content="Swadesh Fab">
	<meta name="author" content="Swadesh Fab">
	<meta name="keywords" content="Swadesh Fab"><!--it helps search engine-->
	<meta name="robots" content="index follow">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.0.js"></script><!—jquery-->
	<script src="js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Satisfy&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="row login">
	<div class="col-md-6 mb-5 login_form">
		<h4 class="login_heading">Admin Login</h4>
		<form class="form-login" method="post" action="">
			<div class="form-group form-element frst">

			<input type="email" name="admin_email" placeholder="Enter Your Email Id" class="form-control">
		</div>
		<div class="form-group form-element">
			<input type="password" name="admin_pass" placeholder="Enter Your Password" class="form-control">
		</div>
		<div class="form-element">
			<button type="submit" name="admin_login" class="btn login-btn">Login</button>
		</div>
			
		</form>
	</div>
</div>
</body>
</html>
<?php
if(isset($_POST['admin_login'])){
	$admin_email= mysqli_real_escape_string($con,$_POST['admin_email']);
	$admin_pass= mysqli_real_escape_string($con,$_POST['admin_pass']);
	$get_admin="select * from admin where admin_email='$admin_email' AND admin_pass='$admin_pass'";
	$run_admin=mysqli_query($con,$get_admin);
	$count=mysqli_num_rows($run_admin);
	if($count==1){
	 $_SESSION['admin_email']=$admin_email;
	 echo"<script>alert('You Are Logged')</script>";
	 echo"<script>window.open('index.php?dashboard','_self')</script>";
}
else{
	echo "<script>alert('Email/Password is wrong')</script>";
}
}
?>