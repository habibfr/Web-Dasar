<?php
include "../../databases/koneksi.php";

$kode_karyawan = $_POST['kode'];
$nama_karyawan = $_POST['nama'];
$jabatan = $_POST['jabatanKaryawan'];
$telepon = $_POST['telpKaryawan'];
$email = $_POST['emailKaryawan'];
$password = $_POST['passwordKaryawan'];

// $sql = "update barang set namabr ='$namabr',satuan = '$satuan',
// hargabeli= $hargabeli, hargajual = $hargajual where kodebr='$kodebr'";

if(empty($kode_karyawan) || empty($nama_karyawan) || empty($jabatan) || empty($password) || empty($email) ||empty($telepon)){
  echo "Data tidak boleh kosong";
  exit();
}

$sql = "update karyawan set nama_karyawan = '$nama_karyawan', jabatan = '$jabatan', telepon = '$telepon', email = '$email', password = '" . password_hash($password, PASSWORD_DEFAULT) ."' where kode_karyawan = '$kode_karyawan'";
$result = mysqli_query($conn, $sql);


?>