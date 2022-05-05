<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $title['title'] = 'Dashboard';

        $this->load->view('layout/header', $title);
        $this->load->view('layout/sidebar');
        $this->load->view('dashboard/index');
        $this->load->view('layout/footer');
    }
}
