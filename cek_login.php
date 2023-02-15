<?php
session_start();
include "koneksi.php";

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$filter = mysqli_query($conn, "SELECT * from admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($filter);
$data = mysqli_fetch_array($filter);


if ($cek > 0) {

  if ($data['level'] == 'admin') {

    $_SESSION['username'] = $data['username'];
    $_SESSION['level']    = 'admin';

    header("location:administrator/");
  }
} else {
  echo "<script>alert('Username / Password Salah.');window.location='login.php';</script>";
}
