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
    <label for="kode_barang">Kode Barang</label>
    <input type="text" name="kode_barang" id="kode_barang">
    <br>
    <label for="nama_barang">Nama Barang</label>
    <input type="text" name="nama_barang" id="nama_barang">
    <br>
    <label for="satuan">Satuan</label>
    <input type="text" name="satuan" id="satuan">
    <br>
    <label for="harga_beli">Harga Beli</label>
    <input type="number" name="harga_beli" id="harga_beli">
    <br>
    <label for="harga_jual">Harga Jual</label>
    <input type="number" name="harga_jual" id="harga_jual">
    <br>
    <input type="submit" value="Simpan" name="simpan">
  </form>
</body>
</html>

<?php

include "latihanwebpho13.php";

if(isset($_POST['simpan'])){
  $kode_barang = $_POST['kode_barang'];
  $nama_barang = $_POST['nama_barang'];
  $satuan = $_POST['satuan'];
  $harga_beli = $_POST['harga_beli'];
  $harga_jual = $_POST['harga_jual'];

  if(empty($kode_barang) || empty($nama_barang) || empty($satuan) || empty($harga_beli) || empty($harga_jual)){
    echo "Data tidak boleh kosong";
    exit();
  }

  $sql = "insert into barang values('$kode_barang', '$nama_barang', '$satuan', '$harga_beli', '$harga_jual')";
  $result = mysqli_query($conn, $sql);

  if($result){
    echo "Data berhasil disimpan";
    header("Location: latihanwebphp14.php");
  }else{
    echo "Data gagal disimpan";
  }
}