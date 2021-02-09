 <?php
 include("includes/header.php");
 ?>

 <div id="content">
 	<div class="container">
 		<div class="col-12">
 			<nav aria-label="breadcrumb" class="bread_crumb_nav">
 				<ol class="breadcrumb">
 					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
 					<li class="breadcrumb-item active" aria-current="page">Khadi Stoles</li>
 				</ol>
 			</nav>
 		</div>
 		<div class="row">
 			<div class="col-3">
 				<?php
 				include("includes/sidebar.php");
 				?>
 			</div>
 			<div class="col-9">
 				<div class="row">
 					<?php
 					if (!isset($_GET['p_cat'])) {
 						if (!isset($_GET['cat_id'])) {
 							$per_page=6;
 							if (isset($_GET['page'])) {
 								$page=$_GET['page'];

 							}
 							else{
 								$page=1;
 							}
 							$start_from=($page-1) * $per_page;
 							$get_product="select * from products order by 1 DESC LIMIT $start_from,$per_page";
 							$run_pro=mysqli_query($con,$get_product);
 							while($row=mysqli_fetch_array($run_pro)){
 								$pro_id=$row['product_id'];
 								$pro_title=$row['product_title'];
 								$pro_price=$row['product_price'];
 								$pro_image=$row['product_image'];
 								echo "<div class='col-md-4 col-sm-6 border rounded shadow-sm'>
 								<div class='product'>
 								<a href='details.php?pro_id=$pro_id'><img src='admin_area/product_images/$pro_image' class='img-fluid'>
 								</a>
 								<div class='text'>
 								<h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
 								<p class='price'>INR $pro_price</p>
 								<p class='buttons'>
 								<a href='details.php?pro_id=$pro_id' class='btn details'>View-Details</a>
									<a href='details.php?pro_id=$pro_id' class='btn cart'>Add To Cart</a>
 								</p>
 								</div>
 								</div>
 								</div>";
 							}

 							?>
 							
 							<nav aria-label="Page navigation example">
 								<ul class="pagination">
 									<?php
 									$query="select * from products";
 									$result=mysqli_query($con,$query);
 									$total_record=mysqli_num_rows($result);
 									$total_pages=ceil($total_record/$per_page);
 									echo "<li class='page-item'><a class='page-link' href='khadi_stoles.php?page=1'>".'First Page'."</a></li>";
 									for ($i=1; $i<=$total_pages; $i++) { 
 										echo "<li class='page-item'><a class='page-link' href='khadi_stoles.php?page=".$i."'>".$i."</a></li>";
 									}

 								}
 							}
 							?>
 						</ul>
 					</nav>
 					<?php
 					getPcatPro();
 					?>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>

 <?php
 include("includes/footer.php");
 ?>