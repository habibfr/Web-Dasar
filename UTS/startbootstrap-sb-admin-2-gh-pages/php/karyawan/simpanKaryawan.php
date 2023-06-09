<?php

  include "../../databases/koneksi.php";

  $kode_karyawan = $_POST['kode'];
  $nama_karyawan = $_POST['nama'];
  $jabatan = $_POST['jabatanKaryawan'];
  $telepon = $_POST['telpKaryawan'];
  $email = $_POST['emailKaryawan'];
  $password = $_POST['passwordKaryawan'];

  if(empty($kode_karyawan) || empty($nama_karyawan) || empty($jabatan) || empty($password) || empty($email) ||empty($telepon)){
    echo "Data tidak boleh kosong";
    exit();
  }

  

  $sql = "insert into karyawan values('$kode_karyawan', '$nama_karyawan', '$jabatan', '$telepon', '$email', '" . password_hash($password, PASSWORD_DEFAULT) . "')";
  $result = mysqli_query($conn, $sql);

?>