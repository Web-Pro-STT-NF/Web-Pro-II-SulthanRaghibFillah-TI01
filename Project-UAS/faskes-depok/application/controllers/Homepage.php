<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

 
    $this->load->model('Faskes_model');
    $this->load->model('Kecamatan_model');
    $this->load->model('Jenis_faskes_model');
    $this->load->model('Komentar_model');
    $this->load->model('Users_model');

		// $status = $this->session->userdata('role');
    // if(!isset($status)){
    //   redirect(base_url("Login"));
    // }
  }

  public function index()
  {

    $data['kecamatan'] = $this->Faskes_model->getKecamatan();
    $data['jenis_faskes'] = $this->Faskes_model->getJenisFaskes();

    $data['title'] = 'SIFASKES';
    $this->load->view('frontend/layout/header', $data);
    $this->load->view('frontend/homepage/index', $data);
    $this->load->view('frontend/layout/footer');
  }

  public function browseAll()
  {
    $data['title'] = 'Browse';
    $this->load->view('frontend/layout/header', $data);
    $this->load->view('frontend/homepage/browseAll', $data);
    $this->load->view('frontend/layout/footer');
  }
}
