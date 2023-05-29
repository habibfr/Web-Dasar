<?php
include "../../databases/koneksi.php";

$kode_barang = $_POST['kode'];
$nama_barang = $_POST['nama'];
$satuan = $_POST['satuan'];
$harga_beli = $_POST['hargaBeli'];
$harga_jual = $_POST['hargaJual'];

// $sql = "update barang set namabr ='$namabr',satuan = '$satuan',
// hargabeli= $hargabeli, hargajual = $hargajual where kodebr='$kodebr'";

if(empty($kode_barang) || empty($nama_barang) || empty($satuan) || empty($harga_beli) || empty($harga_jual)){
  echo "Data tidak boleh kosong";
  exit();
}

$sql = "update barang set nama_barang = '$nama_barang', satuan = '$satuan', harga_beli = '$harga_beli', harga_jual = '$harga_jual' where kode_barang = '$kode_barang'";
$result = mysqli_query($conn, $sql);

mysqli_query($conn,$sql);


?>