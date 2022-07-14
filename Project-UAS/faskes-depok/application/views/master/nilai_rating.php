 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-6">
                <h1><b>Kategori Rating</b></h1>
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
             <h3 class="card-title"><b>List Rating</b></h3>
          </div>

          <div class="card-body">
             <div class="row">
                <div class="form-group row ml-2 mb-0">
                   <button name="submit" type="submit" class="btn btn-primary">
                      <i class="fa-solid fa-plus mr-2"></i><a href="<?= base_url('Master/nilai_rating_create') ?>" class="text-white">Tambah Kategori Rating</a>
                   </button>
                </div>
                <div class="col-12 table-responsive">
                   <table class="table table-hover table-bordered">
                      <table class="table table-hover table-bordered">
                         <thead class="thead-dark align-center">
                            <tr>
                               <th class="col-1">ID</th>
                               <th>Kategori Rating</th>
                               <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                            <?php // $nomor = 1; ?>
                            <?php foreach ($dataRating as $r) : ?>
                               <tr>
                                  <td><?= $r->id_rating ?></td>
                                  <td><?= $r->nama_rating ?></td>
                                  <td>
                                     <a type="button" class="pr-2 text-danger" onclick="return deletedata()">
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
 <script>
    function deletedata() {
       Swal.fire({
          title: 'Hapus Data?',
          text: "Anda akan menghapus kategori Rating ini? <?= $r->nama_rating; ?>",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
       }).then((result) => {
          if (result.isConfirmed) {
             window.location = "<?= base_url('Master/nilai_rating_delete?id=') . $r->id_rating ?>";
             Swal.fire(
                'Deleted!',
                'Rating <?= $r->nama_rating; ?> Berhasil di Hapus',
                'success'
             )
          }
       })
    }
 </script>

 <?php if ($this->session->flashdata('input-data')) : ?>
    <script>
       Swal.fire({
          icon: 'success',
          title: 'Data Kecamatan Berhasil di Simpan !',
          showConfirmButton: false,
          timer: 1500
       })
    </script>
 <?php endif ?>