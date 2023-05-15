<?php

include "latihanwebpho13.php";



if(isset($_GET['kode_barang'])){
  $kode_barang = $_GET['kode_barang'];
  $sql = "delete from barang where kode_barang = '$kode_barang'";
  $result = mysqli_query($conn, $sql);

  if($result){
    echo "Data berhasil dihapus";
    header("Location: latihanwebphp14.php");
  }else{
    echo "Data gagal dihapus";
  }
}


?>