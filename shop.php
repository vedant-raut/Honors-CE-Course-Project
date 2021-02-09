 <?php
 include("includes/header.php");
 ?>
 <?php
 if (isset($_GET['cat_id'])) {
 	$cat_id=$_GET['cat_id'];
 	$get_cat="select * from categories where cat_id='$cat_id'";
 	$run_cat=mysqli_query($con,$get_cat);
 	$row_cat=mysqli_fetch_array($run_cat);
 	$cat_id=$row_cat['cat_id'];
 	$cat_title=$row_cat['cat_title'];
 }
 ?>
 <div id="content">
 	<div class="shop_container">
 		
 		<div class="row shop_content col-12">
 			<div class="col-3 sidebar_col">
 				<?php
 				include("includes/sidebar.php");
 				?>
 			</div>
 			<div class="col-9">
 				<div class="row shop_product_row">
 						
 				<?php

 					getcatPro();
 					?>	

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