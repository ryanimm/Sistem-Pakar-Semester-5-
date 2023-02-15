<?php
include '../koneksi.php';

$id =  $_GET['id'];
if (isset($_GET["id"])) {
  $result = $conn->query("SELECT * from berita WHERE id='$id'");
  while ($row = $result->fetch_array()) {
    $data[] = $row;
  }
  echo json_encode($data);
}
