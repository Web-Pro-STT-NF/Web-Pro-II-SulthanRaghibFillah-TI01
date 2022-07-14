<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faskes_model extends CI_Model
{
   private $table_faskes = 'faskes';

   public function getAllDataFaskes()
   {
      $this->db->select('*');
      $this->db->from('faskes');
      $this->db->join('kecamatan', 'kecamatan.id_kecamatan = faskes.kecamatan_id', 'LEFT');
      $this->db->join('jenis_faskes', 'jenis_faskes.id_faskes = faskes.jenis_id', 'left');
      $query = $this->db->get();

      return $query->result();
   }

   function getKecamatan()
   {
      return $this->db->get('kecamatan')->result_array();
   }

   // buat option otomatis ngambil by=id table jenis_faskes
   public function getJenisFaskes()
   {
      return $this->db->get('jenis_faskes')->result_array();
   }

   public function findFaskesById($id)
   {
      $this->db->join('kecamatan', 'kecamatan.id_kecamatan = faskes.kecamatan_id', 'LEFT');
      $this->db->join('jenis_faskes', 'jenis_faskes.id_faskes = faskes.jenis_id', 'left');

      $query = $this->db->get_where('faskes', array('id' => $id));
      return $query->row();
   }

   // CREATE SAVE
   public function input_data($data, $table)
   {
      $this->db->insert($table, $data);
   }

   // EDIT DATA
   public function edit_data($where, $table)
   {
      return $this->db->get_where($table, $where);
   }

   // UPDATE DATA
   public function update_data($where, $data, $table)
   {
      $this->db->where($where);
      $this->db->update($table, $data);
   }

   // DELETE
   public function deleteFaskes($id)
   {
      $this->db->where('id', $id);
      $this->db->delete('faskes');
   }

   public function upload_foto($array)
   {
      $sql = "UPDATE faskes SET foto=? WHERE id=?";
      $this->db->query($sql, $array);
   }


   // Select keacamatan, kategori from faskes
   public function specificSearch($kecamatan, $kategori) {
      $this->db->join('kecamatan', 'kecamatan.id_kecamatan = faskes.kecamatan_id', 'LEFT');
      $this->db->join('jenis_faskes', 'jenis_faskes.id_faskes = faskes.jenis_id', 'LEFT');
      $this->db->like('nama_kecamatan', $kecamatan, 'before');
      $this->db->like('nama_faskes', $kategori, 'before');
      $query = $this->db->get('faskes');
      return $query->result();
   }

   // Search By Keyword
   public function searchByKeyword() {
      $keyword = $this->input->get('keyword', true);
      $kecamatan = $this->session->userdata('kecamatan');
      $kategori = $this->session->userdata('kategori');
      $this->db->join('kecamatan', 'kecamatan.id_kecamatan = faskes.kecamatan_id', 'LEFT');
      $this->db->join('jenis_faskes', 'jenis_faskes.id_faskes = faskes.jenis_id', 'LEFT');
      $this->db->like('nama', $keyword);
      $this->db->like('nama_kecamatan', $kecamatan);
      $this->db->like('nama_faskes', $kategori);
      $query = $this->db->get('faskes');
      return $query->result();
   }

   public function jumlahUser()
{   
    $query = $this->db->get('users');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

 public function jumlahFaskes()
{   
    $query = $this->db->get('faskes');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

 public function jumlahJenisFaskes()
{   
    $query = $this->db->get('jenis_faskes');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function jumlahKomentar()
{   
    $query = $this->db->get('komentar');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
}
