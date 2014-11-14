$(document).ready(function(){
	$("#submit").click(function(event) {
		event.preventDefault();
		var info={
			"name":$("#name").val(),
			"age":$("#age").val(),
			"major":$("#major").val(),
			"sex":$("#sex").val()

		}
		$.ajax({
			url: 'http://localhost/DataAdmin/Per-info/per_info.php',
			type: 'POST',
			dataType: 'text',
			data: info
		})
		.done(function(data) {
			console.log(data);
			window.location.href="../Home/Home.html"
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		

	});
});