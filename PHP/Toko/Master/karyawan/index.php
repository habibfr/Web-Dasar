<?php

include "../../database/koneksi.php";

$sql = "select * from karyawan";
$result = mysqli_query($conn, $sql);


echo "<h1>Daftar Karyawan</h1>";
echo "<a href='tambahKaryawan.php'><button>+</button></a>";
echo "<table border='1'>";
echo "<tr><th>Kode Karyawan</th><th>Nama Karyawan</th><th>Jabatan</th><th>Telepon</th><th>Email</th><th>Password</th><th>Action</th></tr>";
echo "<tbody>";
// cek akses table
if(mysqli_num_rows($result) > 0){
  // output data of each row
  while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $row["kode_karyawan"] . "</td>";
    echo "<td>" . $row["nama_karyawan"] . "</td>";
    echo "<td>" . $row["jabatan"] . "</td>";
    echo "<td>" . $row["telepon"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["password"] . "</td>";
    echo "<td>";
    echo "<a href='updateKaryawan.php?kode_karyawan=" . $row["kode_karyawan"] . "'><button>U</button></a>";
    echo "<div style='display:inline-block; width:10px;'></div>";
    echo "<a href='hapusKaryawan.php?kode_karyawan=" . $row["kode_karyawan"]."'><button>-</button></a>";
    echo "</td>";
    echo "</tr>";
    // echo "Kode Barang: " . $row["kode_barang"] . " - Nama Barang: " . $row["nama_barang"] . " - Satuan: " . $row["satuan"] . " - Harga Beli : " . $row["harga_beli"]. " - Harga Jual :". $row["harga_jual"] ."<br>";
  }
}else{
  echo "0 results";
}
echo "</tbody>";
echo "</table>";
