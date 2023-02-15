<?php
session_start();
include '../koneksi.php';
if (($_SESSION['level']) !== 'admin') {
	header('location:../login.php');
} else {
?>


	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title>SISTEM PAKAR</title>
		<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
		<script src="https://kit.fontawesome.com/f8535c9b97.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/styleadmin.css">


	</head>

	<body>
		<div class="wrapper">

			<div class="main-header" data-background-color="purple">
				<!-- Logo Header -->
				<div class="logo-header">

					<a href="../index.php" class="logo">
						<span class="navbar-brand mb-0" style="color:white;font-weight:550;font-size:1.25em;">Sistem Pakar</span>
					</a>
					<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon">
							<i class="fa fa-bars"></i>
						</span>
					</button>
					<div class="navbar-minimize">
						<button class="btn btn-minimize btn-rounded">
							<i class="fa fa-bars"></i>
						</button>
					</div>
				</div>
				<!-- End Logo Header -->
			</div>
			<!-- Sidebar -->
			<div class="sidebar">

				<div class="sidebar-wrapper scrollbar-inner">
					<div class="sidebar-content">
						<ul class="nav">
							<li class="nav-item">
								<a href="?view=dashboard">
									<i class="fas fa-home"></i>
									<p>Dashboard</p>
								</a>
							</li>
							<li class="nav-section">
								<span class="sidebar-mini-icon">
									<i class="fa fa-ellipsis-h"></i>
								</span>
								<h4 class="text-section">Manajemen Data</h4>
							</li>

							<li class="nav-item">
								<a href="?view=useradmin">
									<i class="fas fa-user"></i>
									<p>Data Admin Pakar</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="?view=keyadmin">
									<i class="fas fa-key"></i>
									<p>Data Admin Key</p>
								</a>
							</li>


							<li class="nav-item">
								<a href="?view=berita">
									<i class="fas fa-newspaper"></i>
									<p>Data Artikel</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="?view=kontak">
									<i class="fas fa-envelope"></i>
									<p>Data Kontak</p>
								</a>
							</li>



							<li class="nav-item">
								<a href="?view=penyakit">
									<i class="fas fa-lightbulb"></i>
									<p>Data Penyakit</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="?view=gejala">
									<i class="fas fa-lightbulb"></i>
									<p>Data Gejala</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="?view=pengetahuan">
									<i class="fas fa-lightbulb"></i>
									<p>Data Pengetahuan</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="../logout.php">
									<i class="fas fa-lock"></i>
									<p>Logout</p>
								</a>
							</li>

						</ul>
					</div>
				</div>
			</div>

			<?php
			// Dashboard
			if (@$_GET['view'] == '')
				include 'dashboard.php';
			elseif ($_GET['view'] == 'dashboard')
				include 'dashboard.php';
			// Data Berita
			elseif ($_GET['view'] == 'berita')
				include 'berita/berita.php';
			// Data Kontak
			elseif ($_GET['view'] == 'kontak')
				include 'kontak/kontak.php';
			// Data User Admin
			elseif ($_GET['view'] == 'useradmin')
				include 'useradmin/admin.php';
			// Data Admin Key
			elseif ($_GET['view'] == 'keyadmin')
				include 'keyadmin/keyadmin.php';
			// Data Penyakit
			elseif ($_GET['view'] == 'penyakit')
				include 'penyakit/penyakit.php';
			// Data Gejala
			elseif ($_GET['view'] == 'gejala')
				include 'gejala/gejala.php';
			// Data Basis Pengetahuan
			elseif ($_GET['view'] == 'pengetahuan')
				include 'pengetahuan/pengetahuan.php';
			?>


		</div>
		<script src="assets/js/jquery.3.2.1.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
		<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
		<script src="assets/js/getTableData.js"></script>
		<script src="assets/js/plugin/datatables/datatables.min.js"></script>
		<script src="assets/js/ready.min.js"></script>
		<script>
			$(document).ajaxComplete(function() {
				$('#add-row').DataTable({
					pageLength: 25
				});
			});
		</script>
	</body>

	</html>
<?php } ?>