
	<footer class="row footer_sec px-4" id="footer">
			<div class="col-md-6 col-12 col-lg-2 footer_sub_sec pages_sub_sec">
				<h4>Pages</h4>
				<ul>
					<li><a href="../cart.php">Shopping Cart</a></li>
					<li><a href="../contactus.php">Contact Us</a></li>
					<li>	<?php
				if (!isset($_SESSION['customer_email'])) {
					echo "<a href='../checkout.php'>My Account</a>";
				}
				else{
					echo "<a href='my_account.php?my_order'>My Account</a>";
				}
				?></li>
				</ul>
			</div>
				<div class="col-md-6 col-12 col-lg-2 footer_sub_sec user_area_sec">
				<h4>User Area</h4>
				
				<ul>
					<li><?php 
				if(!isset($_SESSION['customer_email'])){
					echo "<a href='../checkout.php'>Login</a>";
				}
				else{
					echo "<a href='./logout.php'>Logout</a>";
				}
				?></li>
					<li><a href="register_seller.php">Register As Seller</a></li>

				</ul>
			</div>
			<div class="col-md-6 col-12 col-lg-3 footer_sub_sec footer_logo">
				<h4><a href="Index.php"><img src="images/logo (2).png" alt="Swadeshi Fab"></a></h4>
				<p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart.</p>
				<p>PHONE NO. : <span>99999999</span></p>
				<p>EMAIL ID : <span>ncndncosi@gmail.com</span></p>
			</div>
			<div class="col-md-6 col-12 col-lg-5 footer_sub_sec">
		
			<h4>Stay In Touch</h4>
			<div class="social-media">
				<a href="" class="inline"><i class="fa fa-instagram  insta" aria-hidden="true"></i></a>
				<a href="" class="inline"><i class="fa fa-facebook-official  fb" aria-hidden="true"></i></a>
			</div>
			</div>
		</footer>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/js" href="js/main.js">

	</body>
		</html>
