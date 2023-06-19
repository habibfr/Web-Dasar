<?php
require_once 'controller/anggota_controller.php';
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// echo $uri;
// http://localhost/webdasar/PHP/MVC/index.php/isinilai
$x = new anggota_controller();
if ('/webdasar/PHP/MVC/index.php' === $uri) {
    $x->index();
} elseif ('/webdasar/PHP/MVC/index.php/isinilai' === $uri) {
    $x->isinilai();
} elseif ('/webdasar/PHP/MVC/index.php/hitungnilai' === $uri && isset($_POST['tambah']) && isset($_POST['nilai1']) && isset($_POST['nilai2'])) {
    $x->hitungnilai($_POST['nilai1'], $_POST['nilai2']);
} elseif ('/webdasar/PHP/MVC/index.php/hitungnilai' === $uri && isset($_POST['kurang'])  && isset($_POST['nilai1']) && isset($_POST['nilai2'])) {
    $x->kurang($_POST['nilai1'], $_POST['nilai2']);
} elseif ('/webdasar/PHP/MVC/index.php/hitungnilai' === $uri && isset($_POST['kali'])  && isset($_POST['nilai1']) && isset($_POST['nilai2'])) {
    $x->kali($_POST['nilai1'], $_POST['nilai2']);
} elseif ('/webdasar/PHP/MVC/index.php/hitungnilai' === $uri && isset($_POST['bagi'])  &&  isset($_POST['nilai1']) && isset($_POST['nilai2'])) {
    $x->bagi($_POST['nilai1'], $_POST['nilai2']);
} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>Page Not 
    Found</h1></body></html>';
}
