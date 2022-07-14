
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('Homepage') ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>

    </ul>

    <!-- Right navbar links -->
<ul class="navbar-nav ml-auto" style="margin-right: 1px;">
  <li  >
         <a class=" btn btn-sm btn-primary" href="<?= base_url('Login/logout');?>">Sign Out</a>

  </li>
</ul>
      <!-- Messages Dropdown Menu -->
     
      <!-- Notifications Dropdown Menu -->
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('Home');?>" class="brand-link">
      <center>
         <span class="brand-text font-weight-light">FASKES DEPOK</span>
      </center>
     
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
   
        <div class="info">
          <a href="#" class="d-block">
            Welcome, <?= $this->session->userdata('username');?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= site_url('Home');?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              
              </p>
            </a>
          
          </li>
       
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
          
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('Master/faskes');?>" class="nav-link">
                <i class="far fa-circle nav-icon nav-icon"></i>  
                <p>Data Faskes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('Master/kecamatan');?>" class="nav-link">
                <i class="far fa-circle nav-icon nav-icon"></i>
                  <p>Data Kecamatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('Master/jenis_faskes');?>" class="nav-link">
                <i class="far fa-circle nav-icon nav-icon"></i>
                  <p>Data Jenis Faskes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('Master/users');?>" class="nav-link">
                <i class="far fa-circle nav-icon nav-icon"></i>  
                  <p>Data User</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?= site_url('Master/nilai_rating');?>" class="nav-link">
                <i class="far fa-circle nav-icon nav-icon"></i> 
                  <p>Kategori Rating</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?= site_url('Master/komentar');?>" class="nav-link">
                <i class="far fa-circle nav-icon nav-icon"></i> 
                  <p>Data Komentar</p>
                </a>
              </li>
              
            </ul>


      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
