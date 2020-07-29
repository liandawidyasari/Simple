<?php

include "koneksi.php";

// menyimpan data kedalam variabel
$nama           = $_POST['nama'];
$pekerjaan      = $_POST['pekerjaan'];
$email          = $_POST['email'];
$jenis_kelamin  = $_POST['jenis_kelamin'];


$query="INSERT INTO registrasi VALUES('$id','$nama','$pekerjaan','$email','$jenis_kelamin')";
mysqli_query($koneksi, $query);
if ($query){
    echo 'Data berhasil disimpan';
    include 'view.php'; }
header("location:view.php?pesan=input");
?>

