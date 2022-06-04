 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1><b>Data Mahasiswa</b></h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active">Blank Page</li>
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
                 <h3 class="card-title"><b>List Mahasiswa</b></h3>
             </div>
             <div class="card-body">
                 NIM : <?= '<b>' . $mhs->nim . '</b>' ?>
                 <br>
                 Nama Lengkap : <?= '<b>' . ucwords($mhs->nama) . '</b>' ?>
                 <br>
                 Jenik Kelamin : <?= $mhs->jenis_kelamin ?>
                 <br>
                 Tempat Lahir : <?= ucwords($mhs->tmp_lahir) ?>
                 <br>
                 Tanggal Lahir : <?= $mhs->tgl_lahir ?>
                 <br>
                 Program Studi : <?= $mhs->prodi ?>
                 <br>
                 IPK : <?= '<b>' . $mhs->ipk . '</b>' ?>
                 <br>
                 Predikat : <?= '<b>' . $mhs->predikat() . '</b>' ?>
             </div>
             <!-- /.card-body -->
         </div>
         <!-- /.card -->

         <!-- Default box -->
         <div class="card card-primary card-outline">
             <div class="card-header">
                 <h3 class="card-title"><b>Tabel Mahasiswa</b></h3>
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="col-12 table-responsive">
                         <table class="table table-striped table-hover table-bordered">
                             <thead class="thead-dark align-center">
                                 <tr>
                                     <th style="vertical-align: middle;">No</th>
                                     <th style="vertical-align: middle;"> NIM</th>
                                     <th style="vertical-align: middle;">Nama Lengkap</th>
                                     <th style="vertical-align: middle;">Jenis Kelamin</th>
                                     <th style="vertical-align: middle;">Tempat Lahir</th>
                                     <th style="vertical-align: middle;">Tanggal Lahir</th>
                                     <th style="vertical-align: middle;">Program Studi</th>
                                     <th style="vertical-align: middle;">IPK</th>
                                     <th style="vertical-align: middle;">Predikat</th>
                                </tr>
                             </thead>
                             <tbody>
                                 <?php $nomor = 1; ?>
                                 <tr>
                                     <td><?= $nomor ?></td>
                                     <td><?= $mhs->nim ?></td>
                                     <td><?= ucwords($mhs->nama) ?></td>
                                     <td class="text-center"><?= $mhs->jenis_kelamin ?></td>
                                     <td><?= ucwords($mhs->tmp_lahir) ?></td>
                                     <td><?= $mhs->tgl_lahir ?></td>
                                     <td><?= $mhs->prodi ?></td>
                                     <td><?= '<b>' . $mhs->ipk . '</b>' ?></td>
                                     <td><?= '<b>' . $mhs->predikat() . '</b>' ?></td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
             <!-- /.card-body -->
         </div>
         <!-- /.card -->

     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->