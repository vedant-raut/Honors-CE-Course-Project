 <?php
 include("includes/header.php");
 ?>

 <div id="content">
 	<div class="container cart_container">
 		<div class="col-12">
 			<nav aria-label="breadcrumb" class="bread_crumb_nav">
 				<ol class="breadcrumb">
 					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
 					<li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
 					
 				</ol>
 			</nav>
 		</div>
 		<div class="row">
 		<div class="col-8 cart_table_box">
 			<div class="box">
 				<form action="cart.php" method="post" enctype="multipart-form-data">
 					<h2>Shopping Cart</h2>
					<?php
					$ip_add=getUserIP();
					$select_cart="select * from cart where ip_add='$ip_add'";
					$run_cart=mysqli_query($con,$select_cart);
					$count=mysqli_num_rows($run_cart);
					?>
 					<p class="text-muted">Currently You have <?php item(); ?> in your cart.</p>
 					<div class="table-responsive">
 						<table class="table">
 							<thead>
 								<tr>
 									<th colspan="2">Product</th>
 									<th>Quantity</th>
 									<th>Unit Price</th>
 									<th>Size</th>
 									<th colspan="1">Delete</th>
 									<th colspan="1">Sub Total</th>
 								</tr>
 							</thead>
 							<tbody>
 								<?php
 								$total=0;
 									while ($row=mysqli_fetch_array($run_cart)) {
 										$pro_id=$row['p_id'];
 										$pro_size=$row['size'];
 										$pro_qty=$row['qty'];
 										$get_product="select * from products where product_id='$pro_id'";
 										$run_pro=mysqli_query($con,$get_product);
 										while ($row=mysqli_fetch_array($run_pro)) {
 											$p_title=$row['product_title'];
 											$p_price=$row['product_price'];
 											$sub_total=$row['product_price']*$pro_qty;
 											$total +=$sub_total;
 											$shipping_total= $total+70;
 											$product_id=$pro_id;
                                            $product_quantity= $pro_qty; 										}
 									
 								?>
 								<tr>
 									<td colspan="2" class="pro_title"><?php echo $p_title?></td>
 									<td><?php echo $pro_qty?></td>
 									<td>INR <?php echo $p_price?>/-</td>
 									<td><?php echo $pro_size?></td>
 									<td colspan="1"><input type="checkbox" name="remove[]" value="<?php echo $pro_id?>"></td>
 									<td colspan="1" class="sub_total">INR <?php echo $sub_total?>/-</td>
 								</tr>
 								<?php } ?>
 							</tbody>
 							<tfoot>
 								<tr class="total_row">
 									<th colspan="5" class="total">Total</th>
 									<th colspan="2" class="total_amount">INR <?php echo $total ?>/-</th>
 								</tr>
 							</tfoot>
 						</table>
 						<div class="box-footer">
 							<div class="footer-btn continue_anchor">
 								<a href="index.php" class="continue_btn">
 									<i class="fa fa-chevron-left" aria-hidden="true"></i> Continue Shopping
 								</a>
 							</div>
 							<div class="footer-btn">
 								<button class="btn" type="submit" name="update" value="update cart">
 									<i class="fa fa-refresh" aria-hidden="true" value="update cart" name="update"></i>Update Cart
 								</button>
 							</div>
 							<div class="footer-btn">
 								<a href="checkout.php" class="btn   checkout_btn">Proceed To Checkout <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
 							</div>
 						</div>
 					</div>
 				</form>
 			</div>
 			<?php
 			function update_cart(){
 				global $con;
 				if(isset($_POST['update'])){
 					foreach ($_POST['remove'] as $remove_id) {
 						$delete_product="delete from cart where p_id='$remove_id'";
 						$run_del=mysqli_query($con,$delete_product);
 						if($run_del){
 							echo "<script>window.open('cart.php','_self')</script>";
 						}
 					}
 				}
 			} 
 			echo @$up_cart=update_cart();
 			?>
 		</div>
 		<div class="col-4">
 			<div class="card cart_right">
 				<div class="card-body summary_body">
 					<h2 class="card-title summary_title">
 						Order Summary
 					</h2>
 					<p class="card-text text-muted summary_text">
 						Shipping And Additional Cost Are calculated seperately.
 					</p>
 					<div class="table-responsive">
 						<table class="table summary_table ">
 							<tbody>
 								<tr>
 									<td>Order Subtotal</td>
 									<th>INR <?php echo $total?>/-</th>
 								</tr>
 								<tr class="shipping_charges">
 								    <td>Shipping and handling charges</td>
 								    <th>INR 70/-</th>
 							</tr>
 						
 							<tr class="shipping_total">
 								<td>TOTAL</td>
 								<th>INR <?php echo $shipping_total  ?>-/</th>
 							</tr>
 							</tbody>
 						</table>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 	</div>
 </div>

 <?php 
 $_SESSION['shipping_total'] = $shipping_total;
   $_SESSION['product_id'] = $product_id;
  $_SESSION['product_quantity']=$product_quantity;
		include("includes/footer.php");
		?>