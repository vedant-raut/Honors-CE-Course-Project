<?php
if (!isset($_SESSION['admin_email'])) {
echo "<script>window.open('login.php','_self')</script>";
}
else{
?>

<div class="col-6 m-0">
	<h2 class="page-header heading">Insert Product Categories</h2>
	<div class="card">
			
		<div class="card-body insert_body">
			<form method="post" >
				<div class="form-group row insert_form">
					<label for="productCategorytitle" class="col-md-6 col-sm-2 col-form-label">Product Category Title</label>
				
				<div class="col-md-6 col-sm-10">
					<input type="text" class="form-control " name="p_cat_title">
				</div>
				</div>
				<input type="submit" name="submit" value="Submit Now" class="btn btn-primary form-control">
			</form>
		</div>
	</div>
</div>
<?php
if (isset($_POST['submit'])) {
	$p_cat_title=$_POST['p_cat_title'];
	$insert_p_cat="insert into product_categories(p_cat_title) values('$p_cat_title')";
	$run_p_cat=mysqli_query($con,$insert_p_cat);
	if ($run_p_cat) {
		echo "<script>alert('New product category has been inserted')</script>";
		echo "<script>window.open('index.php?view_product_cat','_self')</script>";
	}
} 
?>
<?php } ?>