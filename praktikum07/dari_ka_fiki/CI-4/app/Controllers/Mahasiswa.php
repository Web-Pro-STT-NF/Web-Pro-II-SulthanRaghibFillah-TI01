<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function index()
    {
        // membuat object model mahasiswa
        $this->mhs1 = new MahasiswaModel();
        $this->mhs2 = new MahasiswaModel();
        $this->mhs3 = new MahasiswaModel();

        // memberikan nilai kepada object
        $this->mhs1->id = 1;
        $this->mhs1->nama = "Sulthan Raghib Fillah";
        $this->mhs1->nim = "0110221007";
        $this->mhs1->gender = "L";
        $this->mhs1->tmp_lahir = "Cilegon";
        $this->mhs1->tgl_lahir = "01 Januari 2000";
        $this->mhs1->ipk = 3.85;

        $this->mhs2->id = 2;
        $this->mhs2->nama = "Dika Muharman";
        $this->mhs2->nim = "0110221001";
        $this->mhs2->gender = "L";
        $this->mhs2->tmp_lahir = "Cirebon";
        $this->mhs2->tgl_lahir = "02 Januari 2001";
        $this->mhs2->ipk = 3.25;

        $this->mhs3->id = 3;
        $this->mhs3->nama = "Layla Munaroh";
        $this->mhs3->nim = "0110221002";
        $this->mhs3->gender = "P";
        $this->mhs3->tmp_lahir = "Cisaat";
        $this->mhs3->tgl_lahir = "03 Januari 2002";
        $this->mhs3->ipk = 2.85;

        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
        $data['list_mhs'] = $list_mhs;

        // return sebuah view dan mengirimkan sebuah data array
        return view('mahasiswa/index', $data);
    }
}
