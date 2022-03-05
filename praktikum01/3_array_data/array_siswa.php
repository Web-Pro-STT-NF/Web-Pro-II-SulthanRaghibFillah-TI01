
<?php
$ns1 = ['ID'=>1,'NIM'=>'01101','UTS'=>80,'UAS'=>84,'Tugas'=>78];
$ns2 = ['ID'=>2,'NIM'=>'01102','UTS'=>70,'UAS'=>50,'Tugas'=>68];
$ns3 = ['ID'=>3,'NIM'=>'01103','UTS'=>60,'UAS'=>86,'Tugas'=>70];
$ns4 = ['ID'=>4,'NIM'=>'01104','UTS'=>90,'UAS'=>91,'Tugas'=>82];

$ar_nilai = [$ns1,$ns2,$ns3,$ns4];
?>

<h3 style="text-align: center;">Daftar</h3>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
            <th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($ar_nilai as $ns) {
            echo '<tr><td>' .$nomor. '</td>';
            echo '<td>' .$ns['NIM']. '</td>';
            echo '<td>' .$ns['UTS']. '</td>';
            echo '<td>' .$ns['UAS']. '</td>';
            echo '<td>' .$ns['Tugas']. '</td>';
            $nilai_akhir = ($ns['UTS'] + $ns['UAS'] + $ns['Tugas'])/3;
            echo '<td>' .number_format($nilai_akhir, 2, ',', '.'). '</td>';
            echo '</tr>';
            $nomor++;
        }
        ?>
    </tbody>
</table>