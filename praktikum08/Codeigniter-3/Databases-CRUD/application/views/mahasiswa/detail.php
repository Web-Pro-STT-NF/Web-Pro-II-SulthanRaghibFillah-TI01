 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-6">
                <h1><b>Detail Mahasiswa</b></h1>
             </div>
             <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="<?= base_url() ?>index.php/mahasiswa/index">Index</a></li>
                   <li class="breadcrumb-item active"><?= $mahasiswa->nim ?></li>
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
             <h3 class="card-title"><b>Mahasiswa <?= $mahasiswa->nama ?></b></h3>
          </div>

          <div class="card-body">
             <div class="row">
                <div class="col-12">
                   <h2>Detail</h2>
                </div>
                <div class="col-12 table-responsive">
                   <table>
                      <tr>
                         <td style="padding-right: 6rem;">NIM</td>
                         <td>: <?= $mahasiswa->nim ?></td>
                      </tr>
                      <tr>
                         <td>Nama</td>
                         <td>: <?= $mahasiswa->nama ?></td>
                      </tr>
                      <tr>
                         <td>Jenis Kelamin</td>
                         <td>: <?= $mahasiswa->gender ?></td>
                      </tr>
                      <tr>
                         <td>Tempat Lahir</td>
                         <td>: <?= $mahasiswa->tmp_lahir ?></td>
                      </tr>
                      <tr>
                         <td>Tanggal Lahir</td>
                         <td>: <?= $mahasiswa->tgl_lahir ?></td>
                      </tr>
                      <tr>
                         <td>Prodi</td>
                         <td >: <?= $mahasiswa->prodi_kode ?></td>
                      </tr>
                      <tr>
                         <td>IPK</td>
                         <td >: <?= '<b>' . $mahasiswa->ipk . '</b>' ?></td>
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