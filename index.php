<html lang="en">
	<head>
		  <title>STRATABALLOT</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		  <link rel="stylesheet" type="text/css" href="style.css">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  
		<style>
			.login {
				display:flex;
				align-items: center;
			}
		</style>
	</head>
	
	<body>
		<div class="container">
			<div class="login" style="height:100%;">
				<div class="panel panel-primary center-block">
					<div class="panel-heading">
						LOGIN
					</div>
					<form id="frm-login" method="POST">
						<div class="panel-body text-center">
							<div class="form-group">
								<label>Email: </label>
								<input type="text" name="user" >
							</div>
							<div class="form-group">
								<label>Password: </label>
								<input type="password" name="password">
							</div>
						</div>
						<div class="panel-footer text-center">
							<input type="submit" name="submit" class="btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
		<script>
		$(document).ready(function(){
			$("#frm-login").submit(function(e){
				e.preventDefault();
				
				var te = $('input[name=user]').val();
				
				$.ajax({
					url:"login.php",
					type:"POST",
					data:{email:te},
					success:function(data){
						console.log(data);
					}
				});
			})
			
			
		});
		</script>
	</body>
</html>