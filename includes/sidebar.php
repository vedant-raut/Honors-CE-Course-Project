
<?php
include("./admin_area/functions/functions.php");
?>
<div class="card shop_card">
	<div class="class-header shop_sidebar_header">
		<h4>Product Category</h4>
	</div>
	<ul class="list-group list-group-flush nav nav-pills">
		<?php
		getPCats();
		?>
	</ul>
</div>