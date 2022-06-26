<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Sukses</title>

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
            <h1><b>Pendaftaran Berhasil</b></h1>
         </div>
      </div>
      <div class="card">
         <div class="card-body login-card-body">
            <h5 class="mb-0 text-center" style="color: red;">
               <b> Silahkan <a href="<?= base_url() ?>index.php/login" class="text-right hvr-pulse-shrink mb-1">Login Disini!</a></b>
            </h5>
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