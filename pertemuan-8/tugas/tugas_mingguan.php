<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tugas Mingguan</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Form Data</h1>
        <form action="cetak.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama : </label>
                <input placeholder="Masukkan Nama" type="text" name="nama" id="nama" class="form-control" required="required">
            </div>
            <div class="form-group">
                <label>Alamat :</label>
                <input placeholder="Masukkan Alamat" type="text" name="alamat" id="alamat" class="form-control"></input>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin :</label><br>
                <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
                <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
            </div>
            <div class="form-group">
                <label for="pilih">Golongan Darah :</label>
                <select class="form-control" id="pilih" name="pilih">
                    <option>A</option>
                    <option>B</option>
                    <option>AB</option>
                    <option>O</option>
                </select>
            </div>
            <div class="form-group">
                <label>Hobi :</label><br>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input name="pilihan[]" type="checkbox" class="form-check-input" value="Bermain Game">Bermain game
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input name="pilihan[]" type="checkbox" class="form-check-input" value="Bermain Bola">Bermain Bola
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input name="pilihan[]" type="checkbox" class="form-check-input" value="Renang">Renang
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input name="pilihan[]" type="checkbox" class="form-check-input" value="Lainnya">Lainnya
                    </label>
                </div>
                <div class="form-group">
                    <label>Keterangan :</label>
                    <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">Cetak</button>
            </div>
        </form>
    </div>
</body>

</html>
<?php
if (isset($_POST["submit"])) {
    var_dump($_POST);
}
?>