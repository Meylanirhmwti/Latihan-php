<!DOCTYPE html>
<html>
<head>
</head>
   <body>
   <title>From Input</title>
   </head>
   <body>
  <h2>From Pengulangan</h2>
  <!..Form..>
  <form method = "POST" action= "">
  <table>
  <tr>
   <td>Masukan Angka</td>
   <td>:</td>
   <td><input type = 'text' name = 'angka'></td>
   </tr>
   <tr>
   <td></td>
   <td></td>
   <td><input type= "submit" name = "simpan" value = "KIRIM"></td>
   </tr>
   </table>
   </from>
   </body>
   </html>

   <?php
   if(isset($_POST['simpan'])){
       $angka=$_POST['angka'];
   
for($i=$angka; $i>= 1; $i--){

    echo" $i<br>";
}
   }
?>