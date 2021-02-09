<?php
session_start();
include("includes/header.php");
?>
<div class="vendor px-4 col-md-6">
  <h4 class="vendor-heading">Register As Seller</h4>
  <form method="post">

    <div class="form-group  vendor_form">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail" name="vendor_email">
    </div>
    <div class="form-group  vendor_form">
      <label for="inputCompanyname">Your Company Name</label>
      <input type="text" class="form-control" id="inputCompanyname" name="company_name">
    </div>

    <div class="form-group  vendor_form">
      <label for="inputAddress">Product Type</label>
      <input type="text" class="form-control" id="inputProducttype" name="product_typ">
    </div>
    <div class="form-group  vendor_form">
      <label for="inputAddress2">Conatct No.</label>
      <input type="text" class="form-control" id="inputContact" name="vendor_contact">
    </div>

    <div class="form-group  vendor_form">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="vendor_city">
    </div>
    <div class="form-group  vendor_form">

      <button type="submit" class="btn vendor-btn " name="submit">Submit</button>
      <p>We will contact to you as soon as possible.</p>
    </div>
  </form>
</div>
<?php
include("includes/footer.php");
?>
<?php


if (isset($_POST['submit'])) {

  $vendor_email=$_POST['vendor_email'];
  $company_name=$_POST['company_name'];
  $product_typ=$_POST['product_typ'];
  $vendor_contact=$_POST['vendor_contact'];
  $vendor_city=$_POST['vendor_city'];

  $insert_vendor="insert into vendors (vendor_email,company_name,product_typ,vendor_contact,vendor_city) values('$vendor_email','$company_name','$product_typ','$vendor_contact','$vendor_city')";

  $run_vendor=mysqli_query($con,$insert_vendor);
  if ($run_vendor) {
    echo "<script>alert('We will get back to you as early as possible. THANK YOU')</script>";
    echo "<script>window.open('../index.php','_self')</script>";
  }
}

?>
