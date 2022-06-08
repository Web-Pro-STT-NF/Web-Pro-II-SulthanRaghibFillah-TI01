<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up() // up menambahkan kolom field ke tabel mahasiswa
    {
        $this->forge->addField([
            'id'                    => [
                'type'              => 'INT', // type id biasanya INTEGER
                'constraint'        => 11, // constraint adalah besar penyimpanan ata membatasi
                'unsigned'          => true, // unsigned adalah bilangan bulat yang tidak pernah bisa negatif.
                'auto_increment'    => true
            ],
            'nim'                   => [
                'type'              => 'VARCHAR',
                'constraint'        => '30' // constraint milik varchar wajib pakai ''
            ],
            'nama'                  => [
                'type'              => 'VARCHAR',
                'constraint'        => '50'
            ],
            'jenis_kelamin'         => [
                'type'              => 'ENUM', // enum adalah tipe data yg punya pilihan atau tipe data khusus yg memungkinkan variabel menjadi satu set konstanta yg telah ditentukan sebelumnya.
                'constraint'        => "'Laki-Laki', 'Perempuan'"
            ],
            'tmp_lahir'             => [
                'type'              => 'VARCHAR',
                'constraint'        => '20'
            ],
            'tgl_lahir'             => [
                'type'              => 'DATETIME'
            ],
            'program_study'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '30'
            ],
            'ipk'                   => [
                'type'              => 'VARCHAR',
                'constraint'        => '5'
            ],
            'creaeted_at'           => [ //diisi oleh system
                'type'              => 'TIMESTAMP',
                'null'              => true,
                'on update'         => 'NOW()'
            ],
            'update_at'             => [ //diisi oleh system
                'type'              => 'TIMESTAMP',
                'null'              => true,
                'on update'         => 'NOW()'
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('mahasiswa');
    }

    public function down() // menghapus tabel
    {
        $this->forge->dropTable('mahasiswa');
    }
}
