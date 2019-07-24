<?php
session_start();
$_SESSION['loginstatus'] = "loggedout";

?>
<!DOCTYPE html>
<html>

<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="shortcut icon" type="image/png" href="../assets/img/favicon-binay.png" />
	<!------ Include the above in your HEAD tag ---------->


	<title>My Awesome Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
</head>
<!--Coded with love by Mutiullah Samim-->

<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="../assets/img/3.png" height=290px; width=290px; class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">

					<form method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="usernamebox" class="form-control input_user" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="passwordbox" class="form-control input_pass" placeholder="password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
						<div class="col-sm">
							<input type="submit" class="btn login_btn btn-primary" value="Login" name="loginbutton" />
						</div>
					</form>
				</div>

				<?php

				if (isset($_POST['loginbutton'])) {

					$username = $_POST['usernamebox'];
					$password = $_POST['passwordbox'];
					if (empty($username)) {
						?>
						<script type="text/javascript">
							var r = confirm("Please fill Username");
							
						</script>
					<?php
					} else if (!empty($username) && empty($password)) {
						?>
						<script type="text/javascript">
							var r = confirm("Please fill password");
							
						</script>
					<?php
					} else {

						if ($username == "ratedbinay" && $password == "123") {
							$_SESSION['loginstatus'] = "loggedin";
							?>
							<script type="text/javascript">
																
								window.location.replace("BlogForm.php");
							</script>
						<?php
						} else {
							
							?>
							<script type="text/javascript">
								var r = confirm("Incorrect Username or Password");
							</script>
						<?php
						}
					}
				}
				?>

				<!-- <button type="button" name="button" class="btn login_btn btn-primary">Login</button> -->


			</div>
		</div>
	</div>
</body>

</html>