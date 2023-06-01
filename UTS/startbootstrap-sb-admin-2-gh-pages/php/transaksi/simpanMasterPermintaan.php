<?php
include '../../databases/koneksi.php';


$kodeper = $_POST['kode_permintaan'];
$tanggal = $_POST['tanggal'];
$konsumen = $_POST['konsumen'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$keterangan = $_POST['keterangan'];
$karyawan = $_POST['karyawan'];
$total = $_POST['total'];

if (empty($kodeper) || empty($tanggal) || empty($konsumen) || empty($alamat) || empty($telp) || empty($keterangan) || empty($karyawan) || empty($total)) {
  echo "Data tidak boleh kosong";
  exit();
}



$sql = "INSERT INTO `master_permintaan` (`kode_permintaan`, `tanggal`, `konsumen`, `telp`, `alamat`, `keterangan`, `kode_karyawan`, `total`) VALUES ('$kodeper', '$tanggal', '$konsumen', '$telp', '$alamat', '$keterangan', '$karyawan', '$total')";
// $sql = "insert into master_permintaan values
// ('$kodeper','$tanggal','$konsumen','$telp','$alamat','$keterangan','$karyawan',$total)";
mysqli_query($conn, $sql);
