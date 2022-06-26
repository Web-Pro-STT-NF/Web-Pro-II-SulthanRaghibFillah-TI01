<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Login</title>

   <!-- Icon Title -->
   <link rel="icon" href="<?= base_url() ?>public/dist/img/rafii-user.jpg" type="image/icon type">
   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?= base_url() ?>public/plugins/fontawesome-free/css/all.min.css">
   <!-- icheck bootstrap -->
   <link rel="stylesheet" href="<?= base_url() ?>public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/adminlte.min.css">
   <!-- link Icon Fontawesome -->
   <script src="https://kit.fontawesome.com/a388e38538.js" crossorigin="anonymous"></script>
   <!-- Hover.css -->
   <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/Hover.css">
   <!-- Magic.css -->
   <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/magic.css">

   <style>
      body {
         background-image: url("<?= base_url() ?>public/dist/img/login.jpg");
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-size: cover;
         animation-name: disolve;
         animation-duration: 1s;
      }

      .bg-transparant {
         background-color: #1a252f7c;
         color: white;
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

</head>

<body class="hold-transition login-page">
   <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary bg-transparant">
         <div class="card-header text-center ">
            <h1><b>Welcome</b></h1>
         </div>
      </div>
      <div class="card">
         <div class="card-body login-card-body">
            <p class="login-box-msg">Silahkan Masukkan <br>Username dan Password Anda</p>

            <?= form_open('login/otentikasi') ?>
            <div class="input-group mb-3">
               <input type="text" class="form-control" placeholder="Username" name="username">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span><i class="fa-solid fa-user"></i></span>
                  </div>
               </div>
            </div>
            <div class="input-group mb-3">
               <input type="password" class="form-control" placeholder="Password" name="password">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-lock"></span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-8">
                  <div class="icheck-primary">
                     <input type="checkbox" id="remember">
                     <label for="remember">
                        Remember Me
                     </label>
                  </div>
               </div>
               <!-- /.col -->
               <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block hvr-float-shadow">Masuk</button>
               </div>
               <!-- /.col -->
            </div>
            <?= form_close() ?>

            <div class="social-auth-links text-center mt-2 mb-3">
               <a href="#" class="btn btn-block btn-primary">
                  <i class="fab fa-facebook mr-2"></i> Masuk dengan Facebook
               </a>
               <a href="#" class="btn btn-block btn-danger">
                  <i class="fab fa-google-plus mr-2"></i> Masuk dengan Google+
               </a>
            </div>
            <!-- /.social-auth-links -->
            <p class="mb-0 text-right" style="color: red;">
               <b>belum memiliki akun? <a href="<?= base_url() ?>index.php/register" class="text-right hvr-underline-from-center mb-1">Daftar Baru</a></b>
            </p>
         </div>
         <!-- /.card-body -->
      </div>
      <!-- /.card -->
   </div>
   <!-- /.login-box -->

   <!-- jQuery -->
   <script src="<?= base_url() ?>public/plugins/jquery/jquery.min.js"></script>
   <!-- Bootstrap 4 -->
   <script src="<?= base_url() ?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- AdminLTE App -->
   <script src="<?= base_url() ?>public/dist/js/adminlte.min.js"></script>
</body>

</html>