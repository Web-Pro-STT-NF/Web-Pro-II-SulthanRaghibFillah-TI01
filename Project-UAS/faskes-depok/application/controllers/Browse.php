<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Browse extends CI_Controller
{
  public function __construct() {
    parent::__construct();
    $this->load->model('Faskes_model');
    $this->load->model('Kecamatan_model');
    $this->load->model('Jenis_faskes_model');
    $this->load->model('Komentar_model');
    $this->load->model('Users_model');
  }

  public function index() { // UNUSED
    if(base_url(uri_string()) == 'http://127.0.0.1/proyek-faskes-depok/project_faskes/browse') {
      redirect('browse/search?kecamatan=&kategori=&submit=');
    }
  }

  public function search() {

    $data['kecamatan'] = $this->Faskes_model->getKecamatan();
		$data['jenis_faskes'] = $this->Faskes_model->getJenisFaskes();

    $data['title'] = 'SIFASKES';
    $kecamatan = $this->input->get('kecamatan', true);
    $kategori = $this->input->get('kategori', true);
    $data['faskes'] = $this->Faskes_model->specificSearch($kecamatan, $kategori);
    
    if ($kecamatan == '') {
      $data['kecamatanAll'] = 'Depok';
    }
    if($kategori == '') {
      $data['kategoriAll'] = 'Faskes';
    }
    
    $this->session->set_userdata(['kecamatan' => $kecamatan, 'kategori' => $kategori]);

    $this->load->view('frontend/layout/header', $data);
    $this->load->view('frontend/layout/search-card', $data);
    $this->load->view('frontend/layout/search-modal', $data);
    $this->load->view('frontend/layout/searchbox', $data);
    $this->load->view('frontend/browse/search', $data);
    $this->load->view('frontend/layout/footer');
  }
  
  public function searchBox() {

    $data['kecamatan'] = $this->Faskes_model->getKecamatan();
		$data['jenis_faskes'] = $this->Faskes_model->getJenisFaskes();

    $data['title'] = 'SIFASKES';
    $data['faskes'] = $this->Faskes_model->getAllDataFaskes();
    if($this->input->get('keyword')) {
      $data['faskes'] = $this->Faskes_model->searchByKeyword();
    }
    
    $kecamatan = $this->session->userdata('kecamatan');
    $kategori = $this->session->userdata('kategori');

    if($this->input->get('keyword') == null) {
      $this->session->unset_userdata('kecamatan');
      $this->session->unset_userdata('kategori');
      redirect(base_url() . 'browse/search?kecamatan=&kategori=');
    }
    
    $data['checksess'] = $this->session->all_userdata();

    $this->load->view('frontend/layout/header', $data);
    $this->load->view('frontend/layout/search-card', $data);
    $this->load->view('frontend/layout/search-modal', $data);
    $this->load->view('frontend/layout/searchbox', $data);
    $this->load->view('frontend/browse/searchbox-result', $data);
    $this->load->view('frontend/layout/footer');
  }
  
  public function detail($id) {
    $data['title'] = 'SIFASKES';
    $this->session->set_userdata('faskes_id', $id);
    $data['faskes'] = $this->Faskes_model->findFaskesById($id);
    $data['komentar'] = $this->Komentar_model->getAllDataKomentar($id);
    $data['nilai_rating'] = $this->Komentar_model->getRating();
    $this->load->view('frontend/layout/header', $data);
    $this->load->view('frontend/browse/detail', $data);
    $this->load->view('frontend/layout/footer');
  }
  
  public function komentar() {
    $data['title'] = 'SIFASKES';
    $data['comments'] = $this->Komentar_model->insertKomentar();
    redirect('browse/detail/'.$this->session->userdata('faskes_id'));
  }
}