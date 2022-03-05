<!-- <?php
// phpinfo();
?> -->

<?php
// menampilkan output
echo 'Hello Rafi銀';

// membuat variable user
    $nama = 'Sulthan Raghib Fillah';
    $umur = 21;
    $berat = 59.4;
    
  echo 'Nama : ' .$nama;
  echo '<br/>Umur : ' .$umur;
    echo '<br/>Berat : ' .$berat;
    
// 	membuat variable sistem
echo '<br>';
echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
echo '<br/>Nama File '.$_SERVER["PHP_SELF"];

// membuat variabel konstant
// define(nama variabel, isi variabel)
define("PHI", 3.14);
define("SURNAME", "Rafi銀");

$luas = PHI * 8 * 8;
echo "Luas Lingkarang : " .$luas;
echo "Nama Pemiliknya : " .SURNAME;
?>
