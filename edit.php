<?php
    session_start();
    if (isset($_SESSION['user']))
?>

<html>
<head>
        <title>PROCCES</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="uth-8">
</head>
        <header>
            
            <div class="topnav">
                <a href="home.php">Home</a>
                <a href="regis.php">Procces</a>
                <a href="view.php">Display</a>
                <a href="logout.php">Logout</a>
            </div>
        </header>
    <br><br>
  
<td >
<?php 
    include "koneksi.php";
    $id=isset($_GET['id']);
	$query_mysql = mysqli_query($koneksi, "SELECT * from registrasi")or die(mysqli_error());
    while($d = mysqli_fetch_array($query_mysql)){
?>
	<form action="update.php" method="post">
    <table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
					<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $d['pekerjaan'] ?>"></td>					
			</tr>
           
            <tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $d['email'] ?>"></td>					
			</tr>	
            <tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin'] ?>"></td>					
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>