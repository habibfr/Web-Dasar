<?php

$myObj = new stdClass();
$myObj->kode = $_GET["kode"];
$myObj->nama = $_GET["nama"];
$myObj->satuan = $_GET["satuan"];

$myJson = json_encode($myObj, true);
echo $myJson;

?>
