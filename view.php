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
                <a class="active" href="view.php">Display</a>
                <a href="logout.php">Logout</a>
            </div>
        </header>
    <br><br>
    
  
<td >
    <table border="2" >
    <center><h2>DATA</h2></center>
    <tr>
			<th>id</th>
			<th>nama</th>
			<th>pekerjaan</th>
            <th>email</th>
            <th>Jenis Kelamin</th>
            <th>Opsi</th>

		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM registrasi");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['pekerjaan']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td>
                <a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a> |
				<a href="delet.php?id=<?php echo $d['id']; ?>">Hapus</a>
			</tr>
			<?php 
		}
		?>
    </table> 
<br><br>

<tr>
    <th scope="row" valign="top"></th>
    </tr>
</table>

<div style="overflow-x:auto;">

<table>

</table>

</div>
</body>
</html>