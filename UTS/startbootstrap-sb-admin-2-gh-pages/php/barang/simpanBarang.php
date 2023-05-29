<?php

  include "../../databases/koneksi.php";

  $kode_barang = $_POST['kode'];
  $nama_barang = $_POST['nama'];
  $satuan = $_POST['satuan'];
  $harga_beli = $_POST['hargaBeli'];
  $harga_jual = $_POST['hargaJual'];


  if(empty($kode_barang) || empty($nama_barang) || empty($satuan) || empty($harga_beli) || empty($harga_jual)){
    echo "Data tidak boleh kosong";
    exit();
  }

  $sql = "insert into barang values('$kode_barang', '$nama_barang', '$satuan', '$harga_beli', '$harga_jual')";
  $result = mysqli_query($conn, $sql);

?>