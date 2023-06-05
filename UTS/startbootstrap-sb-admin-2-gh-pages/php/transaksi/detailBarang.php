<?php
include "../../databases/koneksi.php";

if (isset($_POST['kodeDetail'])) {
  $kodePer = $_POST['kodeDetail'];
  // echo $kodePer;

  $sqlBarang = "SELECT * FROM detail_permintaan dp JOIN barang b ON dp.kode_barang = b.kode_barang WHERE dp.detail_permintaan = '$kodePer'";
  $resultBarang = mysqli_query($conn, $sqlBarang);

  if (mysqli_num_rows($resultBarang) > 0) {
    while ($row = mysqli_fetch_assoc($resultBarang)) {
      $rows[] = $row;
    }
  }

  print_r(json_encode($rows));
}
