<?php
class User_model extends CI_Model
{
   private $table_user = 'user';

   public function getAllData()
   {
      // select * from user;
      $query = $this->db->get($this->table_user);
      return $query->result();
   }

   public function findUserById($id)
   {
      // select * from user where id = $id;
      $this->db->where('id', $id);
      $query = $this->db->get($this->table_user);
      return $query->row();
   }

   public function login($username, $password)
   {
      $sql = "SELECT * FROM user WHERE username=? AND password=MD5(?)";

      $data = [$username, $password];
      $query = $this->db->query($sql, $data);
      return $query->row();
   }
}
