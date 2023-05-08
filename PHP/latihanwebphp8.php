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
  if (isset($_POST['submit'])) {
    echo "while : <br>";
    $x = 1;
    while($x <= $_POST['nilaiAkhir']){
      echo "Nilai : {$x} <br>";
      $x++;
    }
  }

  echo "do while : <br>";
  $y = 1;
  do {
    echo "Nilai : {$y} <br>";
    $y++;
  } while ($_POST['nilaiAkhir'] >= $y);

  echo "for : <br>";
  for($z = 1; $z <= $_POST['nilaiAkhir']; $z++){
    echo "Nilai : {$z} <br>";
  }