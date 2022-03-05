<?php
// definisikan konstanta
define('PHI', 3.14);
define('DBNAME', 'Inventori');
define('DBSERVER', 'Localhost');

$jari = 2;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI *$jari;

echo 'Luas Lingkarang dengan Jari '.$jari.' : '.$luas;
echo '<br>Keliling : '.$keliling;
?>

<hr>
<?php
echo 'Nama Databasenya : '.DBNAME;
echo '<br>Lokasi Databasenya : '.DBSERVER;
?>