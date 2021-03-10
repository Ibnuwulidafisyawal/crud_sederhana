<?php 
include "koneksi.php";

$nik=$_GET['nik'];
$insert= mysqli_query($koneksi , "DELETE FROM daftar_user WHERE nik='$nik'");

echo $insert;
header("location:index.php?pesan=hapus");

?>