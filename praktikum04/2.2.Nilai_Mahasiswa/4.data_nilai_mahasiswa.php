<!DOCTYPE html>
<html>

<head>
    <title>Mahasiswa</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Bootstrap5 ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- LINK FONT -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<style>
    * {
        font-family: "Lucida Console", Monaco, monospace;
    }
</style>

<body>
    <div class="row">
        <div class="col-12">
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
        </div>
    </div>

    <div class="row pt-2">

        <div class="col-12">
            <h3 class="mt-1 ms-4">Form Nilai Ujian</h3>
            <hr>
            <form method="POST" action="4.data_nilai_mahasiswa.php">
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
            require_once '4.class_nilai_mahasiswa.php';
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
    <!-- BAWAH -->
    <div class="row">
        <div class="col-12">
            <div class="px-3">
                <p class="my-0"><b>Lab Pemrograwan Web Lanjutan</b></p>
                <p class="mb-0">Dosen Sirojul Munir S.Si, M.Kom</p>
                <p class="mb-0">STT-NF Kampus B</p>
            </div>
            <div class="row">
                <div class="col-12 bg-primary text-white py-2 mt-2">
                    <p class="mb-0 px-3">Developws by
                        <a href="https://github.com/Web-Pro-STT-NF/Web-Pro-II-SulthanRaghibFillah-TI01" class="text-white text-decoration-none">@Rafii_Yuuki</a> @2022
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>