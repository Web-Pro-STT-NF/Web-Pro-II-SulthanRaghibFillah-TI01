<!DOCTYPE html>
<html>

<head>
    <title>DATA BANGUN RUANG</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <style>
        * {
            font-family: "Lucida Console", Monaco, monospace;
        }
    </style>
</body>

</html>

<?php
require_once '2.class_persegi_panjang.php';

echo 'Persegi Panjang dengan Panjang 10, dan Tinggi 5';
$persegi_panjang1 = new Persegi_Panjang(10, 5);
echo '<br>Maka diketahui : <br>';
echo '<br>Keliling Persegi Panjang : ' . $persegi_panjang1->getKeliling();
echo '<br>Luas Persegi Panjang : ' . $persegi_panjang1->getLuas();


echo '<hr>';
echo 'Persegi Panjang dengan Panjang 21, dan Tinggi 7';
$persegi_panjang2 = new Persegi_Panjang(21, 7);
echo '<br>Maka diketahui : <br>';
echo '<br>Keliling Persegi Panjang : ' . $persegi_panjang2->getKeliling();
echo '<br>Luas Persegi Panjang : ' . $persegi_panjang2->getLuas();
