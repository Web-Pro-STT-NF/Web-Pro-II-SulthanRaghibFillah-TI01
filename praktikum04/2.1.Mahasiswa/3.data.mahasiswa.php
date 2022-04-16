<!DOCTYPE html>
<html>

<head>
    <title>Mahasiswa</title>

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
    <div class="row pt-2 px-3">
        <div class="col-9">
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
        <div class="col-3">
            <div class="float-end input-group">
                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Search : </label>
                <div class="col-sm-9">
                    <input type="search" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Search">
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-2 px-4">
        <?php
        require_once '3.class.mahasiswa.php';

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
    <!-- BAWAH -->
    <div class="row">
        <div class="col-12">
            <div class="px-3">
                <p class="mt-4 mb-0"><b>Lab Pemrograwan Web Lanjutan</b></p>
                <p class="mb-0">Dosen Sirojul Munir S.Si, M.Kom</p>
                <p class="mb-0">STT-NF Kampus B</p>
            </div>
            <div class="row">
                <div class="col-12 bg-primary text-white py-2 mt-2">
                    <p class="mb-0 px-3">Developed by
                        <a href="https://github.com/Web-Pro-STT-NF/Web-Pro-II-SulthanRaghibFillah-TI01" class="text-white text-decoration-none">@Rafii_Yuuki</a> @2022
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>