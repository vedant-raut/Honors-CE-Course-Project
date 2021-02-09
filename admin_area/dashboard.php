<?php 
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}
else{
?>

<div class="row">
	<div class="col-md-9 m-0">
		<h2 class="page-header heading">
			Dashboard
		</h2>
	</div>
</div>
<div class="row">
	<div class="col-lg-3 col-md-2">
		<div class="card card-1">
			<div class="card-body dash_card_body">
				<h4><i class="fa fa-comments" aria-hidden="true"></i></h4>
				
				<p class="sub-heading">Customers</p>
				<a href="index.php?view_customer" class="card-link">
					<p>View Details</p>
					<span><i class="fa fa-arrow-circle-right"></i></span>
				</a>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-2">
		<div class="card card-2">
			<div class="card-body dash_card_body">
				<h4><i class="fa fa-tasks"></i></h4>
				
				<p class="sub-heading">Products</p>
				<a href="index.php?view_product" class="card-link">
					<p>View Details</p>
					<span><i class="fa fa-arrow-circle-right"></i></span>
				</a>
			</div>
		</div>
	</div>
	
	<div class="col-lg-3 col-md-2">
		<div class="card card-3">
			<div class="card-body dash_card_body">
				<h4><i class="fa fa-shopping-cart" aria-hidden="true"></i></i></h4>
				
				<p class="sub-heading">Product Categories</p>
				<a href="index.php?view_product_cat" class="card-link">
					<p>View Details</p>
					<span><i class="fa fa-arrow-circle-right"></i></span>
				</a>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-2">
		<div class="card card-4">
			<div class="card-body dash_card_body">
				<h4><i class="fa fa-life-ring" aria-hidden="true"></i></h4>
				
				<p class="sub-heading">Orders</p>
				<a href="index.php?view_order" class="card-link">
					<p>View Details</p>
					<span><i class="fa fa-arrow-circle-right"></i></span>
				</a>
			</div>
		</div>
	</div>
</div>
<?php } ?> 