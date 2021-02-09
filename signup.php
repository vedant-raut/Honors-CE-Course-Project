<?php
		include("includes/header.php");
		?>
		<div class="row signup-row">
			<div class="col-md-6 mb-5 signup">
				<h4 class="signup-heading">Signup</h4>
				<form action="signup.php" method="post">
					<div class="form-group form-element frst">
						<label>Full Name<span>*</span></label>
						<input type="text" name="customer_name" required="" class="form-control">
					</div>
					<div class="form-group form-element">
						<label>Email Address<span>*</span></label>
						<input type="email" name="customer_email" required="" class="form-control">
					</div>
					<div class="form-group form-element">
						<label>Contact Number<span>*</span></label>
						<input type="text" name="customer_contact" required="" class="form-control">
					</div>
					
					<div class="form-group form-element">
						<label>Address<span>*</span></label>
						<input type="text" name="customer_address" required="" class="form-control">
					</div>
					<div class="form-group form-element">
						<label>City<span>*</span></label>
						<input type="text" name="customer_city" required="" class="form-control">
					</div>
					<div class="form-group form-element">
						<label>Pincode<span>*</span></label>
						<input type="text" name="customer_pincode" required="" class="form-control">
					</div>
					<div class="form-group form-element">
						<label>Password<span>*</span></label>
						<input type="password" name="customer_pass" required="" class="form-control">
					</div>
					<p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <span>privacy policy</span></p>
					<button type="submit" name="signup" class="btn signup-btn">
						Signup
					</button>
			</div>
		</div>
		
		<?php
		include("includes/footer.php");
		?>
		<?php

	
		if (isset($_POST['signup'])) {
			$customer_name=$_POST['customer_name'];
			$customer_email=$_POST['customer_email'];
			$customer_contact=$_POST['customer_contact'];
			$customer_address=$_POST['customer_address'];
			$customer_city=$_POST['customer_city'];
			$customer_pincode=$_POST['customer_pincode'];
			$customer_pass=$_POST['customer_pass'];
			$customer_ip=getUserIP();
			$insert_customer="insert into customers (customer_name,customer_email,customer_pass,customer_contact,customer_address,customer_city,customer_pincode,customer_ip) values('$customer_name','$customer_email','$customer_pass','$customer_contact','$customer_address','$customer_city','customer_pincode','$customer_ip')";

			$run_customer=mysqli_query($con,$insert_customer);
			
			
			$sel_cart="select  * from cart where ip_add='$customer_ip'";
			$run_cart=mysqli_query($con,$sel_cart);
			$check_cart=mysqli_num_rows($run_cart);
			if ($check_cart>0) {
				$_SESSION['customer_email']=$customer_email;
				echo "<script>alert('You Have Been registered successfully')</script>";
				echo "<script>window.open('checkout.php','_self')</script>";
			}
			else{
				$_SESSION['customer_email']=$customer_email;
				echo "<script>alert('You Have Been registered successfully')</script>";
				echo "<script>window.open('index.php','_self')</script>";
			}
		}
		
		?>