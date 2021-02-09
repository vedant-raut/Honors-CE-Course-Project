<?php 
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}
else{
	?>
	<div class="row">
		<div class="col-md-6">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i> Dash Board</a></li>
					<li class="breadcrumb-item active" aria-current="page">View Vendors</li>
				</ol>
			</nav>
		</div>
	</div>	
	<div class="row">
		<div class="col-12">
			
			<div class="card">
				<div class="card-header">
					View Vendors
				</div>
				
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-hover table-striped table-bordered">
							<thead>
								<tr>
									<th>Vendor No :</th>
									
									<th>Vendor Email :</th>
									<th>Company Name :</th>
									<th>Product Type :</th>
									<th>Vendor Contact No. :</th>
									<th>Vendor City</th>
									<th>Vendor Delete :</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i=0;
								$get_v="select * from vendors";
								$run_v=mysqli_query($con,$get_v);
								while ($row_v=mysqli_fetch_array($run_v)) {
									$v_id=$row_v['vendor_id'];
									
									$v_email=$row_v['vendor_email'];
									$company_name=$row_v['company_name'];
									$product_type=$row_v['product_typ'];
									$v_contact=$row_v['vendor_contact'];
									$v_city=$row_v['vendor_city'];
									$i++;

									?>
									<tr>
										<td><?php echo $v_id; ?></td>
										<td><?php echo $v_email; ?></td>
										<td><?php echo $company_name; ?></td>
										<td><?php echo $product_type; ?></td>
										<td><?php echo $v_contact; ?></td>
										<td><?php echo $v_city; ?></td>
										<td><a href="index.php?vendor_delete=<?php echo $v_id; ?>"><i class="fa fa-trash-o"></i>Delete</a></td>

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