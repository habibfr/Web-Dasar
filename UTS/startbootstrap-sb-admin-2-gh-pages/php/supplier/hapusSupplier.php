<?php
include "../../databases/koneksi.php";

$kode_supp = $_POST['kode'];
$sql = "delete from supplier where kode_supp = '$kode_supp'";
$result = mysqli_query($conn, $sql);
