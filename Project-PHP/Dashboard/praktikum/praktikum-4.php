<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Bootstrap5 ICON -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<!-- LINK FONT -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header pb-1">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><b>Praktikum 04</b></h1>
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
    <hr class="mb-3 mt-2">
    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Lingkaran</b></h3>
            </div>
            <div class="card-body pt-2">
                <?php
                require_once 'class.praktikum-4/1.class_lingkaran.php';


                echo 'Nilai PHI : ' . Lingkaran::PHI;

                $lingkaran1 = new Lingkaran(10);
                $lingkaran2 = new Lingkaran(4);

                echo '<br>';
                echo '<br>Lingkaran 1 dengan Jari-jari 10, Maka diketahui: ';
                echo '<br>Luas Lingkaran 1 : ' . $lingkaran1->getLuas();
                echo '<br>Keliling Lingkaran 1 : ' . $lingkaran1->getKeliling();

                echo '<br>';
                echo '<br>Lingkaran 2 dengan Jari-jari 4, Maka diketahui: ';
                echo '<br>Luas Lingkaran 2 : ' . $lingkaran2->getLuas();
                echo '<br>Keliling Lingkaran 2 : ' . $lingkaran2->getKeliling();
                ?>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Persegi Panjang</b></h3>
            </div>
            <div class="card-body pt-2">
                <?php
                require_once 'class.praktikum-4/2.class_persegi_panjang.php';

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
                ?>
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Mahasiswa</b></h3>
            </div>
            <div class="card-body pt-2">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">WEB PENILAIAN</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Review PHP
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        PHP5 OOP
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-primary" type="submit">Submit</button>
                                </form>
                            </ul>

                            <ul class="navbar-nav mb-2 mb-lg-0 float-end">
                                <button class="btn btn-outline-primary" type="submit"><i class="bi bi-box-arrow-in-right me-2"></i>Login</button>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle float-end" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="row pt-2 px-3">
                    <div class="col-8">
                        <span><b>Show</b></span>
                        <div class="btn-group">
                            <button class="btn btn-none dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                10
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                                <li><a class="dropdown-item" href="#">1</a></li>
                                <li><a class="dropdown-item" href="#">2</a></li>
                                <li><a class="dropdown-item" href="#">3</a></li>
                                <li><a class="dropdown-item" href="#">10</a></li>
                            </ul>
                        </div>
                        <span><b>Entries</b></span>
                    </div>
                    <div class="col-4">
                        <div class="float-end input-group">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Search : </label>
                            <div class="col-sm-8">
                                <input type="search" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Search">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-2 px-4">
                    <?php
                    require_once 'class.praktikum-4/3.class.mahasiswa.php';

                    $masis1 = new Mahasiswa("01102224", "Sulthan", "Teknik Informatika", 2022, 4.0);
                    $masis2 = new Mahasiswa("01102212", "Raghib", "Teknik Informatika", 2020, 1.9);
                    $masis3 = new Mahasiswa("01102235", "Fillah", "Sistem Informasi", 2023, 3.0);
                    $masis4 = new Mahasiswa("01102211", "Rafii", "Sistem Informasi", 2021, 2.9);
                    $ar_masis = [$masis1, $masis2, $masis3, $masis4];
                    ?>

                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th class="p-2">No</th>
                                <th class="p-2">NIM</th>
                                <th class="p-2">Nama</th>
                                <th class="p-2">Prodi</th>
                                <th class="p-2">Alumni Tahun</th>
                                <th class="p-2">IPK</th>
                                <th class="p-2">Predikat</th>
                                <th class="p-2">View | Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomer = 1;
                            foreach ($ar_masis as $sis) {

                                echo
                                '<tr>
                        <td class="p-2">' . $nomer . '</td>
                        <td class="p-2">' . $sis->nim . '</td>
                        <td class="p-2">' . $sis->nama . '</td>
                        <td class="p-2">' . $sis->prodi . '</td>
                        <td class="p-2">' . $sis->thn_angkatan . '</td>
                        <td class="p-2">' . $sis->ipk . '</td>
                        <td class="p-2">' . $sis->predikat_ipk() . '</td>
                        <td class="p-2">' . '<a href="#"><i class="bi bi-eye pe-5"></i></a> <a href="#"><i class="bi bi-pencil"></i></a>' . ' </td>
                    </tr>';
                                $nomer++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="row px-3">
                    <div class="col-6">
                        <p>Showing 1 to 4 for 4 entries</p>
                    </div>
                    <div class="col-6">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination float-end">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <hr>
            </div>
        </div>



        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Nilai Mahasiswa</b></h3>
            </div>
            <div class="card-body pt-2">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">WEB PENILAIAN</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Review PHP
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        PHP5 OOP
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>

                                <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-primary" type="submit">Submit</button>
                                </form>
                            </ul>

                            <ul class="navbar-nav mb-2 mb-lg-0 float-end">
                                <button class="btn btn-outline-primary" type="submit"><i class="bi bi-box-arrow-in-right me-2"></i>Login</button>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle float-end" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>


                <div class="row pt-2">

                    <div class="col-12">
                        <h3 class="mt-1 ms-4">Form Nilai Ujian</h3>
                        <hr>
                        <form method="POST" action="praktikum-4.php">
                            <div class="form-group row">
                                <label for="nama" class="col-4 col-form-label text-right">NIM</label>
                                <div class="col-3">
                                    <input id="nim" name="nim" placeholder="Masukan NIM Anda" type="number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-4 col-form-label text-right">Nama Lengkap</label>
                                <div class="col-3">
                                    <input id="nama" name="nama" placeholder="Tulis Nama Lengkap Anda" type="text" class="form-control">
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
                                <label for="number" class="col-4 col-form-label text-right">Nilai Ujian Anda</label>
                                <div class="col-3">
                                    <input id="number" name="nilai_ujian" placeholder="Masukan Nilai Ujian Anda" type="number" class="form-control">
                                </div>
                            </div>
                            <!-- button -->
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <input type="submit" value="Simpan" name="proses" class="btn-primary px-3 py-1">
                                </div>
                            </div>
                        </form>

                        <?php
                        require_once 'class.praktikum-4/4.class_nilai_mahasiswa.php';
                        echo '<hr><div class="ms-4">';
                        $proses = $_POST['proses'];
                        $_nim = $_POST['nim'];
                        $_nama = $_POST['nama'];
                        $_pilih_mk = $_POST['matkul'];
                        $_nilai = $_POST['nilai_ujian'];

                        if (!empty($proses)) {
                            $masis1 = new Nilai_Mahasiswa($_nama, $_nim, $_pilih_mk, $_nilai);

                            $masis1->Cetak();
                            echo '<br>Nilai segitu berati Grade anda Adalah ' . $masis1->CetakGradeUjian();
                            echo '<br>Grade nya ' . $masis1->CetakGradeUjian() . ' berati ' . $masis1->CetakHasilUjian();


                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </section>
</div>
<?php
include_once 'footer.php';
?>