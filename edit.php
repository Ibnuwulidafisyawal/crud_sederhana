
<?php 
include "koneksi.php";
    

$nik = (isset($_GET['nik']) ? $_GET['nik'] : null);

$query_mysql= mysqli_query($koneksi , "SELECT * FROM daftar_user WHERE nik=$nik ")or die (mysqli_connect_error());

$nomor = 1;
while($datanya = mysqli_fetch_array($query_mysql)){

?>





<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="style.css">
    <title>Edit Pendaftaran Siswa</title>
    <h2>Edit Pendaftaran Siswa</h2>
</head>
<hr>
<body>
       <a href="index.php">Lihat Semua Data Pendaftaran Siswa</a>
       

       <h3>Edit Data</h3>


       
    <form action="update.php" method="post">

<table>
    
    <tr>
        <td><b>Nik</b></td>
        <td>: <input type="number" name="nik" value="<?php echo $datanya['nik'];?>"></td>

    </tr>

    <tr>
        <td><b>Nama</b></td>
        <td>: <input type="text" name="nama" value="<?php echo $datanya['nama'];?>"></td>
        
    </tr>

    <tr>
        <td><b>Tanggal Lahir</b></td>
        <td>: <input type="date" name="tgl_lahir" value="<?php echo $datanya['tgl_lahir'];?>"></td>
        
    </tr>

    <tr>
        <td><b>Umur</b></td>
        <td>: <input type="number" name="umur" value="<?php echo $datanya['umur'];?>"></td>
        
    </tr>

    <tr>
        <td><b>Alamat</b></td>
        <td>: <input type="text" name="alamat" value="<?php echo $datanya['alamat'];?>"></td>
        
    </tr>

    <tr>
        <td><b>Asal Sekolah</b></td>
        <td>: <input type="text" name="asal_sekolah" value="<?php echo $datanya['asal_sekolah'];?>"></td>
        
    </tr>

    <tr>
        <td><b>Minat Jurusan</b></td>
        <td>: <input type="text" name="minat_jurusan" value="<?php echo $datanya['minat_jurusan'];?>"></td>
        
    </tr>

    <tr>
        <td><b>No HP</b></td>
       <td>: <input type="number" name="no_hp" value="<?php echo $datanya['no_hp'];?>"></td>
    </tr>



   



</table>
        <button type="submit" style="width:253px; height:50px;"><h2>KIRIM</h2></button>
</form>





</body>
</html>
<? } ?>