<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nim'           => '0110221007',
                'nama'          => 'Sulthan Raghib Fillah',
                'Jenis_kelamin' => 'Laki-Laki',
                'tmp_lahir'     => 'Cilegon',
                'tgl_lahir'     => '2000-12-12',
                'program_study' => 'Teknik Informatika',
                'ipk'           => '3.93',
                'created_at'    => Time::now()
            ],
            [
                'nim'           => '0110211001',
                'nama'          => 'Fiki Alamsyah',
                'Jenis_kelamin' => 'Laki-Laki',
                'tmp_lahir'     => 'Cirebon',
                'tgl_lahir'     => '2001-01-01',
                'program_study' => 'Teknik Informatika',
                'ipk'           => '3.8',
                'created_at'    => Time::now()
            ],
        ];

        $this->db->table('mahasiswa')->insertBatch($data);
    }
}
