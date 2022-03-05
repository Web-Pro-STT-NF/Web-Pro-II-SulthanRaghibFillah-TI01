<?php
$ar_buah = ["Pepaya","Mangga","Pisang","Jambu"];

// cetak buah ke index ke-3
echo 'Ini adalah buah ' .$ar_buah[2];

// cetak jumlah buah
echo '<br>Jumlah Buah ' .count($ar_buah);

// cetak seluruh buah
echo '<ol>';
foreach ($ar_buah as $buah) {
    echo '<li>' .$buah. '</li>';
}
echo '</ol>';

// tambahkan buah
$ar_buah[]="Durian";

// hapus buah index ke-1
unset($ar_buah[1]);

// ubah buah index ke-2 menjadi manggis
$ar_buah[2]="Manggis";

// cetak seluruh buah dengan indexnya
echo '<ul>';
foreach ($ar_buah as $k => $v) {
    echo '<li> Buah Index - ' .$k. ' adalah ' .$v. '</li>';
}
echo '</ul>';
