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
    <label for="nilai">Nama</label>
    <input type="number" name="nilai1" id="nilai1">
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
    if($_POST['nilai1'] > 10){
      echo "Nilai lebih besar dari 10";
    }else{
      echo "Nilai lebih kecil dari 10";
    }
  }