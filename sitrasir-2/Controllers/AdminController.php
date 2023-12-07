<?php

include_once '../../Models/admin.php';

class AdminController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Admin($db);
    }

    public function getPertanyaanAlumni()
    {
        return $this->model->getPertanyaanAlumni();
    }

    public function createPertanyaan($nama, $nim, $prodi, $tahun_lulus, $status, $waktu_tunggu, $nama_dudi, $alamat_dudi, $jabatan, $pendapatan)
    {
        return $this->model->createPertanyaan($nama, $nim, $prodi, $tahun_lulus, $status, $waktu_tunggu, $nama_dudi, $alamat_dudi, $jabatan, $pendapatan);
    }

    public function getAlumnibyId($id)
    {
        return $this->model->getAlumnibyId($id);
    }

    public function updateAlumni($id, $nama, $nim, $prodi, $tahun_lulus, $status, $waktu_tunggu, $nama_dudi, $alamat_dudi, $jabatan, $pendapatan)
    {
        return $this->model->updateAlumni($id, $nama, $nim, $prodi, $tahun_lulus, $status, $waktu_tunggu, $nama_dudi, $alamat_dudi, $jabatan, $pendapatan);
    }

    public function deleteAlumni($id)
    {
        return $this->model->deleteAlumni($id);
    }
}
