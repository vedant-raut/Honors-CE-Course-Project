<?php
session_start();
include ('includes/db.php');
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}
else{
?>
<?php
$admin_session=$_SESSION['admin_email'];
$get_admin="select * from admin where admin_email='$admin_session'";
$run_admin=mysqli_query($con,$get_admin);
$row_admin=mysqli_fetch_array($run_admin);
$admin_id=$row_admin['admin_id'];
$admin_name=$row_admin['admin_name'];

$get_pro="select * from products";
$run_pro=mysqli_query($con,$get_pro);
$count_pro=mysqli_num_rows($run_pro);

$get_cust="select * from customers";
$run_cust=mysqli_query($con,$get_cust);
$count_cust=mysqli_num_rows($run_cust);

$get_cat="select * from categories";
$run_cat=mysqli_query($con,$get_cat);
$count_cat=mysqli_num_rows($run_cat);

$get_vendor="select * from vendors";
$run_vendor=mysqli_query($con,$get_vendor);
$count_vendor=mysqli_num_rows($run_vendor);
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
	<div id="wrapper">
		<nav class="navbar navbar-expand-lg col-3 top-home-nav">
  <a class="navbar-brand admin_panel_head" href="index.php">Admin Panel</a>
   <div class="collapse navbar-collapse">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto top-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $admin_name; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item admin_dropdown" href="index.php?view_product"><span class="badge"></span>Products</a>
          <a class="dropdown-item admin_dropdown" href="index.php?view_customer"><span class="badge"></span>Customers</a>
          <a class="dropdown-item admin_dropdown" href="index.php?view_categories"><span class="badge"></span>Categories</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item admin_dropdown" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
        </div>
      </li>
    </ul>
  </div>
  </nav>
</div>

  <div class="row">

		<?php include('includes/sidebar.php') ?>
		<div class="col-9 p-0">
		<div id="page-wrapper">
			<div class="container-fluid col-9 m-0 admin-ryt-side">
				<?php
				if(isset($_GET['dashboard'])){
					include ('dashboard.php');
				}
				if(isset($_GET['insert_product'])){
					include ('insert_product.php');
				}
				if(isset($_GET['view_product'])){
					include ('view_product.php');

				}
				if(isset($_GET['delete_product'])){
					include ('delete_product.php');
				}
				if(isset($_GET['edit_product'])){
					include ('edit_product.php');
				}
				if(isset($_GET['insert_product_cat'])){
					include ('insert_product_cat.php');
				}
				if(isset($_GET['view_product_cat'])){
					include ('view_product_cat.php');
				}
				if(isset($_GET['delete_p_cat'])){
					include ('delete_p_cat.php');
				}
				if(isset($_GET['insert_categories'])){
					include ('insert_categories.php');
				}
				if(isset($_GET['view_categories'])){
					include ('view_categories.php');
				}
				if(isset($_GET['delete_cat'])){
					include ('delete_cat.php');
				}
				if(isset($_GET['insert_slider'])){
					include ('insert_slider.php');
				}
				if(isset($_GET['view_slider'])){
					include ('view_slider.php');
				}
				if(isset($_GET['delete_slide'])){
					include ('delete_slide.php');
				}
				if(isset($_GET['view_customer'])){
					include ('view_customer.php');
				}
				if(isset($_GET['view_vendor'])){
					include ('view_vendor.php');
				}
				if(isset($_GET['customer_delete'])){
					include ('customer_delete.php');
				}
				if(isset($_GET['view_order'])){
					include ('view_order.php');
				}
				if(isset($_GET['order_delete'])){
					include ('order_delete.php');
				}
				if(isset($_GET['view_payments'])){
					include ('view_payments.php');
				}
				?>
			</div>
		</div>
	</div>
	</div>
	</div>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
<?php } ?>