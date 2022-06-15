<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Prodi';

        $this->load->model('Prodi_model', 'prodi');
        $list_prodi = $this->prodi->getAllData();
        $data['list_prodi'] = $list_prodi;

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/index', $data);
        $this->load->view('layout/footer');
    }
}
