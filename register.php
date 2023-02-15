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
			<h3 class="text-center">Admin Register Sistem Pakar</h3>
			<form method="POST" action="cek_register.php" enctype="multipart/form-data">

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

					<div class="form-group form-floating-label">
						<input data-toggle="tooltip" data-html="true" data-placement="right" title="<b>Admin Key</b> adalah sebuah kode rahasia yang diberikan oleh pemilik website untuk orang yang dipercayai dan dapat diandalkan untuk mengakses fitur-fitur khusus dalam website. " id="adminkey" name="adminkey" type="text" class="form-control input-border-bottom" required>
						<label for="adminkey" class="placeholder">Admin Key</label>
					</div>

					<div class="form-action mb-3">
						<button type="submit" class="btn btn-logincustom btn-rounded btn-login">Register</button>
					</div>
				</div>

			</form>

			<div class="login-account">
				<span class="msg">Sudah Punya Akun?</span>
				<a href="login.php" class="link" style="color:#e5b568">Login Disini</a>
			</div>

		</div>

	</div>
	<script src="administrator/assets/js/jquery.3.2.1.min.js"></script>
	<script src="administrator/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="administrator/assets/js/popper.min.js"></script>
	<script src="administrator/assets/js/bootstrap.min.js"></script>
	<script src="administrator/assets/js/ready.js"></script>
	<script>
		$(document).ready(function() {
			$('input[type=text][name=adminkey]').tooltip();
		});
	</script>
</body>

</html>