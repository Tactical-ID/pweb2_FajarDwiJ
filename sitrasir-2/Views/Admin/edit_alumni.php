<?php
include_once '../../config.php';
include_once '../../Controllers/AdminController.php';
require '../../navbar.php';
$database = new database;
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$adminController = new AdminController($db);
$admin = $adminController->getAlumnibyId($id);

if ($admin) {
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

        $result = $adminController->updateAlumni($id, $nama, $nim, $prodi, $tahun_lulus, $status, $waktu_tunggu, $nama_dudi, $alamat_dudi, $jabatan, $pendapatan);

        if ($result) {
            header("location:admin");
        } else {
            header("location:editalumni");
        }
    }
} else {
    echo "Mahasiswa Tidak Ditemukan";
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<br>

<?php
if ($admin) {
?>
    <div class="container">
        <div class="card p-4 shadow">
            <div class="col-40 px-3 py-2">
                <div class="card-body">
                    <h3>Edit Data Mahasiswa</h3>
                    <form action="" method="post">
                        <table>
                            <?php foreach ($admin as $d => $value) {
                                $displayName = str_replace('_', ' ', $d);   //Untuk mengubah underscore(_) jadi spasi
                                $displayName = ucwords($displayName);   //Untuk Membuat CamelCase di $d

                                if ($d === 'id') {    // FUngsi untuk hide row table yang tidak dipakai
                                    continue;
                                }
                            ?>
                                <tr>
                                    <td><?php echo $displayName; ?></td>
                                    <td>
                                        <?php if ($d === 'nim' || $d === 'tahun_lulus') { ?>
                                            <input type="number" name="<?php echo $d; ?>" value="<?php echo $value; ?>" class="form-control" style="margin-left: 5%">
                                        <?php } elseif ($d === 'alamat_dudi') { ?>
                                            <textarea name="<?php echo $d; ?>" cols="30" rows="5" class="form-control" style="margin-left: 5%"><?php echo $value; ?></textarea>
                                        <?php } elseif ($d === 'prodi' || $d === 'status' || $d === 'waktu_tunggu' || $d === 'pendapatan') { ?>
                                            <select name="<?php echo $d; ?>" class="form-control" style="margin-left: 5%;">
                                                <option value="" disabled>Pilih <?php echo $displayName; ?></option>
                                                <?php
                                                $options = [];
                                                if ($d === 'prodi') {
                                                    $options = ['D3 Teknik Informatika', 'D4 Rekayasa Keamanan Siber', 'D4 Teknologi Rekayasa Multimedia', 'D4 Akutansi Keuangan Lembaga Syariah'];
                                                } elseif ($d === 'status') {
                                                    $options = ['Bekerja', 'Kuliah', 'Tidak Keduanya'];
                                                } elseif ($d === 'waktu_tunggu') {
                                                    $options = ['0-6 Bulan', '6-12 Bulan', 'Lebih dari 1 Tahun'];
                                                } elseif ($d === 'pendapatan') {
                                                    $options = ['0 - 500.000,-', '500.000 - 1.000.000', '1.000.000 - 2.000.000', 'Lebih dari 2juta'];
                                                }
                                                foreach ($options as $option) {
                                                    echo '<option value="' . $option . '"';
                                                    if ($option === $value) {
                                                        echo ' selected';
                                                    }
                                                    echo '>' . $option . '</option>';
                                                }
                                                ?>
                                            </select>
                                        <?php } else { ?>
                                            <input type="text" name="<?php echo $d; ?>" value="<?php echo $value; ?>" class="form-control" style="margin-left: 5%">
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td></td>
                                <td class=" py-2">
                                    <a href="admin" class="btn btn-secondary" style="margin-left: 5%">Kembali</a>
                                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        <?php
    }
        ?>
        </div>
    </div>