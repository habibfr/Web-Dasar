<?php

require_once 'action.php';
$query = new Action();
// $insert = $query->insert('M004', 'Buku Tulis', 'Pcs', 2000, 3000);
// $delete = $query->delete('M004');

if (isset($_POST['submit'])) {
  $kode_barang = $_POST['kode_barang'];
  $nama_barang = $_POST['nama_barang'];
  $satuan = $_POST['satuan'];
  $harga_beli = $_POST['harga_beli'];
  $harga_jual = $_POST['harga_jual'];
  $insert = $query->insert($kode_barang, $nama_barang, $satuan, $harga_beli, $harga_jual);
  if ($insert) {
    echo "Data berhasil ditambahkan";
  } else {
    echo "Data gagal ditambahkan";
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
  <form action="">
    <input type="text" name="kode_barang" placeholder="Kode Barang"><br>
    <input type="text" name="nama_barang" placeholder="Nama Barang"><br>
    <input type="text" name="satuan" placeholder="Satuan"><br>
    <input type="text" name="harga_beli" placeholder="Harga Beli"><br>
    <input type="text" name="harga_jual" placeholder="Harga Jual"><br>
    <input type="submit" name="submit" value="Submit">
  </form>
  <br>

  <?php
  $read = $query->select();
  echo "<table border='1'>";
  while ($row = $read->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['kode_barang'] . "</td>";
    echo "<td>" . $row['nama_barang'] . "</td>";
    echo "<td>" . $row['satuan'] . "</td>";
    echo "<td>" . $row['harga_beli'] . "</td>";
    echo "<td>" . $row['harga_jual'] . "</td>";
    echo "<td><a href='delete_barang.php?id=" . $row['kode_barang'] . "'>delete</a></td>";
    // echo "<td><a href='index.php?kode_barang=" . $row['kode_barang'] . "'><input type='submit'  name='delete' value='delete'></a></td>";
    echo "</tr>";
  }
  echo "</table>";
  ?>
</body>

</html>