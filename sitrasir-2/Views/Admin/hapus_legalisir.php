<?php
include_once '../../config.php';
include_once '../../Controllers/LegalisirController.php';

$database = new database;
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $legalisircontroller = new legalisircontroller($db);
    $result = $legalisircontroller->deletelegalisir($id);

    if ($result) {
        header("location:admin");
    } else {
        echo "Gagal Hapus Data";
    }
}
