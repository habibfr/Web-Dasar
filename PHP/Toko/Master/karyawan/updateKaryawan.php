<?php

include "../../database/koneksi.php";

$kode_karyawan = $_GET['kode_karyawan'];
// echo $kode_karyawan;

$sql = "select * from karyawan where kode_karyawan = '$kode_karyawan'";
$result = mysqli_query($conn, $sql);
$row  = mysqli_num_rows($result);
// echo $row;

if($row > 0){
  $data = mysqli_fetch_assoc($result);
  $nama_karyawan = $data['nama_karyawan'];
  $jabatan = $data['jabatan'];
  $telepon = $data['telepon'];
  $email = $data['email'];
  $password = $data['password'];
}

if(isset($_POST['ubah'])){
  $nama_karyawan = $_POST['nama_karyawan'];
  $jabatan = $_POST['jabatan'];
  $telepon = $_POST['telepon'];
  $email = $_POST['email'];
  $password = $data['password'];

  if(empty($kode_karyawan) || empty($nama_karyawan) || empty($jabatan) || empty($password) || empty($email) ||empty($telepon)){
    echo "Data tidak boleh kosong";
    exit();
  }
  
  $sql = "update karyawan set nama_karyawan = '$nama_karyawan', jabatan = '$jabatan', telepon = '$telepon', email = '$email', password = '" . password_hash($password, PASSWORD_DEFAULT) ."' where kode_karyawan = '$kode_karyawan'";
  $result = mysqli_query($conn, $sql);

  if($result){
    echo "Data berhasil diUpdate";
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
    <input type="text" name="kode_karyawan" id="kode_karyawan" readonly value="<?php echo $kode_karyawan?>">
    <br>
    <label for="nama_karyawan">Nama karyawan</label>
    <input type="text" name="nama_karyawan" id="nama_karyawan" value="<?php echo $nama_karyawan?>">
    <br>
    <label for="jabatan">Jabatan</label>
    <input type="text" name="jabatan" id="jabatan" value="<?php echo $jabatan?>">
    <br>
    <label for="telepon">Telepon</label>
    <input type="tel" name="telepon" id="telepon" value="<?php echo $telepon?>">
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="<?php echo $email?>">
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <br>
    <input type="submit" value="ubah" name="ubah" >
  </form>
</body>
</html>



