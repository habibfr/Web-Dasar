<?php

function tambah($a, $b)
{
  $c = $a + $b;
  return $c;
}

function kurang($a, $b)
{
  $c = $a - $b;
  return $c;
}

function kali($a, $b)
{
  $c = $a * $b;
  return $c;
}

function bagi($a, $b)
{
  $c = $a / $b;
  return $c;
}

function deretGanjil($awal, $akhir)
{
  $deret = "";
  for ($i = $awal; $i <= $akhir; $i++) {
    if ($i % 2 == 1) {
      $deret .= $i . " ";
    }
  }
  return $deret;
}

function deretGenap($awal, $akhir)
{
  $deret = "";
  for ($i = $awal; $i <= $akhir; $i++) {
    if ($i % 2 == 0) {
      $deret .= $i . " ";
    }
  }
  return $deret;
}