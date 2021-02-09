<?php 
if (!isset($_SESSION['admin_email'])) {
  echo "<script>window.open('login.php','_self')</script>";
}
else{
?>
<div class="col-3 p-0">

    <ul class="nav navbar-nav side-nav">
      <li>
        <a href="index.php?dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a>
      </li>

      <li>
        <a href="#" data-toggle="collapse" data-target="#products">
          <i class="fa fa-fw fa-table"></i>Product
       
        <i class="fa fa-fw fa-caret-down"></i> </a>
      
      <ul class="collapse" id="products">
        <li>
          <a href="index.php?insert_product">Insert Product</a>
        </li>
        <li>
          <a href="index.php?view_product">View Product</a>
        </li>
      </ul>
    </li>
     <li>
        <a href="#" data-toggle="collapse" data-target="#product_cat">
          <i class="fa fa-fw fa-table"></i>Product Categories
       
        <i class="fa fa-fw fa-caret-down"></i>
       </a>
      <ul class="collapse" id="product_cat">
        <li>
          <a href="index.php?insert_product_cat">Insert Product Categories</a>
        </li>
        <li>
          <a href="index.php?view_product_cat">View Product Categories</a>
        </li>
      </ul>
    </li>
     <li>
        <a href="#" data-toggle="collapse" data-target="#category">
          <i class="fa fa-fw fa-table"></i>Categories
        
        <i class="fa fa-fw fa-caret-down"></i>
      </a>
      <ul class="collapse" id="category">
        <li>
          <a href="index.php?insert_categories">Insert Categories</a>
        </li>
        <li>
          <a href="index.php?view_categories">View Categories</a>
        </li>
      </ul>
    </li>
     <li>
        <a href="#" data-toggle="collapse" data-target="#slider">
          <i class="fa fa-fw fa-table"></i>Slider
        
        <i class="fa fa-fw fa-caret-down"></i>
        </a>
      <ul class="collapse" id="slider">
        <li>
          <a href="index.php?insert_slider">Insert Slider</a>
        </li>
        <li>
          <a href="index.php?view_slider">View Slider</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="index.php?view_customer">
        <i class="fa fa-fw fa-edit"></i>View Customer
      </a>
    </li>
    <li>
      <a href="index.php?view_order">
        <i class="fa fa-fw fa-list"></i>View order
      </a>
    </li>
    <li>
      <a href="index.php?view_payments">
        <i class="fa fa-fw fa-pencil"></i>View payments
      </a>
    </li>
    
    </ul>
  </div>
  
<?php } ?>
 
