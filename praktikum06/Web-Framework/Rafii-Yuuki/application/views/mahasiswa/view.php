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
         <div class="card">
             <div class="card-header">
                 <h3 class="card-title"><b>Mahasiswa</b></h3>
             </div>
             <div class="card-body">
                 NIM : <?= $mhs->nim ?>
                 <br>
                 Nama Lengkap : <?= $mhs->nama ?>
                 <br>
                 Jenik Kelamin : <?= $mhs->jenis_kelamin ?>
                 <br>
                 Tempat Lahir : <?= $mhs->tmp_lahir ?>
                 <br>
                 Tanggal Lahir : <?= $mhs->tgl_lahir ?>
                 <br>
                 Program Studi : <?= $mhs->prodi ?>
                 <br>
                 IPK : <?= $mhs->ipk ?>
                 <br>
                 Predikat : <?= $mhs->predikat() ?>
             </div>
             <!-- /.card-body -->
             <div class="card-footer">
                 Footer
             </div>
             <!-- /.card-footer-->
         </div>
         <!-- /.card -->

     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->