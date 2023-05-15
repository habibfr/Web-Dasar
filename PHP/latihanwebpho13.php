<?php

$servermame = "localhost";
$username = "root";
$password = "";
$database = "toko";

$conn = mysqli_connect($servermame, $username, $password, $database);

if(!$conn){
  die("Koneksi gagal. " . mysqli_connect_error());
}