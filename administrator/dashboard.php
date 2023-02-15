<?php
$query 	  = mysqli_query($conn, "SELECT count(*) as gejala from gejala");
$gejala = mysqli_fetch_array($query);

$b 	  	= mysqli_query($conn, "SELECT count(*) as penyakit from penyakit");
$penyakit = mysqli_fetch_array($b);

$e 	  		  = mysqli_query($conn, "SELECT count(*) as pengetahuan from basis_pengetahuan");
$pengetahuan = mysqli_fetch_array($e);

$m 	  	 = mysqli_query($conn, "SELECT count(*) as admin from admin");
$admin = mysqli_fetch_array($m);

$k 	  	= mysqli_query($conn, "SELECT count(*) as kontak from kontak");
$kontak = mysqli_fetch_array($k);

$ak 	  	= mysqli_query($conn, "SELECT count(*) as artikel from berita");
$artikel = mysqli_fetch_array($ak);

?>

<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<div class="card card-stats card-primary card-round">
						<div class="card-body">
							<div class="row">
								<div class="col-5">
									<div class="icon-big text-center">
										<i class="fas fa-lightbulb"></i>
									</div>
								</div>
								<div class="col col-stats">
									<div class="numbers">
										<p class="card-category">Data Gejala</p>
										<h4 class="card-title"><?php echo $gejala['gejala'] ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="card card-stats card-primary card-round">
						<div class="card-body">
							<div class="row">
								<div class="col-5">
									<div class="icon-big text-center">
										<i class="fas fa-lightbulb"></i>
									</div>
								</div>
								<div class="col col-stats">
									<div class="numbers">
										<p class="card-category">Data Penyakit</p>
										<h4 class="card-title"><?php echo $penyakit['penyakit'] ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="card card-stats card-primary card-round">
						<div class="card-body ">
							<div class="row">
								<div class="col-5">
									<div class="icon-big text-center">
										<i class="fas fa-lightbulb"></i>
									</div>
								</div>
								<div class="col col-stats">
									<div class="numbers">
										<p class="card-category">Data Pengetahuan</p>
										<h4 class="card-title"><?php echo $pengetahuan['pengetahuan'] ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="card card-stats card-primary card-round">
						<div class="card-body ">
							<div class="row">
								<div class="col-5">
									<div class="icon-big text-center">
										<i class="fas fa-user"></i>
									</div>
								</div>
								<div class="col col-stats">
									<div class="numbers">
										<p class="card-category">Data Admin Pakar</p>
										<h4 class="card-title"><?php echo $admin['admin'] ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-3">
					<div class="card card-stats card-primary card-round">
						<div class="card-body ">
							<div class="row">
								<div class="col-5">
									<div class="icon-big text-center">
										<i class="fas fa-envelope"></i>
									</div>
								</div>
								<div class="col col-stats">
									<div class="numbers">
										<p class="card-category">Data Kontak</p>
										<h4 class="card-title"><?php echo $kontak['kontak'] ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="card card-stats card-primary card-round">
						<div class="card-body ">
							<div class="row">
								<div class="col-5">
									<div class="icon-big text-center">
										<i class="fas fa-newspaper"></i>
									</div>
								</div>
								<div class="col col-stats">
									<div class="numbers">
										<p class="card-category">Data Artikel</p>
										<h4 class="card-title"><?php echo $artikel['artikel'] ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<center>
								<h3><b>SELAMAT DATANG DI DASHBOARD ADMINISTRATOR SISTEM PAKAR</b></h3>
							</center>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

</div>