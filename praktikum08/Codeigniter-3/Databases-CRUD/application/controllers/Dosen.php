<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dosen';

        $this->load->model('Dosen_model','dosen');
        $list_dosen = $this->dosen->getAllData();
        $data['list_dosen'] = $list_dosen;
        
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['title'] = 'Form Dosen';

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/create');
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $this->load->model('dosen_model', 'dsn');

        $this->dsn->nim = $this->input->POST('nim');
        $this->dsn->nama = $this->input->POST('nama');
        $this->dsn->jenis_kelamin = $this->input->POST('jk');
        $this->dsn->tmp_lahir = $this->input->POST('tmp_lahir');
        $this->dsn->tgl_lahir = $this->input->POST('tgl_lahir');
        $this->dsn->pendidikan_terakhir = $this->input->POST('pend_trakhir');

        $data['title'] = 'Data Dosen';
        $data['dsn'] = $this->dsn;

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/view', $data);
        $this->load->view('layout/footer');
    }
}
