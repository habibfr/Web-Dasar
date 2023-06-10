<?php
include "../../databases/koneksi.php";

if (isset($_POST['kodePem'])) {
  $kodePem = $_POST['kodePem'];
  // echo $kodePem;

  $sqlPem = "SELECT * FROM pemesanan m JOIN detail_pemesanan d ON m.kode_pem = d.kode_pem join barang b ON b.kode_barang = d.kode_barang WHERE m.kode_pem =  '$kodePem' ";
  // $sqlPem = "SELECT * FROM master_permintaan m JOIN detail_pemesanan d ON m.kode_permintaan = d.detail_pemesanan WHERE m.kode_permintaan =  '$kodePem' ";
  $resultPemesanan = mysqli_query($conn, $sqlPem);

  if (mysqli_num_rows($resultPemesanan) > 0) {
    while ($row = mysqli_fetch_assoc($resultPemesanan)) {
      $rows[] = $row;
    }
  }

  print_r(json_encode($rows));
}
