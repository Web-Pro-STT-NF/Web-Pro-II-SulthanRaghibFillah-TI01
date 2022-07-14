<style>
   section {
      animation-name: disolve;
      animation-duration: 0.8s;
   }

   @keyframes disolve {
      from {
         opacity: 0;
      }

      to {
         opacity: 100;
      }
   }
</style>
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
                  <li class="breadcrumb-item"><a href="<?= base_url('Master/users') ?>">Home</a></li>
                  <li class="breadcrumb-item active"><?= $users->id ?></li>
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
            <h3 class="card-title"><b>Detail users, <?= $users->username ?></b></h3>
         </div>

         <div class="card-body">
            <div class="row">
               <div class="col-8 table-responsive">
                  <table class="table table-hover table-bordered">
                     <tr>
                        <td>ID</td>
                        <td><?= $users->id ?></td>
                     <tr>
                        <td>Nama</td>
                        <td><?= $users->username ?></td>
                     </tr>
                     <tr>
                        <td>Password</td>
                        <td><a href="<?= base_url('Master/ubah_password') ?>" class="btn btn-sm btn-info">Ubah Password</a></td>
                     </tr>
                     <tr>
                        <td>Email</td>
                        <td><?= $users->email ?></td>
                     </tr>
                     <tr>
                        <td>Created At</td>
                        <td><?= $users->created_at ?></td>
                     </tr>
                     <tr>
                        <td>Last Login</td>
                        <td><?= $users->last_login ?></td>
                     </tr>
                     <tr>
                        <td>Status</td>
                        <td><?= $users->status ?></td>
                     </tr>
                     <tr>
                        <td>Role</td>
                        <td><?= $users->role ?></td>
                     </tr>
                     <tr>
                        <td>Action</td>
                        <td>
                           <a href="<?= base_url('Master/edit_user?id=') . $users->id ?>" class="btn btn-sm btn-success mr-1">
                              <i class="fa-solid fa-file-pen pr-1"></i>Edit
                           </a>
                           <a href="<?= base_url('Master/delete_user?id=') . $users->id ?>" class="btn btn-sm btn-danger mr-1">
                              <i class="fa-solid fa-trash pr-1"></i>Delete
                           </a>
                        </td>
                     </tr>
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
         text: "Anda akan menghapus data users <?= $users->nama; ?>",
         icon: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
         if (result.isConfirmed) {
            window.location = "<?= base_url('Master/users_delete?id=') . $users->id ?>";
            Swal.fire(
               'Deleted!',
               'users <?= $users->nama; ?> Berhasil di Hapus',
               'success'
            )
         }
      })
   }
</script>