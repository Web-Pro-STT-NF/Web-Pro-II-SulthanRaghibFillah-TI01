<?php
class Mahasiswa_model extends CI_Model
{
    public $id;
    public $nim;
    public $nama;
    public $jenis_kelamin;
    public $prodi;
    public $tmp_lahir;
    public $tgl_lahir;
    public $ipk;

    public function predikat()
    {
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
}
