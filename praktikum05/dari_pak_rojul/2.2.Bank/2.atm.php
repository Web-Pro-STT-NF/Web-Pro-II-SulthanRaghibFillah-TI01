<?php
require_once '1.class.account.php';

$cs1 = new Accouct("P001", 506000);
$cs2 = new Accouct("P002", 450000);

$cs1->Cetak();
$cs1->Menambah(500000);
echo 'Menabung 500000 <br>';
$cs1->Cetak();
