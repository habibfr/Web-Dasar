<?php
$nama = $_POST['nama']; //Menangkap inputan nama dari metode post
$umur = $_POST['umur']; //Menangkap inputan umur dari metode post
$dom = $_POST['domisili']; //Menangkap inputan domisili dari metode post
$job = $_POST['pekerjaan']; //Menangkap inputan pekerjaan dari metode post
 
$data['nama'] = $nama; //Membungkus variabel nama dalam array variabel data
$data['umur'] = $umur; //Membungkus variabel umur dalam array variabel data
$data['domisili'] = $dom; //Membungkus variabel domisili dalam array variabel data
$data['pekerjaan'] = $job; //Membungkus variabel pekerjaan dalam array variabel data
 
print_r(json_encode($data)); //Print out hasil encode json dari array variabel data.
 
?>