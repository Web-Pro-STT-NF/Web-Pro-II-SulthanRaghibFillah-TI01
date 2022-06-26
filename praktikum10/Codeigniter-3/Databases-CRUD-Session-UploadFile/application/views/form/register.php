<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Pendaftaran</title>

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
   <!-- Icon Fontawesome -->
   <script src="https://kit.fontawesome.com/a388e38538.js" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
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

      @keyframes disolve {
         from {
            opacity: 0;
         }

         to {
            opacity: 100;
         }
      }

      .bg-transparant {
         background-color: #1a252f7c;
         color: white;
      }

      .cursor-pointer {
         cursor: pointer;
         color: #42A5F5
      }

      .card-block {
         width: 150px;
         border: 1px solid lightgrey;
         border-radius: 5px !important;
         background-color: #FAFAFA;
         margin-bottom: 10px
      }

      .card-body.show {
         display: block
      }

      .card {
         padding-bottom: 5px;

      }

      .radio {
         display: inline-block;
         border-radius: 0;
         box-sizing: border-box;
         cursor: pointer;
         color: #42A5F5;
         font-weight: 500;
         -webkit-filter: grayscale(100%);
         -moz-filter: grayscale(100%);
         -o-filter: grayscale(100%);
         -ms-filter: grayscale(100%);
         filter: grayscale(100%)
      }

      .radio1 {
         display: inline-block;
         border-radius: 0;
         box-sizing: border-box;
         color: #42A5F8;
         font-weight: 500;
         -webkit-filter: grayscale(100%);
         -moz-filter: grayscale(100%);
         -o-filter: grayscale(100%);
         -ms-filter: grayscale(100%);
         filter: grayscale(100%)
      }

      .radio:hover {
         box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.1)
      }

      .radio.selected {
         box-shadow: 0px 8px 16px 0px #EEEEEE;
         -webkit-filter: grayscale(0%);
         -moz-filter: grayscale(0%);
         -o-filter: grayscale(0%);
         -ms-filter: grayscale(0%);
         filter: grayscale(0%);
         border: 1px solid #42A5F5;
      }

      .radio1.selected1 {
         -webkit-filter: grayscale(0%);
         -moz-filter: grayscale(0%);
         -o-filter: grayscale(0%);
         -ms-filter: grayscale(0%);
         filter: grayscale(0%);
      }

      .selected {
         background-color: #E0F2F1;
      }

      .form_radio {
         display: none;
      }
   </style>

</head>

<body class="hold-transition login-page">
   <script>
      $(document).ready(function() {
         $('.radio-group .radio').click(function() {
            $('.selected .fa').removeClass('fa-check');
            $('.radio').removeClass('selected');
            $(this).addClass('selected');
         });
      });
   </script>
   <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary bg-transparant">
         <div class="card-header text-center ">
            <h1><b>Pendaftaran</b></h1>
         </div>
      </div>
      <div class="card">
         <div class="card-body login-card-body">
            <p class="login-box-msg">Silahkan Masukkan Data Anda</p>

            <?= form_open('register/save') ?>
            <input type="hidden" name="id" value="">
            <label for="nama" class="form-label mb-1">Username</label>
            <div class="input-group mb-2">
               <input type="text" class="form-control" placeholder="Username" name="username" required>
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span><i class="fa-solid fa-user"></i></span>
                  </div>
               </div>
            </div>
            <label for="email" class="form-label mb-1">Email</label>
            <div class="input-group mb-2">
               <input type="email" class="form-control" placeholder="Email" name="email" required>
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fa-solid fa-at"></span>
                  </div>
               </div>
            </div>
            <label for="password" class="form-label mb-1">Password</label>
            <div class="input-group mb-2">
               <input type="password" class="form-control" placeholder="Password" name="password" required>
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-lock"></span>
                  </div>
               </div>
            </div>
            <div class="form-group mb-0">
               <label>ROLE</label>
               <div class="radio-group">
                  <input type="radio" class="form_radio" value="MAHASISWA" name="role" id="mahasiswa" required>
                  <label for="mahasiswa" class="mb-0">
                     <div class="col-auto mx-1 card-block py-0 text-center radio">
                        <div class="flex-row">
                           <div class="col">
                              <div><img class="mt-3" src="https://i.postimg.cc/Prhp7W05/mahasiswa-removebg-preview.png" width="100" height="100"></div>
                              <p class="mb-1">MAHASISWA</p>
                           </div>
                        </div>
                     </div>
                  </label>
                  <input type="radio" class="form_radio" value="ADMIN" name="role" id="admin" required>
                  <label for="admin" class="mb-0">
                     <div class="col-auto card-block py-0 text-center radio ">
                        <div class="flex-row">
                           <div class="col">
                              <div><img class="mt-3" src="https://i.postimg.cc/RFVK2cWt/admin-removebg-preview.png" width="100" height="100"></div>
                              <p class="mb-1">ADMIN</p>
                           </div>
                        </div>
                     </div>
                  </label>
               </div>
            </div>
            <div class="row mb-0">
               <div class="col-8">
               </div>
               <!-- /.col -->
               <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block mb-1 hvr-float-shadow">Daftar</button>
               </div>
               <!-- /.col -->
            </div>
            <?= form_close() ?>
            <b>
               <p class="mb-0 text-right" style="color: red;">
                  sudah memiliki akun? <a href="<?= base_url() ?>index.php/login" class="text-right  hvr-underline-from-center mb-1">Login Disini</a>
               </p>
            </b>
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