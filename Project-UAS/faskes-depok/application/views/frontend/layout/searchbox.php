
<?php foreach ($faskes as $fas) {$fas;} ?>

<div class="row row-cols-md-12 justify-content-between align-items-center px-3 head-srch header-margin">
  <div class="col-md-5 px-0 pb-2">
    <h6 class="select-title m-0">
      <?php if (isset($kecamatanAll) && !isset($kategoriAll)) { //Kecamatan dipilih All
        if (isset($fas)) {
          echo $fas->nama_faskes . ' di ' . $kecamatanAll;
        } else {
          echo 'Maaf data yang dicari tidak ada';
        }
      } elseif (isset($kategoriAll) && !isset($kecamatanAll)) { //Kategori dipilih All
        echo $kategoriAll . ' di ' . $fas->nama_kecamatan;
      } elseif (isset($kecamatanAll) && isset($kategoriAll)) { //kecamatan & kategori dipilih All
        echo $kategoriAll . ' di ' . $kecamatanAll;
      } else { //Kecamatan & kategori tidak dipilih All
        if (isset($fas)) {
          echo $fas->nama_faskes . ' di ' . $fas->nama_kecamatan;
        } else { 
          echo 'Maaf data yang dicari tidak ada';
        }
      }
      ?>
    </h6>
  </div>
  
  <div class="col-md-4 col-lg-3 shadow rounded-2 p-0">
    <?= form_open('browse/searchBox', 'class = d-flex method = GET') ?>
    <input type="search" name="keyword" class="form-control rounded border-0" style="font-size: .8rem;" placeholder="<?php
      if (isset($kecamatanAll) && !isset($kategoriAll)) { //Kecamatan dipilih All
        if (isset($fas)) {
          echo 'Cari nama ' . $fas->nama_faskes . ' di ' . $kecamatanAll;
        } else {
          echo 'Maaf data yang dicari tidak ada';
        }
      } elseif (isset($kategoriAll) && !isset($kecamatanAll)) { //Kategori dipilih All
        echo 'Cari nama ' . strtolower($kategoriAll) . ' di ' . $fas->nama_kecamatan;
      } elseif (isset($kecamatanAll) && isset($kategoriAll)) { //kecamatan & kategori dipilih All
        echo 'Cari nama ' . strtolower($kategoriAll) . ' di ' . $kecamatanAll;
      } else { //Kecamatan & kategori tidak dipilih All
        if (isset($fas)) {
          echo 'Cari nama ' . strtolower($fas->nama_faskes) . ' di ' . $fas->nama_kecamatan;
        } else {
          echo 'Maaf data yang dicari tidak ada';
        }
      }
      ?>"/>
    <button type="submit" class="btn srch-btn"><i class="fa fa-search"></i></button>
    <?= form_close() ?>
  </div>
</div>