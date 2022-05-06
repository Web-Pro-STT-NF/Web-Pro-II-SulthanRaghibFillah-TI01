<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->model('mahasiswa_model', 'mhs1');
        $this->mhs1->id = 1;
        $this->mhs1->nim = "011022101";
        $this->mhs1->nama = "Faiz Fikri";
        $this->mhs1->jenis_kelamin = "L";
        $this->mhs1->tmp_lahir = "Jakarta";
        $this->mhs1->tgl_lahir = "2001-05-21";
        $this->mhs1->prodi = "Sistem Informasi";
        $this->mhs1->ipk = 3.85;

        $this->load->model('mahasiswa_model', 'mhs2');
        $this->mhs2->id = 2;
        $this->mhs2->nim = "011022102";
        $this->mhs2->nama = "Pandan Wangi";
        $this->mhs2->jenis_kelamin = "P";
        $this->mhs2->tmp_lahir = "Bogor";
        $this->mhs2->tgl_lahir = "2002-09-16";
        $this->mhs2->prodi = "Teknik Informatika";
        $this->mhs2->ipk = 3.35;

        $list_mhs = [$this->mhs1, $this->mhs2];
        $data['list_mhs'] = $list_mhs;

        $title['title'] = 'Mahasiswa';

        $this->load->view('layout/header', $title);
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index');
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $title['title'] = 'Form Mahasiswa';

        $this->load->view('layout/header', $title);
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

        $title['title'] = 'Data Mahasiswa';
        $data['mhs'] = $this->mhs;

        $this->load->view('layout/header', $title);
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/view', $data);
        $this->load->view('layout/footer');
    }
}
