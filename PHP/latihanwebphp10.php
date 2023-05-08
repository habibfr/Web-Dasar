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


    

    $x = array("php", "html", "css", "javascript", "mysql");
    echo $x[0];

    echo "<br>";

    echo $x[1];

    print_r($x);

    echo "<br>";

    var_dump($x);

    echo "<br>";

    foreach($x as $value){
      echo $value . "<br>";
    }

  }

