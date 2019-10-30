<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$nama = $_POST['nama'];
$alamat = $_POST["alamat"];
$jk = $_POST["jenis_kelamin"];
$gol = $_POST["pilih"];
$ket = $_POST["keterangan"];
$html = '
    <div class="container">
        <h1 class="text-center">Data Diri</h1>
        <div class="form-group">
            <h5>Nama :' . $nama . '</h5>
        </div>
        <div class="form-group">
            <h5>Alamat : ' . $alamat . '</h5>
        </div>
        <div class="form-group">
            <h5>Jenis Kelamin : ' . $jk . '</h5>
        </div>
        <div class="form-group">
            <h5>Golongan Darah :' . $gol . '</h5>
        </div>
        <div class="form-group">
            <div class="form-check-inline">
                <h5>Hobi :';
foreach ($_POST["pilihan"] as $key) {
    $html .= $key . ',';
}
$html .= '</h5>
            </div>
            <div class="form-group">
                <h5>Keterangan : ' . $ket . '</h5>
            </div>';
$mpdf->WriteHTML($html);
$mpdf->Output();
