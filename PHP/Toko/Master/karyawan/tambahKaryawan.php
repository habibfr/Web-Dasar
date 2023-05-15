<?php

include "../../database/koneksi.php";

if(isset($_POST['simpan'])){
  $kode_karyawan = $_POST['kode_karyawan'];
  $nama_karyawan = $_POST['nama_karyawan'];
  $jabatan = $_POST['jabatan'];
  $telepon = $_POST['telepon'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if(empty($kode_karyawan) || empty($nama_karyawan) || empty($jabatan) || empty($password) || empty($email) ||empty($telepon)){
    echo "Data tidak boleh kosong";
    exit();
  }

  $sql = "insert into karyawan values('$kode_karyawan', '$nama_karyawan', '$jabatan', '$telepon', '$email', '" . password_hash($password, PASSWORD_DEFAULT) . "')";
  $result = mysqli_query($conn, $sql);

  if($result){
    echo "Data berhasil disimpan";
    header("Location: index.php");
  }else{
    echo "Data gagal disimpan";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <label for="kode_karyawan">Kode karyawan</label>
    <input type="text" name="kode_karyawan" id="kode_karyawan">
    <br>
    <label for="nama_karyawan">Nama karyawan</label>
    <input type="text" name="nama_karyawan" id="nama_karyawan">
    <br>
    <label for="jabatan">Jabatan</label>
    <input type="text" name="jabatan" id="jabatan">
    <br>
    <label for="telepon">Telepon</label>
    <input type="tel" name="telepon" id="telepon">
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <br>
    <input type="submit" value="simpan" name="simpan">
  </form>
</body>
</html>

