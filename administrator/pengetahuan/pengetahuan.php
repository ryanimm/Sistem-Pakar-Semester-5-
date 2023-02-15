<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Basis Pengetahuan</h4>
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
                        <a href="#">Pengetahuan</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Data Pengetahuan</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addPengetahuan">
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
                                            <th>Penyakit</th>
                                            <th>Gejala</th>
                                            <th>MB</th>
                                            <th>MD</th>
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

<div class="modal fade" id="addPengetahuan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                        Tambah Data</span>
                    <span class="fw-light">
                        Basis Pengetahuan
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
                        <select class="form-control" name="kode_penyakit" required>
                            <option value="" hidden="">-- Pilih Penyakit --</option>

                            <?php
                            $p = mysqli_query($conn, "SELECT kode_penyakit, nama_penyakit FROM penyakit");
                            while ($z = mysqli_fetch_array($p)) {
                            ?>

                                <option value="<?php echo $z['kode_penyakit'] ?>"><?php echo $z['nama_penyakit'] ?></option>

                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Gejala</label>
                        <select class="form-control" name="kode_gejala" required>
                            <option value="" hidden="">-- Pilih Gejala --</option>

                            <?php
                            $p = mysqli_query($conn, "SELECT kode_gejala, nama_gejala FROM gejala");
                            while ($z = mysqli_fetch_array($p)) {
                            ?>

                                <option value="<?php echo $z['kode_gejala'] ?>"><?php echo $z['nama_gejala'] ?></option>

                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>MB</label>
                        <input type="text" class="form-control" name="mb" placeholder="Masukkan MB ..." required>
                    </div>

                    <div class="form-group">
                        <label>MD</label>
                        <input type="text" class="form-control" name="md" placeholder="Masukkan MD..." required>
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
$r = mysqli_query($conn, "SELECT bp.*, p.nama_penyakit, g.nama_gejala
FROM basis_pengetahuan bp
JOIN penyakit p ON bp.kode_penyakit = p.kode_penyakit
JOIN gejala g ON bp.kode_gejala = g.kode_gejala
");
while ($d = mysqli_fetch_array($r)) {
?>
    <div class="modal fade" id="editPengetahuan<?php echo $d['kode_pengetahuan'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header no-bd">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">
                            Edit Data</span>
                        <span class="fw-light">
                            Basis Pengetahuan
                        </span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="" enctype="multipart/form-data">

                    <div class="modal-body">

                        <input type="hidden" value="<?php echo $d['kode_pengetahuan'] ?>" class="form-control" name="id">

                        <div class="form-group">
                            <label>Nama Penyakit</label>
                            <select class="form-control" name="kode_penyakit" required>
                                <option value="<?php echo $d['kode_penyakit'] ?>"><?php echo $d['nama_penyakit'] ?></option>

                                <?php
                                $p = mysqli_query($conn, "SELECT kode_penyakit, nama_penyakit FROM penyakit");
                                while ($z = mysqli_fetch_array($p)) {
                                ?>
                                    <option value="<?php echo $z['kode_penyakit'] ?>"><?php echo $z['nama_penyakit'] ?></option>

                                <?php } ?>
                            </select>
                        </div>


                        <div class="form-group">
                            <label>Nama Gejala</label>
                            <select class="form-control" name="kode_gejala" required>
                                <option value="<?php echo $d['kode_gejala'] ?>"><?php echo $d['nama_gejala'] ?></option>

                                <?php
                                $px = mysqli_query($conn, "SELECT kode_gejala, nama_gejala FROM gejala");
                                while ($zx = mysqli_fetch_array($px)) {
                                ?>
                                    <option value="<?php echo $zx['kode_gejala'] ?>"><?php echo $zx['nama_gejala'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>MB</label>
                            <input type="text" class="form-control" name="mb" value="<?php echo $d['mb'] ?>" placeholder="Masukkan MB ..." required>
                        </div>

                        <div class="form-group">
                            <label>MD</label>
                            <input type="text" class="form-control" name="md" value="<?php echo $d['md'] ?>" placeholder="Masukkan MD ..." required>
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
$g = mysqli_query($conn, "SELECT * from basis_pengetahuan");
while ($c = mysqli_fetch_array($g)) {
?>

    <div class="modal fade" id="hapusPengetahuan<?php echo $c['kode_pengetahuan'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header no-bd">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">
                            Hapus Data</span>
                        <span class="fw-light">
                            Basis Pengetahuan
                        </span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="" enctype="multipart/form-data">

                    <div class="modal-body">

                        <input type="hidden" value="<?php echo $c['kode_pengetahuan'] ?>" class="form-control" name="id">
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
    $kode_penyakit  = $_POST['kode_penyakit'];
    $kode_gejala = $_POST['kode_gejala'];
    $mb             = $_POST['mb'];
    $md             = $_POST['md'];

    $query  = "INSERT INTO basis_pengetahuan (kode_penyakit,kode_gejala,mb,md) 
                   VALUES ('$kode_penyakit', '$kode_gejala','$mb','$md')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "<script>alert('Data gagal ditambah.');window.location='?view=pengetahuan';</script>";
    } else {
        echo "<script>window.location='?view=pengetahuan'</script>";
    }
} elseif (isset($_POST['ubah'])) {
    $id             = $_POST['id'];
    $kode_penyakit  = $_POST['kode_penyakit'];
    $kode_gejala = $_POST['kode_gejala'];
    $mb             = $_POST['mb'];
    $md             = $_POST['md'];

    $query  = "UPDATE basis_pengetahuan SET kode_penyakit= '$kode_penyakit', kode_gejala= '$kode_gejala',mb='$mb',md='$md'";
    $query .= "WHERE kode_pengetahuan = '$id'";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "<script>alert('Data gagal diubah.');window.location='?view=pengetahuan';</script>";
    } else {
        echo "<script>window.location='?view=pengetahuan'</script>";
    }
} elseif (isset($_POST['hapus'])) {
    $id = $_POST["id"];

    $query = "DELETE FROM basis_pengetahuan WHERE kode_pengetahuan='$id' ";
    $hasil_query = mysqli_query($conn, $query);

    if (!$hasil_query) {
        echo "<script>window.location='?view=pengetahuan'</script>";
    } else {
        echo "<script>window.location='?view=pengetahuan'</script>";
    }
}
?>