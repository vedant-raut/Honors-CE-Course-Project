<?php 
if (!isset($_SESSION['admin_email'])) {
  echo "<script>window.open('login.php','_self')</script>";
}
else{
?>
<?php
if (isset($_GET['edit_product'])) {
	$edit_id=$_GET['edit_product'];
	$get_pro="select * from products where product_id='$edit_id'";

	$run_edit=mysqli_query($con,$get_pro);
	$row_edit=mysqli_fetch_array($run_edit);
	$p_id=$row_edit['product_id'];
	$p_title=$row_edit['product_title'];
	$p_cat=$row_edit['p_cat_id'];
	$cat=$row_edit['cat_id'];
	$p_image=$row_edit['product_image'];
	$p_price=$row_edit['product_price'];
	$p_disc=$row_edit['product_disc'];
}
$get_p_cat="select * from product_categories where p_cat_id='$p_cat'";
$run_p_cat=mysqli_query($con,$get_p_cat);
$row_p_cat=mysqli_fetch_array($run_p_cat);
$p_cat_title=$row_p_cat['p_cat_title'];

$get_cat="select * from categories where cat_id='$cat'";
$run_cat=mysqli_query($con,$get_cat);
$row_cat=mysqli_fetch_array($run_cat);
$cat_title=$row_cat['cat_title'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Product</title>
	<script>tinymce.init({selector:'textarea'});</script>
</head>
<body>
<div class="row">
		<div class="col-md-6">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i> Dash Board</a></li>
					<li class="breadcrumb-item active" aria-current="page">Edit Product</li>
				</ol>
			</nav>
		</div>
	</div>	
	<div class="col-6">
		<div class="card">
			<div class="card-header">
				Edit Product Details
			</div>
			<div class="card-body">
				<form method="post" >
				<div class="form-group row">
					<label for="productTitle" class="col-lg-6 col-sm-2 col-form-label">Product Title</label>
				
				<div class="col-lg-6 col-sm-10">
					<input type="text" class="form-control-plaintext" name="product_title" required value="<?php echo $p_title;  ?>">
				</div>
				</div>
				<div class="form-group row">
					<label for="Category" class="col-lg-6 col-sm-2 col-form-label">Category</label>
				
				<div class="col-lg-6 col-sm-10">
					<select name="cat" class="form-control">
						<option value="<?php echo $cat; ?>"><?php echo $cat_title; ?>
						</option>
						<?php 
						$get_cat="select * from categories";
						$run_cat=mysqli_query($con,$get_cat);
						while ($row_cat=mysqli_fetch_array($run_cat)) {
							$cat_id=$row_cat['cat_id'];
							$cat_title=$row_cat['cat_title'];
							echo "<option value='$cat_id'>$cat_title</option>";
						}
						 ?>
					</select>
				</div>
				</div>
				<div class="form-group row">
					<label for="productCategory" class="col-lg-6 col-sm-2 col-form-label">Product Category</label>
				<div class="col-lg-6 col-sm-10">
					<select name="p_cat" class="form-control">
						<option value="<?php echo $p_cat; ?>"><?php echo $p_cat_title; ?>
						</option>
						<?php 
						$get_p_cat="select * from product_categories";
						$run_p_cat=mysqli_query($con,$get_p_cat);
						while ($row_p_cat=mysqli_fetch_array($run_p_cat)) {
							$p_cat_id=$row_p_cat['p_cat_id'];
							$p_cat_title=$row_p_cat['p_cat_title'];
							echo "<option value='$p_cat_id'>$p_cat_title</option>";
						}
						 ?>
					</select>
				</div>
				</div>
				<div class="form-group row">
					<label for="productImage" class="col-lg-6 col-sm-2 col-form-label">Product Image</label>
				
				<div class="col-lg-6 col-sm-10">
					<input type="file" class="form-control-plaintext" name="product_image"><img src="product_images/<?php echo $p_image;?>" width="70" height="70">
				</div>
				</div>
				<div class="form-group row">
					<label for="productPrice" class="col-lg-6 col-sm-2 col-form-label">Product Price</label>
				
				<div class="col-lg-6 col-sm-10">
					<input type="text" class="form-control-plaintext" name="product_price" required value="<?php echo $p_price; ?>">
				</div>
				</div>
				<div class="form-group row">
					<label for="productDiscription" class="col-lg-6 col-sm-2 col-form-label">Product Discription</label>
				
				<div class="col-lg-6 col-sm-10">
					<textarea name="product_disc" class="form-control" rows="6" cols="19"><?php echo $p_disc;?></textarea>
				</div>
				</div>
				<input type="submit" name="update" value="Update Product" class="btn btn-primary form-control">
			</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php 
if (isset($_POST['update'])) {
	$product_title=$_POST['product_title'];
	$cat=$_POST['cat'];
	$product_cat=$_POST['product_cat'];
	$product_price=$_POST['product_price'];
	$product_disc=$_POST['product_disc'];

	$product_image=$_FILES['product_image']['name'];
	$temp_name=$_FILES['product_image']['tmp_name'];
	move_uploaded_file($temp_name, "product_images/$product_image");
	$update_product="update products set p_cat_id='$product_cat',cat_id='$cat',date=NOW(),product_title='$product_title',product_image='$product_image',product_price='$product_price',product_disc='$product_disc' where product_id='$p_id'";
	$run_product=mysqli_query($con,$update_product);
	if ($run_product) {
		echo "<script>alert('Product Has Been Updated Successfully')</script>";
		echo "<script>window.open('index.php?view_product','_self')</script>";
	}
}
?>
<?php } ?>