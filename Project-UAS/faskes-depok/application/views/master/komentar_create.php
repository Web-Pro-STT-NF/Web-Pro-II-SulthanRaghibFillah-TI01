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
         <div class="row mb-0">
            <div class="col-sm-6">
               <h1><b>FORM</b></h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                   <li class="breadcrumb-item active">Blank Page</li> -->
               </ol>
            </div>
         </div>
      </div>
   </section>

   <!-- Main content -->
   <section class="content">

      <!-- Default box -->
      <div class="card card-primary card-outline">
         <div class="card-header">
            <h3 class="card-title pt-1"><b>Tambah Komentar</b></h3>
            <a href="<?= base_url('Master/komentar') ?>" class="btn btn-warning btn-sm float-right"><i class="fa-solid fa-xmark pr-2"></i>Batal</a>
         </div>

         <div class="card-body">
            <div class="row">
               <div class="col-12">
                  <form method="POST" action="<?= base_url('Master/kecamatan_save') ?>" class="was-validated">
                     <div class="form-group">
                        <label for="users" class="form-label">Users</label>
                        <input id="users" name="users" type="text" class="form-control" placeholder="users_id" required disabled>
                     </div>
                     <div class="form-group">
                        <label for="nama_faskes" class="form-label">Nama Faskes</label>
                        <input id="nama_faskes" name="nama_faskes" type="text" class="form-control" placeholder="nama_faskes_id" required disabled>
                     </div>
                     <div class="form-group">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input id="tanggal" name="tanggal" type="date" class="form-control" required>
                     </div>
                     <div class="form-group">
                        <label for="tanggal" class="form-label">Beri Rating</label>
                        <select id="validatedInputGroupSelect" name="nilai_rating_id" class="form-control" value="" required>
                           <option value="">Beri Kategori Rating</option>
                           <?php foreach ($nilai_rating as $r) { ?>
                              <option value="<?php echo $r['id_rating']; ?>"><?php echo $r['nama_rating']; ?></option>
                           <?php } ?>
                        </select>
                     </div>
                     <label for="isi" class="form-label">Komentar</label>
                     <div class="form-group">
                        <textarea name="isi" id="" cols="30" rows="2" placeholder="Tuliskan Pendapat Anda.." class="form-control" required></textarea>
                     </div>
                     <div class="col-12 pl-0">
                        <button class="btn btn-primary" type="submit">Post Komentar</button>
                     </div>
                  </form>
               </div>
            </div>
            <!-- /.card-body -->
         </div>
         <!-- /.card -->
      </div>
      <!-- /. default box -->
   </section>
   <!-- /.main-content -->
</div>
<!-- /.content-wrapper -->