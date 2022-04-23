<?php
require_once 'Account.php';

class AccountBank extends Account
{
    protected $customer;
    protected static $biaya_admin = 5500;

    public function __construct($no, $sldo, $cus)
    {
        parent::__construct($no, $sldo);
        $this->customer = $cus;
    }

    public function Transfer($bank_tujuan, $uang)
    {
        $bank_tujuan->Deposit($uang);
        $this->Withdraw($uang);
        $this->Withdraw(self::$biaya_admin);
    }

    public function getCustomer(){
        return $this->customer;
    }

    public function getBiayaAdmin(){
        return self::$biaya_admin;
    }
}
