<?php
require_once '1.class_lingkaran.php';


echo 'Nilai PHI : ' . Lingkaran::PHI;

$lingkaran1 = new Lingkaran(10);
$lingkaran2 = new Lingkaran(4);

echo '<br>';
echo '<br>Lingkaran 1 dengan Jari-jari 10, Maka diketahui: ';
echo '<br>Luas Lingkaran 1 : ' . $lingkaran1->getLuas();
echo '<br>Keliling Lingkaran 1 : ' .$lingkaran1->getKeliling();

echo '<br>';
echo '<br>Lingkaran 2 dengan Jari-jari 4, Maka diketahui: ';
echo '<br>Luas Lingkaran 2 : ' . $lingkaran2->getLuas();
echo '<br>Keliling Lingkaran 2 : ' .$lingkaran2->getKeliling();