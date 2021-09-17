<?php
 
 //class
 class manusia{
     public function berinama(){
         echo "Nama saya ujang<br>";
     }

 }
  
 //class turunan
 class teman extends manusia{

    function berinamateman(){
        echo "Nama teman saya andi";
    }
 }

 //instansiasi class teman
 $malasngoding = new teman;

  $malasngoding->berinama();
  $malasngoding->berinamateman();

  ?>
