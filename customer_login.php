<div class="row">
			<div class="col-12 col-md-5 px-4 mb-5">
				<h4 class="py-4">Login</h4>
				<form action="checkout.php" method="post">
					<div class="form-group">
						<label>Email Address</label>
						<input type="email" name="email" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" required="" class="form-control">
					</div>
					<button type="submit" name="login" class="btn">
						Login
					</button>
					<p>New Customer? <a href="signup.php">Sign UP</a></p>
			</div>


			<?php


			if (isset($_POST['login'])) {
				$customer_email=$_POST['email'];
				$customer_pass=$_POST['password'];
				$select_customer="select * from customers where customer_email='$customer_email' and customer_pass='$customer_pass'";

				$run_custc=mysqli_query($con,$select_customer);

				// $get_ip=getUserIP();
				
			    $check_customer=mysqli_fetch_array($run_custc);

			    if (!empty($check_customer['customer_id'])) {
					$_SESSION['customer_email']=$customer_email;
					echo "<script>alert('You are Logged In.')</script>";
					echo "<script>window.open('index.php','_self')</script>";
				}else{
					echo "<script>alert('Password / Email wrong')</script>";
					exit();
				}
				// $check_customer=mysqli_num_rows($run_cust);
				// $select_cart="select * from cart where ip_add='$get_ip'";
				// $run_cart=mysqli_query($con,$select_cart);
				// $check_cart=mysqli_num_rows($run_cart);
				// if ($check_customer== 0) {
				// 	echo "<script>alert('Password / Email wrong')</script>";
				// 	exit();
				// }
				// if ($check_customer== 1 AND $check_cart== 0) {
				// 	$_SESSION['customer_email']=$customer_email;
				// 	echo "<script>alert('You are Logged In.')</script>";
				// 	echo "<script>window.open('index.php','_self')</script>";
				// }
				// else{
				// 	$_SESSION['customer_email']=$customer_email;
				// 	echo "<script>alert('You are Logged In.')</script>";
				// 	echo "<script>window.open('index.php','_self')</script>";
				// }
			}
			?>