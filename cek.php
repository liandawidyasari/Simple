<?php
session_start();
include "koneksi.php";
if ( isset($_SESSION['user']) );


{
    $query=mysqli_query($koneksi,"select * from password where user='$_POST[username]'");
    if (mysqli_num_rows($query)!=0){
        $result=mysqli_fetch_array($query);
        $password=$result[password];
        if ($password==$_POST['password']){
        $_SESSION['user']=$_POST['username'];
        header("location:home.php?message=selamat datang!!!");
        }
        
    }
    
}

?>