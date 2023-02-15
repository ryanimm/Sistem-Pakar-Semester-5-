<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Gejala</h4>
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
                        <a href="#">Gejala</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Data Gejala</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addGejala">
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
                                            <th>Nama Gejala</th>
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

<div class="modal fade" id="addGejala" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                        Tambah Data</span>
                    <span class="fw-light">
                        Gejala
                    </span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="" enctype="multipart/form-data">

                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Gejala</label>
                        <input type="text" class="form-control" name="nama_gejala" placeholder="Nama Gejala ..." required>
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
$r = mysqli_query($conn, "SELECT * FROM gejala");
while ($d = mysqli_fetch_array($r)) {
?>

    <div class="modal fade" id="editGejala<?php echo $d['kode_gejala'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header no-bd">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">
                            Edit Data</span>
                        <span class="fw-light">
                            Gejala
                        </span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="" enctype="multipart/form-data">

                    <div class="modal-body">

                        <input type="hidden" value="<?php echo $d['kode_gejala'] ?>" class="form-control" name="id">

                        <div class="form-group">
                            <label>Nama Gejala</label>
                            <input type="text" class="form-control" name="nama_gejala" value="<?php echo $d['nama_gejala'] ?>" placeholder="Nama Gejala ..." required>
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
$g = mysqli_query($conn, "SELECT * from gejala");
while ($c = mysqli_fetch_array($g)) {
?>

    <div class="modal fade" id="hapusGejala<?php echo $c['kode_gejala'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header no-bd">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">
                            Hapus Data</span>
                        <span class="fw-light">
                            Gejala
                        </span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="" enctype="multipart/form-data">

                    <div class="modal-body">

                        <input type="hidden" value="<?php echo $c['kode_gejala'] ?>" class="form-control" name="id">
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
    $nama_gejala  = $_POST['nama_gejala'];

    $query  = "INSERT INTO gejala (nama_gejala) 
                   VALUES ('$nama_gejala')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "<script>alert('Data gagal ditambah.');window.location='?view=gejala';</script>";
    } else {
        echo "<script>window.location='?view=gejala'</script>";
    }
} elseif (isset($_POST['ubah'])) {
    $id          = $_POST['id'];
    $nama_gejala  = $_POST['nama_gejala'];


    $query  = "UPDATE gejala SET nama_gejala = '$nama_gejala'";
    $query .= "WHERE kode_gejala = '$id'";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "<script>alert('Data gagal diubah.');window.location='?view=gejala';</script>";
    } else {
        echo "<script>window.location='?view=gejala'</script>";
    }
} elseif (isset($_POST['hapus'])) {
    $id = $_POST["id"];

    $query = "DELETE FROM gejala WHERE kode_gejala='$id' ";
    $hasil_query = mysqli_query($conn, $query);

    if (!$hasil_query) {
        echo "<script>window.location='?view=gejala'</script>";
    } else {
        echo "<script>window.location='?view=gejala'</script>";
    }
}
?>