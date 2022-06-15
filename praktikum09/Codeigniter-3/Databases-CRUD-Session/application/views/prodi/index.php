 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1><b>Kelola Data Prodi</b></h1>
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
                 <h3 class="card-title"><b>Data Prodi</b></h3>
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="col-12">
                         <h2>Daftar Program Studi STT Terpadu Nurul Fikri</h2>
                     </div>
                     <div class="form-group row ml-1">
                         <?php if ($this->session->userdata('ROLE') == 'ADMIN') { ?>
                             <button name="submit" type="submit" class="btn btn-primary">
                                 <a href="#" class="text-white">Tambah Data Prodi</a>
                             </button>
                         <?php } ?>
                     </div>
                     <div class="col-12 table-responsive">
                         <table class="table table-striped table-hover table-bordered">
                             <thead class="thead-dark align-center">
                                 <tr>
                                     <th style="vertical-align: middle;">No</th>
                                     <th style="vertical-align: middle;">Kode</th>
                                     <th style="vertical-align: middle;">Nama Prodi</th>
                                     <th style="vertical-align: middle;">Dosen Prodi</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $nomor = 1;
                                    foreach ($list_prodi as $prodi) :
                                    ?>
                                     <tr>
                                         <td style="vertical-align: middle;"><?= $nomor++ ?></td>
                                         <td style="vertical-align: middle;"><?= $prodi->kode ?></td>
                                         <td style="vertical-align: middle;"><?= $prodi->nama ?></td>
                                         <td style="vertical-align: middle;"><?= $prodi->kaprodi ?></td>
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