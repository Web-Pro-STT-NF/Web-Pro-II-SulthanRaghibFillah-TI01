<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $useTimestamp = true;
    protected $allowedFields = ['id', 'nim', 'nama', 'jenis_kelamin', 'tmp_lahir', 'tgl_lahir', 'program_study', 'ipk'];
}
