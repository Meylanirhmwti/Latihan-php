<?php

class laptop {

    //ptoperty/atribut
    var $pemilik;
    var $merk;
    var $ukuran_layar;


    //method/function
    function hidupkan_laptop(){
        return "hidupkan laptopnya";
    }

    function matikan_laptop() {
        return "Matikan laptopnya";
    }

    //isi dari class laptop 
}

$laptop_andi = new laptop();

echo $laptop_andi->hidupkan_laptop();
echo "<br>";
echo $laptop_andi->matikan_laptop();
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php

class sapi {

    //ptoperty/atribut
    var $jenis;
    var $bobot;
    var $warna;


    //method/function
    function mandi($keterangan){
        return $keterangan;
    }

    function mandi2 () {
        return "Sapi ini belum mandi";
    }

    function makan() {
        return "Sapi ini sudah makan";
    }

    //isi dari class laptop 
}


// object
$sapi_cow = new sapi();
$sapi = new sapi ();
$sapibau = new sapi ();
//set property
$sapi_cow -> jenis = "Lamosin";
$sapi->bobot = "30kg";
$sapibau->warna = "putih-hitam";


echo  $sapi_cow ->jenis;
echo "<br>";
echo $sapi->bobot;
echo "<br>";
echo $sapibau->warna;
echo "<br>";
echo $sapi_cow->mandi("Sapi ini sudah mandi!");
echo "<br>";
echo $sapi_cow->mandi2();
echo "<br>";
echo $sapi_cow->makan();
?>