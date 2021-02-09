<?php 
if (!isset($_SESSION['admin_email'])) {
  echo "<script>window.open('login.php','_self')</script>";
}
else{
?>
<h2 class="page-header heading">
			View Slider
		</h2>
	<div class="row">
		<div class="col-12">
			
			<div class="card view_sec">
				
				<div class="card-body view_body">
					<div class="row">
					<?php 
					$get_slides="select * from slider";
					$run_slides=mysqli_query($con,$get_slides);
					while ($row_slides=mysqli_fetch_array($run_slides)) {
						$slide_id=$row_slides['id'];
						$slide_name=$row_slides['slider_name'];
						$slide_image=$row_slides['slider_image'];

					
					?>
					<div class="col-md-3 slider_col">
						<div class="card slider_dis_card">
							<div class="slider_card_head">
								<?php echo $slide_name; ?>
							</div>
							<div class="card-body">
								<img src="slider/<?php echo $slide_image; ?>" class="img-fluid">
							</div>
							<div>
								<a href="index.php?delete_slide=<?php echo $slide_id; ?>"><i class="fa fa-trash-o"></i>Delete</a>
							</div>
						</div>
					</div>
				<?php } ?>
				</div>
			
			</div>
			</div>
		</div>
	</div>
<?php } ?>
