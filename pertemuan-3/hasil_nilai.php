<?php
if (!isset($_POST['nama'])){
    echo '<script>alert("Anda Harus Mengisi Form Terlebih Dahulu !")</script>
    <meta http-equiv="refresh" content="0; url=form_nilai.php">';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
        }
        td {
            padding: 10px;
        }
        .table-header {
            font-weight: bold;
            background: #007bff;
            color: white;
            text-align: center;
        }
        .grade {
            font-size: 20px;
            font-weight: bold;
        }
        .remark {
            font-style: italic;
            color: #28a745;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center text-primary">Hasil Nilai Mahasiswa</h2>
        <table class="table table-bordered">
            <tr class="table-header">
                <td colspan="3">Informasi Mahasiswa</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?=$_POST['nama']?></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><?=$_POST['nim']?></td>
            </tr>
            <tr>
                <td>Rombel</td>
                <td>:</td>
                <td><?=$_POST['rombel']?></td>
            </tr>
            <tr>
                <td>Mata Kuliah</td>
                <td>:</td>
                <td><?=$_POST['matkul']?></td>
            </tr>
            <tr class="table-header">
                <td colspan="3">Nilai</td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><?=$_POST['tugas']?></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><?=$_POST['uts']?></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><?=$_POST['uas']?></td>
            </tr>
            <tr class="table-header">
                <td colspan="3">Hasil Akhir</td>
            </tr>
            <tr>
                <td>Predikat</td>
                <td>:</td>
                <td class="grade">
                    <?php
                    $tugas = $_POST['tugas'] * (35/100);
                    $uts = $_POST['uts'] * (30/100);
                    $uas = $_POST['uas'] * (35/100);
                    $total = $tugas + $uts + $uas;
                    
                    if ($total <= 35 ) {
                        $pred = "E";
                    } elseif ($total <= 55 ) {
                        $pred = "D";
                    } elseif ($total <= 69 ) {
                        $pred = "C";
                    } elseif ($total <= 84 ) {
                        $pred = "B";
                    } elseif ($total <= 100 ) {
                        $pred = "A";
                    } else {
                        $pred = "Predikat Tidak Valid";
                    }
                    echo $pred;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td class="remark">
                    <?php
                    switch ($pred) {
                        case 'A':
                            echo "Sangat Baik";
                            break;
                        case 'B':
                            echo "Baik";
                            break;
                        case 'C':
                            echo "Sangat Cukup";
                            break;
                        case 'D':
                            echo "Cukup";
                            break;
                        case 'E':
                            echo "Kurang";
                            break;
                        default:
                            echo "Tidak Valid";
                            break;
                    }
                    ?>
                </td>
            </tr>
        </table>
        <div class="text-center">
            <a href="form_nilai.php" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</body>
</html>
