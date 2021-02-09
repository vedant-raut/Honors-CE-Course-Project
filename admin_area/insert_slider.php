<?php
if (!isset($_SESSION['admin_email'])) {
echo "<script>window.open('login.php','_self')</script>";
}
else{
?>

<div class="col-6 m-0">
	<h2 class="page-header heading">Insert Slider</h2>
	<div class="card">
		<div class="card-body insert_body">
			<form method="post" >
				<div class="form-group row insert_form">
					<label for="slideName" class="col-md-4 col-sm-2 col-form-label">Slide Name:</label>
				
				<div class="col-md-8 col-sm-10">
					<input type="text" class="form-control" name="slide_name">
				</div>
				</div>
				<div class="form-group row">
					<label for="slideImage" class="col-md-4 col-sm-2 col-form-label">Slider Image:</label>
				
				<div class="col-md-8 col-sm-10">
					<input type="file" readonly class="form-control-plaintext" name="slide_image">
				</div>
				</div>
				<input type="submit" name="submit" value="Submit Now" class="btn btn-primary form-control">
			</form>
		</div>
	</div>
</div>
<?php
if (isset($_POST['submit'])) {
	$slide_name=$_POST['slide_name'];
	$slide_image=$_FILES['slide_image']['name'];
	$temp_name=$_FILES['slide_image']['tmp_name'];
	$view_slide="select * from slider";
	$view_run_slide=mysqli_query($con,$view_slide);
	$count=mysqli_num_rows($view_run_slide);
	if ($count<4) {
		move_uploaded_file($temp_name, "slider/$slide_image");
		$insert_slide="insert into slider (slider_name,slider_image) values('$slide_name','$slide_image')";
		$run_slide=mysqli_query($con,$insert_slide);
		echo "<script>alert('New slide has been inserted')</script>";
		echo "<script>window.open('index.php?view_slide','_self')</script>";
	}
	else{
		echo "<script>alert('You have already inserted 4 slides')</script>";
	}
} 
?>
<?php } ?>