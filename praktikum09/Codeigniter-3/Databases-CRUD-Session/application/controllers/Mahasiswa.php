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

    public function detail()
    {
        $data['title'] = 'Detail Mahasiswa';

        $this->load->model('Mahasiswa_model', 'mahasiswa');
        $nim = $this->input->get('id');
        $data['mahasiswa'] = $this->mahasiswa->findMasisById($nim);

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/detail', $data);
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
        $this->load->model('mahasiswa_model', 'mahasiswa');

        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $gender = $this->input->post('jk');
        $tmp_lahir = $this->input->post('tmp_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $prodi = $this->input->post('prodi');
        $ipk = $this->input->post('ipk');
        //hidden field
        $idedit = $this->input->post('idedit');

        $data_mhs[] = $nim; // ? 1
        $data_mhs[] = $nama; // ? 2
        $data_mhs[] = $gender; // ? 3
        $data_mhs[] = $tmp_lahir; // ? 4
        $data_mhs[] = $tgl_lahir; // ? 5
        $data_mhs[] = $prodi; // ? 6
        $data_mhs[] = $ipk; // ? 7

        if (isset($idedit)) {
            // update data lama
            $data_mhs[] = $idedit; // ? 8
            $this->mahasiswa->update($data_mhs);
        } else {
            // save data baru
            // panggil fungsi save di model
            $this->mahasiswa->save($data_mhs);
        }

        redirect(base_url() . 'index.php/mahasiswa/detail?id=' . $nim, 'refresh');
    }

    public function edit()
    {
        $this->load->model('mahasiswa_model', 'mahasiswa');

        $id = $this->input->get('id');

        $mhsedit = $this->mahasiswa->findMasisById($id);

        $data['title'] = 'Edit Mahasiswa';
        $data['mhsedit'] = $mhsedit;

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/update', $data);
        $this->load->view('layout/footer');
    }

    public function delete()
    {
        $this->load->model('mahasiswa_model', 'mahasiswa');

        $id = $this->input->get('id');

        $this->mahasiswa->delete($id);

        redirect(base_url() . 'index.php/mahasiswa/index', 'refresh');
    }
}
