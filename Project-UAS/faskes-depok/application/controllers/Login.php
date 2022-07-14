<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$data['title'] = 'Login Faskes';
		
		$this->load->view('_partials/header', $data);
		$this->load->view('login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'username' => $username,
			'password' => md5($password)
			);
	$hasil = $this->Login_model->cek_login($data);
	if ($hasil->num_rows() == 1) {

		foreach ($hasil->result() as $sess) {
		$sess_data['logged_in'] = 'Sudah Login';
		$sess_data['username'] = $sess->username;
		$sess_data['role'] = $sess->role;
		$sess_data['id_user'] = $sess->id;
		$this->session->set_userdata($sess_data);
		}
	$status = $this->session->userdata('role');
	if ($status == 'administrator') 
		{
			$this->session->set_flashdata('sukses', ' ');
			redirect(base_url("Home"));
		}elseif ($status == 'public') {
			$this->session->set_flashdata('sukses', ' ');
			redirect(base_url("Homepage"));
		}
	} else {
		$this->session->set_flashdata('login_gagal', 'Username atau Password salah');
		redirect(base_url('Login'));
	} 
}
	

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}

	public function register(){
		$this->load->view('_partials/header');
		$this->load->view('register');
	}

	public function tambah_register()
	{
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = array(
			'username' => $username,
			'email' => $email,
			'password' => md5($password),
			'status' => 1,
			'role' => 'public'
			
			);

		$this->Login_model->tambah_data($data, 'users');
		$this->session->set_flashdata('sukses', ' ');
		redirect(base_url('Login/register'));
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */