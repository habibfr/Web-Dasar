<?php

include "../../database/koneksi.php";

if(isset($_GET['kode_barang'])){
  $kode_barang = $_GET['kode_barang'];
  $sql = "delete from barang where kode_barang = '$kode_barang'";
  $result = mysqli_query($conn, $sql);

  if($result){
    echo "Data berhasil dihapus";
    header("Location: index.php");
  }else{
    echo "Data gagal dihapus";
  }
}

?>