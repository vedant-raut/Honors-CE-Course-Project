
<?php
if (!isset($_SESSION['admin_email'])) {
  echo "<script>window.open('login.php','_self')</script>";
}
else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Insert Product</title>
	<script>tinymce.init({selector:'textarea'});</script>
</head>
<body>

	<h2 class="mx-5 heading">Insert Product</h2>
	<form method="post" action="" enctype="multipart/form-data">
		<div class="form-row">

			<div class="mx-5 border border-dark product_form">
							
				<div class="form-group col-md-12">
					<label for="product_title">Product Title</label>
					<input type="text" name="product_title" class="form-control">
				</div>
				<div class="form-group col-md-12">
					<label for="vendor_name">Vendor Name</label>
					<input type="text" name="vendor_name" class="form-control">
				</div>
				<div class="form-group col-md-12">
					<label for="categories">Category</label>
					<select id="categories" class="form-control" name="categories">
						<option>Select Category</option>
						<?php
						$get_cats="select * from categories";
						$run_cats=mysqli_query($con,$get_cats);
						while ($row=mysqli_fetch_array($run_cats)) {
							$id=$row['cat_id'];
							$cat_title=$row['cat_title'];
							echo "<option value='$id'> $cat_title </option>";
						}
						?>
					</select>
				</div>
				<div class="form-group col-md-12">
					<label for="product_categories">Select Stoles Category</label>
					<select id="product_categories" class="form-control" name="product_categories">
						<option>Select Product Category</option>
						<?php
						$get_p_cats="select * from product_categories";
						$run_p_cats=mysqli_query($con,$get_p_cats);
						while ($row=mysqli_fetch_array($run_p_cats)) {
							$id=$row['p_cat_id'];
							$cat_title=$row['p_cat_title'];
							echo "<option value='$id'> $cat_title </option>";
						}
						?>
					</select>
				</div>
				
				<div class="form-group col-md-12">
					<label for="product_image">Product Image</label>
					<input type="file" name="product_image" class="form-control-file">
				</div>
				<div class="form-group col-md-12">
					<label for="product_price">Product Price</label>
					<input type="text" name="product_price" class="form-control">
				</div>
				<div class="form-group col-md-12">
					<label for="product_keyword">Product Keyword</label>
					<input type="text" name="product_keyword" class="form-control">
				</div>
				<div class="form-group col-md-12">
					<label for="product_disc">Product Discription</label>
					<textarea name="product_disc" class="form-control" cols="19" rows="6"></textarea>
				</div>
				<div class="form-group col-md-12">
					<input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control">
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</form>



	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/js" href="js/main.js">

</body>
</html>
<?php
if (isset($_POST['submit'])) {
	$product_title=$_POST['product_title'];
	$vendor_name=$_POST['vendor_name'];
	$product_cat=$_POST['product_categories'];
	$cat=$_POST['categories'];
	$product_price=$_POST['product_price'];
	$product_keyword=$_POST['product_keyword'];
	$product_disc=$_POST['product_disc'];

	$product_image=$_FILES['product_image']['name'];

	$temp_name=$_FILES['product_image']['tmp_name'];

	move_uploaded_file($temp_name, "product_images/$product_image");
	
	$insert_product="insert into products(p_cat_id,cat_id,date,product_title,vendor_name,product_image,product_price,product_disc,product_keyword) values(
		'$product_cat','$cat',NOW(),'$product_title','$vendor_name','$product_image','$product_price','$product_disc','$product_keyword')";

	$run_product=mysqli_query($con , $insert_product);

	if ($run_product) {
		echo "<script>alert('Product Inserted Successfully')</script>";
		echo "<script>window.open('index.php?view_product')</script>";
	}


}

?>
<?php } ?>