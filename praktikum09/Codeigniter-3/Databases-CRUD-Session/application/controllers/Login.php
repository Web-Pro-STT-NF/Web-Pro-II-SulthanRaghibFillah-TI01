<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $data[''] = '';

        $this->load->view('form/login', $data);
        // data user yang tersedia dalam database
        // username = admin, password=12345, role=ADMIN
        // username = raghib, password=12345, role=ADMIN
        // username = siswa, password=12345, role=MAHASISWA
    }

    public function otentikasi()
    {
        $this->load->model('user_model', 'user');

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $row = $this->user->login($username, $password);
        if (isset($row)) {
            // jika user terdaftar di database 
            $this->session->set_userdata('USERNAME', $row->username);
            $this->session->set_userdata('ROLE', $row->role);
            $this->session->set_userdata('USER', $row);

            redirect(base_url() . 'index.php/mahasiswa/index');
            
        } else {
            // jika user tidak ada (username password salah)
            redirect(base_url() . 'index.php/login?status=gagal');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('ROLE');
        $this->session->unset_userdata('USER');

        redirect(base_url().'index.php/login');
    }
}
