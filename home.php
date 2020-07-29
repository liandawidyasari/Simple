<?php
    session_start();
    if (isset($_SESSION['user']))
    {
?>
<?php }
include "koneksi.php";


?> 
<html>
<head>
            <title>HOME</title>
            <link rel="stylesheet" href="style.css">
            <meta charset="uth-8">
            
        </head>
        <header>
            
            <div class="topnav">
                <a class="active" href="home.php">Home</a>
                <a href="regis.php">Procces</a>
                <a href="view.php">Display</a>
                <a href="logout.php">Logout</a>
            </div>

        </header>
        <body class="title">
            <center><h1>HOME</h1></center>
            
        </body>
    </html>

</body>
</html>