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
                     <div class="col-12">
                         <h2>Daftar Mahasiswa STT Terpadu Nurul Fikri</h2>
                     </div>
                     <?php if ($this->session->userdata('ROLE') == 'ADMIN') { ?>
                         <div class="form-group row ml-1">
                             <button name="submit" type="submit" class="btn btn-primary"><a href="create" class="text-white">Tambah Data Mahasiswa</a></button>
                         </div>
                     <?php } ?>
                     <div class="col-12 table-responsive">
                         <table class="table table-hover table-bordered">
                             <thead class="thead-dark align-center">
                                 <tr>
                                     <th style="vertical-align: middle;">No</th>
                                     <th style="vertical-align: middle;">NIM</th>
                                     <th style="vertical-align: middle;">Nama</th>
                                     <th style="vertical-align: middle;">Jenis Kelamin</th>
                                     <th style="vertical-align: middle;">Prodi</th>
                                     <th style="vertical-align: middle;">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $nomor = 1; ?>
                                 <?php foreach ($list_mahasiswa as $mhs) : ?>
                                     <tr>
                                         <td style="vertical-align: middle;"><?= $nomor++ ?></td>
                                         <td style="vertical-align: middle;"><?= $mhs->nim ?></td>
                                         <td style="vertical-align: middle;"><?= ucwords($mhs->nama) ?></td>
                                         <td class="text-center" style="vertical-align: middle;"><?= $mhs->gender ?></td>
                                         <td style="vertical-align: middle;"><?= $mhs->prodi_kode ?></td>
                                         <td style="vertical-align: middle;">
                                             <a href="detail?id=<?= $mhs->nim ?>" class="pr-2"><i class="fa-solid fa-eye pr-1"></i>View</a>
                                             <?php if ($this->session->userdata('ROLE') == 'ADMIN') { ?>
                                                 <a href="edit?id=<?= $mhs->nim ?>" class="pr-2"><i class="fa-solid fa-file-pen pr-1"></i>Edit</a>
                                                 <a href="delete?id=<?= $mhs->nim ?>" class="pr-2" onclick="if(!confirm('Anda Yakin Menghapus Data Mahasiswa Bernama, <?= $mhs->nama ?> ?')) {return false}">
                                                     <i class="fa-solid fa-trash pr-1"></i>Delete
                                                 </a>
                                             <?php } ?>
                                         </td>
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