<?php 
include "koneksi.php";

$nik= $_POST['nik'];
$nama= $_POST['nama'];
$tgl_lahir= $_POST['tgl_lahir'];
$umur= $_POST['umur'];
$alamat= $_POST['alamat'];
$asal_sekolah= $_POST['asal_sekolah'];
$minat_jurusan= $_POST['minat_jurusan'];
$no_hp= $_POST['no_hp'];


$insert= mysqli_query( $koneksi , "UPDATE daftar_user SET nik='$nik', nama='$nama', tgl_lahir='$tgl_lahir', umur='$umur', alamat='$alamat', asal_sekolah='$asal_sekolah', minat_jurusan='$minat_jurusan', no_hp='$no_hp' WHERE nik='$nik'");
echo $insert;

header("location:index.php?pesan=update");
?>