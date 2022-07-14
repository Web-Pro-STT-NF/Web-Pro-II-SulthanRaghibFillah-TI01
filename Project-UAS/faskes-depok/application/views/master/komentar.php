 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-6">
                <h1><b>Data Komentar</b></h1>
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
             <h3 class="card-title"><b>List Komentar</b></h3>
          </div>

          <div class="card-body">
             <div class="row">

                <div class="col-12 table-responsive">
                   <table class="table table-hover table-bordered">
                      <thead class="thead-dark align-center">
                         <tr>
                            <th class="align-middle">No</th>
                            <th class="align-middle">Tanggal Komentar</th>
                            <th class="align-middle">Username</th>
                            <th class="align-middle">Nama Faskes</th>
                            <th class="align-middle">Komentar</th>
                            <th class="align-middle">Rating</th>
                            <th class="align-middle">Action</th>
                         </tr>
                      </thead>
                      <tbody>
                         <?php $nomor = 1; ?>
                         <?php foreach ($dataKomentar as $k) : ?>
                            <tr></tr>
                            
                               <td class="align-middle"><?= $k->id_komentar ?></td>
                               <td class="align-middle"><?= $k->tanggal ?></td>
                               <td class="align-middle"><?= $k->username ?></td>
                               <td class="align-middle"><?= $k->nama_faskes ?></td>
                               <td class="align-middle"><?= $k->isi ?></td>
                               <td class="align-middle"><?= $k->nama_rating ?></td>
                               <td class="align-middle">

                                  <a href="<?= base_url('Master/komentar_delete?id_komentar=') . $k->id_komentar ?>" class="pr-2 text-danger" >
                                     <i class="fa-solid fa-trash pr-1 text-danger"></i>Delete
                                  </a>
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

 <?php if ($this->session->flashdata('delete-data')) : ?>
    <script>
       Swal.fire({
          icon: 'success',
          title: 'Data Berhasil di Hapus !',
          showConfirmButton: false,
          timer: 1500
       })
    </script>
 <?php endif ?>