<?php
include "../../databases/koneksi.php";

if (isset($_POST['kodeSup'])) {
  $kodeSup = $_POST['kodeSup'];
  // echo $kodePer;

  $sqlSup = "SELECT * FROM supplier WHERE supplier.kode_supp = '$kodeSup'";
  $sqlSup = mysqli_query($conn, $sqlSup);

  if (mysqli_num_rows($sqlSup) > 0) {
    while ($row = mysqli_fetch_assoc($sqlSup)) {
      $rows[] = $row;
    }
  }

  print_r(json_encode($rows));
}
