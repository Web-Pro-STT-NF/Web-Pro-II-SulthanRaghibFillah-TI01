<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Mahasiswa';

        $this->load->model('Mahasiswa_model', 'mahasiswa');
        $list_mahasiswa = $this->mahasiswa->getAllData();
        $data['list_mahasiswa'] = $list_mahasiswa;

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['title'] = 'Form Mahasiswa';

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/create');
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $this->load->model('mahasiswa_model', 'mhs');

        $this->mhs->nim = $this->input->POST('nim');
        $this->mhs->nama = $this->input->POST('nama');
        $this->mhs->jenis_kelamin = $this->input->POST('jk');
        $this->mhs->tmp_lahir = $this->input->POST('tmp_lahir');
        $this->mhs->tgl_lahir = $this->input->POST('tgl_lahir');
        $this->mhs->prodi = $this->input->POST('prodi');
        $this->mhs->ipk = $this->input->POST('ipk');

        $data['title'] = 'Data Mahasiswa';
        $data['mhs'] = $this->mhs;

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/view', $data);
        $this->load->view('layout/footer');
    }
}
