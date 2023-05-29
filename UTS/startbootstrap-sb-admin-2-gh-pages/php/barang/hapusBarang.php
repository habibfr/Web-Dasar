<?php
include "../../databases/koneksi.php";

$kode_barang = $_POST['kode'];
$sql = "delete from barang where kode_barang = '$kode_barang'";
  $result = mysqli_query($conn, $sql);
