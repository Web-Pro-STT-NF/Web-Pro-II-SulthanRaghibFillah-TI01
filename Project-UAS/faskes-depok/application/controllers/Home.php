<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$status = $this->session->userdata('role');
    	if(!isset($status)){
      redirect(base_url("Login"));
    }
    $this->load->model('Faskes_model');

		// $status = $this->session->userdata('role');
		//   	if(!isset($status)){
		//     redirect(base_url("Login"));
		//   }

	}

	public function index()
	{
		$data['title'] = 'Faskes Kota Depok';
		$data['totalUser'] = $this->Faskes_model->jumlahUser();
		$data['totalFaskes'] = $this->Faskes_model->jumlahFaskes();
		$data['totalJenisFaskes'] = $this->Faskes_model->jumlahJenisFaskes();
		$data['totalRating'] = $this->Faskes_model->jumlahKomentar();


		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('beranda');
		$this->load->view('_partials/footer');
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */