<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Data Admin</h4>
				<ul class="breadcrumbs">
					<li class="nav-home">
						<a href="#">
							<i class="flaticon-home"></i>
						</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="#">Data</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="#">User Admin</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h4 class="card-title">Data Admin</h4>
								<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addAdmin">
									<i class="fa fa-plus"></i>
									Tambah Data
								</button>
							</div>
						</div>
						<div class="card-body">

							<div class="table-responsive">
								<table id="add-row" class="display table table-striped table-hover">
									<thead>
										<tr>
											<th>No</th>
											<th>Username</th>
											<th>Password</th>
											<th>Action</th>
										</tr>
									</thead>

									<tbody>

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<div class="modal fade" id="addAdmin" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Tambah Data</span>
					<span class="fw-light">
						Admin
					</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="" enctype="multipart/form-data">

				<div class="modal-body">
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="username" placeholder="Username ..." required>
					</div>

					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="pwd" placeholder="Password ..." required>
					</div>

				</div>

				<div class="modal-footer no-bd">
					<button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> Save Changes</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
				</div>

			</form>
		</div>
	</div>
</div>

<?php
$r = mysqli_query($conn, "SELECT * FROM admin");
while ($d = mysqli_fetch_array($r)) {
?>

	<div class="modal fade" id="editAdmin<?php echo $d['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header no-bd">
					<h5 class="modal-title">
						<span class="fw-mediumbold">
							Edit Data</span>
						<span class="fw-light">
							Admin
						</span>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="" enctype="multipart/form-data">

					<div class="modal-body">

						<input type="hidden" value="<?php echo $d['id'] ?>" class="form-control" name="id">

						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" name="username" value="<?php echo $d['username'] ?>" placeholder="Username ..." required>
						</div>

						<div class="form-group">
							<label>Password</label>
							<input type="text" class="form-control" name="pwd" value="<?php echo $d['password'] ?>" placeholder="Password ..." required>
						</div>

					</div>

					<div class="modal-footer no-bd">
						<button type="submit" name="ubah" class="btn btn-primary"><i class="fa fa-save"></i> Save Changes</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
					</div>

				</form>
			</div>
		</div>
	</div>

<?php } ?>

<?php
$g = mysqli_query($conn, "SELECT * from admin");
while ($c = mysqli_fetch_array($g)) {
?>

	<div class="modal fade" id="hapusAdmin<?php echo $c['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header no-bd">
					<h5 class="modal-title">
						<span class="fw-mediumbold">
							Hapus Data</span>
						<span class="fw-light">
							Admin
						</span>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="" enctype="multipart/form-data">

					<div class="modal-body">

						<input type="hidden" value="<?php echo $c['id'] ?>" class="form-control" name="id">
						<div class="form-group">
							<h4>Apakah Anda ingin Menghapus Data ini ?</h4>
						</div>
					</div>

					<div class="modal-footer no-bd">
						<button type="submit" name="hapus" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
					</div>

				</form>
			</div>
		</div>
	</div>

<?php } ?>

<?php

if (isset($_POST['simpan'])) {
	$username  = $_POST['username'];
	$pwd = $_POST['pwd'];

	$query  = "INSERT INTO admin (username, password,level) 
                   VALUES ('$username', '$pwd','admin')";
	$result = mysqli_query($conn, $query);

	if (!$result) {
		echo "<script>alert('Data gagal ditambah.');window.location='?view=useradmin';</script>";
	} else {
		echo "<script>window.location='?view=useradmin'</script>";
	}
} elseif (isset($_POST['ubah'])) {
	$id          = $_POST['id'];
	$username    = $_POST['username'];
	$pwd         = $_POST['pwd'];


	$query  = "UPDATE admin SET username = '$username', password = '$pwd'";
	$query .= "WHERE id = '$id'";

	$result = mysqli_query($conn, $query);

	if (!$result) {
		echo "<script>alert('Data gagal diubah.');window.location='?view=useradmin';</script>";
	} else {
		echo "<script>window.location='?view=useradmin'</script>";
	}
} elseif (isset($_POST['hapus'])) {
	$id = $_POST["id"];

	$query = "DELETE FROM admin WHERE id='$id' ";
	$hasil_query = mysqli_query($conn, $query);

	if (!$hasil_query) {
		echo "<script>alert('Data berhasil dihapus.');window.location='?view=useradmin';</script>";
	} else {
		echo "<script>window.location='?view=useradmin'</script>";
	}
}
?>