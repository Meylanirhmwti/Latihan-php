<?php
class manusia{

     public function __construct($nama , $jk , $kelas){
        echo "Nama : $nama<br>";
        echo "Kelas : $kelas<br>";
        echo "Jenis Kelamin : $jk<br>";
        echo "<hr>";

    }

    
}

$manusia = new manusia("Meylani","Perempuan","XII RPL 1");
$manusia = new manusia("Nabila","Perempuan","XII RPL 1");
$manusia = new manusia("Palah","Laki-Laki","XII RPL 1");


?>