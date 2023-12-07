<?php
//Memanggil Class model database
include_once '../../config.php';
include_once '../../Controllers/AdminController.php';
include_once '../../Controllers/LegalisirController.php';
require '../../navbar.php';

$database = new database;
$db = $database->getKoneksi();

$AdminController = new AdminController($db);
$admin = $AdminController->getPertanyaanAlumni();

$legalisircontroller = new legalisircontroller($db);
$legalisir = $legalisircontroller->getlegalisir();


$bulan1 = mysqli_query($db, "SELECT * FROM pertanyaan_alumni WHERE waktu_tunggu ='0-6 Bulan'");
$bulan1Count = mysqli_num_rows($bulan1);

$bulan2 = mysqli_query($db, "SELECT * FROM pertanyaan_alumni WHERE waktu_tunggu ='6-12 Bulan'");
$bulan2Count = mysqli_num_rows($bulan2);

$bulan3 = mysqli_query($db, "SELECT * FROM pertanyaan_alumni WHERE waktu_tunggu ='Lebih dari 1 Tahun'");
$bulan3Count = mysqli_num_rows($bulan3);

$status1 = mysqli_query($db, "SELECT * FROM pertanyaan_alumni WHERE status ='Bekerja'");
$status1Count = mysqli_num_rows($status1);

$status2 = mysqli_query($db, "SELECT * FROM pertanyaan_alumni WHERE status ='Kuliah'");
$status2Count = mysqli_num_rows($status2);

$status3 = mysqli_query($db, "SELECT * FROM pertanyaan_alumni WHERE status ='Tidak Keduanya'");
$status3Count = mysqli_num_rows($bulan3);

?>

<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5>
                    Grafik Status Alumni
                </h5>
                <br>
                <div class="grafik">
                    <canvas id="grafik-status"></canvas>
                </div>
            </div>
            <div class="col-md-3">
                <h5>
                    Grafik Masa Tunggu Alumni
                </h5>
                <br>
                <div class="grafik">
                    <canvas id="grafik-bulan"></canvas>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="col-40 px-3 py-2">
            <h3 class="card-title py-2">Data Tracer Studi</h3>
            <br>
            <table class="table table-striped table-bordered">
                <tr class="table-primary" style="text-align : center">
                    <td>No</td>
                    <td>Nama</td>
                    <td>NIM</td>
                    <td>Prodi</td>
                    <td>Tahun Lulus</td>
                    <td>Status</td>
                    <td>Waktu Tunggu</td>
                    <td>Nama DU/DI</td>
                    <td>Alamat DU/DI</td>
                    <td>Jabatan</td>
                    <td>Pendapatan</td>
                    <td>Aksi</td>
                </tr>
                <?php
                $no = 1;
                foreach ($admin as $x) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $x['nama'] ?></td>
                        <td><?php echo $x['nim'] ?></td>
                        <td><?php echo $x['prodi'] ?></td>
                        <td><?php echo $x['tahun_lulus'] ?></td>
                        <td><?php echo $x['status'] ?></td>
                        <td><?php echo $x['waktu_tunggu'] ?></td>
                        <td><?php echo $x['nama_dudi'] ?></td>
                        <td><?php echo $x['alamat_dudi'] ?></td>
                        <td><?php echo $x['jabatan'] ?></td>
                        <td><?php echo $x['pendapatan'] ?></td>
                        <td>
                            <a href="editalumni?id=<?php echo $x['id']; ?>" class=" btn btn-warning btn-mb" style="border-radius: 4px; padding: 8px; flex: 1; width:60%;">Edit</a>

                            <a href="hapusalumni?id=<?php echo $x['id']; ?>" class="btn btn-danger btn-mb" style="border-radius: 4px; padding: 8px; flex: 1; width:60%;" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="col-40 px-3 py-2">
            <h3 class="card-title py-2">Data Ajuan Legalisir</h3>
            <br>
            <table class="table table-striped table-bordered">
                <tr class="table-primary" style="text-align : center">
                    <td>No</td>
                    <td>Nama</td>
                    <td>Prodi</td>
                    <td>Tahun Lulus</td>
                    <td>Alasan</td>
                    <td>Aksi</td>
                </tr>
                <?php
                $no = 1;
                foreach ($legalisir as $y) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $y['nama'] ?></td>
                        <td><?php echo $y['prodi'] ?></td>
                        <td><?php echo $y['tahun_lulus'] ?></td>
                        <td><?php echo $y['alasan'] ?></td>
                        <td>
                            <a href="editlegalisir?id=<?php echo $y['id']; ?>" class=" btn btn-warning btn-mb" style="border-radius: 4px; padding: 8px; flex: 1; width:40%;">Edit</a>
                            <a href="hapuslegalisir?id=<?php echo $y['id']; ?>" class="btn btn-danger btn-mb" style="border-radius: 4px; padding: 8px; flex: 1; width:50%;" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>


    <script>
        var ctx = document.getElementById("grafik-bulan").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['0-6 Bulan', '6-12 Bulan', 'Lebih dari 1 Tahun'],
                datasets: [{
                    label: 'Data',
                    data: [
                        <?php echo $bulan1Count; ?>,
                        <?php echo $bulan2Count; ?>,
                        <?php echo $bulan3Count; ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(252, 161, 32, 0.8)',
                        'rgba(75, 192, 192, 0.6)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(252, 161, 32, 0.8)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
        });
        var ctx = document.getElementById("grafik-status").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Bekerja', 'Kuliah', 'Tidak Keduanya'],
                datasets: [{
                    label: 'Data',
                    data: [
                        <?php echo $status1Count; ?>,
                        <?php echo $status2Count; ?>,
                        <?php echo $status3Count; ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(75, 192, 192, 0.6)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
        });
    </script>
</body>