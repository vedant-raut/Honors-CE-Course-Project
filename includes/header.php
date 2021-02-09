
<?php

include("includes/db.php");
include("admin_area/functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Swadesh Fab</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- this tag is for machine purpose-->
	<meta name="description" content="Swadesh Fab">
	<meta name="author" content="Swadesh Fab">
	<meta name="keywords" content="Swadesh Fab"><!--it helps search engine-->
	<meta name="robots" content="index follow">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.0.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Satisfy&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/style.css">

</head>
<body>
<header id="header" class="header">
	
		<nav class="navbar navbar-md top_nav"><!--toppest nav starts here-->

			
			<div class="search_bar col-md-5">
				<form class="form-inline search_form" action="index_submit" method="get" accept-charset="utf-8">
					<input type="search" placeholder="Search" name="" class="form-control nav_search_input">
					<button type="submit" class="btn nav_search_btn">Search</button>
				</form></div>
				<div class="top_nav_btn_col">
					<a href="./signup.php" class="nav-link top_nav-btn">SIGNUP</a>
				</div>

				<div class="top_nav_btn_col">
				<a href="customer/register_seller.php" class="nav-link registration_btn top_nav-btn">Register As Seller</a>
			</div>
			<div class="top_nav_btn_col">
				<?php
				if (!isset($_SESSION['customer_email'])) {
					echo "<a href='./login.php' class='nav-link top_nav-btn'>My Account</a>";
				}
				else{
					echo "<a href='customer/my_account.php?my_order'  class='nav-link top_nav-btn'>My Account</a>";
				}
				?>
			</div>
			<div class="top_nav_btn_col">
				<?php 
				if(!isset($_SESSION['customer_email'])){
					echo "<a href='./login.php' class='nav-link top_nav-btn'>Login</a>";
				}
				else{
					echo "<a href='logout.php' class='nav-link top_nav-btn'>Logout</a>";
				}
				?>
			</div>
				<div class="social_icon">
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
				</div>
			</nav>
			<nav class="navbar navbar-expand-lg navbar-light main_navbar"> <!-- main_navbar ends here-->
				<h1><a class="navbar-brand nav-logo" href="index.php"><img src="images/logo (2).png" alt="Swadeshi Fab"></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<?php
						getCat();
						
						?>

						<li class="nav-item">
							<a class="nav-link cart-link" href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><?php item(); ?> ITEMS IN CART</a>
						</li>
					</ul>
				</div>
			</nav><!-- main_navbar ends here-->
		</header><!-- /header -->