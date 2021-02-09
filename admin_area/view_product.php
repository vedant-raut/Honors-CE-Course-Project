<?php 
if (!isset($_SESSION['admin_email'])) {
  echo "<script>window.open('login.php','_self')</script>";
}
else{
?>

	<div class="row">
		<div class="col-12">
			<h2 class="page-header heading">
			View Products
		</h2>
			<div class="card view_pro_card">
				<div class="card-body view_pro_card_body">
					<div class="table-responsive">
					<table class="table table-hover table-striped table-bordered">
						 <thead>
						 	<tr>
						 		<th>Product Id</th>
						 		<th>Product Title</th>
						 		<th>Product Image</th>
						 		<th>Product Price</th>
						 		<th>Product Keyword</th>
						 		<th>Product Date</th>
						 		<th>Product Delete</th>
						 		<th>Product Edit</th>

						 	</tr>
						 </thead>
						 <tbody>
						 	<?php 
						 	$i=0;
						 	$get_product="select * from products";
						 	$run_p=mysqli_query($con,$get_product);
						 	while ($row=mysqli_fetch_array($run_p)) {
						 		$pro_id=$row['product_id'];
						 		$pro_title=$row['product_title'];
						 		$pro_image=$row['product_image'];
						 		$pro_price=$row['product_price'];
						 		$pro_keyword=$row['product_keyword'];
						 		$date=$row['date'];
						 		$i++;
						 		?>
						
						 	<tr>
						 		<td><?php echo $i; ?></td>
						 		<td><?php echo $pro_title; ?></td>
						 		<td><img src="product_images/<?php echo $pro_image; ?> width="50" height="40"></td>
						 		<td><?php echo $pro_price; ?>/-</td>
						 		<td><?php echo $pro_keyword; ?></td>
						 		<td><?php echo $date; ?></td>
						 		<td><a href="index.php?delete_product=<?php echo $pro_id ?>"><i class="fa fa-trash-o"></i>Delete</a></td>
						 		<td><a href="index.php?edit_product=<?php echo $pro_id ?>"><i class="fa fa-pencil"></i>Edit</a></td>
						 	</tr>
						 	 <?php	}
						 	?>
						 </tbody>
					</table>
				</div>
			</div>
			</div>
		</div>
	</div>







<?php } ?>