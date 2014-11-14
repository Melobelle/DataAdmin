$(document).ready(function(){
	$("#submit").click(function(event){
		event.preventDefault();
		var info = {
			"username":$("#Rusername").val(),
			"password":$("#Rpassword").val(),
			"name":$("#Rname").val(),
			"email":$("#Remail").val()
		};

		$.ajax({
			url: 'http://localhost/DataAdmin/Register/register.php',
			type: 'POST',
			dataType: 'text',
			data: info
		})
		.done(function() {
			console.log("success");
			window.location.href="../Main/Main.html";
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
			
	});
});
