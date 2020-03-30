<?php
session_start();
?>
<!DOCTYPE html>
<html >
	<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel ="styleshrrt" href="css/reg.css">
		<title>Registration</title>
	</head>
	<body>
		<div class="row">
			<div class="col s12 m4 offset-m4">
				<div class="card">
					<div class="card-action blue lighten-1 white-text">
						<h3>Sign up</h3>
						</div>

						<div class="card-content">

							<form>
                                <div class="row">
								<div class="input-field">
                                    <input type="text" id="login" name="login" class="validate" required="required">
                                    <label for="login">Login</label>
                                </div>
                                </div>

                                <div class="row">
                                <div class="input-field">
                                    <input type="email" id="email" name="email" class="validate" required="required">
                                    <label for="email">Your E-Mail</label>
                                </div>
                                </div>

                                <div class="row">
								<div class="input-field">
                                    <input type="password" id="password" name="password" class="validate" required="required">
									<label for="password">Password</label>
                                </div>
                                </div>

                                <div class="row">
								<div class="input-field">
                                    <input type="password" id="pass-picked" name="password_confirm" class="validate" required="required">
									<label for="pass-picked">Confirm Password</label>
                                </div>
                                </div>

                                <div class="row">
						            <button type="submit" name="btn-signup" id="reg_btn"  class="btn blue right waves-effect waves-light">Sign Up</button>
					            </div>
								<p class="msg none"></p>
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