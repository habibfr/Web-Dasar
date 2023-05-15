<?php

include "../../database/koneksi.php";

if(isset($_GET['kode_karyawan'])){
  $kode_karyawan = $_GET['kode_karyawan'];
  $sql = "delete from karyawan where kode_karyawan = '$kode_karyawan'";
  $result = mysqli_query($conn, $sql);

  if($result){
    echo "Data berhasil dihapus";
    header("Location: index.php");
  }else{
    echo "Data gagal dihapus";
  }
}

?>