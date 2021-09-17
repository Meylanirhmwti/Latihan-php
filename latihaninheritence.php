<?php  
 class bangun_datar {   
     //property bagas
   public $luas; 
   public $kel;
 }
   class persegi extends bangun_datar{
   function luas_persegi($sisi)    
   {    
    echo "Menghitung Persegi<br>";
     echo "Sisinya : ".$sisi;
     echo "<br>";
     $this->luas = $sisi * $sisi;
     $this->kel = $sisi * $sisi * $sisi * $sisi;
     echo "Luasnya : ".$this->luas;
     echo "<br>";
     echo "Kelilingnya : ".$this->kel;
     echo "<br>";
     echo "<hr>";
   }
}
 
   class persegi_panjang extends bangun_datar{
   function persegi($panjang , $lebar)    
   {    
    echo "Menghitung Perasegi Panjang<br>";
     echo "Panjangnya : ".$panjang;
     echo "<br>";
     echo "Lebarnyanya : ".$lebar;
     echo "<br>";
     $this->luas = $panjang * $lebar;
     $this->kel = 2 + $panjang * $lebar  ;
     echo "Luasnya : ".$this->luas;
     echo "<br>";
     echo "Kelilingnya : ".$this->kel;
     echo "<br>";
    
     
   }
}

class segitiga extends bangun_datar{
    function luas ($alas , $tinggi , $s)    
    {    
        echo "Menghitung Segitiga<br>";
      echo "Alasnya : ".$alas;
      echo "<br>";
      echo "tingginya : ".$tinggi;
      echo "<br>";
      $this->luas = 1/2 * $alas * $tinggi;
      $this->kel = $s + $s + $s;
      echo "Luasnya : ".$this->luas;
      echo "<br>";
      echo "Kelilingnya : ".$this->kel;
      echo "<br>";
      echo "<hr>";
      
    }
 }
 

 class pa extends bangun_datar{
    public function lingkaran($jari,$phi=3.14){
        echo "mengitung luas lingkaran<br>";
        echo "Phi = $phi<br>";
        echo "Jari = $jari<br>";
        $this->luas=$phi*$jari * $jari;
        $this->kel=2 * $phi * $jari;
        echo "Luasnya = $this->luas <br>";
        echo "Kelilingnya = $this->kel <br>";
        echo "<hr>";
    }
}


$cetak = new pa();
$cetak ->lingkaran(10);
    
  $cetak = new persegi();
  $cetak->luas_persegi(4);
  
   

   
 $cetak = new segitiga();
 $cetak->luas(1,5 , 5);
  
 $cetak = new persegi_panjang();
 $cetak->persegi(10,5);
 ?>