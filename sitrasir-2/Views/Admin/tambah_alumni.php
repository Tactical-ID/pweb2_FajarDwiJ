<?php
require '../../navbar.php';
?>
<br>
<div class="container">
    <div class="card p-4 shadow">
        <div class="col-40 px-3 py-2">
            <div class="card-body">
                <form action="prosesalumni" method="post" class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">NIM</label>
                        <input type="number" name="nim" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Prodi</label>
                        <select name="prodi" class="form-select">
                            <option value="" disabled selected>Pilih Prodi Anda</option>
                            <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                            <option value="D4 Rekayasa Keamanan Siber">D4 Rekayasa Keamanan Siber</option>
                            <option value="D4 Teknologi Rekayasa Multimedia">D4 Teknologi Rekayasa Multimedia</option>
                            <option value="D4 Akutansi Keuangan Lembaga Syariah">D4 Akutansi Keuangan Lembaga Syariah</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tahun Lulus</label>
                        <input type="number" name="tahun_lulus" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="" disabled selected>Status Anda saat ini</option>
                            <option value="Bekerja">Bekerja</option>
                            <option value="Kuliah">Berkuliah</option>
                            <option value="Tidak Keduanya">Tidak Keduanya</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nama DU/DI</label>
                        <input type="text" name="nama_dudi" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Waktu Tunggu</label>
                        <select name="waktu_tunggu" class="form-select">
                            <option value="" disabled selected>Waktu Tunggu Anda</option>
                            <option value="0-6 Bulan">0-6 Bulan</option>
                            <option value="6-12 Bulan">6-12 Bulan</option>
                            <option value="Lebih dari 1 Tahun">Lebih dari 1 Tahun</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Alamat DU/DI</label>
                        <textarea name="alamat_dudi" cols="30" rows="1" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" id="inputAddress2">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Pendapatan</label>
                        <select name="pendapatan" class="form-select">
                            <option value="" disabled selected>Tuliskan Pendapatan Anda</option>
                            <option value="0 - 500.000">0 - 500.000,-</option>
                            <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                            <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                            <option value="Lebih dari 2juta">Lebih dari 2juta</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <a href="alumni" class="btn btn-secondary">Kembali</a>
                        <button type="submit" name="submit" class="btn btn-simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>