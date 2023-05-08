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
    <input type="text" name="hari" id="hari">
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
    switch($_POST['hari']){
      case 1:
        echo "Senin";
        break;
      case 2:
        echo "Selasa";
        break;
      case 3:
        echo "Rabu";
        break;
      case 4:
        echo "Kamis";
        break;
      case 5:
        echo "Jumat";
        break;
      case 6:
        echo "Sabtu";
        break;
      case 7:
        echo "Minggu";
        break;
      default:
        echo "Tidak ada";
    }
  }