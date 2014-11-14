$(document).ready(function(){
	$("#submit").click(function(event){
		event.preventDefault();
		var info = {
			username:$("#Lusername").val(),
			password:$("#Lpassword").val()
		}

		$.ajax({
			url: 'http://localhost/DataAdmin/Main/index.php',
			type: 'POST',
			dataType: 'json',
			data: info
		})
		
		 .done(	function(result) {
			//alert(result);
			console.log("success");
			
			if(result.status)
			{
				
				// console.log("success");
				// alert("login success!!");
				window.location.href="../Home/Home.html";
			}
			else
				alert("Username or Password Wrong!")
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
			
		});
	});
