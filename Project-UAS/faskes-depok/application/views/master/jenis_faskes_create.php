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
             <h3 class="card-title"><b>Tambah Jenis Faskes</b></h3>
             <a  href="<?= base_url('Master/jenis_faskes') ?>" class="btn btn-warning btn-sm float-right"><i class="fa-solid fa-xmark pr-2"></i>Batal</a>
          </div>

          <div class="card-body">
             <div class="row">
                <div class="col-12">
                   <form method="POST" action="<?= base_url('Master/jenis_faskes_save') ?>" class="was-validated">
                      <div class="form-group">
                         <label for="nama_faskes" class="form-label">Jenis Faskes</label>
                         <input id="nama_faskes" name="nama_faskes" placeholder="Tulis Jenis Faskes Kesehatan Baru" type="text" class="form-control" required>
                      </div>
                      <div class="col-12 pl-0">
                         <button class="btn btn-primary" type="submit">Tambah Jenis Faskes</button>
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