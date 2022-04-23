<?php
require_once '1.class.account.php';

class AccountBank extends Accouct{
    public $customer;
    static $biaya_admin = 2500;

    function __construct($no, $sldo, $cstomer)
    {
        parent::__construct($no, $sldo);
        $this->customer = $cstomer;
    }


    public function Transfer($bank_tujuan, $uang){
        $bank_tujuan->Menambah($uang);
        $this->Menarik($uang);
        $this->Menarik(self::$biaya_admin);
    }

    public function Cetak()
    {
        parent::Cetak(); 
        echo 'Customer : ' .$this->customer;
    }

    public function getSaldo(){
        return number_format($this->saldo, 2, ',', '.');
    }
}