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

$insert = mysqli_query($koneksi, "INSERT INTO daftar_user (nik, nama, tgl_lahir, umur, alamat, asal_sekolah, minat_jurusan, no_hp) VALUES('$nik','$nama','$tgl_lahir','$umur','$alamat','$asal_sekolah','$minat_jurusan','$no_hp')");

header("location:index.php?pesan=input");
?>