<?php
$customer_email=$_SESSION['customer_email'];
$get_customer="select * from customers where customer_email='$customer_email'";
$run_cust=mysqli_query($con,$get_customer);
$row_cust=mysqli_fetch_array($run_cust);
$customer_id=$row_cust['customer_id'];
$customer_name=$row_cust['customer_name'];
$customer_email=$row_cust['customer_email'];
$customer_contact=$row_cust['customer_contact'];

?>

<div class="col-12 my_acnt_section">
				<h4>Edit Your Account</h4>
				<form method="post">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" value="<?php echo $customer_name; ?>" class="form-control">
					</div>
					<div class="form-group">
						<label>Email Id</label>
						<input type="email" name="email" value="<?php echo $customer_email; ?>" class="form-control">
					</div>
					<div class="form-group">
						<label>Contact Number</label>
						<input type="text" name="contact" value="<?php echo $customer_contact; ?>" class="form-control">
					</div>
					<button type="submit" name="update" class="btn update-btn">
						Update Now
					</button>
			</div>
		</div>

		<?php
		if (isset($_POST['update'])) {
			$update_id=$customer_id;
			$c_name=$_POST['name'];
			$c_email=$_POST['email'];
			$c_contact=$_POST['contact'];
			$update_customer="update customers set customer_name='$c_name',customer_email='$c_email', customer_contact='$c_contact' where customer_id='$update_id'";
			$run_customer=mysqli_query($con,$update_customer);

			if ($run_customer) {
				echo "<script>alert('Your details updated.')</script>";
				echo "<script>window.open('my_account.php' , '_self')</script>";
			}


		}
		?>