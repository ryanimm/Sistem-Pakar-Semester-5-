<?php
session_start();
include "koneksi.php";

$username = mysqli_real_escape_string($conn, $_POST['username']);
$pwd = mysqli_real_escape_string($conn, $_POST['password']);
$adminkey = mysqli_real_escape_string($conn, $_POST['adminkey']);

$akunada = mysqli_query($conn, "SELECT * from admin where username='$username'");
$cekakunada = mysqli_num_rows($akunada);

$filter = mysqli_query($conn, "SELECT * from admin_key where admin_key='$adminkey'");
$cek = mysqli_num_rows($filter);



if ($cekakunada > 0) {
  echo "<script>alert('Username Sudah Digunakan.');window.location='register.php';</script>";
} else {
  if ($cek > 0) {

    $query  = "INSERT INTO admin (username, password,level) VALUES ('$username', '$pwd','admin')";
    $result = mysqli_query($conn, $query);
    echo "<script>alert('Pendaftaran Telah Berhasil! Silahkan Login.');window.location='login.php';</script>";
  } else {
    echo "<script>alert('Admin Key Salah.');window.location='register.php';</script>";
  }
}
