<?php

class Admin
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getPertanyaanAlumni()
    {
        $query = "SELECT * FROM pertanyaan_alumni";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createPertanyaan($nama, $nim, $prodi, $tahun_lulus, $status, $waktu_tunggu, $nama_dudi, $alamat_dudi, $jabatan, $pendapatan)
    {
        $query = "INSERT INTO pertanyaan_alumni (nama, nim, prodi,tahun_lulus,status,waktu_tunggu,nama_dudi,alamat_dudi,jabatan,pendapatan)
        VALUES('$nama', '$nim', '$prodi', '$tahun_lulus', '$status', '$waktu_tunggu', '$nama_dudi', '$alamat_dudi', '$jabatan', '$pendapatan')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getAlumnibyId($id)
    {
        $query = "SELECT * FROM pertanyaan_alumni where id = $id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateAlumni($id, $nama, $nim, $prodi, $tahun_lulus, $status, $waktu_tunggu, $nama_dudi, $alamat_dudi, $jabatan, $pendapatan)
    {
        $query = "UPDATE pertanyaan_alumni set nama = '$nama', nim = '$nim', prodi = '$prodi', tahun_lulus = '$tahun_lulus', status = '$status', waktu_tunggu = '$waktu_tunggu', nama_dudi = '$nama_dudi', alamat_dudi = '$alamat_dudi', jabatan = '$jabatan', pendapatan = '$pendapatan' where id='$id'";

        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteAlumni($id)
    {
        $query = "DELETE FROM pertanyaan_alumni where id = '$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
