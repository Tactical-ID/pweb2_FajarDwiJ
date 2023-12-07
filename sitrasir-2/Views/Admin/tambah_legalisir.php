<?php
require '../../navbar.php';
?>
<br>
<div class="container">
    <div class="card p-4 shadow">
        <div class="col-40 px-3 py-2">
            <div class="card-body">
                <form action="proseslegalisir" method="post" class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control">
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
                        <label class="form-label">Alasan</label>
                        <textarea name="alasan" cols="30" rows="1" class="form-control"></textarea>
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