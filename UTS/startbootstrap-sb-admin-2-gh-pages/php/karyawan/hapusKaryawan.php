<?php
include "../../databases/koneksi.php";

$kode_karyawan = $_POST['kode'];
$sql = "delete from karyawan where kode_karyawan = '$kode_karyawan'";
  $result = mysqli_query($conn, $sql);
