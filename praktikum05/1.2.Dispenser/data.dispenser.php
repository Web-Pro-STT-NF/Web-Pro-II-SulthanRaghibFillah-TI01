<?php
require_once 'class.dispenser.php';

$penjual = new Dispenser("Big Cola", "");
echo '<b>Mesin penjual : ' . $penjual->nama_muniman;
echo '<br>Memiliki kapasitas Volume Galon sebesar : ' . number_format($penjual->getVolume()) . 'ml</b>';
echo "<br>";
echo "<br>";

$pembeli1 = new Pembeli('Rafii', 5, 'Big Cola');
echo $pembeli1->getStrukPenjualan();
echo "<br>";
echo "<br>";
$pembeli2 = new Pembeli('Yuuki', 2, 'Big Cola');
echo $pembeli2->getStrukPenjualan();
echo "<br>";
echo "<br>";
$pembeli3 = new Pembeli('Raghib', 4, 'Big Cola');
echo $pembeli3->getStrukPenjualan();
echo "<br>";
echo "<br>";
echo Pembeli::tambahVolume(1000);
