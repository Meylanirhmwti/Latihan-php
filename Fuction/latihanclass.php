<?php
 class bangunruang{
     

    function persegi($s){
         echo "Menghitung Luas Pesegi<br>";
         echo "Sisinya = $s <br>";
         $luas = $s * $s;
         echo "Luasnya = $luas<br>";
     }
     
     function segitiga($a,$t){
        echo "Menghitung Luas Segitiga<br>";
        echo "Alasnya = $a <br>";
        echo "Tinggi = $t<br>";
        $luas = $a * $t /2;
        echo "Luasnya = $luas<br>";
    }
    
    function lingkaran($p,$j){
        echo "Menghitung Luas Lingkaran<br>";
        echo "Phi = $p <br>";
        echo "Jari-jari = $j<br>";
        $luas = $p * $j;
        echo "Luasnya = $luas";
    }
    
    
 }

 //membuat objek
 $bentuk = new bangunruang();
 $bentuk->persegi(10);
 $bentuk->segitiga(10,5);
 $bentuk->lingkaran(3.14,10);
 ?>

 