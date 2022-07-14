<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rating_model extends CI_Model
{
   private $table_rating = 'rating';

   public function getAllDataRating()
   {
      $this->db->select('*');
      $this->db->from('nilai_rating');
      $query = $this->db->get();

      return $query->result();
   }
}
