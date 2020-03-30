<?php
session_start();
?>

<!DOCTYPE html>
<html >
	<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="css/reg.css">
		<title>Login to Celyes</title>
	</head>
	<body>
		<div class="row">
			<div class="col s12 m4 offset-m4">
				<div class="card">
					<div class="card-action teal lighten-1 white-text">
						<h3>Login in</h3>
						</div>

						<div class="card-content">

							<form autocomplete="off">
								<div class="row">
								<div class="input-field">
									<label for="email">Your E-Mail</label>
									<input type="text" id="email" name="email" class="validate" required="required">
								</div>
								</div>

								<div class="row">
								<div class="input-field">
									<input type="password" id="pass" name="password" class="validate" required="required">
									<label for="pass">Password</label>
								</div>
								</div>
							
								<div>
									<label>
									<input type="checkbox"id="remem">
										<span class="remem">Remember Me</span>
									</label>
								</div>

								<div class="row">
								<div class="input-field">
									<button type="submit" name="login" id="login_btn" class="btn waves-effect waves-dark teal right" style="width:100%;">Log in</button>
								</div>
								</div>
								<p class="msg none"></p>

									<p style="text-align:center;">Have No Account? <a href="regCheck.php">Sign Up</a></p>
							</form>
						</div>
						
				</div>	
			</div>
		</div>
		<!-- scripts -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			crossorigin="anonymous">
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html> 
   