<div class="container-lg">
  <div class="row mt-5 header-margin">
    <div class="col-md-12">
      <h1 class="fs-2 mb-0"><?= $faskes->nama ?></h1>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <p class="text-muted d-flex align-items-center desc-summary">
        <small><i class="fa fa-star text-warning"></i> <?= $faskes->skor_rating ?> </small>
        <small><i class="fa-solid fa-circle px-1 pb-2"></i></small>
        <small class="fw-bold"><?= $faskes->nama_faskes ?></small>
        <small><i class="fa-solid fa-circle px-1 pb-2"></i></small>
        <small><?= $faskes->alamat ?></small>
      </p>
    </div>
  </div>

  <div class="card mb-3 border-0">
    <div class="row justify-content-between">
      <div class="col-md-7">
        <div class="rounded-4">
          <?php if ($faskes->foto == null) { ?>
            <img src="<?= base_url('uploads/no-img.png') ?>" class="card-img-top rounded-4" alt="..." width="20">
          <?php } else { ?>
            <img src="<?= base_url('uploads/') . $faskes->foto ?>" class="card-img-top rounded-4" alt="..." width="20">
          <?php } ?>
        </div>
      </div>

      <div class="col-md-5">
        <div class="card-body bg-white rounded-4 shadow h-100 p-4">
          <h5 class="card-title">Deskripsi</h5>
          <p class="card-text"><?= $faskes->deskripsi ?></p>
          <small><b>Jumlah Dokter: </b><?= $faskes->jumlah_dokter ?></small>
          <small class="d-block"><b>Jumlah Pegawai: </b><?= $faskes->jumlah_pegawai ?></small>
          <small class="d-block"><b>Website: </b><?= $faskes->website ?></small>
          <small class="d-block"><b>Latlong: </b><?= $faskes->latlong ?></small>
        </div>
      </div>

    </div>
  </div>

  <?php //if($session)
  //echo '<pre>';
  //print_r($_SESSION['logged_in'])
  ?>
  <?php if (isset($_SESSION['logged_in'])) : ?>
    <div class="row mt-5 mx-auto">
      <h6>Apa pendapat anda mengenai fasilitas kesehatan ini?</h6>
      <div class="col-md-7">

        <div class="stars">
          <?= form_open('browse/komentar'); ?>
          <input class="star star-5" id="star-5" type="radio" name="star" value="<?= $nilai_rating[4]['id_rating'] ?>" />
          <label class="star star-5" for="star-5"></label>
          <input class="star star-4" id="star-4" type="radio" name="star" value="<?= $nilai_rating[3]['id_rating'] ?>" />
          <label class="star star-4" for="star-4"></label>
          <input class="star star-3" id="star-3" type="radio" name="star" value="<?= $nilai_rating[2]['id_rating'] ?>" />
          <label class="star star-3" for="star-3"></label>
          <input class="star star-2" id="star-2" type="radio" name="star" value="<?= $nilai_rating[1]['id_rating'] ?>" />
          <label class="star star-2" for="star-2"></label>
          <input class="star star-1" id="star-1" type="radio" name="star" value="<?= $nilai_rating[0]['id_rating'] ?>" />
          <label class="star star-1" for="star-1"></label>
          <span class="card"></span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card border-0">
          <textarea class="card-body rounded-2 shadow border-0" name="isi" id="isi" cols="30" rows="3" placeholder="Tulis pendapat anda..."></textarea>
          <!-- <input type="text" name="isi" id="isi" class="card-body rounded-2 shadow border-0" placeholder="Tulis pendapat anda..."> -->
        </div>
        <button class="btn btn-primary mt-3 w-100 mb-3">Kirim Komentar</button>
        <?= form_close(); ?>
      </div>
    </div>
    <?php else : ?>
      <em><p style="margin-bottom: 15px; margin-top: 80px;">Anda perlu login untuk berkomentar</p></em>
  <?php endif ?>

  <div class="row">
    <div class="col-md-7 px-3 mt-4 mb-2">
      <h3>Ulasan</h3>
      <h3><i class="fa fa-star text-warning"></i><span class="text-muted"> <?= $faskes->skor_rating ?></span></h3>
    </div>

    <div class="col-md-6 mb-3">


      <?php if (isset($komentar[0]->nama_faskes) == $faskes->nama) : ?>
        <?php foreach ($komentar as $k) : ?>
          <?php $k ?>
          <div class="card bg-white rounded-4 shadow border-0 mb-4">
            <div class="card-header d-flex align-items-center">
              <i class="fa-solid fa-user fs-1"></i>

              <div class="ms-3">
                <p class="fs-5 mb-0"> <?= $k->username ?></p>

                <p class="mb-0" style="font-size: .8rem;">
                  <?php
                  switch ($k->nama_rating):
                    case 'Sangat Bagus':
                      $jmlBintang = 5;
                      break;
                    case 'Bagus':
                      $jmlBintang = 4;
                      break;
                    case 'Biasa Aja':
                      $jmlBintang = 3;
                      break;
                    case 'Kurang Bagus':
                      $jmlBintang = 2;
                      break;
                    case 'Jelek':
                      $jmlBintang = 1;
                      break;
                  endswitch;
                  ?>

                  <?php for ($i = 0; $i < $jmlBintang; $i++) : ?>
                    <small><i class="fa fa-star text-warning"></i></small>
                  <?php endfor ?>

                  <span class="fw-bold">- <?= $k->nama_rating ?></span>
                <p class="text-muted mb-0" style="font-size: .8rem;"><?= $k->tanggal ?></p>
                </p>

              </div>

            </div>

            <div class="card-body p-3">
              <blockquote class="blockquote mb-0">
                <p style="font-size: 1rem;"><?= $k->isi ?></p>
                <footer class="blockquote-footer">

                </footer>
              </blockquote>

            </div>
          </div>
        <?php endforeach ?>
      <?php else : ?>
        <p class="px-3">Jadilah yang pertama berkomentar</p>
      <?php endif ?>
    </div>
  </div>
</div>