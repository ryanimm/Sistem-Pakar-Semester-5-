<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Pakar Gigi dan Mulut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f8535c9b97.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="<?php if (isset($_POST['submit'])) {
                    echo "bodyhasildiag";
                } ?>">
    <!-- Navbar  -->
    <?php include 'include/navbar.php'; ?>

    <?php
    error_reporting(0);
    if (isset($_POST['submit'])) {
        date_default_timezone_set("Asia/Jakarta");
        $inptanggal = date('Y-m-d H:i:s');

        $arbobot = array('0', '1', '0.8', '0.6', '0.4', '0', '-0.4', '-0.6', '-0.8', '-1');
        $argejala = array();

        for ($i = 0; $i < count($_POST['kondisi']); $i++) {
            $arkondisi = explode("_", $_POST['kondisi'][$i]);
            if (strlen($_POST['kondisi'][$i]) > 1) {
                $argejala += array($arkondisi[0] => $arkondisi[1]);
            }
        }

        $sqlkondisi = mysqli_query($conn, "SELECT * FROM kondisi order by id+0");
        while ($rkondisi = mysqli_fetch_array($sqlkondisi)) {
            $arkondisitext[$rkondisi['id']] = $rkondisi['kondisi'];
        }

        $sqlpkt = mysqli_query($conn, "SELECT * FROM penyakit order by kode_penyakit+0");
        while ($rpkt = mysqli_fetch_array($sqlpkt)) {
            $arpkt[$rpkt['kode_penyakit']] = $rpkt['nama_penyakit'];
            $ardpkt[$rpkt['kode_penyakit']] = $rpkt['det_penyakit'];
            $arspkt[$rpkt['kode_penyakit']] = $rpkt['srn_penyakit'];
            $argpkt[$rpkt['kode_penyakit']] = $rpkt['gambar'];
        }

        //print_r($arkondisitext);
        // -------- perhitungan certainty factor (CF) ---------
        // --------------------- START ------------------------
        $sqlpenyakit = mysqli_query($conn, "SELECT * FROM penyakit order by kode_penyakit");
        $arpenyakit = array();
        while ($rpenyakit = mysqli_fetch_array($sqlpenyakit)) {
            $cftotal_temp = 0;
            $cf = 0;
            $sqlgejala = mysqli_query($conn, "SELECT * FROM basis_pengetahuan where kode_penyakit=$rpenyakit[kode_penyakit]");
            $cflama = 0;
            while ($rgejala = mysqli_fetch_array($sqlgejala)) {
                $arkondisi = explode("_", $_POST['kondisi'][0]);
                $gejala = $arkondisi[0];

                for ($i = 0; $i < count($_POST['kondisi']); $i++) {
                    $arkondisi = explode("_", $_POST['kondisi'][$i]);
                    $gejala = $arkondisi[0];
                    if ($rgejala['kode_gejala'] == $gejala) {
                        $cf = ($rgejala['mb'] - $rgejala['md']) * $arbobot[$arkondisi[1]];
                        if (($cf >= 0) && ($cf * $cflama >= 0)) {
                            $cflama = $cflama + ($cf * (1 - $cflama));
                        }
                        if ($cf * $cflama < 0) {
                            $cflama = ($cflama + $cf) / (1 - min(abs($cflama), abs($cf)));
                        }
                        if (($cf < 0) && ($cf * $cflama >= 0)) {
                            $cflama = $cflama + ($cf * (1 + $cflama));
                        }
                    }
                }
            }
            if ($cflama > 0) {
                $arpenyakit += array($rpenyakit['kode_penyakit'] => number_format($cflama, 4));
            }
        }

        arsort($arpenyakit);

        $inpgejala = serialize($argejala);
        $inppenyakit = serialize($arpenyakit);

        $np1 = 0;
        foreach ($arpenyakit as $key1 => $value1) {
            $np1++;
            $idpkt1[$np1] = $key1;
            $vlpkt1[$np1] = $value1;
        }

        mysqli_query($conn, "INSERT INTO hasil(
                  tanggal,
                  gejala,
                  penyakit,
                  hasil_id,
                  hasil_nilai
				  ) 
	        VALUES(
                '$inptanggal',
                '$inpgejala',
                '$inppenyakit',
                '$idpkt1[1]',
                '$vlpkt1[1]'
				)");
        // --------------------- END -------------------------

        echo "<div class='content hasildiag' id='section-to-print'>
	<h2 class='text text-primary'>Hasil Diagnosis &nbsp;&nbsp;<button id='print' onClick='window.print();' data-toggle='tooltip' data-placement='right' title='Klik tombol ini untuk mencetak hasil diagnosa'><i class='fa fa-print'></i> Cetak</button> </h2>
	          <hr><table class='table table-bordered table-striped diagnosa'> 
          <th class='text-center' width=8%>No</th>
          <th class='text-center' width=10%>Kode</th>
          <th class='text-center'>Gejala yang dialami</th>
          <th class='text-center' width=20%>Pilihan</th>
          </tr>";
        $ig = 0;
        foreach ($argejala as $key => $value) {
            $kondisi = $value;
            $ig++;
            $gejala = $key;
            $sql4 = mysqli_query($conn, "SELECT * FROM gejala where kode_gejala = '$key'");
            $r4 = mysqli_fetch_array($sql4);
            echo '<tr><td align="center">' . $ig . '</td>';
            echo '<td align="center">G' . str_pad($r4['kode_gejala'], 3, '0', STR_PAD_LEFT) . '</td>';
            echo '<td align="center"><span class="hasil text text-primary">' . $r4['nama_gejala'] . "</span></td>";
            echo '<td align="center"><span class="kondisipilih" style="color:black">' . $arkondisitext[$kondisi] . "</span></td></tr>";
        }
        $np = 0;
        foreach ($arpenyakit as $key => $value) {
            $np++;
            $idpkt[$np] = $key;
            $nmpkt[$np] = $arpkt[$key];
            $vlpkt[$np] = $value;
        }
        if ($argpkt[$idpkt[1]]) {
            $gambar = 'gambar/penyakit/' . $argpkt[$idpkt[1]];
        } else {
            $gambar = 'gambar/noimage.png';
        }
        echo "</table><div class='well well-small'> <div style='text-align: center;'><img class='img-bordered-sm mt-5' src='" . $gambar . "' height=200></div><div style='clear: both;'></div><h3 class='text-center mt-5'>Hasil Diagnosa</h3>";
        echo "<div class='callout callout-default text-center'>Jenis penyakit yang diderita adalah <b>" . $nmpkt[1] . "</b> / " . round($vlpkt[1], 2) * 100 . " % (" . $vlpkt[1] . ")<br>";
        echo "</div><div class='box box-info box-solid'><div class='box-header with-border'><h3 class='box-title'>Detail</h3></div><div class='box-body'><h5 class='textdiagnosis text-justify'>";
        echo $ardpkt[$idpkt[1]];
        echo "</h5></div></div>
          <div class='box box-info box-solid'><div class='box-header with-border'><h3 class='box-title'>Saran</h3></div><div class='box-body'><h5 class='textdiagnosis text-justify'>";
        echo $arspkt[$idpkt[1]];
        echo "</h5></div></div>
          <div class='box box-info box-solid'><div class='box-header with-border'><h3 class='box-title'>Kemungkinan lain:</h3></div><div class='box-body'><h5>";
        for ($ipl = 2; $ipl < count($idpkt); $ipl++) {
            echo " <h5 class='textdiagnosis'><i class='fa fa-caret-square-o-right'></i> " . $nmpkt[$ipl] . "</b> / " . round($vlpkt[$ipl], 2) * 100 . " % (" . $vlpkt[$ipl] . ")<br></h5>";
        }
        echo "</div></div></div>
		  </div>";
    } else {
        echo "
        <div class='alert alert-warning mx-4 mt-3' role='alert'>
                    <h4><i class='icon fa fa-exclamation-triangle'></i> Perhatian !</h4>
                    Silakan pilih gejala yang sesuai dengan kondisi gigi dan mulut Anda dengan skala pasti tidak sampai pasti ya. Setelah selesai, tekan tombol Proses  (<i class='fa fa-search-plus'></i>) untuk melihat hasil.
                  </div>
            <form name=text_form method=POST action='diagnosa.php' class='mx-4'>";

        $sql3 = mysqli_query($conn, "SELECT * FROM gejala order by kode_gejala");
        $i = 0;
        while ($r3 = mysqli_fetch_array($sql3)) {
            $i++;
            echo "
        <div class='card mb-3'>
            <div class='card-header modifcard'>
                <h5 class='my-1 modifgj'>G" . str_pad($r3['kode_gejala'], 3, '0', STR_PAD_LEFT) . "</h5>
            </div>
            <div class='card-body'>
                <p class='card-text'>Apakah anda mengalami " . strtolower($r3['nama_gejala']) . "?</p>
                <select name='kondisi[]' id='sl" . $i . "' class='form-control opsikondisi'/>
                    <option data-id='0' value='0'>Pilih jika sesuai</option>";
            $s = "select * from kondisi order by id";
            $q = mysqli_query($conn, $s) or die($s);
            while ($rw = mysqli_fetch_array($q)) {
                echo "<option data-id='" . $rw['id'] . "' value='" . $r3['kode_gejala'] . "_" . $rw['id'] . "'>" . $rw['kondisi'] . "</option>";
            }
            echo "
                </select>
            </div>
        </div>";
    ?>
    <?php
            echo "</tr>";
        }
        echo "
		  <input class='float' type=submit data-toggle='tooltip' data-placement='top' title='Klik disini untuk melihat hasil diagnosa' name=submit value='&#xf00e;' style='font-family:Arial, FontAwesome'>
          </tbody></table></form>";
    }

    ?>


    <!-- footer -->
    <?php include 'include/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

</html>