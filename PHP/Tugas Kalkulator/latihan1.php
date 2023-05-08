<?php

  include "kumpulanfungsi.php";

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
    <table>
      <tr>
      <td><label for="input1">Number</label></td>
      <td colspan="4"><input type="number" name="input1" id="input1"></td>
    </tr>
    <tr>
    <td><label for="input2">Number</label></td>
      <td colspan="4"><input type="number" name="input2" id="input2"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="tambah" value="+"></td>
      <td><input type="submit" name="kurang" value="-"></td>
      <td><input type="submit" name="kali" value="x"></td>
      <td><input type="submit" name="bagi" value=":"></td>
    </tr>
    <tr>
      <td></td>
      <td colspan="2"><input type="submit" name="deretGanjil" value="deret ganjil"></td>
      <td colspan="2"><input type="submit" name="deretGenap" value="deret genap"></td>
    </tr>
  </table>
</form>
</body>
</html>

<?php

  // $angka1 = $_POST['nilaiAkhir'];
  // $angka2 = $_POST['input2'];
  // echo $angka1;


  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $angka1 = $_POST['input1'];
    $angka2 = $_POST['input2'];

    if(isset($_POST['tambah'])){
      echo "Hasil : " . tambah($angka1, $angka2);
    }
  
    if(isset($_POST['kurang'])){  
      echo "Hasil : " . kurang($angka1, $angka2);
    }
  
    if(isset($_POST['kali'])){  
      echo "Hasil : " . kali($angka1, $angka2);
    }
  
    if(isset($_POST['bagi'])){  
      echo "Hasil : " . bagi($angka1, $angka2);
    }

    if(isset($_POST['deretGanjil'])){
      echo "Hasil : " . deretGanjil($angka1, $angka2);
    }

    if(isset($_POST['deretGenap'])){
      echo "Hasil : " . deretGenap($angka1, $angka2);
    }

  }
 








