<?php
class Persegi_Panjang
{
    private $panjang;
    private $tinggi;

    function __construct($p, $t)
    {
        $this->panjang = $p;
        $this->tinggi = $t;
    }


    public function getLuas()
    {
        return $this->panjang * $this->tinggi;
    }


    public function getKeliling()
    {
        return 2 * ($this->panjang + $this->tinggi);
    }
}
