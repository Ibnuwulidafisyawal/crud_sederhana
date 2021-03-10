<DOCTYPE html>

<html>
    <head>
            <title>Pendaftaran Siswa SMK Wikrama Bogor</title>
            <link rel="stylesheet" href="style.css">
    </head>

<body>

    <div class="judul">
        <h1>Pendaftaran Siswa SMK Wikrama Bogor</h1>
    </div>
    <hr>
</br>

<?php 

$pesan="";

if(isset($_GET['pesan'])){
 $pesan = $_GET['pesan'];
 if($pesan == "input"){
 echo "Data berhasil di input";
 }else if($pesan == "update"){
 echo "Data berhasil di update.";
 }else if($pesan == "hapus"){
 echo "Data berhasil di hapus.";
 }
}

?>

<a class="button" href="input.php">+ Tambah Data Baru</a>

<h3>Data Daftar</h3>

    <table border="10" class="table">
        <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Asal Sekolah</th>
            <th>Minat Jurusan</th>
            <th>No HP</th>
            <th>Opsi</th>
        </tr>


    <?php 

            include "koneksi.php";

            $nik = (isset($_GET['nik']) ? $_GET['nik'] : null);
            $data= mysqli_query($koneksi, "SELECT * FROM daftar_user")or die (mysqli_connect_error($data));
            $no= 0;
            while( $datanya = mysqli_fetch_array($data)){
            $no++;   
    ?>

            <tr>
                <td> <?php echo $no; ?> </td>
                <td> <?php echo $datanya['nik']; ?> </td>
                <td> <?php echo $datanya['nama']; ?></td>
                <td> <?php echo $datanya['tgl_lahir']; ?></td>
                <td> <?php echo $datanya['umur']; ?></td>
                <td> <?php echo $datanya['alamat']; ?></td>
                <td> <?php echo $datanya['asal_sekolah'];?></td>
                <td> <?php echo $datanya['minat_jurusan'];?></td>   
                <td> <?php echo $datanya['no_hp'];?></td>
                

                <td>
                    <a class="edit" href="edit.php?nik=<?php echo  $datanya['nik'];?>">Edit</a>
                    <a class="hapus" href="hapus.php?nik=<?php echo $datanya ['nik'];?>">Hapus<a>
                </td>
            </tr>
      <?php  } ?>


    </table>
  </body>  
</html>