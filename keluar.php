<?php
    session_start();
    session_destroy();
    echo "
        <script>
        alert('Anda Yakin ingin Keluar, Jika iya Klik OK ');
        window.location.href='index.php';
        </script>
    ";
?>