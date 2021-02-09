<?php
 include("includes/header.php");
 ?>

<div class="col-md-9 py-5 checkout">
	<?php
	if (!isset($_SESSION['customer_email'])) {
		echo "
        <script>
                window.location = 'http://localhost/swadesh_fab/login.php';
        </script>
        ";
	}
	else {
		include ('payment_options.php');
    }
	?>
</div>
	
</div>

 <?php
 include("includes/footer.php");
 ?>
