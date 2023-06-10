<?php
include "../../databases/koneksi.php";

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$perusahaanSup = $_POST['perusahaanSup'];
$telpSalesSup = $_POST['telpSalesSup'];
$telpKantorSup = $_POST['telpKantorSup'];
$emailSup = $_POST['emailSup'];
$alamatSup = $_POST['alamatSup'];

// $sql = "update barang set namabr ='$namabr',satuan = '$satuan',
// hargabeli= $hargabeli, hargajual = $hargajual where kodebr='$kodebr'";

if (empty($nama) || empty($perusahaanSup) || empty($telpSalesSup) || empty($telpKantorSup) || empty($emailSup) || empty($alamatSup)) {
  echo "Data tidak boleh kosong";
  exit();
}

$sql = "UPDATE `supplier` SET `nama_sales` = '$nama', `perusahaan` = '$perusahaanSup', `telepon_sales` = '$telpSalesSup', `telepon_kantor` = '$telpKantorSup', `email` = '$emailSup', `alamat` = '$alamatSup' WHERE `supplier`.`kode_supp` = '$kode'";
// $sql = "INSERT INTO `supplier` (`kode_supp`, `nama_sales`, `perusahaan`, `telepon_sales`, `telepon_kantor`, `email`, `alamat`) VALUES ('$kode', '$nama', '$perusahaanSup', '$telpSalesSup', '$telpKantorSup', '$emailSup', '$alamatSup')";
$result = mysqli_query($conn, $sql);
