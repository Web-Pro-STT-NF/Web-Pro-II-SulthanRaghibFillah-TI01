<?php
class Mahasiswa_model extends CI_Model
{
    private $table = 'mahasiswa';

    public function getAllData()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function predikat()
    {
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
}
