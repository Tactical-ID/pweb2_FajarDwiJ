<?php

include_once '../../Models/legalisir.php';

class legalisircontroller
{
    private $model;

    public function __construct($db)
    {
        $this->model = new legalisir($db);
    }

    public function getlegalisir()
    {
        return $this->model->getlegalisir();
    }

    public function createlegalisir($nama, $prodi, $tahun_lulus, $alasan)
    {
        return $this->model->createlegalisir($nama, $prodi, $tahun_lulus, $alasan);
    }

    public function getlegalisirbyId($id)
    {
        return $this->model->getlegalisirbyId($id);
    }

    public function updatelegalisir($id, $nama, $prodi, $tahun_lulus, $alasan)
    {
        return $this->model->updatelegalisir($id, $nama, $prodi, $tahun_lulus, $alasan);
    }

    public function deletelegalisir($id)
    {
        return $this->model->deletelegalisir($id);
    }
}
