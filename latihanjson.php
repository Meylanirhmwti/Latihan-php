<?php
//file json yang akan dibaca 
$file ="latihan.json";
// mendapatkan file json
$anggota = file_get_contents($file);
// mencoba anggota json
$data = json_decode($anggota,true);
//membaca json
foreach ($data as $key => $d){
    echo "Nama : ".$d['nama']."<br>";
    echo "Domisili : ".$d['domisili']."<br>";
    echo "Hobby : ";
    echo "<ul>";
    echo "<li>";
foreach($d['hoby'])