<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->model('dosen_model', 'dosen1');
        $this->dosen1->id = 1;
        $this->dosen1->nidn = "011022101";
        $this->dosen1->nama = "Aqil Wilda Arief, S.T., M.Kesos.";
        $this->dosen1->jenis_kelamin = "L";
        $this->dosen1->tmp_lahir = "Jakarta";
        $this->dosen1->tgl_lahir = "1985-05-21";
        $this->dosen1->pendidikan_terakhir = "Magister (S2)";

        $this->load->model('dosen_model', 'dosen2');
        $this->dosen2->id = 2;
        $this->dosen2->nidn = "011022102";
        $this->dosen2->nama = "Dr. Lukman Rosyidi, S.T., M.M., M.T.";
        $this->dosen2->jenis_kelamin = "L";
        $this->dosen2->tmp_lahir = "Jakarta";
        $this->dosen2->tgl_lahir = "1985-05-21";
        $this->dosen2->pendidikan_terakhir = "Magister (S2)";

        $this->load->model('dosen_model', 'dosen3');
        $this->dosen3->id = 3;
        $this->dosen3->nidn = "011022103";
        $this->dosen3->nama = "Tifani Nabarian, S.Kom., M.T.I.";
        $this->dosen3->jenis_kelamin = "P";
        $this->dosen3->tmp_lahir = "Jakarta";
        $this->dosen3->tgl_lahir = "1985-05-21";
        $this->dosen3->pendidikan_terakhir = "Magister (S2)";

        $this->load->model('dosen_model', 'dosen4');
        $this->dosen4->id = 4;
        $this->dosen4->nidn = "011022104";
        $this->dosen4->nama = "Sirojul Munir, S.Si., M.Kom.";
        $this->dosen4->jenis_kelamin = "L";
        $this->dosen4->tmp_lahir = "Jakarta";
        $this->dosen4->tgl_lahir = "1985-05-21";
        $this->dosen4->pendidikan_terakhir = "Magister (S2)";

        $this->load->model('dosen_model', 'dosen5');
        $this->dosen5->id = 5;
        $this->dosen5->nidn = "011022105";
        $this->dosen5->nama = "Ahmad Rio Adriansyah, S.Si., M.Si.";
        $this->dosen5->jenis_kelamin = "L";
        $this->dosen5->tmp_lahir = "Jakarta";
        $this->dosen5->tgl_lahir = "1985-05-21";
        $this->dosen5->pendidikan_terakhir = "Magister (S2)";

        $list_dsn = [$this->dosen1, $this->dosen2, $this->dosen3, $this->dosen4, $this->dosen5];
        
        $data['list_dsn'] = $list_dsn;
        $data['title'] = 'Dosen';

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
