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
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 30px;
        }
        h4 {
            text-align: center;
            margin-bottom: 20px;
            color: #007bff;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }
        .table-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table {
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 0;
        }
        .table th {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
        }
        .table td {
            padding: 12px;
            vertical-align: middle;
            font-size: 14px;
            color: #333;
        }
        .table-hover tbody tr:hover {
            background-color: rgba(0, 123, 255, 0.1);
            transition: 0.3s;
        }
        .empty-message {
            text-align: center;
            font-style: italic;
            color: #888;
            padding: 20px;
        }
        .table-responsive {
            border-radius: 10px;
            overflow: hidden;
        }
        .btn-back {
            margin-top: 20px;
            text-align: center;
        }
        .btn-back a {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s;
        }
        .btn-back a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h4>Daftar Kunjungan</h4>
        <div class="table-container">
            <?php if (empty($_SESSION['bukutamu'])): ?>
                <p class="empty-message">Belum ada data kunjungan.</p>
            <?php else: ?>
                <div class="table-responsive">
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
                            <?php foreach ($_SESSION['bukutamu'] as $buku): ?>
                                <tr>
                                    <td><?= htmlspecialchars($buku->timestamp); ?></td>
                                    <td><?= htmlspecialchars($buku->nama); ?></td>
                                    <td><?= htmlspecialchars($buku->email); ?></td>
                                    <td><?= htmlspecialchars($buku->keperluan); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
        <div class="btn-back">
            <a href="index.php">Kembali</a>
        </div>
    </div>
</body>
</html>