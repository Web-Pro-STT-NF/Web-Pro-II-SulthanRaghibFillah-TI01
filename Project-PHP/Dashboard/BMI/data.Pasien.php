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
                    <h1 class="m-0"><b>Data Pasien</b></h1>
                </div>
                <hr class="my-1">
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Form Pengisian</a></li>
                        <li class="breadcrumb-item active">Data Pasien</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once './class/class.BMI.pasien.php';
    ?>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <?php
                    $pasien1 = new BMIPasien("Ahmad", "Laki-Laki", "2022-01-10", 69.8, 169);
                    $pasien2 = new BMIPasien("Rina", "Perempuan", "2022-01-10", 55.3, 165);
                    $pasien3 = new BMIPasien("Lutfi", "Laki-Laki", "2022-01-11", 45.2, 171);
                    $ar_pasien = [$pasien1, $pasien2, $pasien3];

                    $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
                    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
                    $jenis_kelamin = isset($_POST['jk']) ? $_POST['jk'] : '';
                    $tanggal = isset($_POST['date']) ? $_POST['date'] : '';
                    $berat_badan = isset($_POST['bb']) ? $_POST['bb'] : '';
                    $tinggi_badan = isset($_POST['tb']) ? $_POST['tb'] : '';

                    $pasien4 = new BMIPasien($nama, $jenis_kelamin, $tanggal, $berat_badan, $tinggi_badan);
                    array_push($ar_pasien, $pasien4);
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="thead-dark align-center">
                            <tr>
                                <th style="vertical-align: middle;">No</th>
                                <th style="vertical-align: middle;">Kode Pasien</th>
                                <th style="vertical-align: middle;">Nama Pasien</th>
                                <th style="vertical-align: middle;">Jenis Kelamin</th>
                                <th style="vertical-align: middle;">Tanggal Periksa</th>
                                <th style="vertical-align: middle;">Berat (Kg)</th>
                                <th style="vertical-align: middle;">Tinggi (cm)</th>
                                <th style="vertical-align: middle;">Nilai BMI</th>
                                <th style="vertical-align: middle;">Status BMI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            $code_pasien = 'P001';
                            foreach ($ar_pasien as $objek) {
                            ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $code_pasien ?></td>
                                    <td><?= ucwords($objek->getNamaPasien()) ?></td>
                                    <td><?= $objek->getJenisKelamin() ?></td>
                                    <td><?= $objek->getTanggal() ?></td>
                                    <td><?= $objek->getBerat() ?></td>
                                    <td><?= $objek->getTinggi() ?></td>
                                    <td><?= '<b>' . $objek->getNilaiBMI() . '</b>' ?></td>
                                    <td><?= $objek->getStatusBMI() ?></td>
                                </tr>
                            <?php
                                $nomor++;
                                $code_pasien++;
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="col-12-sm">
                        <h3 class="text-center"><b><?= ucwords($pasien4->getNamaPasien()) ?></b></h3>
                        <?php
                        if ($jenis_kelamin == "Laki-Laki") {
                            echo $pasien4->TampilGambarCowo();
                        } elseif ($jenis_kelamin == "Perempuan") {
                            echo $pasien4->TampilGambarCewe();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </section>
</div>

<?php
include_once 'footer.php';
?>