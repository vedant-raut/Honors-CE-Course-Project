<div class="col-12 my_acnt_section del-sec">
	<h5>Do you really want to delete account?</h5>
	<form action="" method="post">
		<input type="submit" name="yes" value="Yes,i want to delete." class="btn btn-danger del-sec-btn">
		<input type="submit" name="no" value="No,i don't want to delete." class="btn btn-primary del-sec-btn">
	</form>
</div>
<?php
$c_email=$_SESSION['customer_email'];
if (isset($_POST['yes'])) {
	$delete_q="delete from customers where customer_email='$c_email'";
	$run_q=mysqli_query($con,$delete_q);
	if ($run_q) {
		session_destroy();
		echo "<script>alert('Your account has been deleted.')</script>";
		echo "<script>window.open('../index.php' , '_self')</script>";
	}

	}
?>