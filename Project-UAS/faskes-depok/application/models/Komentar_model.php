<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar_model extends CI_Model
{
   private $table_komentar = 'komentar';

   public function getAllDataKomentar($id)
   {

      $this->db->select('faskes.nama as nama_faskes, komentar.isi, komentar.tanggal, nilai_rating.nama_rating, users.*');
      $this->db->from('komentar');
      $this->db->join('faskes', 'faskes.id = komentar.faskes_id', 'LEFT');
      $this->db->join('users', 'users.id = komentar.users_id', 'LEFT');
      $this->db->join('nilai_rating', 'nilai_rating.id_rating = komentar.nilai_rating_id', 'LEFT');
      $this->db->where('faskes_id', $id);
      $query = $this->db->get();

      return $query->result();
   }

   public function getAllDataKomentarAdmin()
   {

      $this->db->select('id_komentar,faskes.nama as nama_faskes, komentar.isi, komentar.tanggal, nilai_rating.nama_rating, users.*');
      $this->db->from('komentar');
      $this->db->join('faskes', 'faskes.id = komentar.faskes_id', 'LEFT');
      $this->db->join('users', 'users.id = komentar.users_id', 'LEFT');
      $this->db->join('nilai_rating', 'nilai_rating.id_rating = komentar.nilai_rating_id', 'LEFT');
      $query = $this->db->get();

      return $query->result();
   }

   // CREATE SAVE
   public function insertKomentar()
   {
      date_default_timezone_set('Asia/Jakarta');
      $data = [
         'tanggal' => date('Y-m-d'),
         'isi' => $this->input->post('isi', true),
         'users_id' => $this->session->userdata('id_user', true),
         'faskes_id' => $this->session->userdata('faskes_id', true),
         'nilai_rating_id' => $this->input->post('star', true)
      ];
      return $this->db->insert('komentar', $data);
   }

   public function getRating()
   {
      return $this->db->get('nilai_rating')->result_array();
   }

   // DELETE
   public function deleteKomentar($id)
   {
      $this->db->where('id_komentar', $id);
      $this->db->delete('komentar');
   }
}
