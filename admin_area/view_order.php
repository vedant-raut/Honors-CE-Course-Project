<?php 
if (!isset($_SESSION['admin_email'])) {
  echo "<script>window.open('login.php','_self')</script>";
}
else{
?>
	<h2 class="page-header heading">
			View Orders
		</h2>
	<div class="row">
		<div class="col-12">
			<div class="card view_sec">
				<div class="card-body view_body">
					<div class="table-responsive">
					<table class="table table-hover table-striped table-bordered">
						 <thead>
								<tr>
									<th>Order No :</th>
									<th>Customer Email :</th>
									<th>Invoice No. :</th>
									<th>Product Title :</th>
									<th>Product Qty :</th>
									<th>Product Size :</th>
									<th>Order Date :</th>
									<th>Total Amount :</th>
									<th>Order Status :</th>
									<th>Delete Order :</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i=0;
								$get_orders="select * from orders";
								$run_orders=mysqli_query($con,$get_orders);
								while ($row_order=mysqli_fetch_array($run_orders)) {
									$order_id=$row_order['gen_order_id'];
									$gen_order_id=$row_order['order_id'];
									$c_id=$row_order['customer_id'];
									$invoice_no=$row_order['invoice_no'];
									$product_id=$row_order['product_id'];
									$qty=$row_order['qty'];
									$size=$row_order['size'];
									$order_date=$row_order['order_date'];
									$amount=$row_order['amount'];
									$order_status=$row_order['order_status'];
									$get_product="select * from products where product_id='$product_id'";
									$run_products=mysqli_query($con,$get_product);
									$row_product=mysqli_fetch_array($run_products);
									$product_title=$row_product['product_title'];
									$i++;

									?>
									<tr>
										<td><?php echo $i; ?></td>
										<td>
										<?php 
										$get_customer="select from customers where customer_id=$c_id";
										$run_customer=mysqli_query($con,$get_customer);
										$row_customer=mysqli_fetch_array($run_customer);
										$customer_email=$row_customer['$customer_email']; 
										echo $customer_email;
										?>
										</td>
										<td><?php echo $invoice_no; ?></td>
										<td><?php echo $product_title; ?></td>
										<td><?php echo $qty; ?></td>
										<td><?php echo $size; ?></td>
										<td><?php echo $order_date; ?></td>
										<td><?php echo $amount; ?></td>
										<td><?php if ($order_status == 'TXN_SUCCESS') { ?> 
											<h5 style="color: green">Success</h5>
									     	<?php } else { ?>
                                            <h5 style="color: red">Failed</h5>
									     	<?php } ?>
										       	
										</td>
										
										<td><a href="index.php?order_delete=<?php echo $order_id; ?>"><i class="fa fa-trash-o"></i>Delete</a></td>

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