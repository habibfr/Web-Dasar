<?php

require_once 'controller\IndexController.php';
require_once 'controller\AnggotaController.php';
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// echo $uri;
// $uri = explode('/', $uri);
if ($uri == '/webdasar/PHP/MVC/hitungnilai') {
  $y = new AnggotaController();
  $y->isi_nilai();
} else if ($uri == '/webdasar/PHP/MVC/') {
  $x = new IndexController();
  echo $x->index();
} else {
  header('HTTP/1.1 404 Not Found');
  exit();
}
