<?php
class Pasien
{
    protected $id;
    protected $code_pasien;
    protected $nama_pasien;
    protected $tmp_lahir;
    protected $email;
    protected $jenis_kelamin;

    public function getNamaPasien()
    {
        return $this->nama_pasien;
    }

    public function getJenisKelamin()
    {
        return $this->jenis_kelamin;
    }
    
    public function getCodePasien()
    {
        return $this->code_pasien;
    }

}
