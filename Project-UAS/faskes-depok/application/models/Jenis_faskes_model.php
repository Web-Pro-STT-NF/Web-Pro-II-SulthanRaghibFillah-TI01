<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_faskes_model extends CI_Model
{
   private $table_jenis_faskes = 'jenis_faskes';

   public function getAllDataJenisFaskes()
   {
      $this->db->select('*');
      $this->db->from('jenis_faskes');
      $query = $this->db->get();

      return $query->result();
   }

   // CREATE
   public function input_data($data, $table)
   {
      $this->db->insert($table, $data);
   }

   // DELETE
   public function deleteJenisFaskes($id, $table)
   {
      $this->db->where($id);
      $this->db->delete($table);
   }

}