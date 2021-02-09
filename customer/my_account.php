<?php 
session_start();
if (!isset($_SESSION['customer_email'])) {
	echo "<script>window.open('../login.php','_self')</script>";
}
else
{

	include("includes/header.php");
	?><!-- /header -->
	<div id="content" class="col-12 px-0">

		<div class="container col-12 px-0">
			<div class="row">
				<div class="col-md-3 col-sm-12 my_accnt_start">
					<?php
					include("includes/sidebar.php");
					?>
				</div>
				<div class="col-md-9 col-sm-12 py-0">
					
					<?php
					if(isset($_GET['my_order']))
						{include("my_order.php");}
					?>
					<?php
					if(isset($_GET['my_address']))
						{include("my_address.php");}
					?>


					<?php
					if(isset($_GET['edit_account']))
						{include("edit_account.php");}
					?>
					<?php
					if(isset($_GET['change_pass']))
						{include("change_pass.php");}
					?>
					<?php
					if(isset($_GET['delete_account']))
						{include("delete_account.php");}
					?>
				</div>
			</div>
		</div>
	</div>
			<div class="col-md-12">
			<?php
			include("includes/footer.php");
			?>
		</div>
		<?php } ?>
