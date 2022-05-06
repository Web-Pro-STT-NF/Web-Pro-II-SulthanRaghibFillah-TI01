 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1><b>Form Mahasiswa</b></h1>
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
                 <h3 class="card-title"><b>Input Your Data</b></h3>
             </div>
             <div class="card-body">
                 <?php echo form_open('mahasiswa/save') ?>
                 <div class="form-group row">
                     <label for="nim" class="col-form-label">NIM</label>
                     <div class="input-group">
                         <div class="input-group-prepend">
                             <div class="input-group-text">
                                 <i class="fa fa-id-card"></i>
                             </div>
                         </div>
                         <input id="nim" name="nim" placeholder="Masukkan NIM Anda" type="number" class="form-control">
                     </div>
                 </div>

                 <div class="form-group row">
                     <label for="nama" class="col-form-label">Nama</label>
                     <div class="input-group">
                         <div class="input-group-prepend">
                             <div class="input-group-text">
                                 <i class="fa fa-address-book"></i>
                             </div>
                         </div>
                         <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda" type="text" class="form-control">
                     </div>
                 </div>

                 <div class="form-group row">
                     <label class="col-form-label">Jenis Kelamin</label>
                     <div class="input-group">
                         <div class="custom-control custom-radio custom-control-inline">
                             <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L">
                             <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                         </div>
                         <div class="custom-control custom-radio custom-control-inline">
                             <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P">
                             <label for="jk_1" class="custom-control-label">Perempuan</label>
                         </div>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="tmp_lahir" class="col-form-label">Tempat Lahir</label>
                     <div class="input-group">
                         <div class="input-group-prepend">
                             <div class="input-group-text">
                                 <i class="fa fa-adn"></i>
                             </div>
                         </div>
                         <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Kota Lahir Anda" type="text" class="form-control">
                     </div>

                 </div>
                 <div class="form-group row">
                     <label for="tgl_lahir" class="col-form-label">Tanggal Lahir</label>
                     <div class="input-group">
                         <div class="input-group-prepend">
                             <div class="input-group-text">
                                 <i class="fa fa-calendar"></i>
                             </div>
                         </div>
                         <input id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir Anda" type="date" class="form-control">
                     </div>
                 </div>

                 <div class="form-group row">
                     <label for="prodi" class="col-form-label">Prodi Studi</label>
                     <div class="input-group">
                         <div class="input-group-prepend">
                             <div class="input-group-text">
                                 <i class="fa fa-graduation-cap"></i>
                             </div>
                         </div>
                         <select id="prodi" name="prodi" class="custom-select">
                             <option value="Silahkan pilih Prodi Anda">Silahkan pilih Prodi Anda</option>
                             <option value="Teknik Informatika">Teknik Informatika</option>
                             <option value="Sistem Informasi">Sistem Informasi</option>
                             <option value="Bisnis Digital">Bisnis Digital</option>
                         </select>
                     </div>
                 </div>

                 <div class="form-group row">
                     <label for="ipk" class="col-form-label">IPK</label>
                     <div class="input-group">
                         <div class="input-group-prepend">
                             <div class="input-group-text">
                                 <i class="fa fa-graduation-cap"></i>
                             </div>
                         </div>
                         <input id="ipk" name="ipk" placeholder="Masukkan IPK Anda" type="text" class="form-control" pattern="[0-9]+([,\.][0-9]+)?" autocomplete="off" title="Mohon Masukan angka desimal, contoh = 36.4">
                     </div>
                 </div>

                 <div class="form-group row">
                     <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                 </div>
                 <?php echo form_close() ?>
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