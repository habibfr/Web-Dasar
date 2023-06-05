<?php
include "../../databases/koneksi.php";

if (isset($_POST['kodePer'])) {
  $kodePer = $_POST['kodePer'];
  // echo $kodePer;

  $sqlPer = "SELECT * FROM master_permintaan m JOIN detail_permintaan d ON m.kode_permintaan = d.detail_permintaan join barang b ON b.kode_barang = d.kode_barang WHERE m.kode_permintaan =  '$kodePer' ";
  // $sqlPer = "SELECT * FROM master_permintaan m JOIN detail_permintaan d ON m.kode_permintaan = d.detail_permintaan WHERE m.kode_permintaan =  '$kodePer' ";
  $resultPermintaan = mysqli_query($conn, $sqlPer);

  if (mysqli_num_rows($resultPermintaan) > 0) {
    while ($row = mysqli_fetch_assoc($resultPermintaan)) {
      $rows[] = $row;
    }
  }

  print_r(json_encode($rows));
}
