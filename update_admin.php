<?php
    session_start();
    if (isset($_SESSION['user']))
    {
?>
<html>

<body>
    <?php }
include "koneksi.php";

?>
<head>
            <title>EDIT</title>
            <link rel="stylesheet" href="style.css">
            <meta charset="uth-8">
            
        </head>
        <header>
            
            <div class="topnav">
                <a href="home.php">Home</a>
                <a href="regis.php">Procces</a>
                <a href="view.php">Display</a>
                <a class="active" href="edit.php">Edit</a>
                <a href="">About</a>
                <a href="logout.php">Logout</a>
            </div>

        </header>
    </th>
<td width="800" rowspan="2" valign=top align="center">
<form action="update.php" method="post">
<center><input type="submit" value="UPDATE DATA"></center>
    <table align="center" border="1">
        <tr><td><b>id</b></td>
        <td><b>Nama</b></td>
        <td><b>pekerjaan</b></td>
        <td><b>email</b></td>
        <td><b>jenis_kelamin</b></td></tr>
<?php
    $id_edit=isset ($_GET['id']);
    $query=mysqli_query ($koneksi, "SELECT * FROM registrasi");
    while ($result=mysqli_fetch_array($query)){
        $id=$result['id'];
       
?>
<tr>
    <td>
        <?=$id?>
    </td>
<td>
        <input name=tanggal value="<?php echo $result['nama'];?>"> <input name=id type=hidden value="<?php echo $id; ?>">
</td>
<td>
    <input name=tanggal value="<?php echo $result['pekerjaan'];?>"> <input name=id type=hidden value="<?php echo $id; ?>">
</td>
<td>
    <input name=tanggal value="<?php echo $result['nohp'];?>"> <input name=id type=hidden value="<?php echo $id; ?>">
</td>
<td>
     <input name=tanggal value="<?php echo $result['email'];?>"> <input name=id type=hidden value="<?php echo $id; ?>">
</td>
</tr>
<?php
}//while
?>
    </table>
<center><input type="submit" value="UPDATE DATA"> </center>
</form>
</td>
</tr>
<tr>
    <th scope="row" valign="top"></th>
</tr>
</table>
</body>
</html>