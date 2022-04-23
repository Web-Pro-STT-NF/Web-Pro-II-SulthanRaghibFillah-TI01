<?php
require_once 'class.BMI.php';
require_once 'class.pasien.php';

class BMIPasien extends Pasien
{
    use BMI;

    protected $tanggal;

    public function __construct($nm, $jk, $tgl, $bb, $tb)
    {
        $this->nama_pasien = $nm;
        $this->jenis_kelamin = $jk;
        $this->tanggal = $tgl;
        $this->berat_badan = $bb;
        $this->tinggi_badan = $tb;
    }

    public function getTanggal()
    {
        return $this->tanggal;
    }
}
