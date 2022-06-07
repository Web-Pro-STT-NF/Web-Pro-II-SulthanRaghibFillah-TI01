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

    public function findMasisById($id)
    {
        // select * from mahasiswa where nim = $id;
        $this->db->where('nim', $id);
        $query = $this->db->get($this->table_mahsiswa);
        return $query->row();
    }

    public function save($data)
    {
        // INSERT INTO mahasiswa (nim, nama, gender, tmp_lahir, tgl_lahir, prodi_kode, ipk)
        // VALUES ('0110221004', 'Raghib', 'L', 'Banten', '2001-03-07',' TI', 3.60);
        $sql = "INSERT INTO mahasiswa (nim, nama, gender, tmp_lahir, tgl_lahir, prodi_kode, ipk) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $this->db->query($sql, $data);
    }

    public function predikat()
    {
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
}
