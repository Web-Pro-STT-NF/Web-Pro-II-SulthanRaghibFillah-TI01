
  <div class="row row-cols-md-12 justify-content-between align-items-center px-3 head-srch">
    <div class="col-md-5 px-0 pb-2">
      <h6 class="select-title m-0">Faskes di Depok</h6>
    </div>

    <div class="col-md-4 col-lg-3 shadow rounded-2 p-0">
      <?= form_open('browse/searchBox', 'class = d-flex method = GET') ?>
      <input type="search" class="form-control rounded border-0" placeholder="Cari nama faskes di Depok" style="font-size: .8rem;" />
      <button type="submit" class="btn srch-btn"><i class="fa fa-search"></i></button>
      <?= form_close() ?>
    </div>
  </div>

  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 mt-4">
    <?php foreach ($faskes as $f) : ?>
      <div class="col">
        <a href="<?= base_url() ?>browse/detail" class="card h-100 border-0 rounded-4 shadow">
        <?php if ($f->foto == null) { ?>
            <img src="<?= base_url('uploads/no-img.png') ?>" class="card-img-top rounded-4" alt="..." width="20">
          <?php } else { ?>
            <img src="<?= base_url('uploads/') . $f->foto ?>" class="card-img-top rounded-4" alt="..." width="20">
          <?php } ?>
          <div class="card-body d-block">
            <p class="card-text"><small class="text-muted"><?='<i class="fa fa-location-dot"></i> ' . $f->nama_kecamatan . '<i class="fa fa-notes-medical ms-3"></i> ' . $f->nama_faskes ?></small></p>
            <h5 class="card-title mb-1"><?= $f->nama ?></h5>
            <p class="card-text"><?= $f->alamat ?></p>
          </div>
        </a>
      </div>
    <?php endforeach ?>
  </div>
</div>