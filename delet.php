<?php 
include 'koneksi.php';
$id = isset($_GET['id']);
mysqli_query($koneksi, "DELETE FROM registrasi ")or die(mysqli_error());

header("location:view.php?pesan=hapus");
?>