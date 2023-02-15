<?php
  include "koneksi.php";
  session_start();
  if (isset($_SESSION["level"])) {
  include 'include/header_loggedin.php';
  } else {
  include 'include/header.php';
  }
  ?>	 
