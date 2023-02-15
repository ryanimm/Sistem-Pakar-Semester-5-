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

<body>
    <!-- Navbar  -->
    <?php include 'include/navbar.php'; ?>

    <?php
    error_reporting(0);

    $offset = $_GET['offset'];
    $limit = 15;
    if (empty($offset)) {
        $offset = 0;
    }

    $sqlgjl = mysqli_query($conn, "SELECT * FROM gejala order by kode_gejala+0");
    while ($rgjl = mysqli_fetch_array($sqlgjl)) {
        $argjl[$rgjl['kode_gejala']] = $rgjl['nama_gejala'];
    }

    $sqlpkt = mysqli_query($conn, "SELECT * FROM penyakit order by kode_penyakit+0");
    while ($rpkt = mysqli_fetch_array($sqlpkt)) {
        $arpkt[$rpkt['kode_penyakit']] = $rpkt['nama_penyakit'];
        $ardpkt[$rpkt['kode_penyakit']] = $rpkt['det_penyakit'];
        $arspkt[$rpkt['kode_penyakit']] = $rpkt['srn_penyakit'];
    }

    $tampil = mysqli_query($conn, "SELECT * FROM hasil ORDER BY id_hasil");
    $baris = mysqli_num_rows($tampil);
    if ($baris > 0) {
        echo "<div class='row g-0'><div class='col mx-5 my-5'><h2 class='text text-center text-primary mb-3'>Riwayat Konsultasi</h2><table class='table table-bordered table-striped riwayat' style='overflow-x=auto' cellpadding='0' cellspacing='0'>
          <thead>
            <tr>
              <th class='text-center'>No</th>
              <th class='text-center'>Tanggal</th>
              <th class='text-center'>Penyakit</th>
              <th nowrap class='text-center'>Nilai CF</th>
              <th width='21%' class='text-center'>Aksi</th>
            </tr>
          </thead>
		  <tbody>
		  ";
        $hasil = mysqli_query($conn, "SELECT * FROM hasil ORDER BY id_hasil limit $offset,$limit");
        $no = 1;
        $no = 1 + $offset;
        $counter = 1;
        while ($r = mysqli_fetch_array($hasil)) {
            if ($r['hasil_id'] > 0) {
                if ($counter % 2 == 0)
                    $warna = "dark";
                else
                    $warna = "light";
                echo "<tr class='" . $warna . "'>
			 <td align=center>$no</td>
			 <td align='center'>$r[tanggal]</td>
			 <td align='center'>" . $arpkt[$r['hasil_id']] . "</td>
			 <td align='center'><span class='label label-default'>" . $r['hasil_nilai'] . "</span></td>
			 <td align=center>
			 <a type='button' class='btn btn-default btn-xs' target='_blank' href=detail.php?id=$r[id_hasil]><i class='fa fa-eye' aria-hidden='true'></i> Detail </a> &nbsp;
	         </td></tr>";
                $no++;
                $counter++;
            }
        }
        echo "</tbody></table></div>";
    ?>

    <?php
        echo "</div><div class='col-md-12'><div class='row mx-5 mb-5'><div class=paging>";

        if ($offset != 0) {
            $prevoffset = $offset - $limit;
            echo "<span class=prevnext> <a href=riwayat.phpt?offset=$prevoffset>Back</a></span>";
        } else {
            echo "<span class=disabled>Back</span>"; //cetak halaman tanpa link
        }
        //hitung jumlah halaman
        $halaman = intval($baris / $limit); //Pembulatan

        if ($baris % $limit) {
            $halaman++;
        }
        for ($i = 1; $i <= $halaman; $i++) {
            $newoffset = $limit * ($i - 1);
            if ($offset != $newoffset) {
                echo "<a href=riwayat.php?offset=$newoffset>$i</a>";
                //cetak halaman
            } else {
                echo "<span class=current>" . $i . "</span>"; //cetak halaman tanpa link
            }
        }

        //cek halaman akhir
        if (!(($offset / $limit) + 1 == $halaman) && $halaman != 1) {

            //jika bukan halaman terakhir maka berikan next
            $newoffset = $offset + $limit;
            echo "<span class=prevnext><a href=riwayat.php?offset=$newoffset>Next</a>";
        } else {
            echo "<span class=disabled>Next</span>"; //cetak halaman tanpa link
        }

        echo "</div></div></div>";
    } else {
        echo "<br><b>Data Kosong !</b>";
    }
    ?>


    <!-- footer -->
    <?php include 'include/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

</html>