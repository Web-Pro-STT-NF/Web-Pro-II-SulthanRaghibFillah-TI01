<?php
class Account{
    protected $nomor;
    protected $saldo;

    function __construct($no, $sldo)
    {
        $this->nomor = $no;
        $this->saldo = $sldo;
    }

    public function getNomer(){
        return $this->nomor;
    }
    
    public function getSaldo(){
        return $this->saldo;
    }

    public function Deposit($uang)
    {
        $this->saldo = $this->saldo + $uang;
    }

    public function Withdraw($uang)
    {
        $this->saldo = $this->saldo - $uang;
    }

    public function Cetak()
    {
        echo 'No Account : ' . $this->nomor . '<br>';
        echo 'Saldonya : Rp ' . number_format($this->saldo, 2, ',', '.')  . '<br>';
    }
}