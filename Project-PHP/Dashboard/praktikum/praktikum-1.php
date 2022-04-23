<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header pb-1">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><b>Praktikum 01</b></h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <hr class="mb-3 mt-2">
    <!-- Main content -->
    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Variable User</b></h3>
            </div>
            <div class="card-body pt-2">
                <!-- Variable User -->
                <?php
                // definisikan variable
                $nama = 'Sulthan Raghib Fillah';
                $umur = 21;
                $berat = 59.5;

                echo 'Nama : ' . $nama;
                echo '<br>Umur : ' . $umur . ' Tahun';
                echo '<br>Berat : ' . $berat . ' Kg';

                echo "<br>Hello $nama, Apakabar?";
                ?>
            </div>
            <div class="card-footer">
                Footer
            </div>
        </div>
        <!-- /.card-footer-->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Variable System</b></h3>
            </div>
            <div class="card-body pt-2">
                <!-- Variabel System -->
                <?php
                // variable system
                echo 'Dokumen Root ' . $_SERVER["DOCUMENT_ROOT"];
                echo '<br/>Nama File ' . $_SERVER["PHP_SELF"];
                ?>
            </div>
            <div class="card-footer">
                Footer
            </div>
        </div>
        <!-- /.card-footer-->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Variable Konstanta</b></h3>
            </div>
            <div class="card-body pt-2">
                <!-- Varibale Konstan -->

                <?php
                // definisikan konstanta
                define('PHI', 3.14);
                define('DBNAME', 'Inventori');
                define('DBSERVER', 'Localhost');
                $jari = 2;
                $luas = PHI * $jari * $jari;
                $keliling = 2 * PHI * $jari;
                echo 'Luas Lingkarang dengan Jari ' . $jari . ' : ' . $luas;
                echo '<br>Keliling : ' . $keliling;
                ?>

                <hr>
                <?php
                echo 'Nama Databasenya : ' . DBNAME;
                echo '<br>Lokasi Databasenya : ' . DBSERVER;
                ?>
            </div>
            <div class="card-footer">
                Footer
            </div>
        </div>

        <!-- /.card-footer-->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Array Buah</b></h3>
            </div>
            <div class="card-body pt-2">
                <?php
                $ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];

                // cetak buah ke index ke-3
                echo 'Ini adalah buah ' . $ar_buah[2];

                // cetak jumlah buah
                echo '<br>Jumlah Buah ' . count($ar_buah);

                // cetak seluruh buah
                echo '<ol>';
                foreach ($ar_buah as $buah) {
                    echo '<li>' . $buah . '</li>';
                }
                echo '</ol>';

                // tambahkan buah
                $ar_buah[] = "Durian";

                // hapus buah index ke-1
                unset($ar_buah[1]);

                // ubah buah index ke-2 menjadi manggis
                $ar_buah[2] = "Manggis";

                // cetak seluruh buah dengan indexnya
                echo '<ul>';
                foreach ($ar_buah as $k => $v) {
                    echo '<li> Buah Index - ' . $k . ' adalah ' . $v . '</li>';
                }
                echo '</ul>';
                ?>
            </div>
            <div class="card-footer">
                Footer
            </div>
        </div>

        <!-- /.card-footer-->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Fungsi Sort Array</b></h3>
            </div>
            <div class="card-body pt-2">
                <?php
                $ar_buah = ["P" => "Pepaya", "A" => "Apel", "M" => "Mangga", "J" => "Jambu"];
                echo '<ol>';
                foreach ($ar_buah as $k => $v) {
                    echo '<li>' . $k . ' - ' . $v . '</li>';
                }
                echo '</ol>';
                sort($ar_buah);
                echo '<hr>';
                echo '<ol>';
                foreach ($ar_buah as $k => $v) {
                    echo '<li>' . $k . ' - ' . $v . '</li>';
                }
                echo '</ol>';
                ?>
            </div>
            <div class="card-footer">
                Footer
            </div>
        </div>
        <!-- /.card-footer-->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Fungsi Array Pop</b></h3>
            </div>
            <div class="card-body pt-2">
                <?php
                $tims = ["Erwin", "Heru", "Ali", "Zaki"];
                array_pop($tims);
                foreach ($tims as $person) {
                    echo $person . '<br>';
                }
                ?>
            </div>
            <div class="card-footer">
                Footer
            </div>
        </div>
        <!-- /.card-footer-->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Fungsi Array Push</b></h3>
            </div>
            <div class="card-body pt-2">
                <?php
                $tims = ["Erwin", "Heru", "Ali", "Zaki"];
                array_push($tims, "Wati");
                foreach ($tims as $person) {
                    echo $person . '<br>';
                }
                ?>
            </div>
            <div class="card-footer">
                Footer
            </div>
        </div>
        <!-- /.card-footer-->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Fungsi Array Shift</b></h3>
            </div>
            <div class="card-body pt-2">
                <?php
                $tims = ["Erwin", "Heru", "Ali", "Zaki"];
                array_shift($tims);
                foreach ($tims as $person) {
                    echo $person . '<br>';
                }
                ?>
            </div>
            <div class="card-footer">
                Footer
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Fungsi Array Unshift</b></h3>
            </div>

            <div class="card-body pt-2">
                <?php
                $tims = ["Erwin", "Heru", "Ali", "Zaki"];
                array_unshift($tims, "Joko", "Wati");
                foreach ($tims as $person) {
                    echo $person . '<br>';
                }
                ?>
            </div>
            <div class="card-footer">
                Footer
            </div>
        </div>
        <!-- /.card-footer-->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Array Siswa</b></h3>
            </div>
            <div class="card-body pt-2">
                <?php
                $ns1 = ['ID' => 1, 'NIM' => '01101', 'UTS' => 80, 'UAS' => 84, 'Tugas' => 78];
                $ns2 = ['ID' => 2, 'NIM' => '01102', 'UTS' => 70, 'UAS' => 50, 'Tugas' => 68];
                $ns3 = ['ID' => 3, 'NIM' => '01103', 'UTS' => 60, 'UAS' => 86, 'Tugas' => 70];
                $ns4 = ['ID' => 4, 'NIM' => '01104', 'UTS' => 90, 'UAS' => 91, 'Tugas' => 82];

                $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
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
                            echo '<tr><td>' . $nomor . '</td>';
                            echo '<td>' . $ns['NIM'] . '</td>';
                            echo '<td>' . $ns['UTS'] . '</td>';
                            echo '<td>' . $ns['UAS'] . '</td>';
                            echo '<td>' . $ns['Tugas'] . '</td>';
                            $nilai_akhir = ($ns['UTS'] + $ns['UAS'] + $ns['Tugas']) / 3;
                            echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
                            echo '</tr>';
                            $nomor++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                Footer
            </div>
        </div>
        <!-- /.card-footer-->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Bareng Ka Fiki</b></h3>
            </div>
            <div class="card-body pt-2">
                <!-- <?php
                        // phpinfo();
                        ?> -->

                <?php
                // menampilkan output
                echo 'Hello Rafi銀 <br>';

                // membuat variable user
                $nama = 'Sulthan Raghib Fillah';
                $umur = 21;
                $berat = 59.4;

                echo 'Nama : ' . $nama;
                echo '<br/>Umur : ' . $umur;
                echo '<br/>Berat : ' . $berat;

                // 	membuat variable sistem
                echo '<br/><b>Membuat Variable Sistem</b>';
                echo '<br/>Dokumen Root ' . $_SERVER["DOCUMENT_ROOT"];
                echo '<br/>Nama File ' . $_SERVER["PHP_SELF"];

                // membuat variabel konstant
                // define(nama variabel, isi variabel)
                define(PHI, 3.14);
                define("SURNAME", "Rafi銀");

                $luas = PHI * 8 * 8;
                echo "<br/>Luas Lingkarang : " . $luas;
                echo "<br/>Nama Pemiliknya : " . SURNAME;
                ?>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
        </div>
        <!-- /.card-footer-->
</div>
<!-- /.card -->
</section>
<!-- /.section -->
</div>

<?php
include_once 'footer.php';
?>