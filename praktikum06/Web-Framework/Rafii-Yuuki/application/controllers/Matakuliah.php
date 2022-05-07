<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->model('matakuliah_model', 'mk1');
        $this->mk1->id = 1;
        $this->mk1->matkul = "Komunikasi Efektif";
        $this->mk1->sks = "2";
        $this->mk1->kode = "1";
        $this->mk1->dosen_pengajar = "Aqil Wilda Arief, S.T., M.Kesos.";

        $this->load->model('matakuliah_model', 'mk2');
        $this->mk2->id = 2;
        $this->mk2->matkul = "Jaringan Komputer";
        $this->mk2->sks = "3";
        $this->mk2->kode = "2";
        $this->mk2->dosen_pengajar = "Dr. Lukman Rosyidi, S.T., M.M., M.T.";

        $this->load->model('matakuliah_model', 'mk3');
        $this->mk3->id = 3;
        $this->mk3->matkul = "User Interface & User Experience";
        $this->mk3->sks = "3";
        $this->mk3->kode = "3";
        $this->mk3->dosen_pengajar = "Tifani Nabarian, S.Kom., M.T.I";

        $this->load->model('matakuliah_model', 'mk4');
        $this->mk4->id = 4;
        $this->mk4->matkul = "Pemrograman Web ";
        $this->mk4->sks = "3";
        $this->mk4->kode = "4";
        $this->mk4->dosen_pengajar = "Sirojul Munir, S.Si., M.Kom.";

        $this->load->model('matakuliah_model', 'mk5');
        $this->mk5->id = 5;
        $this->mk5->matkul = "Statistik & Probabilitas";
        $this->mk5->sks = "2";
        $this->mk5->kode = "5";
        $this->mk5->dosen_pengajar = "Ahmad Rio Adriansyah, S.Si., M.Si.";

        $list_mk = [$this->mk1, $this->mk2, $this->mk3, $this->mk4, $this->mk5];

        $data['list_mk'] = $list_mk;
        $title['title'] = 'Matakuliah';

        $this->load->view('layout/header', $title);
        $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $title['title'] = 'Form Matakuliah';

        $this->load->view('layout/header', $title);
        $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/create');
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $this->load->model('matakuliah_model', 'mk');

        $this->mk->matakuliah = $this->input->POST('matkul');
        $this->mk->sks = $this->input->POST('sks');
        $this->mk->kode = $this->input->POST('kode');
        $this->mk->dosen_pengajar = $this->input->POST('dosen_pengajar');

        $title['title'] = 'Data Matakuliah';
        $data['mk'] = $this->mk;

        $this->load->view('layout/header', $title);
        $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/view', $data);
        $this->load->view('layout/footer');
    }
}
