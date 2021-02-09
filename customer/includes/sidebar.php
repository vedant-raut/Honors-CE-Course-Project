<div class="card side_bar">
	<div class="class-header">
		<h4>My Account</h4>
		<?php
    $session_customer=$_SESSION['customer_email'];
    $get_cust="select * from customers where customer_email='$session_customer'";
    $run_cust=mysqli_query($con,$get_cust);
    $row_customers=mysqli_fetch_array($run_cust);
    $customer_name=$row_customers['customer_name'];
    if (!isset($_SESSION['customer_email'])) {
      
    }
    else
    {
      echo "Name : $customer_name";
    }

    ?>
	</div>
	<ul class="list-group list-group-flush nav nav-pills side_bar_ul">
    <li class="list-group-item nav-item my_acnt_sidebar_element <?php if(isset($_GET['my_order'])){echo "active";}?>"><a href="my_account.php?my_order" class="nav-link"><i class="fa fa-list" aria-hidden="true"></i>My Order</a></li>
    <li class="list-group-item nav-item my_acnt_sidebar_element <?php if(isset($_GET['my_address'])){echo "active";}?>"><a href="my_account.php?my_address" class="nav-link"><i class="fa fa-user" aria-hidden="true"></i> My Address</a></li>
     <li class="list-group-item nav-item my_acnt_sidebar_element <?php if(isset($_GET['edit_account'])){echo "active";}?>"><a href="my_account.php?edit_account" class="nav-link"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Account</a></li>
     <li class="list-group-item nav-item my_acnt_sidebar_element <?php if(isset($_GET['change_pass'])){echo "active";}?>"><a href="my_account.php?change_pass" class="nav-link"><i class="fa fa-user" aria-hidden="true"></i> Change Password</a></li>
     <li class="list-group-item nav-item my_acnt_sidebar_element <?php if(isset($_GET['delete_account'])){echo "active";}?>"><a href="my_account.php?delete_account" class="nav-link"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete Account</a></li>
      <li class="list-group-item nav-item my_acnt_sidebar_element <?php if(isset($_GET['logout'])){echo "active";}?>"><?php 
        if(!isset($_SESSION['customer_email'])){
          echo "<a href='./login.php' class='nav-link'>Login</a>";
        }
        else{
          echo "<a href='./logout.php' class='nav-link'><i class='fa fa-sign-out' aria-hidden='true'></i>Logout</a>";
        }
        ?></li>
    
  </ul>
</div>
