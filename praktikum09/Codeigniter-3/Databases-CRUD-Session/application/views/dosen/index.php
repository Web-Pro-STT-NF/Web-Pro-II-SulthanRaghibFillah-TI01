 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1><b>Index Dosen</b></h1>
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
                 <h3 class="card-title"><b>Dosen</b></h3>
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="col-12 table-responsive">
                         <table class="table table-striped table-hover table-bordered">
                             <thead class="thead-dark align-center">
                                 <tr>
                                     <th style="vertical-align: middle;">No</th>
                                     <?php if ($this->session->userdata('ROLE') == 'ADMIN') { ?>
                                         <th style="vertical-align: middle;">NIDN</th>
                                     <?php } ?>
                                     <th style="vertical-align: middle;">Nama</th>
                                     <th style="vertical-align: middle;">Jenis Kelamin</th>
                                     <?php if ($this->session->userdata('ROLE') == 'ADMIN') { ?>
                                         <th style="vertical-align: middle;">Tempat Lahir</th>
                                         <th style="vertical-align: middle;">Tanggal Lahir</th>
                                         <th style="vertical-align: middle;">Pendidikan Terakhir</th>
                                     <?php } ?>
                                     <th style="vertical-align: middle;">Prodi</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $nomor = 1; ?>
                                 <?php foreach ($list_dosen as $dsn) : ?>
                                     <tr>
                                         <td style="vertical-align: middle;"><?= $nomor++ ?></td>
                                         <?php if ($this->session->userdata('ROLE') == 'ADMIN') { ?>
                                             <td style="vertical-align: middle;"><?= $dsn->nidn ?></td>
                                         <?php } ?>
                                         <td style="vertical-align: middle;"><?= $dsn->nama ?></td>
                                         <td class="text-center" style="vertical-align: middle;"><?= $dsn->gender ?></td>
                                         <?php if ($this->session->userdata('ROLE') == 'ADMIN') { ?>
                                             <td class="text-center" style="vertical-align: middle;"><?= $dsn->tmp_lahir ?></td>
                                             <td class="text-center" style="vertical-align: middle;"><?= $dsn->tgl_lahir ?></td>
                                             <td style="vertical-align: middle;"><?= $dsn->pendidikan_akhir ?></td>
                                         <?php } ?>
                                         <td style="vertical-align: middle;"><?= $dsn->prodi_kode ?></td>
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