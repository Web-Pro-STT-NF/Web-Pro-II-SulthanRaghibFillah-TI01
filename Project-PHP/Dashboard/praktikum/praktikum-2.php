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
                    <h1 class="m-0"><b>Praktikum 02</b></h1>
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
        <!-- Nilai Siswa -->
        <div class="row">
            <div class="col-12 bg-primary text-white py-2 mt-2">
                <h4>Sistem Penilaian</h4>
            </div>
        </div>
        <h3 class="mt-2">Form Nilai Siswa</h3>
        <hr>
        <form method="GET" action="praktikum-2.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label text-right">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nama" name="nama" placeholder="Tulis Nama Anda" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="select" class="col-4 col-form-label text-right">Mata Kuliah</label>
                <div class="col-8">
                    <select id="select" name="matkul" class="custom-select">
                        <option value="Mohon Pilih MatKul Anda">Silahkan Pilih</option>
                        <option value="Komunikasi Efektif">Komunikasi Efektif</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="UI/UX">UI/UX</option>
                        <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="PPKn">PPKn</option>
                        <option value="Statisk dan Probabilitas">Statisk dan Probabilitas</option>
                        <option value="B. Inggris">B. Inggris</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-4 col-form-label text-right">Nilai UTS</label>
                <div class="col-3">
                    <input id="number" name="nilai_uts" placeholder="Masukan Nilai" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-4 col-form-label text-right">Nilai UAS</label>
                <div class="col-3">
                    <input id="number" name="nilai_uas" placeholder="Masukan Nilai" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-4 col-form-label text-right">Nilai Tugas/Praktikum</label>
                <div class="col-3">
                    <input id="number" name="nilai_tugas" placeholder="Masukan Nilai" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input type="submit" value="Simpan" name="proses" class="btn-primary px-3 py-1">
                </div>
            </div>
        </form>

        <?php
        $proses = $_GET['proses'];
        $nama_siswa = $_GET['nama'];
        $mata_kuliah = $_GET['matkul'];
        $nilai_uts = $_GET['nilai_uts'];
        $nilai_uas = $_GET['nilai_uas'];
        $nilai_tugas = $_GET['nilai_tugas'];

        echo 'Nama : ' . ucwords($nama_siswa);
        echo '<br>Mata Kuliah : ' . $mata_kuliah;
        echo '<br>Nilai UTS : ' . $nilai_uts;
        echo '<br>Nilai UAS : ' . $nilai_uas;
        echo '<br>Nilai Tugas Praktikum : ' . $nilai_tugas;
        ?>

        <br>
        <br>
        <!-- Form Belanja -->
        <div class="row">
            <div class="col-12 bg-primary text-white py-2 mt-2">
                <h4>Belanja Online</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-8">
                <form method="POST" action="praktikum-2.php">
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="name" name="pembeli" placeholder="Tulis Nama Anda" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inlineCheckbox1" value="TV" name="barang">TV
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inlineCheckbox2" value="Kulkas" name="barang">Kulkas
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inlineCheckbox2" value="Mesin Cuci" name="barang">Mesin Cuci
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="name" name="jumlah" placeholder="Jumlah Barang" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <input type="submit" value="Bayar" name="bayar" class="btn-primary px-3 py-1">
                        </div>
                    </div>
                </form>
                <?php

                $proses = $_POST['bayar'];
                $customer = $_POST['pembeli'];
                $produk = $_POST['barang'];
                $jumlah = $_POST['jumlah'];

                echo 'Nama Pembeli : ' . ucwords($customer);
                echo '<br>Produk Pilihan : ' . $produk;
                echo '<br>Jumlah Beli : ' . $jumlah;

                if ($produk == "TV") {
                    $total_belanja = $jumlah * 4200000;
                } elseif ($produk == "Kulkas") {
                    $total_belanja = $jumlah * 3100000;
                } elseif ($produk == "Mesin Cuci") {
                    $total_belanja = $jumlah * 3800000;
                }
                echo '<br>Total Belanja : Rp. ' . number_format($total_belanja, 0, ',', '.');

                ?>

            </div>

            <div class="col-md-4 mt-3">
                <div class="list-group">
                    <p class="list-group-item list-group-item-action active mb-0">Daftar Harga</p>
                    <div class="list-group-item">
                        TV : Rp. 4.200.000,-
                    </div>
                    <div class="list-group-item">
                        Kulkas : Rp. 3.100.000,-
                    </div>
                    <div class="list-group-item">
                        Mesin Cuci : Rp. 3.800.000,-
                    </div>
                    <p class="list-group-item list-group-item-action active">Harga Dapat Berubah Setiap Saat</p>
                </div>
            </div>
        </div>

        <br>
        <br>
        <!-- Nilai Siswa -->
        <div class="row">
            <div class="col-12 bg-primary text-white py-2">
                <h4>Sistem Penilaian</h4>
            </div>
        </div>
        <h3 class="mt-2">Form Nilai Siswa</h3>
        <hr>
        <form method="POST" action="praktikum-2.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label text-right">Nama Lengkap</label>
                <div class="col-3">
                    <input id="nama" name="nama" placeholder="Tulis Nama Anda" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="select" class="col-4 col-form-label text-right">Mata Kuliah</label>
                <div class="col-8">
                    <select id="select" name="matkul" class="custom-select">
                        <option value="Mohon Pilih MatKul Anda">Silahkan Pilih</option>
                        <option value="Komunikasi Efektif">Komunikasi Efektif</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="UI/UX">UI/UX</option>
                        <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="PPKn">PPKn</option>
                        <option value="Statisk dan Probabilitas">Statisk dan Probabilitas</option>
                        <option value="B. Inggris">B. Inggris</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-4 col-form-label text-right">Nilai UTS</label>
                <div class="col-3">
                    <input id="number" name="nilai_uts" placeholder="Masukan Nilai" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-4 col-form-label text-right">Nilai UAS</label>
                <div class="col-3">
                    <input id="number" name="nilai_uas" placeholder="Masukan Nilai" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-4 col-form-label text-right">Nilai Tugas/Praktikum</label>
                <div class="col-3">
                    <input id="number" name="nilai_tugas" placeholder="Masukan Nilai" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input type="submit" value="Simpan" name="proses" class="btn-primary px-3 py-1">
                </div>
            </div>
        </form>

        <?php
        $proses = $_POST['proses'];
        $nama_siswa = $_POST['nama'];
        $mata_kuliah = $_POST['matkul'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];
        $nilai_tugas = $_POST['nilai_tugas'];

        if (!empty($proses)) {
            echo 'Nama : ' . ucwords($nama_siswa);
            echo '<br>Mata Kuliah : ' . $mata_kuliah;
            echo '<br>Nilai UTS : ' . $nilai_uts;
            echo '<br>Nilai UAS : ' . $nilai_uas;
            echo '<br>Nilai Tugas Praktikum : ' . $nilai_tugas;

            echo '<hr>';
            $hasil_uts =  $nilai_uts * 30 / 100;
            $hasil_uas = $nilai_uas * 35 / 100;
            $hasil_tugas = $nilai_tugas * 35 / 100;
            $total_nilai = $hasil_tugas + $hasil_uas + $hasil_uts;

            echo 'Total Nilai Anda : ' . $total_nilai;
            if ($total_nilai  > 55) {
                echo '<br><b>"Selamat Anda Dinyatakan Lulus"';
            } else {
                echo ',<br><b>"Maaf Anda Tidak Lulus"';
            }

            $grade_I = $total_nilai > 100;
            $grade_A = $total_nilai >= 85;
            $grade_B = $total_nilai >= 70;
            $grade_C = $total_nilai >= 56;
            $grade_D = $total_nilai >= 36;
            $grade_E = $total_nilai >= 0;
            if ($grade_I) {
                echo '<br>Grade : I';
            } elseif ($grade_A) {
                echo '<br>Dengan Grade : A';
            } elseif ($grade_B) {
                echo '<br>Dengan Grade : B';
            } elseif ($grade_C) {
                echo '<br>Dengan Grade : C';
            } elseif ($grade_D) {
                echo '<br>Dengan Grade : D';
            } elseif ($grade_E) {
                echo '<br>Dengan Grade : E';
            } else {
                echo '<br>Grade : I';
            }

            switch (true) {
                case ($grade_I):
                    echo '<br>Predikat : Tidak Ada';
                    break;
                case ($grade_A):
                    echo '<br>Dengan Predikat : Sangat Memuaskan';
                    break;
                case ($grade_B):
                    echo '<br>Dengan Predikat : Memuaskan';
                    break;
                case ($grade_C):
                    echo '<br>Dengan Predikat : Cukup';
                    break;
                case ($grade_D):
                    echo '<br>Dengan Predikat : Kurang';
                    break;
                case ($grade_E):
                    echo '<br>Dengan Predikat : Sangat Kurang';
                    break;
                default:
                    echo '<br>Tidak Ada';
            }
        }
        ?>
        </b>

    </section>
    <!-- /.section -->
</div>

<?php
include_once 'footer.php';
?>