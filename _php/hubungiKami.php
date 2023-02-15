<?php
include '../koneksi.php';
$fullname = $_POST['fullname'];
$email    = $_POST['email'];
$message  = $_POST['message'];


$query  = "INSERT INTO kontak (fullname, email, message) VALUES ('$fullname', '$email', '$message')";
$result = mysqli_query($conn, $query);
