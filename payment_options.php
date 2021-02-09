<?php

$shipping_total= $_SESSION['shipping_total'];
$product_id= $_SESSION['product_id'];
$product_quantity = $_SESSION['product_quantity'];
$product_size=$_SESSION['product_size'];

?>
<h2 class="first_h2">Customer Details</h2>

                        <?php
							$customer="select * from customers WHERE customer_email ='". $_SESSION['customer_email'] ."'";
							$user=mysqli_query($con,$customer);
						?>
	<section>
		<div>
			<ul class="data-user checkout_list">
				<?php
				while ($row = mysqli_fetch_array($user, MYSQLI_BOTH)) { ?>
				<li>Name : <span><?php echo $row['customer_name']; ?></span> </li>
				<li>Address : <span><?php echo $row['customer_address']; ?> , <?php echo $row['customer_city']; ?>, - <?php echo $row['customer_pincode']; ?></span> </li>
				<li>Email : <span><?php echo $row['customer_email']; ?></span> </li>
				<?php } ?>
				</ul>
               
			
		</div>
	</section>
	 <h2 class="second_h2">Total Price : </h2>
                <h3><?php  echo $_SESSION['shipping_total']; ?>/-</h3>
    <form method="post" action="Paytm/PaytmKit/pgRedirect.php">
                        <input type="hidden" id="ORDER_ID" tabindex="10" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly>
                        <input type="hidden" id="PRODUCT_ID" title="PRODUCT_ID" value="<?php echo $product_id; ?>"  name="PRODUCT_ID">
						<input type="hidden" id="PRODUCT_ID" name="PRODUCT_ID" value="<?php echo $_SESSION['customer_email']; ?>" readonly>
                        <input type="hidden" id="CUST_ID"  name="CUST_ID" value="<?php echo $_SESSION['customer_email']; ?>">
                        <input  type="hidden"  name="PRODUCT_QUANTITY" value="<?php echo $product_quantity; ?>">
                        <input  type="hidden"  name="PRODUCT_SIZE" value="<?php echo $product_size; ?>">
						<input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="10" size="20" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly>
						<input type="hidden" id="CHANNEL_ID" tabindex="10" 
						size="20" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly>
                        <input type="hidden" title="TXN_AMOUNT" tabindex="10" size="20"
						 name="TXN_AMOUNT" value="<?php echo $shipping_total; ?>" readonly>

			<?php $_SESSION['product_quantity'] =$product_quantity;
			$_SESSION['product_size'] =$product_size;
                  $_SESSION['product_id']=$product_id;
            ?>
					    <input value="Check Out" type="submit"	onclick="" class="btn   checkout_btn checkout_pg_btn">
	</form>