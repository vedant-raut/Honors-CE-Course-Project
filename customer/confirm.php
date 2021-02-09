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
	<script src="js/jquery-3.4.1.min.js"></script><!—jquery-->
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

			
			<div class="search_bar col-md-6">
				<form class="form-inline search_form" action="index_submit" method="get" accept-charset="utf-8">
					<input type="search" placeholder="Search" name="" class="form-control nav_search_input">
					<button type="submit" class="btn nav_search_btn">Search</button>
				</form></div>
				<div class="col-md-2 top_nav_btn_col">
					<a href="../login_signup.php" class="nav-link top_nav-btn">LOGIN/SIGNUP</a>
				</div>
				<div class="col-md-2 top_nav_btn_col">
				<a href="customer/my_account.php" class="nav-link registration_btn top_nav-btn">My Account</a>
			</div>
				<div class="col-md-2 social_icon">
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
				</div>
			</nav>
			<nav class="navbar navbar-expand-lg navbar-light main_navbar"> <!-- main_navbar ends here-->
				<h1><a class="navbar-brand nav-logo" href="#"><img src="images/logo.png" alt="Swadeshi Fab"></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="../khadi_stoles.php">
							KHADI STOLES</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../khadi_saree.php">
								KHADI SAREE
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								KHADI MENS
							</a>
						</li>					
						<li class="nav-item">
							<a class="nav-link" href="#">
								KHADI FABRICS
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								LOCAL FAMOUS CUISINE
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
						</li>
					</ul>
				</div>
			</nav><!-- main_navbar ends here-->
		</header><!-- /header -->
 <div id="content">
 	<div class="container">
 		<div class="col-12">
 			<nav aria-label="breadcrumb" class="bread_crumb_nav">
 				<ol class="breadcrumb">
 					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
 					<li class="breadcrumb-item active" aria-current="page">My Account</li>
 				</ol>
 			</nav>
 		</div>
 		<div class="row">
		<div class="col-12">
			<h3>Please Confirm your payment</h3>
			<form action="confirm.php" method="post" enctype="multipant/form-data">
				<div class="form-group">
					<label>Invoice Number</label>
					<input type="text" name="invoice_number" class="form-control" required=""> 
				</div>
				<div class="form-group">
					<label>Amount</label>
					<input type="text" name="amount" class="form-control" required=""> 
				</div>
				<div class="form-group">
					<label>Select Payment Mode</label>
					<select class="form-control" name="payment_mode">
						<option>Bank Transfer</option>
						<option>Paypal</option>
						<option>PayuMoney</option>
						<option>PayTm</option>	
					</select> 
				</div>
				<div class="form-group">
					<label>Transaction Number</label>
					<input type="text" name="trfr_number" class="form-control" required=""> 
				</div>
				<div class="form-group">
					<label>Payment Date</label>
					<input type="date" name="date" class="form-control" required=""> 
				</div>
				<div class="form-group">
					<button type="submit" name="confirm_payment" class="btn btn-primary">Confirm Payment</button>
				</div>
			</form>
		</div>
 		<?php
 include("includes/footer.php");
 ?>
 