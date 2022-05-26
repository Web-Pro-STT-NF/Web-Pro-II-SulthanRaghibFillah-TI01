<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {
        return view('mahasiswa/form_mahasiswa');
    }

    public function save()
    {
        $data['nim'] = $this->request->getVar('nim');
        $data['nama'] = $this->request->getVar('nama');
        $data['jenis_kelamin'] = $this->request->getVar('jenis_kelamin');
        $data['tmp_lahir'] = $this->request->getVar('tmp_lahir');
        $data['tgl_lahir'] = $this->request->getVar('tgl_lahir');
        $data['prodi'] = $this->request->getVar('prodi');
        $data['ipk'] = $this->request->getVar('ipk');

        return view('mahasiswa/data_mahasiswa', $data);
    }
}
