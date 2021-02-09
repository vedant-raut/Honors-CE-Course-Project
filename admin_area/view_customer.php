<?php 
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}
else{
	?>
	<h2 class="page-header heading">
			View Customers
		</h2>
	<div class="row">
		<div class="col-12">
			<div class="card view_sec">
				<div class="card-body view_body">
					<div class="table-responsive">
						<table class="table table-hover table-striped table-bordered">
							<thead>
								<tr>
									<th>Customer No :</th>
									<th>Customer Name :</th>
									<th>Customer Email :</th>
									<th>Customer Phone No. :</th>
									<th>Customer Delete :</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i=0;
								$get_c="select * from customers";
								$run_c=mysqli_query($con,$get_c);
								while ($row_c=mysqli_fetch_array($run_c)) {
									$c_id=$row_c['customer_id'];
									$c_name=$row_c['customer_name'];
									$c_email=$row_c['customer_email'];
									$c_contact=$row_c['customer_contact'];
									$i++;

									?>
									<tr>
										<td><?php echo $c_id; ?></td>
										<td><?php echo $c_name; ?></td>
										<td><?php echo $c_email; ?></td>
										<td><?php echo $c_contact; ?></td>
										<td><a href="index.php?customer_delete=<?php echo $c_id; ?>"><i class="fa fa-trash-o"></i>Delete</a></td>

									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>




	<?php } ?>