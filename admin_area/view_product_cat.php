<?php 
if (!isset($_SESSION['admin_email'])) {
  echo "<script>window.open('login.php','_self')</script>";
}
else{
?>
	<h2 class="page-header heading">
			View Product Category
		</h2>
	<div class="row">
		<div class="col-12">
			<div class="card view_sec">
				<div class="card-body view_body">
					<div class="table-responsive">
					<table class="table table-hover table-striped table-bordered">
						 <thead>
						 	<tr>
						 		<th>Product Category Id</th>
						 		<th>Product Category Title</th>
						 		<th>Delete Product Category</th>
						 	</tr>
						 </thead>
						 <tbody>
						 	<?php
						 	$i=0;
						 	$get_p_cat="select * from product_categories";
						 	$run_p_cat=mysqli_query($con,$get_p_cat);
						 	while ($row_p_cat=mysqli_fetch_array($run_p_cat)) {
						 	 	$p_cat_id=$row_p_cat['p_cat_id'];
						 	 	$p_cat_title=$row_p_cat['p_cat_title'];
						 	 	$i++;
						 
						 	?>
						 	<tr>
						 		<td><?php echo $i; ?></td>
								<td><?php echo $p_cat_title; ?></td>
								<td><a href="index.php?delete_p_cat=<?php echo $p_cat_id; ?>"><i class="fa fa-trash-o"></i>Delete</a></td>

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