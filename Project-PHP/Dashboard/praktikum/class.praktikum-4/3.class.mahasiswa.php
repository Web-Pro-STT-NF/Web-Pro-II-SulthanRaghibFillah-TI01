<?php
class Mahasiswa
{
    var $nim;
    var $nama;
    var $prodi;
    var $thn_angkatan;
    var $ipk;

    function __construct($_nim, $_nama, $_prodi, $_tahun_angkatan, $_ipk)
    {
        $this->nim = $_nim;
        $this->nama = $_nama;
        $this->prodi = $_prodi;
        $this->thn_angkatan = $_tahun_angkatan;
        $this->ipk = $_ipk;
    }

    public function predikat_ipk()
    {
        if ($this->ipk < 2.0)
            return 'Cukup';
        elseif ($this->ipk >= 2.0 && $this->ipk < 3.0)
            return 'Baik';
        elseif ($this->ipk >= 3.0 && $this->ipk <= 3.75)
            return 'Memuaskan';
        elseif ($this->ipk > 3.75 && $this->ipk <= 4)
            return 'Cum Laude';
    }
}
