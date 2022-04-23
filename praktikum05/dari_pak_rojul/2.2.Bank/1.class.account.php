<?php
class Accouct
{
    public $nomor;
    protected $saldo;

    function __construct($no, $sldo)
    {
        $this->nomor = $no;
        $this->saldo = $sldo;
    }

    public function Menambah($uang)
    {
        $this->saldo = $this->saldo + $uang;
    }

    public function Menarik($uang)
    {
        $this->saldo = $this->saldo - $uang;
    }
    


    public function Cetak()
    {
        echo 'Nomor Account : ' . $this->nomor . '<br>';
        echo 'Saldonya : Rp ' . number_format($this->saldo, 2, ',', '.')  . '<br>';
    }
}
