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
    <input type="text" name="nilaiAkhir" id="nilaiAkhir">
    <br>
    <!-- <label for="nilai2">Email</label>
    <input type="number" name="nilai2" id="nilai2">
    <br> -->
    <br>

    <input type="submit" name="submit" value="kirim"/>
    <br>
    <br>
  </form>
</body>
</html>

<?php
  function tampil(){
    echo "procdure php";
  }

  function kelipatan($nilai){
    return $nilai * 2;
  }

  function pangkat($y){
    return $y * $y;
  }

  if(isset($_POST['submit'])){
    tampil();
    echo "<br>";
    echo kelipatan($_POST['nilaiAkhir']);
    echo "<br>";
    echo pangkat($_POST['nilaiAkhir']);
  }
?>

