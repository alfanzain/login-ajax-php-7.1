<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
</head>

<body>

<form id="login" method="post">
	1 hour 9 minutes <br><br>
	<input type="text" name="username" value="" placeholder="Username"> <br><br>
	<input type="password" name="password" value="" placeholder="Password"> <br><br>
	<input type="submit" value="Login">
	<span id="response">
	</span>
</form>

<script>
$(document).ready(function () {
	var response = $("#response");

	$("#login").submit(function(event){
		
		response.html('Processing...');

		event.preventDefault();

		$.ajax({
			method: "POST",
			url: "database.php",
			data: {
				user: $("input[name=username").val(),
				pass: $("input[name=password").val()
			},
			statusCode: {
				500: function() {
					response.html('Error : 500');
				}
			}
		}).done(function(data){
			if(data == 1)
				response.html('Login berhasil !');
			else if(data == 2)
				response.html('Login gagal.');
		});
	});
});
</script>

</body>
</html>