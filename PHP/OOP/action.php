<?php

class Action
{
  public function connect()
  {
    $conn = new mysqli('localhost', 'root', '', 'toko_habib');
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
  }

  public function select()
  {
    $conn = $this->connect();
    $sql = "SELECT * FROM barang";
    $result = $conn->query($sql);
    return $result;
  }

  public function insert($kode_barang, $nama_barang, $satuan, $harga_beli, $harga_jual)
  {
    $conn = $this->connect();
    $sql = "INSERT INTO barang (kode_barang, nama_barang, satuan, harga_beli, harga_jual) VALUES ('$kode_barang', '$nama_barang', '$satuan', '$harga_beli', '$harga_jual')";
    $result = $conn->query($sql);
    return $result;
  }

  public function delete($kode_barang)
  {
    $conn = $this->connect();
    $sql = "DELETE FROM barang WHERE kode_barang='$kode_barang'";
    $result = $conn->query($sql);
    return $result;
  }
}

