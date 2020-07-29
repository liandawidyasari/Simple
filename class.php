<?php
 
class registrasi{
    //property
    var $nama;
    var $pekerjaan;
    var $email;
    var $jenis_kelamin;
    var $upload;
    
    
    //method manusia
    function nama(){
        return "Nama: <br/>";
    }
    
    function pekerjaan(){
        return "Pekerjaan <br/>";
    }
    function email(){
        return "Email <br/>";
    }
    function jenis_kelamin(){
        return "Jenis Kelamin <br/>";
    }
    function upload(){
        return "Foto Diri <br/>";
    }

}
//instansiasi class manusia
$registrasi = new registrasi();
 
//memanggil method nama dari class registrasi
echo $registrasi->nama();
echo $registrasi->pekerjaan();
echo $registrasi->email();
echo $registrasi->jenis_kelamin();
echo $registrasi->upload();

?>