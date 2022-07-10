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
      // select * from user where username = $id;
      $this->db->where('username', $id);
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

   // public function input_data($data, $table)
   // {
   //    $this->db->insert($table, $data);
   // }

   public function save($data)
   {
      $sql = "INSERT INTO user (id, username, password, email, role, created_at, last_login) VALUES (?, ?, md5(?), ?, ?, ?, ?)";

      $this->db->query($sql, $data);
   }
}
