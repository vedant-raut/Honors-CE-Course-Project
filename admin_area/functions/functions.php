<?php
$db=mysqli_connect("localhost","root","","swadesh_fab");
//for getting user ip
if (!function_exists('getUserIP')){
function getUserIP(){
	switch (true) {
		case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
		case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
		case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
		default : return $_SERVER['REMOTE_ADDR'];
		
	}
}
function addCart(){
	global $db;
	if (isset($_GET['add_cart'])) {
		$ip_add=getUserIP();
		$p_id=$_GET['add_cart'];
		$product_qty=$_POST['product_qty'];
		$product_size=$_POST['product_size'];
		$check_product="select * from cart where ip_add='$ip_add' AND p_id='$p_id'";
		$run_check=mysqli_query($db,$check_product);
		if(mysqli_num_rows($run_check)>0){
			echo "<script>alert('This Product is already added in the cart')</script>";
			echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
		}
		else{
			$query="insert into cart(p_id,ip_add,qty,size) values('$p_id','$ip_add','$product_qty','$product_size')";
			$run_query=mysqli_query($db,$query);
			echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";

		}
	}
}
//item count start
if (!function_exists('item'))   {

function item(){
	global $db;
	$ip_add=getUserIP();
	$get_items="select * from cart where ip_add='$ip_add'";
	$run_item=mysqli_query($db,$get_items);
	$count=mysqli_num_rows($run_item);
	echo $count;
}
}
//item count stop
}
if (!function_exists('getPro'))   {
  function getPro()  {
 
	global $db;
	$get_product="select * from products order by 1 DESC LIMIT 0,4";
	$run_products=mysqli_query($db,$get_product);
	while($row_product=mysqli_fetch_array($run_products)){
		$pro_id=$row_product['product_id'];
		$pro_title=$row_product['product_title'];
		$pro_price=$row_product['product_price'];
		$pro_image=$row_product['product_image'];

		echo"
			<div class='border rounded shadow-sm mb-3 new_arrivals_products'>
		<div class='product'>
							<a href='details.php?pro_id=$pro_id'>
								<img src='admin_area/product_images/$pro_image' class='img-fluid'>
							</a>
							<div class='text products_details'>
								<h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
								<p class='price'>INR $pro_price /-</p>
								<p class='buttons'>
									
									<a href='details.php?pro_id=$pro_id' class='btn cart'>Add To Cart</a>
								</p>
							</div>
						</div>
					</div>";
}
}
}
/*categoires*/
if (!function_exists('getCat'))   {
  function getCat()  {
	global $db;
	$get_cat="select * from categories";
	$run_cat=mysqli_query($db,$get_cat);
	while($row_cat=mysqli_fetch_array($run_cat)){
		$cat_id=$row_cat['cat_id'];
		$cat_title=$row_cat['cat_title'];
		echo "<li class='nav-item'>
							<a class='nav-link' href='shop.php?cat=$cat_id'>
								$cat_title
							</a>
						</li> ";
		
}
}
}
/*category filter*/
if (!function_exists('getcatPro'))   {
  function getcatPro()  {	global $db;

	if (isset($_GET['cat'])) {
		$cat_id=$_GET['cat'];
		$get_products="select * from products where cat_id='$cat_id'";
		$run_products=mysqli_query($db,$get_products);
		$count=mysqli_num_rows($run_products);
		if ($count==0) {
			echo "<div>
			<h4>
			No Product Found In This Category.</h4></div>";
		}
		while ($row_products=mysqli_fetch_array($run_products)) {
			$pro_id=$row_products['product_id'];
			$cat_id=$row_products['cat_id'];
			$pro_title=$row_products['product_title'];
 								$pro_price=$row_products['product_price'];
 								$pro_image=$row_products['product_image'];
 								echo "<div class='border rounded shadow-sm mb-3 product_div'>
 								<div class='product'>
 								<a href='details.php?pro_id=$pro_id'><img src='admin_area/product_images/$pro_image' class='img-fluid'>
 								</a>
 								<div class='text products_details'>
 								<h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
 								<p class='price'>INR $pro_price /-</p>
 								<p class='buttons'>
 								
									<a href='details.php?pro_id=$pro_id,cat_id=$cat_id' class='btn cart'>Add To Cart</a>
 								</p>
 								</div>
 								</div>
 								</div>";
		}
	}
}
}
/*product categoires*/
if (!function_exists('getPCats'))   {
  function getPCats()  {
	global $db;
	if (isset($_GET['cat'])) {
		$cat_id=$_GET['cat'];
	$get_p_cats="select * from product_categories where cat_id='$cat_id'";
	$run_p_cats=mysqli_query($db,$get_p_cats);
	while($row_p_cats=mysqli_fetch_array($run_p_cats)){
		$p_cat_id=$row_p_cats['p_cat_id'];
		$p_cat_title=$row_p_cats['p_cat_title'];
		echo " <li class='list-group-item nav-item shop_sidebar_cat'><a href='shop.php?p_cat=$p_cat_id' class='nav-link'>$p_cat_title</a></li>";
}
}
}
}

/*product category filter*/
if (!function_exists('getPcatPro'))   {
  function getPcatPro()  {
	global $db;

	if (isset($_GET['p_cat'])) {
		$p_cat_id=$_GET['p_cat'];
		$get_products="select * from products where p_cat_id='$p_cat_id'";
		$run_products=mysqli_query($db,$get_products);
		$count=mysqli_num_rows($run_products);
		if ($count==0) {
			echo "<div>
			<h4>
			No Product Found In This Category.</h4></div>";
		}
		while ($row_products=mysqli_fetch_array($run_products)) {
			$pro_id=$row_products['product_id'];
			$pro_title=$row_products['product_title'];
 								$pro_price=$row_products['product_price'];
 								$pro_image=$row_products['product_image'];
 								echo "

 								<div class='border rounded shadow-sm mb-3 product_div'>
 								<div class='product'>
 								<a href='details.php?pro_id=$pro_id'><img src='admin_area/product_images/$pro_image' class='img-fluid'>
 								</a>
 								<div class='text products_details'>
 								<h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
 								<p class='price'>INR $pro_price /-</p>
 								<p class='buttons'>
 								
									<a href='details.php?pro_id=$pro_id' class='btn cart'>Add To Cart</a>
 								</p>
 								</div>
 								</div>
 								</div>";
		}
	}
}
}
if (!function_exists('size')){
function size(){
	global $db;
	if (isset($_GET['cat_id'])) {
		$cat_id=$_GET['cat_id'];
	$get_size="select * from size where cat_id='$cat_id'";
	$run_size=mysqli_query($db,$get_size);
	while($row_size=mysqli_fetch_array($run_size)){
		print_r($row_size);
		exit();
		$size_id=$row_size['s_id'];
		$size_name=$row_size['s_name'];
		echo " <option>$size_name</option>";
}
}
}
}
?>
<!-- <select id='sizeinput' class='form-control' name='product_size'>
 										<option> $s_name </option>

 									</select> -->