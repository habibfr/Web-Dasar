<?php
include '../../databases/koneksi.php';


// kodePem: kodePem,
// tanggalPem: tanggalPem,
// supplierPem: supplierPem,
// telpPem: telpPem,
// alamatPem: alamatPem,
// keteranganPem: keteranganPem,
// itemPem: itemPem,
// totalPem: totalPem

$kodePem = $_POST['kodePem'];
$tanggalPem = $_POST['tanggalPem'];
$supplierPem = $_POST['supplierPem'];
$telpPem = $_POST['telpPem'];
$alamatPem = $_POST['alamatPem'];
$karyawanPem = $_POST['karyawanPem'];
$keteranganPem = $_POST['keteranganPem'];
$itemPem = $_POST['itemPem'];
$totalPem = $_POST['totalPem'];

if (empty($kodePem) || empty($karyawanPem) || empty($totalPem) || empty($tanggalPem) || empty($supplierPem) || empty($telpPem) || empty($alamatPem) || empty($keteranganPem) || empty($itemPem)) {
  echo "Data tidak boleh kosong";
  exit();
}



$sql = "INSERT INTO `pemesanan` (`kode_pem`, `kode_karyawan`, `kode_supp`, `tanggal`, `telepon`, `alamat`, `keterangan`, `total_item`, `total_hrg`) VALUES ('$kodePem', '$karyawanPem', '$supplierPem', '$tanggalPem', '$telpPem', '$alamatPem', '$keteranganPem', '$itemPem', '$totalPem')";
// $sql = "insert into master_permintaan values
// ('$kodeper','$tanggal','$konsumen','$telp','$alamat','$keterangan','$karyawan',$total)";
mysqli_query($conn, $sql);
