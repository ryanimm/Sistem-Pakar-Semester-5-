<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Penyakit</h4>
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
                        <a href="#">Penyakit</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Data Penyakit</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addPenyakit">
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
                                            <th>Nama Penyakit</th>
                                            <th>Detail Penyakit</th>
                                            <th>Saran Penyakit</th>
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

<div class="modal fade" id="addPenyakit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                        Tambah Data</span>
                    <span class="fw-light">
                        Penyakit
                    </span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="" enctype="multipart/form-data">

                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Penyakit</label>
                        <input type="text" class="form-control" name="nama_penyakit" placeholder="Nama Penyakit ..." required>
                    </div>

                    <div class="form-group">
                        <label>Upload Gambar</label>
                        <input type="file" class="form-control" name="gambar_penyakit" accept=".png, .jpg, .jpeg" required>
                        <small>Format Gambar Harus JPG / PNG / JPEG</small>
                    </div>

                    <div class="form-group">
                        <label>Detail Penyakit</label>
                        <textarea class="form-control" style="white-space: pre-line;" rows="5" name="detail_penyakit" placeholder="Detail Penyakit ..." required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Saran Penyakit</label>
                        <textarea class="form-control" style="white-space: pre-line;" rows="5" name="saran_penyakit" placeholder="Saran Penyakit ..." required></textarea>
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
$g = mysqli_query($conn, "SELECT * FROM penyakit");
while ($d = mysqli_fetch_array($g)) {
?>

    <div class="modal fade" id="editPenyakit<?php echo $d['kode_penyakit'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header no-bd">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">
                            Edit Data</span>
                        <span class="fw-light">
                            Penyakit
                        </span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="" enctype="multipart/form-data">

                    <div class="modal-body">

                        <input type="hidden" value="<?php echo $d['kode_penyakit'] ?>" class="form-control" name="id">

                        <div class="form-group">
                            <label>Nama Penyakit</label>
                            <input type="text" class="form-control" value="<?php echo $d['nama_penyakit'] ?>" name="nama_penyakit" placeholder="Nama Penyakit ..." required>
                        </div>

                        <div class="form-group">
                            <img src="../gambar/penyakit/<?php echo $d['gambar'] ?>" width="70" height="70">
                        </div>

                        <div class="form-group">
                            <label>Upload Gambar</label>
                            <input type="file" class="form-control" name="gambar_penyakit" accept=".png, .jpg, .jpeg">
                            <small>Format Gambar Harus JPG / PNG / JPEG</small>
                        </div>

                        <div class="form-group">
                            <label>Detail Penyakit</label>
                            <textarea class="form-control" style="white-space: pre-line;" rows="5" name="detail_penyakit" placeholder="Detail Penyakit ..." required><?php echo $d['det_penyakit'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Saran Penyakit</label>
                            <textarea class="form-control" style="white-space: pre-line;" rows="5" name="saran_penyakit" placeholder="Saran Penyakit ..." required><?php echo $d['srn_penyakit'] ?></textarea>
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
$h = mysqli_query($conn, "SELECT * FROM penyakit");
while ($c = mysqli_fetch_array($h)) {
?>

    <div class="modal fade" id="hapusPenyakit<?php echo $c['kode_penyakit'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header no-bd">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">
                            Hapus Data</span>
                        <span class="fw-light">
                            Penyakit
                        </span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="" enctype="multipart/form-data">

                    <div class="modal-body">

                        <input type="hidden" value="<?php echo $c['kode_penyakit'] ?>" class="form-control" name="id">

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
    $nama_penyakit       = $_POST['nama_penyakit'];
    $detail_penyakit  = mysqli_real_escape_string($conn, $_POST['detail_penyakit']);
    $saran_penyakit = mysqli_real_escape_string($conn, $_POST['saran_penyakit']);
    $gambar_penyakit    = $_FILES['gambar_penyakit']['name'];

    if ($gambar_penyakit != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
        $x                        = explode('.', $gambar_penyakit);
        $ekstensi                = strtolower(end($x));
        $file_tmp                = $_FILES['gambar_penyakit']['tmp_name'];
        $angka_acak                = rand(1, 999);
        $nama_gambar_baru        = $angka_acak . '-' . $gambar_penyakit;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, '../gambar/penyakit/' . $nama_gambar_baru);

            $query  = "INSERT INTO penyakit (nama_penyakit, det_penyakit, srn_penyakit, gambar) 
		      			 VALUES ('$nama_penyakit', '$detail_penyakit', '$saran_penyakit', '$nama_gambar_baru')";
            $result = mysqli_query($conn, $query);

            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
            } else {
                echo "<script>window.location='?view=penyakit'</script>";
            }
        } else {
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png atau jpeg.');window.location='?view=penyakit';</script>";
        }
    } else {

        $query  = "INSERT INTO penyakit(nama_penyakit, det_penyakit, srn_penyakit, gambar) 
		   			  VALUES ('$nama_penyakit', '$detail_penyakit', '$saran_penyakit', null)";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
        } else {
            echo "<script>window.location='?view=penyakit'</script>";
        }
    }
} elseif (isset($_POST['ubah'])) {
    $id                = $_POST['id'];
    $nama_penyakit     = $_POST['nama_penyakit'];
    $detail_penyakit   = mysqli_real_escape_string($conn, $_POST['detail_penyakit']);
    $saran_penyakit    = mysqli_real_escape_string($conn, $_POST['saran_penyakit']);
    $gambar_penyakit   = $_FILES['gambar_penyakit']['name'];

    if ($gambar_penyakit != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
        $x                        = explode('.', $gambar_penyakit);
        $ekstensi                = strtolower(end($x));
        $file_tmp                = $_FILES['gambar_penyakit']['tmp_name'];
        $angka_acak                = rand(1, 999);
        $nama_gambar_baru        = $angka_acak . '-' . $gambar_penyakit;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {

            $get_foto  = "SELECT gambar FROM penyakit WHERE kode_penyakit='$id'";
            $data_foto = mysqli_query($conn, $get_foto);
            $foto_lama = mysqli_fetch_array($data_foto);

            unlink("../gambar/penyakit/" . $foto_lama['gambar']);

            move_uploaded_file($file_tmp, '../gambar/penyakit/' . $nama_gambar_baru);

            $query  = "UPDATE penyakit SET nama_penyakit = '$nama_penyakit', det_penyakit = '$detail_penyakit', srn_penyakit = '$saran_penyakit', 
	          			 gambar = '$nama_gambar_baru'";
            $query .= "WHERE kode_penyakit = '$id'";
            $result = mysqli_query($conn, $query);

            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
            } else {
                echo "<script>window.location='?view=penyakit'</script>";
            }
        } else {
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png atau jpeg.');window.location='?view=penyakit';</script>";
        }
    } else {

        $query  = "UPDATE penyakit SET nama_penyakit = '$nama_penyakit', det_penyakit = '$detail_penyakit', srn_penyakit = '$saran_penyakit'";
        $query .= "WHERE kode_penyakit = '$id'";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
        } else {
            echo "<script>window.location='?view=penyakit'</script>";
        }
    }
} elseif (isset($_POST['hapus'])) {
    $id = $_POST["id"];

    $get_foto = "SELECT gambar FROM penyakit WHERE kode_penyakit='$id'";
    $data_foto = mysqli_query($conn, $get_foto);
    $foto_lama = mysqli_fetch_array($data_foto);

    unlink("../gambar/penyakit/" . $foto_lama['gambar']);

    $query = "DELETE FROM penyakit WHERE kode_penyakit='$id' ";
    $hasil_query = mysqli_query($conn, $query);

    if (!$hasil_query) {
        die("Gagal menghapus data: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
    } else {
        echo "<script>window.location='?view=penyakit'</script>";
    }
}
?>