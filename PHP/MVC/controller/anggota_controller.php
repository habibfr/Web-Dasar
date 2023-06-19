<?php
require_once 'model/anggota_model.php';
class anggota_controller
{
  public function index()
  {
    echo "Belajar MVC";
  }
  public function isinilai()
  {
    require 'view/isinilai.php';
  }
  public function hitungnilai($a, $b)
  {
    $m = new anggota_model();
    echo $m->penjumlahan($a, $b);
  }
  public function kurang($a, $b)
  {
    $m = new anggota_model();
    echo $m->pengurangan($a, $b);
  }
  public function kali($a, $b)
  {
    $m = new anggota_model();
    echo $m->perkalian($a, $b);
  }
  public function bagi($a, $b)
  {
    $m = new anggota_model();
    echo $m->pembagian($a, $b);
  }
}
