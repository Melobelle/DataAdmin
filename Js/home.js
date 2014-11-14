$(document).ready(function(){
	$.ajax({
		url: 'http://localhost/DataAdmin/Home/home.php',
		type: 'POST',
		dataType: 'json',
		
	})
	.done(function(data) {
		console.log("success");
		$("#name").text(data.n);
		$("#age").text(data.age); 
		$("#major").text(data.major);
		$("#sex").text(data.sex);

	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
});