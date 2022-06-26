<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard-CI';

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('dashboard/index');
        $this->load->view('layout/footer');
    }

    public function adminlte()
    {
        $data['title'] = 'Dashboard-AdminLTE';

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('dashboard/adminlte');
        $this->load->view('layout/footer');
    }
}
