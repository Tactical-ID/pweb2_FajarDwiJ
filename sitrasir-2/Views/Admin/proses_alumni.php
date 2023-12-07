<?php
include_once '../../config.php';
include_once '../../Controllers/AdminController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $tahun_lulus = $_POST['tahun_lulus'];
    $status = $_POST['status'];
    $waktu_tunggu = $_POST['waktu_tunggu'];
    $nama_dudi = $_POST['nama_dudi'];
    $alamat_dudi = $_POST['alamat_dudi'];
    $jabatan = $_POST['jabatan'];
    $pendapatan = $_POST['pendapatan'];

    $adminController = new AdminController($db);
    $result = $adminController->createPertanyaan($nama, $nim, $prodi, $tahun_lulus, $status, $waktu_tunggu, $nama_dudi, $alamat_dudi, $jabatan, $pendapatan);

    if ($result) {
        header("location:alumni");
    } else {
        header("location:alumni");
    }
}
