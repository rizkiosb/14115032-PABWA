<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Hasil</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Data Diri</h1>
        <div class="form-group">
            <h5>Nama : <?php echo $_POST["nama"] ?></h5>
        </div>
        <div class="form-group">
            <h5>Alamat : <?php echo $_POST["alamat"] ?></h5>
        </div>
        <div class="form-group">
            <h5>Jenis Kelamin : <?php echo $_POST["jenis_kelamin"] ?></h5>
        </div>
        <div class="form-group">
            <h5>Golongan Darah : <?php echo $_POST["pilih"] ?></h5>
        </div>
        <div class="form-group">
            <div class="form-check-inline">
                <h5>Hobi : <?php
                            foreach ($_POST["pilihan"] as $key) {
                                echo $key . ",";
                            } ?></h5>
            </div>
            <div class="form-group">
                <h5>Keterangan : <?php echo $_POST["keterangan"] ?></h5>
            </div>
        </div>
        <div class="form-group">
            <a href="cetak.php" target="_blank"> <button name="submit" class="btn btn-primary"> Cetak</button></a>
        </div>
    </div>
</body>

</html>