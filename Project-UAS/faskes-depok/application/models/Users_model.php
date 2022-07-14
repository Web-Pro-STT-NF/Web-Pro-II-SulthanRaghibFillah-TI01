<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model
{
   private $table_user = 'users';

   public function getAllDataUsers()
   {
      $this->db->select('*');
      $this->db->from('users');
      $query = $this->db->get();

      return $query->result();
   }

   public function deleteUser($id)
   {
      $this->db->where('id', $id);
      $this->db->delete('users');
   }

   public function findUsersById($id)
   {
      $query = $this->db->get_where('users', array('id' => $id));
      return $query->row();
   }
}