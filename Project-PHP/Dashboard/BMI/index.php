<?php
include_once 'header.php';
include_once 'sidebar.php';
require_once './class/class.BMI.pasien.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header pb-1">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><b>Form Pengisian</b></h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Form Pengisian</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <hr class="mb-3 mt-2">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Kalkulator Badan Ideal</h3>
        </div>
    </div>
    <!-- /.card -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="data.Pasien.php">
                        <div class="form-group row">
                            <label for="nama" class="col-2 col-form-label">Code Pasien</label>
                            <div class="col-3">
                                <input id="nama" name="code" placeholder="Code Pasien Otomatis Terisi" type="text" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-2 col-form-label">Nama Pasien</label>
                            <div class="col-3">
                                <input id="nama" name="nama" placeholder="Tulis Nama Anda" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label class="col-2 col-form-label pt-0">Jenis Kelamin</label>
                            <div class="col-3">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-2">
                                        <label class="mb-0">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox1" value="Laki-Laki" name="jk">
                                            <img src="../dist/img/cwok.jpg" width="100%" class="rounded-lg">
                                        </label>
                                        <p class="text-center"><b>Laki-Laki</b></p>
                                    </div>
                                    <div class="col-2">
                                        <label class="mb-0">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox2" value="Perempuan" name="jk">
                                            <img src="../dist/img/cwek.jpg" width="100%" class="rounded-lg">
                                        </label>
                                        <p class="text-center"><b>Perempuan</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="number" class="col-2 col-form-label">Tanggal Periksa</label>
                            <div class="col-3">
                                <input id="date" name="date" placeholder="Masukan Nilai" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="desimal" class="col-2 col-form-label">Berat Badan (Kg)</label>
                            <div class="col-3">
                                <input id="desimal" name="bb" placeholder="Contoh = 63.6" type="text" class="form-control" pattern="[0-9]+([,\.][0-9]+)?" autocomplete="off" title="Mohon Masukan angka desimal, contoh = 63.6">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="desimal" class="col-2 col-form-label">Tinggi Badan (cm)</label>
                            <div class="col-3">
                                <input id="desimal" name="tb" placeholder="Contoh = 173.6" type="text" class="form-control" pattern="[0-9]+([,\.][0-9]+)?" autocomplete="off" title="Mohon Masukan angka desimal, contoh = 173.6">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-2 col-8">
                                <input class="btn-primary px-3 py-1" data-btn type="submit" value="Cek Ideal" name="proses">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>