<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            background: #fff;
            padding: 30px;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 5px;
        }
        .text-center p {
            font-size: 18px;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Selamat Datang di Perpustakaan STT Nurul Fikri</h2>
        <p class="text-center">Silahkan isi Buku Tamu di bawah ini</p>
        <hr>
        <form method="post" action="kunjungan.php">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    </div>
                    <input id="email" name="email" placeholder="Masukkan Email Anda" type="email" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="keperluan">Keperluan</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-pencil"></i></span>
                    </div>
                    <textarea id="keperluan" name="keperluan" cols="40" rows="5" required class="form-control" placeholder="Tuliskan keperluan Anda..."></textarea>
                </div>
            </div> 
            <div class="text-center">
                <button name="submit" type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>