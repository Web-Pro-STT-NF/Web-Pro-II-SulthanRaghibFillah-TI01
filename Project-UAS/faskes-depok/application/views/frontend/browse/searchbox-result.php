
<?php //foreach ($faskes as $fas) {$fas;} ?>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 my-4">
    <?php foreach ($faskes as $f) : ?>
      <div class="col">
        <a href="<?= base_url() ?>browse/detail" class="card h-100 border-0 rounded-4 shadow">
        <?php if ($f->foto == null) { ?>
            <img src="<?= base_url('uploads/no-img.png') ?>" class="card-img-top rounded-4" alt="..." width="20">
          <?php } else { ?>
            <img src="<?= base_url('uploads/') . $f->foto ?>" class="card-img-top rounded-4" alt="..." width="20">
          <?php } ?>
          <div class="card-body d-block">
            <p class="card-text"><small class="text-muted"><?= '<i class="fa fa-location-dot"></i> ' . $f->nama_kecamatan . '<i class="fa fa-notes-medical ms-3"></i> ' . $f->nama_faskes ?></small></p>
            <h5 class="card-title mb-1"><?= $f->nama ?></h5>
            <p class="card-text"><?= $f->alamat ?></p>
          </div>
        </a>
      </div>
    <?php endforeach ?>
  </div>
</div>