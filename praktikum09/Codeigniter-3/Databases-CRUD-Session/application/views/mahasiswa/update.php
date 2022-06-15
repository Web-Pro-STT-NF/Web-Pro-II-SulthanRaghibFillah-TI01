 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-6">
                <h1><b>Form Update Mahasiswa</b></h1>
             </div>
             <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="index">Index</a></li>
                   <li class="breadcrumb-item active">Update Data <?= $mhsedit->nama ?></li>
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
             <h3 class="card-title"><b>Input Your Data</b></h3>
          </div>
          <div class="card-body">
             <?php $hidden = ['idedit' => $mhsedit->nim] ?>
             <?php echo form_open('mahasiswa/save', '', $hidden) ?>
             <div class="form-group row">
                <label for="nim" class="col-form-label">NIM</label>
                <div class="input-group">
                   <div class="input-group-prepend">
                      <div class="input-group-text">
                         <i class="fa fa-id-card"></i>
                      </div>
                   </div>
                   <input id="nim" name="nim" value="<?= $mhsedit->nim ?>" type="number" class="form-control">
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
                   <input id="nama" name="nama" value="<?= $mhsedit->nama ?>" type="text" class="form-control">
                </div>
             </div>

             <div class="form-group row">
                <label class="col-form-label">Jenis Kelamin</label>
                <?php $checked_L = ($mhsedit->gender == "L") ? "checked" : "" ?>
                <?php $checked_P = ($mhsedit->gender == "P") ? "checked" : "" ?>
                <div class="input-group">
                   <div class="custom-control custom-radio custom-control-inline">
                      <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L" <?= $checked_L ?>>
                      <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                   </div>
                   <div class="custom-control custom-radio custom-control-inline">
                      <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P" <?= $checked_P ?>>
                      <label for="jk_1" class="custom-control-label">Perempuan</label>
                   </div>
                </div>
             </div>
             <div class="form-group row">
                <label for="tmp_lahir" class="col-form-label">Tempat Lahir</label>
                <div class="input-group">
                   <div class="input-group-prepend">
                      <div class="input-group-text">
                         <i class="fa-solid fa-city"></i>
                      </div>
                   </div>
                   <input id="tmp_lahir" name="tmp_lahir" value="<?= $mhsedit->tmp_lahir ?>" type="text" class="form-control">
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
                   <input id="tgl_lahir" name="tgl_lahir" value="<?= $mhsedit->tgl_lahir ?>" type="date" class="form-control">
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
                      <option value="TI">Teknik Informatika</option>
                      <option value="SI">Sistem Informasi</option>
                      <option value="BD">Bisnis Digital</option>
                   </select>
                </div>
             </div>

             <div class="form-group row">
                <label for="ipk" class="col-form-label">IPK</label>
                <div class="input-group">
                   <div class="input-group-prepend">
                      <div class="input-group-text">
                         <i class="fa-solid fa fa-paragraph"></i>
                      </div>
                   </div>
                   <input id="ipk" name="ipk" value="<?= $mhsedit->ipk ?>" type="text" class="form-control" onchange="this.value = (this.value > 4.00) ? 4.00 : ((this.value < 0) ? 0 : this.value);">
                </div>
             </div>

             <div class="form-group row">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
             </div>
             <?php echo form_close() ?>
          </div>
          <!-- /.card-body -->
       </div>
       <!-- /.card -->

    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->