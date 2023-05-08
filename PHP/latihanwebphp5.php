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
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama">
    <br>
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <br>
    <br>

    <input type="submit" name="submit" value="kirim"/>
    <br>
    <br>
  </form>
</body>
</html>

<?php
  if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    echo "Nama : $nama <br>";
    echo "Email : $email <br>";
  }