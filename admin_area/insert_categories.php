<?php
if (!isset($_SESSION['admin_email'])) {
echo "<script>window.open('login.php','_self')</script>";
}
else{
?>
<div class="col-6 m-0">
	<h2 class="page-header heading">Insert Categories</h2>
	<div class="card">
		
		<div class="card-body insert_body">
			<form method="post" >
				<div class="form-group row insert_form">
					<label for="Categorytitle" class="col-md-6 col-sm-2 col-form-label">Category Title</label>
				
				<div class="col-md-6 col-sm-10">
					<input type="text" class="form-control" name="cat_title">
				</div>
				</div>
				<input type="submit" name="submit" value="Submit Now" class="btn btn-primary form-control">
			</form>
		</div>
	</div>
</div>
<?php
if (isset($_POST['submit'])) {
	$cat_title=$_POST['cat_title'];
	$insert_cat="insert into categories(cat_title) values('$cat_title')";
	$run_cat=mysqli_query($con,$insert_cat);
	if ($run_cat) {
		echo "<script>alert('New category has been inserted')</script>";
		echo "<script>window.open('index.php?view_categories','_self')</script>";
	}
} 
?>
<?php } ?>