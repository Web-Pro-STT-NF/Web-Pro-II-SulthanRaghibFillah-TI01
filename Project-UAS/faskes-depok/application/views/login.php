<?php if ($this->session->flashdata('login_gagal')) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong><?= $this->session->flashdata('login_gagal') ?></strong>. Silakan dicek kembali
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <!-- <script type="text/javascript">
               let timerInterval
Swal.fire({
  title: 'Gagal!',
  html: 'Username atau password salah!',
  icon: 'danger',
  timer: 1500,
  
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
  },
  willClose: () => {
    clearInterval(timerInterval)
  }

})
            </script> -->


<?php endif ?>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-8 col-lg-8 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->


                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <img style="margin-bottom: 2%" src="<?= base_url('assets/img/logo_faskes.png'); ?>" height="200">

                                    <h2 class=" mb-4" style="color: black;">FASKES KOTA DEPOK</h2>
                                </div>
                                <form class="user" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="username" aria-describedby="emailHelp" placeholder="Masukan Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password" placeholder="Masukan Password">
                                    </div>

                                    <input type="submit" class="btn btn-primary btn-user btn-block">


                                    <hr>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Lupa Password?</a>
                                    <br>    

                                    <a class="small" href="<?= base_url('Login/');?>register">Register</a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>