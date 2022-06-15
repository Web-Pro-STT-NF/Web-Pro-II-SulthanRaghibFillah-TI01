<?php
class Prodi_model extends CI_Model
{
    private $table_prodi = 'prodi';

    public function getAllData()
    {
        // select * from prodi;
        $query = $this->db->get($this->table_prodi);
        return $query->result();
    }
}
