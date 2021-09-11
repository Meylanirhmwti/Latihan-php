<?php
function luasLingkaran($jari , $phi=22/7)
{
    $luas = $phi * $jari * $jari;
    return $luas;
}
function luasSegitiga($alas , $tinggi)
{
    $luas= ($alas * $tinggi)/2;
    return $luas;
}
function luasPersegi($panjang , $lebar)
{
    $luas= $panjang*$lebar
    return $luas;
}
?>
<!-- (jari) -->
Luas Lingkaran = <?php echo luasLingkaran(7); ?> <br>
<!-- (alas , tinggi) -->
Luas Segitiga= <?php echo luasSegitiga(2,5); ?> <br>
<!-- (panjang , lebar) -->
Luas Persegi Panjang = <?php echo luasPersegi(10,4); ?> <br>

<?php  ?>

