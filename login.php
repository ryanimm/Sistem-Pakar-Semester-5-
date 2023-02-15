<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Admin Login Sistem Pakar</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<!-- CSS Files -->
	<link rel="stylesheet" href="administrator/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="administrator/assets/css/fonts.css">
	<link rel="stylesheet" href="administrator/assets/css/styleadmin.css">
</head>

<body class="login">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h3 class="text-center">Admin Login Sistem Pakar</h3>
			<form method="POST" action="cek_login.php" enctype="multipart/form-data">

				<div class="login-form">
					<div class="form-group form-floating-label">
						<input id="username" name="username" type="text" class="form-control input-border-bottom" required>
						<label for="username" class="placeholder">Username</label>
					</div>
					<div class="form-group form-floating-label">
						<input id="password" name="password" type="password" class="form-control input-border-bottom" required>
						<label for="password" class="placeholder">Password</label>
						<div class="show-password">
							<i class="flaticon-interface"></i>
						</div>
					</div>

					<div class="form-action mb-3">
						<button type="submit" class="btn btn-logincustom btn-rounded btn-login">Sign In</button>
					</div>
				</div>

			</form>

			<div class="login-account">
				<span class="msg">Ingin Jadi Admin Sistem Pakar?</span>
				<a href="register.php" class="link" style="color:#e5b568">Klik Disini</a>
			</div>

		</div>

	</div>
	<script src="administrator/assets/js/jquery.3.2.1.min.js"></script>
	<script src="administrator/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="administrator/assets/js/popper.min.js"></script>
	<script src="administrator/assets/js/bootstrap.min.js"></script>
	<script src="administrator/assets/js/ready.js"></script>
</body>

</html>