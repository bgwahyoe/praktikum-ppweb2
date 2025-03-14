<?php
    require_once ('bukutamu.php');
    session_start();

    if (!isset($_SESSION['bukutamu'])) {
        $_SESSION['bukutamu'] = [];
    } 

    if (isset($_POST['submit'])) {
        $bukutamu = new bukutamu();
        $bukutamu -> timestamp = date('Y-m-d H:i:s');
        $bukutamu -> nama = $_POST['nama'];
        $bukutamu -> email = $_POST['email'];
        $bukutamu -> keperluan = $_POST['keperluan'];

        array_push($_SESSION['bukutamu'], $bukutamu);

    }

?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
        <h4>Daftar Kunjungan</h4>
        <table class="table table-hover">
        <thead>
            <tr>
                <th>Timestamp</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Keperluan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SESSION['bukutamu'] as $buku) {
            ?>
            <tr>
                <td><?=htmlspecialchars($buku->timestamp); ?></td>
                <td><?=htmlspecialchars($buku->nama); ?></td>
                <td><?=htmlspecialchars($buku->email); ?></td>
                <td><?=htmlspecialchars($buku->keperluan); ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
        </table>
    </div>
</body>
</html>