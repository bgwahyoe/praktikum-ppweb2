<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
        <H2>Selamat Datang di Perpustakaan STT Nurul Fikri</H2>
        <p>Silahkan isi Buku Tamu di bawah ini</p>
        <hr>
        <form method="post" action="kunjungan.php">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
            <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda " type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
            <input id="email" name="email" placeholder="Masukkan Email Anda" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="keperluan" class="col-4 col-form-label">Keperluan</label> 
            <div class="col-8">
            <textarea id="keperluan" name="keperluan" cols="40" rows="5" required="required" class="form-control"></textarea>
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>

    </div>
</body>
</html>