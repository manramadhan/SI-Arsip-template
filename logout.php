<?php
session_start();
session_unset();
session_destroy();
echo "<script>
    alert('Anda Telah Logout');
    window.location='http://localhost/arsip-template/index.php';
    </script>";
exit();
