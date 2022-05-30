 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1><b>Index Mahasiswa</b></h1>
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
                 <h3 class="card-title"><b>Mahasiswa</b></h3>
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="col-12 table-responsive">
                         <table class="table table-striped table-hover table-bordered">
                             <thead class="thead-dark align-center">
                                 <tr>
                                     <th style="vertical-align: middle;">No</th>
                                     <th style="vertical-align: middle;">NIM</th>
                                     <th style="vertical-align: middle;">Nama</th>
                                     <th style="vertical-align: middle;">Jenis Kelamin</th>
                                     <th style="vertical-align: middle;">Tempat Lahir</th>
                                     <th style="vertical-align: middle;">Tanggal Lahir</th>
                                     <th style="vertical-align: middle;">Prodi</th>
                                     <th style="vertical-align: middle;">IPK</th>
                                     <th style="vertical-align: middle;">Predikat</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $nomor = 1;
                                    foreach ($list_mhs as $mhs) :
                                    ?>
                                     <tr>
                                         <td style="vertical-align: middle;"><?= $nomor++ ?></td>
                                         <td style="vertical-align: middle;"><?= $mhs->nim ?></td>
                                         <td style="vertical-align: middle;"><?= ucwords($mhs->nama) ?></td>
                                         <td class="text-center" style="vertical-align: middle;"><?= $mhs->jenis_kelamin ?></td>
                                         <td class="text-center" style="vertical-align: middle;"><?= $mhs->tmp_lahir ?></td>
                                         <td class="text-center" style="vertical-align: middle;"><?= $mhs->tgl_lahir ?></td>
                                         <td style="vertical-align: middle;"><?= $mhs->prodi ?></td>
                                         <td style="vertical-align: middle;"><?= '<b>' . $mhs->ipk . '</b>' ?></td>
                                         <td style="vertical-align: middle;"><?= '<b>' . $mhs->predikat() . '</b>' ?></td>
                                     </tr>
                                 <?php endforeach ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
                 <!-- /.card-body -->
             </div>
             <!-- /.card -->

     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->