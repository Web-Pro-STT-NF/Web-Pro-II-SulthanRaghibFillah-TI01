<?php
class Mahasiswa_model extends CI_Model
{
    private $table_mahsiswa = 'mahasiswa';

    public function getAllData()
    {
        // select * from mahasiswa;
        $query = $this->db->get($this->table_mahsiswa);
        return $query->result();
    }

    public function predikat()
    {
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
}
