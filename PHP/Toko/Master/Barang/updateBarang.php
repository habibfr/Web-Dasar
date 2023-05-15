<?php

include "../../database/koneksi.php";

$kode_barang = $_GET['kode_barang'];
// echo $kode_barang;

$sql = "select * from barang where kode_barang = '$kode_barang'";
$result = mysqli_query($conn, $sql);
$row  = mysqli_num_rows($result);
// echo $row;

if($row > 0){
  $data = mysqli_fetch_assoc($result);
  $nama_barang = $data['nama_barang'];
  $satuan = $data['satuan'];
  $harga_beli = $data['harga_beli'];
  $harga_jual = $data['harga_jual'];
}

if(isset($_POST['ubah'])){
  $nama_barang = $_POST['nama_barang'];
  $satuan = $_POST['satuan'];
  $harga_beli = $_POST['harga_beli'];
  $harga_jual = $_POST['harga_jual'];

  if(empty($kode_barang) || empty($nama_barang) || empty($satuan) || empty($harga_beli) || empty($harga_jual)){
    echo "Data tidak boleh kosong";
    exit();
  }

  $sql = "update barang set nama_barang = '$nama_barang', satuan = '$satuan', harga_beli = '$harga_beli', harga_jual = '$harga_jual' where kode_barang = '$kode_barang'";
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
    <label for="kode_barang">Kode Barang</label>
    <input type="text" name="kode_barang" id="kode_barang" readonly value="<?php echo $kode_barang?>">
    <br>
    <label for="nama_barang">Nama Barang</label>
    <input type="text" name="nama_barang" id="nama_barang" value="<?php echo $nama_barang?>">
    <br>
    <label for="satuan">Satuan</label>
    <input type="text" name="satuan" id="satuan" value="<?php echo $satuan?>">
    <br>
    <label for="harga_beli">Harga Beli</label>
    <input type="number" name="harga_beli" id="harga_beli" value="<?php echo $harga_beli?>">
    <br>
    <label for="harga_jual">Harga Jual</label>
    <input type="number" name="harga_jual" id="harga_jual" value="<?php echo $harga_jual?>">
    <br>
    <input type="submit" value="ubah" name="ubah" >
  </form>
</body>
</html>



