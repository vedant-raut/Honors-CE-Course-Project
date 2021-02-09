<?php 
if (!isset($_SESSION['admin_email'])) {
  echo "<script>window.open('login.php','_self')</script>";
}
else{
?>
<h2 class="page-header heading">
			View Category
		</h2>
	<div class="row">
		<div class="col-12">
			<div class="card view_sec">
				<div class="card-body view_body">
					<div class="table-responsive">
					<table class="table table-hover table-striped table-bordered">
						 <thead>
						 	<tr>
						 		<th>Category Id</th>
						 		<th>Category Title</th>
						 		<th>Delete Category</th>
						 	</tr>
						 </thead>
						 <tbody>
						 	<?php
						 	$i=0;
						 	$get_cat="select * from categories";
						 	$run_cat=mysqli_query($con,$get_cat);
						 	while ($row_cat=mysqli_fetch_array($run_cat)) {
						 	 	$cat_id=$row_cat['cat_id'];
						 	 	$cat_title=$row_cat['cat_title'];
						 	 	$i++;
						 
						 	?>
						 	<tr>
						 		<td><?php echo $i; ?></td>
								<td><?php echo $cat_title; ?></td>
								<td><a href="index.php?delete_cat=<?php echo $cat_id; ?>"><i class="fa fa-trash-o"></i>Delete</a></td>

						 	</tr>
						 <?php } ?>
						 </tbody>
						</table>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>



<?php } ?>