<?php
include_once '../../config.php';
include_once '../../Controllers/LegalisirController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $tahun_lulus = $_POST['tahun_lulus'];
    $alasan = $_POST['alasan'];

    $legalisircontroller = new legalisircontroller($db);
    $result = $legalisircontroller->createlegalisir($nama, $prodi, $tahun_lulus, $alasan);

    if ($result) {
        header("location:alumni");
    } else {
        header("location:alumni");
    }
}
