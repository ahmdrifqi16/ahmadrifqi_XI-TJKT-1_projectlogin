<?php
    session_start();
    if(empty($_SESSION['akses'])){
        echo "
        <script>
        alert('Mohon untuk Login terlebih dahulu...');
        window.location.href='index.php';
        </script>
        ";
    }
?>
<html>
    <head>
        <title>Halaman Utama</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <nav>
            <ul>
                <li class="left"><h1>Selamat Datang, <?php echo $_SESSION['akses']; ?></h1></li>
                <li><h2>Ini Halaman utama saya</h2></li>
                <li><p>Klik keluar untuk Logout</p></li>
                <li class="left"><h3><a href="keluar.php">KELUAR</a></h3></li>
            </ul>
        </nav> 
    </body>
</html>
