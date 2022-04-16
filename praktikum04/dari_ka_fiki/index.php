<?php
require_once "Kucing.php";

// membuat objek / instance objek kucing
$garfield = new Kucing("Garfield", 5, "Oren");
$bolang = new Kucing("Bolang", 10, "Belang hitam");

// echo $garfield->nama, "<br>";

echo $garfield->makan(), "<br>";
echo $garfield->tidur(), "<br>";
echo $garfield->lari(), "<br>";

echo $bolang->makan(), "<br>";
echo $bolang->tidur(), "<br>";
echo $bolang->lari();
