<?php
include '../../databases/koneksi.php';


$kodeper = $_POST['kode_permintaan'];
$kodebr = $_POST['kode_barang'];
$hargajual = $_POST['harga_jual'];
$jumlah = $_POST['jumlah'];

// $sql = "insert into detailpermintaan values
// ('$kodeper','$kodebr',$hargajual,$jumlah)";

if (empty($kodeper) || empty($kodebr) || empty($hargajual) || empty($jumlah)) {
  echo "Data tidak boleh kosong";
  exit();
}

$sql = "INSERT INTO `detail_permintaan` (`detail_permintaan`, `kode_barang`, `harga_jual`, `jumlah`) VALUES ('$kodeper', '$kodebr', '$hargajual', '$jumlah')";
mysqli_query($conn, $sql);
