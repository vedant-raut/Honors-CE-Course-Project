<?php
$customer_email=$_SESSION['customer_email'];
$get_customer="select * from customers where customer_email='$customer_email'";
$run_cust=mysqli_query($con,$get_customer);
$row_cust=mysqli_fetch_array($run_cust);
$customer_id=$row_cust['customer_id'];
$customer_address=$row_cust['customer_address'];
$customer_city=$row_cust['customer_city'];
$customer_pincode=$row_cust['customer_pincode'];

?>

<div class="col-12 my_acnt_section">
				<h4>My Address</h4>
				<form method="post">
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address" value="<?php echo $customer_address; ?>" class="form-control">
					</div>
					<div class="form-group">
						<label>City</label>
						<input type="text" name="city" value="<?php echo $customer_city; ?>" class="form-control">
					</div>
					<div class="form-group">
						<label>Pincode</label>
						<input type="text" name="pincode" value="<?php echo $customer_pincode; ?>" class="form-control">
					</div>
					<button type="submit" name="update" class="btn update-btn">
						Update Now
					</button>
			</div>
		</div>

		<?php
		if (isset($_POST['update'])) {
			$update_id=$customer_id;
			$c_address=$_POST['address'];
			$c_city=$_POST['city'];
			$c_pincode=$_POST['pincode'];
			$update_customer="update customers set customer_address='$c_address',customer_city='$c_city', customer_pincode='$c_pincode' where customer_id='$update_id'";
			$run_customer=mysqli_query($con,$update_customer);

			if ($run_customer) {
				echo "<script>alert('Your details updated.')</script>";
				echo "<script>window.open('my_account.php' , '_self')</script>";
			}


		}
		?>