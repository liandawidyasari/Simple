<?php 
        include "koneksi.php";
?>
<link rel="stylesheet" href="style.css">
<html>
<head>
            <title>PROCCES</title>
            <link rel="stylesheet" href="style.css">
            <meta charset="uth-8">
            
        </head>
        <header>
            
            <div class="topnav">
                <a href="home.php">Home</a>
                <a class="active" href="regis.php">Procces</a>
                <a href="view.php">Display</a>
                <a href="logout.php">Logout</a>
            </div>

        </header>
       
    </th>

<body class="title">
            <br><center><h2>REGISTRASI</h2></center>
  
            
<div id="form-daftar">

<form method="post" action="inputaksi.php">
  
<table>
  <tbody>
  <tr>
    <td><label for="nama">Nama:</label></td>
    <td><div><input name="nama" type="text" /></div></td>
  </tr>
  <tr>
    <td><label for="pekerjaan">Pekerjaan:</label></td>
    <td><div><input name="pekerjaan" type="text" /></div></td>
  </tr>
  
  <tr>
    <td><label for="email">Email:</label></td>
    <td><div><input name="email" type="text" /></div></td>
  </tr>
   
  <tr>
    <td><label for="jenis_kelamin">Jenis Kelamin:</label></td>
    <td>
    <div>
    <select name="jenis_kelamin">
    <option value="L">Laki-Laki</option>
    <option value="P">Perempuan</option>
    </select>
    </div>
      
    </td>
  </tr>
  
<td><label for="upload">Foto Diri:</label></td>
    <td>
        <form id="upload-form" action="{{ url_for('upload') }}" method="POST" enctype="multipart/form-data"></form>

    <strong>Files:</strong><br>
    <input id="file-picker" type="file" name="file" accept="image/*" multiple>
    <div id="msg"></div>
    </div>
      
    </td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td><input type="submit" name="regis_submit" class="input" value="Mendaftar" />
</td>
  </tr>
    
    
  </tbody>
</table>
  
</form>
  
</div>
  
</body>
</html>