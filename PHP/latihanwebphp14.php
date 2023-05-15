<?php

include "latihanwebpho13.php";

$sql = "select * from barang";
$result = mysqli_query($conn, $sql);


echo "<h1>Daftar Barang</h1>";
echo "<a href='latihanwebphp15.php'><button>+</button></a>";
echo "<table border='1'>";
echo "<tr><th>Kode Barang</th><th>Nama Barang</th><th>Satuan</th><th>Harga Beli</th><th>Harga Jual</th><th>Action</th></tr>";
echo "<tbody>";
// cek akses table
if(mysqli_num_rows($result) > 0){
  // output data of each row
  while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $row["kode_barang"] . "</td>";
    echo "<td>" . $row["nama_barang"] . "</td>";
    echo "<td>" . $row["satuan"] . "</td>";
    echo "<td>" . $row["harga_beli"] . "</td>";
    echo "<td>" . $row["harga_jual"] . "</td>";
    echo "<td>";
    echo "<a href='latihanwebphp16.php?kode_barang=" . $row["kode_barang"] . "'><button>U</button></a>";
    echo "<div style='display:inline-block; width:10px;'></div>";
    echo "<a href='latihanwebphp17.php?kode_barang=" . $row["kode_barang"]."'><button>-</button></a>";
    echo "</td>";
    echo "</tr>";
    // echo "Kode Barang: " . $row["kode_barang"] . " - Nama Barang: " . $row["nama_barang"] . " - Satuan: " . $row["satuan"] . " - Harga Beli : " . $row["harga_beli"]. " - Harga Jual :". $row["harga_jual"] ."<br>";
  }
}else{
  echo "0 results";
}
echo "</tbody>";
echo "</table>";
