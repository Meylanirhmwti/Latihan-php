<?php

class manusia{
function __destruct(){
    echo "Ini adalah Method DESTRUCT</br>";
}
function nama(){
    echo "Nama Saya Adalah Alid Taher<br>";
}
function  __construct(){
    echo "Ini adalah method CONSTRUCT</br>";
}
}
 $cetak = new manusia();
 echo $cetak->nama();

 ?>