 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-6">
                <h1><b>Data Faskes</b></h1>
             </div>
             <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item active">Home</li>
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
             <h3 class="card-title"><b>List Fasilitas Kesehatan</b></h3>
          </div>

          <div class="card-body">
             <div class="row">
                <div class="form-group row ml-2">
                   <button name="submit" type="submit" class="btn btn-primary">
                      <i class="fa-solid fa-plus mr-2"></i><a href="<?= base_url('Master/faskes_create') ?>" class="text-white">Tambah Faskes</a>
                   </button>
                </div>
                <div class="col-12 table-responsive">
                   <table class="table table-hover table-bordered">
                      <thead class="thead-dark align-center">
                         <tr>
                            <th class="align-middle">No</th>
                            <th class="align-middle">Nama Faskes</th>
                            <th class="align-middle">Jenis Faskes</th>
                            <th class="align-middle">Kecamtan</th>
                            <th class="align-middle">Rating</th>
                            <th class="align-middle">Website</th>
                            <th class="align-middle">Action</th>
                         </tr>
                      </thead>
                      <tbody>
                         <?php $nomor = 1; 
                           ?>
                         <?php foreach ($dataFaskes as $df) : ?>
                            <td class="align-middle"><?= $nomor++ ?></td>
                            <td class="align-middle"><?= $df->nama ?></td>
                            <td class="align-middle"><?= $df->nama_faskes ?></td>
                            <td class="align-middle"><?= $df->nama_kecamatan ?></td>
                            <td class="align-middle"><?= $df->skor_rating ?></td>
                            <td class="align-middle"><?= $df->website ?></td>
                            <td class="align-middle d-flex">
                               <a href="<?= base_url('Master/faskes_detail?id=') . $df->id ?>" class="pr-2 text-info">
                                  <i class="fa-solid fa-eye pr-1 text-info"></i>View
                               </a>
                               <a href="<?= base_url('Master/faskes_edit?id=') . $df->id ?>" class="pr-2 text-success">
                                  <i class="fa-solid fa-file-pen pr-1 text-success"></i>Edit
                               </a>
                               <a type="button" class="pr-2 text-danger" href="<?= base_url('Master/faskes_delete?id=') . $df->id ?>">
                                  <i class="fa-solid fa-trash pr-1 text-danger"></i>Delete
                               </a>
                            </td>
                      </tbody>
                   <?php endforeach ?>
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


 <?php if ($this->session->flashdata('input-data')) : ?>
    <script>
       Swal.fire({
          icon: 'success',
          title: 'Data Berhasil di Simpan !',
          showConfirmButton: false,
          timer: 1500
       })
    </script>
 <?php endif ?>

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

 </script>
 <?php if ($this->session->flashdata('update-data')) : ?>
    <script>
       Swal.fire({
          icon: 'success',
          title: 'Data Update Berhasil di Simpan !',
          showConfirmButton: false,
          timer: 1500
       })
    </script>
 <?php endif ?>