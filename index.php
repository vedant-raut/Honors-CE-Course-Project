


		<?php
		include("includes/header.php");
		?>
		<main class="main_body">
			<div class="container-fluid slider" id="myslider">
					<div class="carousel slide" id="mycarousel">
						<ol class="carousel-indicators">
							<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
							<li data-target="#mycarousel" data-slide-to="1"></li>
							<li data-target="#mycarousel" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<?php
							$get_slider="select * from slider";
							$run_slider=mysqli_query($con,$get_slider);
							while ($row=mysqli_fetch_array($run_slider)) {
								$slider_name=$row['slider_name'];
								$slider_image=$row['slider_image'];
								echo "<div class='carousel-item active'>
									<img src='admin_area/slider/$slider_image'>
								</div>";}
							?>
						</div>
							<!-- <div class="carousel-item active">
								<img src="admin_area/slider/slide1.jpg" alt="Slider1">
								<div class="carousel-caption">
									<h2 class="carousel-heading">BEST HOME MADE
									SNACKS</h2>
									<p class="carousel-subtittle">To Yummy</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="admin_area/slider/slide1.jpg" alt="Slider1">
								<div class="carousel-caption">
									<h2 class="carousel-heading">BEST HOME MADE
									SNACKS</h2>
									<p class="carousel-subtittle">To Yummy</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="admin_area/slider/slide1.jpg" alt="Slider1">
								<div class="carousel-caption">
									<h2 class="carousel-heading">BEST HOME MADE
									SNACKS</h2>
									<p class="carousel-subtittle">To Yummy</p>
								</div>
							</div>
						</div> -->
						<a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
			</div>
			<div class="new_arrivals px-4" id="new_arrivals">
				<h2>New Arrivals</h2>
				<div class="row">
					<?php
					getPro();
					?>
				</div>
			</div>
			<div class="categogory_card row">
				<div class="card">
					<div class="card-image">
					<img src="admin_area/product_images/adobestock_34617669.jpeg" class="card-img" alt="Khadi Stoles">
				</div>
					<div class="card-img-overlay">
						<h4 class="card-title">
							VEGETABLES
						</h4>
					</div>
				</div>
				<div class="card">
					<div class="card-image">
					<img src="admin_area/product_images/apple-fruit-500x500.jpg" class="card-img" alt="Khadi Stoles">
				</div>
					<div class="card-img-overlay">
						<h4 class="card-title">
							FRUITS
						</h4>
					</div>
				</div>
				<div class="card">
					<div class="card-image">
					<img src="admin_area/product_images/amul-butter-100g-500x500.png" class="card-img" alt="Khadi Stoles">
				</div>
					<div class="card-img-overlay">
						<h4 class="card-title">
							DAILY NEEDS
						</h4>
					</div>
				</div>
				<div class="card">
					<div class="card-image">
					<img src="admin_area/product_images/red-chilly-powder-500x500.jpg" class="card-img" alt="Khadi Stoles">
				</div>
					<div class="card-img-overlay">
						<h4 class="card-title">
							SPICES
						</h4>
					</div>
				</div>
			</div>
			<div class="best_sellers px-4" id="best_sellers">
				<h2>Best Sellers</h2>
				<div class="row">
					<div class="border rounded shadow-sm mb-3 best_seller_product">
						<div class="product">
							<a href="details.php">
								<img src="admin_area/product_images/ashirvad.jpg" class="img-fluid">
							</a>
							<div class="text products_details">
								<h3><a href="details.php">Wheat Flour</a></h3>
								<p class="price">INR 880/-</p>
								<p class="buttons">
									
									<a href="cart.php" class="btn cart">Add To Cart</a>
								</p>
							</div>
						</div>

					</div>
					<div class="border rounded shadow-sm mb-3 best_seller_product">
						<div class="product">
							<a href="details.php">
								<img src="admin_area/product_images/bocoli.jpg" class="img-fluid">
							</a>
							<div class="text products_details">
								<h3><a href="details.php">Brocoli</a></h3>
								<p class="price">INR 120/-</p>
								<p class="buttons">
									
									<a href="cart.php" class="btn cart">Add To Cart</a>
								</p>
							</div>
						</div>

					</div>
					<div class="border rounded shadow-sm mb-3 best_seller_product">
						<div class="product">
							<a href="details.php">
								<img src="admin_area/product_images/bread.png" class="img-fluid">
							</a>
							<div class="text products_details">
								<h3><a href="details.php">Brown Bread</a></h3>
								<p class="price">INR 38/-</p>
								<p class="buttons">
									
									<a href="cart.php" class="btn cart">Add To Cart</a>
								</p>
							</div>
						</div>

					</div>
					<div class="border rounded shadow-sm mb-3 best_seller_product">
						<div class="product">
							<a href="details.php">
								<img src="admin_area/product_images/haldi.jpg" class="img-fluid">
							</a>
							<div class="text products_details">
								<h3><a href="details.php">Haldi</a></h3>
								<p class="price">INR 40/-</p>
								<p class="buttons">
									
									<a href="cart.php" class="btn cart">Add To Cart</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<?php
		include("includes/footer.php");
		?>



		
