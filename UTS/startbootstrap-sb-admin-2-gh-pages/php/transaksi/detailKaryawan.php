<?php
include "../../databases/koneksi.php";

if (isset($_POST['kodeKar'])) {
  $kodeKar = $_POST['kodeKar'];
  // echo $kodePer;

  $sqlKar = "SELECT * FROM karyawan WHERE karyawan.kode_karyawan = '$kodeKar'";
  $sqlKar = mysqli_query($conn, $sqlKar);

  if (mysqli_num_rows($sqlKar) > 0) {
    while ($row = mysqli_fetch_assoc($sqlKar)) {
      $rows[] = $row;
    }
  }

  print_r(json_encode($rows));
}
