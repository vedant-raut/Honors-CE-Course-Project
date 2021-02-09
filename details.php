 <?php
 include("includes/header.php");
 ?>
 <?php
 if (isset($_GET['pro_id'])) {
 	$pro_id=$_GET['pro_id'];
 	$get_product="select * from products where product_id='$pro_id'";
 	$run_product=mysqli_query($con,$get_product);
 	$row_product=mysqli_fetch_array($run_product);
 	$p_cat_id=$row_product['p_cat_id'];
 	$cat_id=$row_product['cat_id'];
 	$p_title=$row_product['product_title'];
 	$vendor_name=$row_product['vendor_name'];
 	$p_price=$row_product['product_price'];
 	$p_disc=$row_product['product_disc'];
 	$p_image=$row_product['product_image'];
 	$get_p_cat="select * from product_categories where p_cat_id='$p_cat_id'";
 	$run_p_cat=mysqli_query($con,$get_p_cat);
 	$row_p_cat=mysqli_fetch_array($run_p_cat);
 	$p_cat_id=$row_p_cat['p_cat_id'];
 	$p_cat_title=$row_p_cat['p_cat_title'];
 	$get_cat="select * from categories where cat_id='$cat_id'";
 	$run_cat=mysqli_query($con,$get_cat);
 	$row_cat=mysqli_fetch_array($run_cat);
 
 	
 	
 }

 ?>

 <div id="content">
 	<div class="container detail-container">
 		
 		<div class="row details_row">
 			<div class="col-12">
 				<div class="row">
 					<div class="col-md-6 col-sm-12 details_pro_image">
 						<div id="mainimage">
 							<img src="admin_area/product_images/<?php echo $p_image?>" class="img-fluid">
 						</div>
 					</div>
 					<div class="col-md-6 col-sm-12 details_pro_content">
 						<div class="box">
 							<h1 class="product_title"><?php echo $p_title?></h1>
 						</div>
 						<h4 class="vendor_name">By - <?php echo $vendor_name ?></h4>
 						<?php
 						addCart();
 						?>
 						<form action="details.php?add_cart=<?php echo $pro_id?>" method="post">
 							<div class="form-group">
 								<label for="size" class="size">Size</label>
 								<select name="product_size" class="form-control">
 									
 									
 								</select>

 								<label for="quatity" class="qty">Quatity</label>
 								<select name="product_qty" class="form-control">
 									<option>1</option>
 									<option>2</option>
 									<option>3</option>
 									<option>4</option>
 									<option>5</option>
 									<option>6</option>
 									<option>7</option>
 									<option>8</option>
 									<option>9</option>
 									<option>10</option>
 								</select>

 								<p class="price">INR <?php echo $p_price?>/-</p>
 								<p class="disc_head">Description</p>
 								<p class="disc"><?php echo $p_disc ?></p>
 								<p class="buttons">
 									<button class="btn cart" type="submit">
 										<i class="fa fa-shopping-cart"></i> Add To Cart
 									</button>
 								</p>

 							</div>
 						</form>
 					</div>
 					</div>
 				</div>
 				<div class="row px-4 details_bottom">
 					<div class="col-12 col-md-6 col-lg-2 border rounded shadow-sm mb-3 details_b_side">
 						<div class="box same-height">
 							<h3>YOU MAY ALSO LIKE THESE PRODUCTS</h3>
 						</div>
 					</div>
 					<?php
 					$get_product="select * from products order by 1 LIMIT 0,3";
 					$run_products=mysqli_query($db,$get_product);
 					while($row_product=mysqli_fetch_array($run_products)){
 						$pro_id=$row_product['product_id'];
 						$product_title=$row_product['product_title'];
 						$product_price=$row_product['product_price'];
 						$product_image=$row_product['product_image'];
 						echo "
 						<div class='col-12 col-md-6 col-lg-3 border rounded shadow-sm mb-3'>
 						<div class='product'>
 						<a href='details.php?pro_id=$pro_id'>
 						<img src='admin_area/product_images/$product_image' class='img-fluid'>
 						</a>
 						<div class='text'>
 						<h3><a href='details.php?pro_id=$pro_id'>$product_title</a></h3>
 						<p class='price'>INR $product_price/-</p>
 						<p class='buttons'>
 						<a href='details.php?pro_id=$pro_id' class='btn details'>View-Details</a>
 						<a href='cart.php' class='btn cart'>Add To Cart</a>
 						</p>
 						</div>
 						</div>

 						</div>
 						";
 					}
 					?>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <?php
 include("includes/footer.php");
 ?>