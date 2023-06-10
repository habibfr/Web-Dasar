<?php

include "../../databases/koneksi.php";

// kode,
//         nama,
//         perusahaanSup,
//         telpSalesSup,
//         telpKantorSup,
//         emailSup,
//         alamatSup

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$perusahaanSup = $_POST['perusahaanSup'];
$telpSalesSup = $_POST['telpSalesSup'];
$telpKantorSup = $_POST['telpKantorSup'];
$emailSup = $_POST['emailSup'];
$alamatSup = $_POST['alamatSup'];

if (empty($kode) || empty($nama) || empty($perusahaanSup) || empty($telpSalesSup) || empty($telpKantorSup) || empty($emailSup) || empty($alamatSup)) {
  echo "Data tidak boleh kosong";
  exit();
}



// $sql = "insert into karyawan values('$kode', '$nama', '$jabatan', '$telepon', '$email', '" . password_hash($password, PASSWORD_DEFAULT) . "')";
$sql = "INSERT INTO `supplier` (`kode_supp`, `nama_sales`, `perusahaan`, `telepon_sales`, `telepon_kantor`, `email`, `alamat`) VALUES ('$kode', '$nama', '$perusahaanSup', '$telpSalesSup', '$telpKantorSup', '$emailSup', '$alamatSup')";
$result = mysqli_query($conn, $sql);
