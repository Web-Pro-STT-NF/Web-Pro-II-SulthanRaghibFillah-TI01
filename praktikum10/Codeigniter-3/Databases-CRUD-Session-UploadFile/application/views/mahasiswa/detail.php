 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-6">
                <h1><b>Detail Mahasiswa</b></h1>
             </div>
             <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="<?= base_url() ?>mahasiswa/index">Index</a></li>
                   <li class="breadcrumb-item active"><?= $mahasiswa->nim ?></li>
                </ol>
             </div>
          </div>
       </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

       <!-- Default box -->
       <div class="card card-primary card-outline">
          <div class="card-header">
             <h3 class="card-title"><b>Mahasiswa, <?= ucwords($mahasiswa->nama) ?></b></h3>
          </div>

          <div class="card-body">
             <div class="row">
                <div class="col-12">
                   <h2>Biodata</h2>
                </div>
                <div class="col-8 table-responsive">
                   <table class="table table-hover table-bordered">
                      <tr>
                         <td><b>NIM</b></td>
                         <td><?= $mahasiswa->nim ?></td>
                      </tr>
                      <tr>
                         <td><b>Nama</b></td>
                         <td><?= ucwords($mahasiswa->nama) ?></td>
                      </tr>
                      <tr>
                         <td><b>Jenis Kelamin</b></td>
                         <td><?= $mahasiswa->gender ?></td>
                      </tr>
                      <tr>
                         <td><b>Tempat Lahir</b></td>
                         <td><?= ucwords($mahasiswa->tmp_lahir) ?></td>
                      </tr>
                      <tr>
                         <td><b>Tanggal Lahir</b></td>
                         <td><?= $mahasiswa->tgl_lahir ?></td>
                      </tr>
                      <tr>
                         <td><b>Prodi</b></td>
                         <td><?= $mahasiswa->prodi_kode ?></td>
                      </tr>
                      <tr>
                         <td><b>IPK</b></td>
                         <td><?= '<b>' . $mahasiswa->ipk . '</b>' ?></td>
                      </tr>
                   </table>
                </div>
                <div class="col-4 text-center">
                   <?php echo form_open_multipart('mahasiswa/upload') ?>

                   <input type="hidden" name="nim" value="<?= $mahasiswa->nim ?>">

                   <?php
                     $img = base_url('/uploads/' . $mahasiswa->foto);
                     // $array = get_headers($img);
                     // $string = $array[0];

                     // if (strpos($string, "200")) {
                     //    echo '<img src="' . $img . '" alt="foto" width="100%"/>';
                     // } else {
                     //    echo '<img src="' . base_url("/uploads/no-img.jpg") . '" alt="foto" width="100%"/>';
                     // }
                     if ($mahasiswa->foto == null) {
                        echo '<img src="' . base_url("/uploads/no-img.jpg") . '" alt="foto" width="100%"/>';
                        echo '<input type="file" name="fotomhs" class="btn btn-info mt-2">';
                        echo '<button class="btn btn-info mt-2" type="submit"><i class="fa-solid fa-image mr-2"></i>Upload Foto</button>';
                     } else {
                        echo '<img src="' . $img . '" alt="foto" width="100%"/>';
                     }
                     ?>
                   <!-- <br> -->
                   <!-- Nama File <?= $mahasiswa->foto ?> -->
                   <!-- <br> -->
                   <!-- <input type="file" name="fotomhs" class="btn btn-info"> -->
                   <!-- <button class="btn btn-info mt-2" type="submit"><i class="fa-solid fa-image mr-2"></i>Upload Foto</button> -->

                   <?php echo form_close() ?>
                </div>
             </div>
             <!-- /.card-body -->
          </div>
          <!-- /.card -->

    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->