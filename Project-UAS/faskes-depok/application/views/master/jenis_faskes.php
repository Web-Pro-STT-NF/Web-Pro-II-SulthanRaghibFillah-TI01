 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-6">
                <h1><b>Data Jenis Faskes</b></h1>
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
             <h3 class="card-title"><b>List Jenis Faskes</b></h3>
          </div>

          <div class="card-body">
             <div class="row">
                <div class="form-group row ml-2">
                   <button name="submit" type="submit" class="btn btn-primary">
                      <i class="fa-solid fa-plus mr-2"></i><a href="<?= base_url('Master/jenis_faskes_create') ?>" class="text-white">Tambah Jenis Faskes</a>
                   </button>
                </div>
                <div class="col-12 table-responsive">
                   <table class="table table-hover table-bordered">
                      <thead class="thead-dark align-center">
                         <tr>
                            <th class="col-1">ID</th>
                            <th>Jenis Faskes</th>
                            <th>Action</th>
                         </tr>
                      </thead>
                      <tbody>
                         <?php foreach ($dataJenisFaskes as $jf) : ?>
                            <tr>
                               <td><?= $jf->id_faskes ?></td>
                               <td><?= $jf->nama_faskes ?></td>
                               <td>
                                  <a type="button" class="pr-2 text-danger" href="<?= base_url('Master/jenis_faskes_delete/') . $jf->id_faskes ?>">
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