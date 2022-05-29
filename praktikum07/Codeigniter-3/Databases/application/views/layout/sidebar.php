  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('index.php" class="brand-link') ?>">
      <img src="<?= base_url('public/dist/img/CodeIgniter.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CodeIgniter X LTE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('public/dist/img/rafii-user.jpg') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Sulthan Raghib Fillah</a>
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
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>index.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>CodeIgniter 3.1.13</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>index.php/dashboard/adminlte" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>AdminLTE 3.1.0</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-user-graduate"></i>
              <p>
                Mahasiswa
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>index.php/mahasiswa/index" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Index Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>index.php/mahasiswa/create" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Form Mahasiswa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-computer"></i>
              <p>
                Program Studi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>index.php/prodi/index" class="nav-link">
                  <i class="far fa-solid fa-database nav-icon text-info"></i>
                  <p>Prodi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-graduation-cap"></i>
              <p>
                Dosen
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>index.php/dosen/index" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Index Dosen</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-book-open-reader"></i>
              <p>
                Mata Kuliah
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>index.php/matakuliah/index" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Index Matakuliah</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-user"></i>
              <p>
                My Info Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="https://github.com/SulthanRaghib" class="nav-link">
                  <i class="nav-icon fa-brands fa-github"></i>
                  <p>
                    GitHub
                  </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="https://www.linkedin.com/in/sulthan-raghib-fillah-3a9973173/" class="nav-link">
                  <i class="nav-icon fa-brands fa-linkedin"></i>
                  <p>
                    Linkedin
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>