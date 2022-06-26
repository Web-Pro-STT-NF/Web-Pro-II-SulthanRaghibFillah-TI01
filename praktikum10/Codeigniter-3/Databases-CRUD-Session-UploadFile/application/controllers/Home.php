<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
   public function index()
   {
      $this->load->model('Mahasiswa_model', 'mahasiswa');
      $list_mahasiswa = $this->mahasiswa->getAllData();
      $data['masis'] = $list_mahasiswa;

      $this->load->view('home/index',$data);
   }
}
