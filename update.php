<?php

include "koneksi.php";

// menyimpan data kedalam variabel
$nama           = $_POST['nama'];
$pekerjaan      = $_POST['pekerjaan'];
$email          = $_POST['email'];
$jenis_kelamin  = $_POST['jenis_kelamin'];


mysqli_query ($koneksi, "UPDATE registrasi SET nama='$nama', pekerjaan='$pekerjaan',email='$email',jenis_kelamin='$jenis_kelamin'");
mysqli_query($koneksi, $data);

header("location:view.php?pesan=update");
?>
