<?php
class Nilai_Mahasiswa
{
    var $nim;
    var $nama;
    var $pilih_mk;
    var $nilai;


    function __construct($_nama, $_nim, $_pilih_mk, $_nilai)
    {
        $this->nim = $_nim;
        $this->nama = $_nama;
        $this->pilih_mk = $_pilih_mk;
        $this->nilai = $_nilai;
    }


    public function Cetak()
    {
        echo 'NIM : <b>' . $this->nim . '</b>';
        echo '<br>Nama : <b>' . ucwords($this->nama) . '</b>';
        echo '<br>Mata Kuliah : <b>' . $this->pilih_mk . '</b>';
        echo '<br>Nilai Ujian Anda : <b>' . $this->nilai . '</b>';
    }


    public function CetakGradeUjian()
    {
        if ($this->nilai >= 0 && $this->nilai <= 35)
            return '<b>"E"</b>';
        elseif ($this->nilai >= 36 && $this->nilai <= 55)
            return '<b>"D"</b>';
        elseif ($this->nilai >= 56 && $this->nilai <= 69)
            return '<b>"C"</b>';
        elseif ($this->nilai >= 70 && $this->nilai <= 84)
            return '<b>"B"</b>';
        elseif ($this->nilai >= 85 && $this->nilai <= 100)
            return '<b>"A"</b>';
        else return '<b>"Tidak Ada"</b>';
    }


    public function CetakHasilUjian()
    {
        if ($this->nilai >= 0 && $this->nilai <= 55)
            return '<b>"ANDA TIDAK LULUS!!"</b>';
        elseif ($this->nilai >= 56 && $this->nilai <= 100)
            return '<b>"SELAMAT ANDA LULUS"</b>';
        else return '<b>"PARAMETER TIDAK VALID"</b>';
    }

}
