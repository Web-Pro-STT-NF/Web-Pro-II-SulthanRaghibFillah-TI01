 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-6">
                <h1><b>Data Users</b></h1>
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
             <h3 class="card-title"><b>List Users</b></h3>
          </div>

          <div class="card-body">
             <div class="row">
                <div class="form-group row ml-2">
                   <button name="submit" type="submit" class="btn btn-primary">
                      <i class="fa-solid fa-plus mr-2"></i><a href="<?= base_url('Master/login/register') ?>" class="text-white">Tambah Users</a>
                   </button>
                </div>
                <div class="col-12 table-responsive">
                   <table class="table table-hover table-bordered">
                      <thead class="thead-dark align-center">
                         <tr>
                            <th class="align-middle">ID</th>
                            <th class="align-middle">Username</th>
                            <th class="align-middle">Email</th>
                            <th class="align-middle">Role</th>
                            <th class="align-middle">Action</th>
                         </tr>
                      </thead>
                      <tbody>
                         <?php // $nomor = 1; ?>
                         <?php foreach ($dataUsers as $u) : ?>
                            <tr>
                               <td class="align-middle"><?= $u->id ?></td>
                               <td class="align-middle"><?= $u->username ?></td>
                               <td class="align-middle"><?= $u->email ?></td>
                               <td class="align-middle"><?= $u->role ?></td>
                               <td class="align-middle">
                                  <a href="<?= base_url('Master/users_detail?id=') . $u->id ?>" class="pr-2 text-info">
                                     <i class="fa-solid fa-eye pr-1 text-info"></i>View
                                  </a>
                                  <a href="<?= base_url('Master/delete_user?id=') . $u->id ?>" class="pr-2 text-danger" >
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