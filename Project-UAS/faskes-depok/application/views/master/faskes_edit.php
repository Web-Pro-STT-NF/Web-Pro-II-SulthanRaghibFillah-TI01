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
                      <li class="breadcrumb-item active">Faskes ID = <?= $faskes->id ?></li>
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
             <h3 class="card-title pt-1"><b>Edit Faskes</b></h3>
             <a  href="<?= base_url('Master/faskes') ?>" class="btn btn-warning btn-sm float-right"><i class="fa-solid fa-xmark pr-2"></i>Batal</a>
          </div>
          <div class="card-body">
             <div class="row">
                <div class="col-12">
                <?php foreach ($faskes_edit as $fe) : ?>
                   <form method="POST" action="<?= base_url('Master/faskes_update') ?>" class="was-validated">
                      <input type="hidden" name="id" value="<?= $fe->id ?>">
                      <div class="form-group">
                         <label for="nama" class="form-label">Nama Fasilitas</label>
                         <input id="nama" name="nama" value="<?= $fe->nama ?>" type="text" class="form-control" required>
                      </div>
                      <div class="form-group">
                         <label for="alamat" class="form-label">Alamat Faskes</label>
                         <textarea name="alamat" id="alamat" cols="30" rows="2" class="form-control" required><?= $fe->alamat ?></textarea>
                      </div>
                      <div class="form-group">
                         <label for="kecamatan_id" class="form-label">Kecamatan</label>
                         <select id="validatedInputGroupSelect" name="kecamatan_id" class="form-control" value="" required>
                               <option value="<?php echo $faskes->id_kecamatan; ?>"><?php echo $faskes->nama_kecamatan; ?></option>
                         </select>
                      </div>
                      <div class="form-group">
                         <label for="latlong" class="form-label">Latitude dan Longetitude</label>
                         <input id="latlong" name="latlong" value="<?= $fe->latlong ?>" type="text" class="form-control" required>
                      </div>
                      <div class="form-group">
                         <label for="deskripsi" class="form-label">Deskripsi</label>
                         <textarea name="deskripsi" id="deskripsi" cols="30" rows="2" class="form-control" required><?= $fe->deskripsi ?></textarea>
                      </div>
                      <div class="form-group">
                         <label for="skor_rating" class="form-label">Skor Rating</label>
                         <input id="skor_rating" name="skor_rating" value="<?= $fe->skor_rating ?>" type="text" class="form-control" onchange="this.value = (this.value > 10.0) ? 10.0 : ((this.value < 0) ? 0 : this.value);" required>
                      </div>
                      <!-- <label for="foto" class="form-label">Foto 1</label>
                      <div class="input-group is-invalid">
                         <div class="custom-file">
                            <input name="foto" type="file" class="custom-file-input" value="<?= $fe->foto ?>" required>
                            <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
                         </div>
                      </div>
                      <label for="foto" class="form-label mt-3">Foto 2</label>
                      <div class="input-group is-invalid">
                         <div class="custom-file">
                            <input name="foto2" type="file" class="custom-file-input" value="<?= $fe->foto2 ?>" required>
                            <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
                         </div>
                         <div class="input-group-append">
                            <button class="btn btn-success" type="button">Button</button>
                         </div>
                      </div>
                      <label for="foto" class="form-label mt-3">Foto 3</label>
                      <div class="input-group is-invalid">
                         <div class="custom-file">
                            <input name="foto3" type="file" class="custom-file-input" value="<?= $fe->foto3 ?>" required>
                            <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
                         </div>
                         <div class="input-group-append">
                            <button class="btn btn-success" type="button">Button</button>
                         </div>
                      </div> -->
                      <div class="form-group mt-3">
                         <label for="website" class="form-label">Website</label>
                         <input id="website" name="website" value="<?= $fe->website ?>" type="text" class="form-control" required>
                      </div>
                      <div class="form-group">
                         <label for="jumlah_dokter" class="form-label">Jumlah Dokter</label>
                         <input id="jumlah_dokter" name="jumlah_dokter" value="<?= $fe->jumlah_dokter ?>" type="number" class="form-control" required>
                      </div>
                      <div class="form-group">
                         <label for="jumlah_pegawai" class="form-label">Jumlah Pegawai</label>
                         <input id="jumlah_pegawai" name="jumlah_pegawai" value="<?= $fe->jumlah_pegawai ?>" type="number" class="form-control" required>
                      </div>
                      <div class="form-group">
                         <label for="jenis_id" class="form-label">Jenis Faskes</label>
                         <select id="validatedInputGroupSelect" name="jenis_faskes_id" class="form-control" required>
            
                               <option value="<?= $faskes->id_faskes ?>"><?= $faskes->nama_faskes ?></option>
                         </select>
                      </div>
                      <div class="form-group row">
                         <div class="col-12">
                            <button class="btn btn-primary" type="submit">Update</button>
                         </div>
                      </div>
                   </form>
                <?php endforeach ?>
                </div>
             </div>
             <!-- /.card-body -->
          </div>
          <!-- /.card -->

    </section>
    <!-- /.content -->
 </div>

 <!-- /.content-wrapper -->