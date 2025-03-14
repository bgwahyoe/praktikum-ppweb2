<?php
    require_once ('bukutamu.php');
    session_start();

    if (isset($_SESSION['bukutamu'])) {
        $_SESSION['bukutamu'] += [];
    } 

    if (isset($_POST['submit'])) {
        $bukutamu = new bukutamu();
        $bukutamu -> timestamp = date('Y-m-d H:i:s');
        $bukutamu -> nama = $_POST['nama'];
        $bukutamu -> email = $_POST['email']
        $bukutamu -> keperluan = $_POST['keperluan']

        array_push($_SESSION['bukutamu'], $bukutamu);

    }

?>    