<!DOCTYPE html>
<html>
<head>
<title>Form Biodata Diri</title>
</head>
   <body>
   <h2>Form Biodata Diri</h2>
   <form method = "POST" action= "">
   <table>

    <tr>

    <td>Nama</td>
    <td>:</td>
    <td><input type ='text' name= 'nama'></td>
    </tr>
    
    <td>Tempat lahir</td>
    <td>:</td>
    <td><input type ='text' name= 'tempat'></td>
    </tr>
    
    <tr>
      <td>Tanggal Lahir</td>
      <td>:</td>
      <td><input type= 'date' name= 'tanggal'></td>
      </tr>
      
      <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td><input type= 'radio' name= 'jenis' value= "laki-laki"> Laki-Laki<br>
      <input type = 'radio' name= 'jenis' value= perempuan>Perempuan</td>
      </tr>

      <tr>
      <td>Alamat</td>
      <td>:</td>
      <td>
      <textarea name = 'alamat' rows = 2 cols = 10></textarea>
      </td>
      </tr>
     
     
     <tr>
      <td>Agama</td>
      <td>:</td>
      <td>
      <select name = 'agama'>
      <option value = 'islam'>islam </option>
      <option value = 'kristen'>kristen </option>
      </td>
      </tr>

      <tr>
      <td>Pendidikan</td>
      <td>:</td>
      <td>
      <select name = 'pendidikan'>
      <option value = 'SMP'>SMP </option>
      <option value = 'SMA'>SMA </option>
      <option value = 'D3'>D3 </option>
      <option value = 'S1'>S1 </option>
      </td>
      </tr>

      <tr>
      <td>Status</td>
      <td>:</td>
      <td>
      <select name = 'status'>
      <option value = 'pelajar'>pelajar </option>
      <option value = 'belum nikah'>belum nikah </option>
      <option value = 'sudah nikah'>sudah nikah </option>
      <option value = 'Cerai'>Cerai </option>
      </select>
      </td>
      </tr>

      <tr>
      <td>Hobi</td>
      <td>:</td>
      <td>
      <input type = 'checkbox' name = 'hobi' value = 'Membaca'>Membaca
      <input type = 'checkbox' name = 'hobi' value = 'Menulis'>Menulis
      <input type = 'checkbox' name = 'hobi' value = 'Ngepush'>Ngepush
      <input type = 'checkbox' name = 'hobi' value = 'Menggambar'>Menggambar
      </td>
      </tr>

      <tr>
      <td>Cita-Cita</td>
      <td>:</td>
      <td>
      <select name = 'cita-cita'>
      <option value = 'Pramugari'>Pramugari </option>
      <option value = 'Programmer'>Programmer </option>
      <option value = 'Tentara'>Tentara </option>
      <option value = 'Polisi'>Polisi </option>
      </select>
      </td>
      </tr>


      <tr>
      <td>Kata-Kata Bijak</td>
      <td>:</td>
      <td>
      <textarea name = 'kata_bijak' rows = 4 cols = 30></textarea>
      </td>
      </tr>



      <td></td>
      <td></td>
      <td><input type="submit" name = "simpan"value='KIRIM'></td>
      </tr>
      </table>
      </form>
      </body>
      </html>


      <?php
      if(isset($_POST['simpan'])){
         $nama = $_POST['nama'];
         $tempat = $_POST['tempat'];
         $tanggal = $_POST['tanggal'];
         $alamat = $_POST['alamat'];
         $agama = $_POST['agama'];
         $pendidikan = $_POST['pendidikan'];
         $status = $_POST['status'];
         $hobi = $_POST['hobi'];
         $cita_cita = $_POST['cita-cita'];
         $kata_bijak = $_POST['kata_bijak'];

         echo "Nama = $nama <br>";
         echo "Tempat Lahir = $tempat<br>";
         echo "Tanggal Lahir = $tanggal<br>";
         echo "Alamat = $alamat<br>";
         echo "Agama = $agama<br>";
         echo "Pendidikan = $pendidikan<br>";
         echo "Status = $status<br>";
         echo "Hobi = $hobi<br>";
         echo "Cita-Cita = $cita_cita<br>";
         echo "Kata-Kata Bijak = $kata_bijak";


      }
      ?>
    

