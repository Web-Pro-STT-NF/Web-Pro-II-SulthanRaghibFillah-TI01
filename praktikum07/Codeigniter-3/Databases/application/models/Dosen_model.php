<?php
class Dosen_model extends CI_Model
{
    private $table_dosen = 'dosen';
 
    public function getAllData()
    {
        $query = $this->db->get($this->table_dosen);
        return $query->result();
    }
}
