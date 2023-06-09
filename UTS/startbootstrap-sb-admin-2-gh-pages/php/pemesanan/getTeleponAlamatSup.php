<?php
include "../../databases/koneksi.php";

if (isset($_POST['kodeSupplier'])) {
  $kodeSupplier = $_POST['kodeSupplier'];
  // echo $kodeSupplier;

  $sqlBarang = "SELECT * from supplier WHERE kode_supp = '$kodeSupplier'";
  $resultBarang = mysqli_query($conn, $sqlBarang);

  if (mysqli_num_rows($resultBarang) > 0) {
    while ($row = mysqli_fetch_assoc($resultBarang)) {
      $rows[] = $row;
    }
  }

  print_r(json_encode($rows));
}
