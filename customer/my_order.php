<div class="col-12 my_acnt_section">
	<h4>My Order</h4>
	<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th scope="col">Order No.</th>
				<th scope="col">Order ID</th>
				<th scope="col">Product Name</th>
				<th scope="col">Product Quantity</th>
				<th scope="col">Product Size</th>
				<th scope="col">Amount</th>
				<th scope="col">Txn No.</th>
				<th scope="col">Transaction Date</th>
				<th scope="col">Status</th>
			</tr>
		</thead>
		<tbody class="my_order_tbody">
		
						<?php						
						                 
							$customer="select * from orders WHERE customer_id ='". $_SESSION['customer_email'] ."'";
							
							$run_c=mysqli_query($con,$customer);
						
								$get_c="select * from orders";
								while ($row_c=mysqli_fetch_array($run_c)){
									$order_id=$row_c['order_id'];
									$gen_order_id=$row_c['gen_order_id'];
									$customer_id=$row_c['customer_id'];
									$product_quantity =$row_c['product_quantity'];
									$product_size =$row_c['product_size'];

							        $product_id = $row_c['product_id'];
							        $product="select * from products WHERE product_id ='". $product_id ."'";
							        $runproduct= mysqli_query($con,$product);
                                    $rowproduct = mysqli_fetch_array($runproduct);
                                    $productname= $rowproduct['product_title'];
	

									$amount=$row_c['amount'];
									$txn_no=$row_c['txn_no'];
									$order_date=$row_c['order_date'];
									$order_status = $row_c['order_status'];
									?>
									<tr>

										<td><?php echo $order_id; ?></td>
										<td><?php echo $gen_order_id; ?></td>
										<td><?php echo $productname; ?></td>
										<td><?php echo $product_quantity; ?></td>
										<td><?php echo $product_size; ?></td>
										<td><?php echo $amount; ?></td>
										<td><?php echo $txn_no; ?></td>
										<td><?php echo $order_date; ?></td>
										<td><?php if ($order_status == 'TXN_SUCCESS') { ?> 
											<h5 style="color: green">Success</h5>
									     	<?php } else { ?>
                                            <h5 style="color: red">Failed</h5>
									     	<?php } ?>
										       	
										</td>

									</tr>
								<?php } ?>
				
			</tr>
			<tr>
				
			</tr>
			<tr>
				
			</tr>
		</tbody>
	</table>
</div>
</