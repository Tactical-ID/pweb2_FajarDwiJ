<?php

class legalisir
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getlegalisir()
    {
        $query = "SELECT * FROM tb_legalisir";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }
    public function createlegalisir($nama, $prodi, $tahun_lulus, $alasan)
    {
        $query = "INSERT INTO tb_legalisir (nama,prodi,tahun_lulus,alasan)
        VALUES('$nama', '$prodi', '$tahun_lulus','$alasan')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getlegalisirbyId($id)
    {
        $query = "SELECT * FROM tb_legalisir where id = $id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updatelegalisir($id, $nama, $prodi, $tahun_lulus, $alasan)
    {
        $query = "UPDATE tb_legalisir set nama = '$nama',prodi = '$prodi', tahun_lulus = '$tahun_lulus',alasan = '$alasan' where id='$id'";

        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deletelegalisir($id)
    {
        $query = "DELETE FROM tb_legalisir where id = '$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
