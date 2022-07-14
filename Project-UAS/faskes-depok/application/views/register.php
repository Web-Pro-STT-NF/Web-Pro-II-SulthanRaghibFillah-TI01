<?php if ($this->session->flashdata('sukses')) : ?>) { ?>
    <script type="text/javascript">
               let timerInterval
Swal.fire({
  title: 'Berhasil!',
  html: 'Silahkan login menggunakan akun anda!',
  icon: 'success',
  timer: 1500,
  
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
  },
  willClose: () => {
    clearInterval(timerInterval)
  }

})
            </script>

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
                              <center> <h4 style="color:black; margin-bottom: 8%;">Register New Account</h4> </center>  
                                <form class="user" action="<?php echo base_url('login/tambah_register'); ?>" method="post">
                                    <div class="form-group">
 <label style="color:black;">Username</label>
                                        <input type="text" class="form-control form-control-user" name="username" aria-describedby="emailHelp" placeholder="Masukan Username" required> 
                                    </div>
                                    <div class="form-group">
                                         <label style="color:black;">Email</label>
                                        <input type="email" class="form-control form-control-user" name="email" placeholder="Masukan Password" required>
                                    </div>
                                    <div class="form-group">
                                         <label style="color:black;">Password</label>
                                        <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Masukan Password" required>
                                    </div>
                                    <div class="form-group">
                                         <label style="color:black;">Confirm Password</label>
                                        <input type="password" class="form-control form-control-user" name="password" id="confirm_password" placeholder="Masukan Password" required>
                                        <span id='message'></span>
                                    </div>

                                    <input type="submit" class="btn btn-primary btn-user btn-block">
                                    
                                    <hr>
                                    <a class="btn btn-primary btn-block" href="<?= base_url('Login');?>">Kembali</a>

                                </form>
                                <hr>
                         
<script>
    $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Password sama').css('color', 'green');
  } else 
    $('#message').html('Password tidak sama!').css('color', 'red');
});
</script>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>