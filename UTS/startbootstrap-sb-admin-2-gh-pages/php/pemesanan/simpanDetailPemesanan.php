<?php
include '../../databases/koneksi.php';


// kodePem: kodeper1,
//               kodeBarang: kodebr1,
//               hargaBeli: hargaBeli,
//               jumlah: jumlah1
$kodePem = $_POST['kodePem'];
$kodeBarang = $_POST['kodeBarang'];
$hargaBeli = $_POST['hargaBeli'];
$jumlah = $_POST['jumlah'];

// $sql = "insert into detailpermintaan values
// ('$kodeper','$kodebr',$hargajual,$jumlah)";

if (empty($kodePem) || empty($kodeBarang) || empty($hargaBeli) || empty($jumlah)) {
  echo "Data tidak boleh kosong";
  exit();
}

$sql = "INSERT INTO `detail_pemesanan` (`kode_pem`, `kode_barang`, `harga_beli`, `jumlah`) VALUES ('$kodePem', '$kodeBarang', '$hargaBeli', '$jumlah')";
mysqli_query($conn, $sql);
