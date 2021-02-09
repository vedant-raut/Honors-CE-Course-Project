function getPcategory(val) {
	$.ajax({
		type: "POST",
		url: "getPcategory.php",
		data: 'category_id='+val,
		success:function (data) {
			$("#product_categories").html(data);
		}
	});
}