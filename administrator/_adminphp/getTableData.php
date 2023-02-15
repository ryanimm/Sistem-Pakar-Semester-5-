<?php

include('../../koneksi.php');


if (@$_GET['view'] == 'berita') {
	$result = $conn->query("SELECT * FROM berita");

	while ($row = $result->fetch_assoc()) {
		$data[] = $row;
	}
	echo json_encode($data);
}


if (@$_GET['view'] == 'kontak') {
	$result = $conn->query("SELECT * FROM kontak");

	while ($row = $result->fetch_assoc()) {
		$data[] = $row;
	}
	echo json_encode($data);
}

if (@$_GET['view'] == 'useradmin') {
	$result = $conn->query("SELECT * FROM admin");

	while ($row = $result->fetch_assoc()) {
		$data[] = $row;
	}
	echo json_encode($data);
}

if (@$_GET['view'] == 'keyadmin') {
	$result = $conn->query("SELECT * FROM admin_key");

	while ($row = $result->fetch_assoc()) {
		$data[] = $row;
	}
	echo json_encode($data);
}

if (@$_GET['view'] == 'penyakit') {
	$result = $conn->query("SELECT * FROM penyakit");

	while ($row = $result->fetch_assoc()) {
		$data[] = $row;
	}
	echo json_encode($data);
}

if (@$_GET['view'] == 'gejala') {
	$result = $conn->query("SELECT * FROM gejala");

	while ($row = $result->fetch_assoc()) {
		$data[] = $row;
	}
	echo json_encode($data);
}

if (@$_GET['view'] == 'pengetahuan') {
	$result = $conn->query("SELECT penyakit.nama_penyakit, gejala.nama_gejala, basis_pengetahuan.kode_pengetahuan, basis_pengetahuan.mb, basis_pengetahuan.md
							FROM basis_pengetahuan
							JOIN penyakit ON basis_pengetahuan.kode_penyakit = penyakit.kode_penyakit
							JOIN gejala ON basis_pengetahuan.kode_gejala = gejala.kode_gejala");

	while ($row = $result->fetch_assoc()) {
		$data[] = $row;
	}
	echo json_encode($data);
}
