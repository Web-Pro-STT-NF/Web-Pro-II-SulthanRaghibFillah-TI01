  <!-- Search Modal -->
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary position-fixed modal-btn d-md-none" data-bs-toggle="modal" data-bs-target="#searchModal">
    <i class="fa fa-location-dot"></i>
  </button>

  <!-- Modal -->
  <div class="modal d-md-none" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content border-0">

        <?= form_open('browse/search', 'method = GET'); ?>
        <!-- Specific Faskes Search Card -->
        <div class="container d-flex justify-content-center p-0">
          <div class="row row-cols-sm-12 w-100 rounded-4 bg-glass align-items-center justify-content-center py-2">

            <div class="col-md-4 mt-2">
              <h6 class="select-title"><i class="fa fa-location-dot me-2"></i>Kecamatan</h6>

              <select id="kecamatan" name="kecamatan" class="form-select btn btn-primary border-0 w-100">
                <option value="">All</option>
                <?php foreach ($kecamatan as $i) { ?>
                  <option value="<?php echo $i['nama_kecamatan']; ?>"><?php echo $i['nama_kecamatan']; ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="col-md-4 mt-3">
              <h6 class="select-title"><i class="fa fa-notes-medical me-2"></i>Kategori</h6>

              <select id="kategori" name="kategori" class="form-select btn btn-primary border-0 w-100">
                <option value="">All</option>
                <?php foreach ($jenis_faskes as $jf) { ?>
                  <option value="<?= $jf['nama_faskes'] ?>"><?= $jf['nama_faskes'] ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="col-md-4 text-center col-btn-search">
              <button name="submit" type="submit" class="btn btn-primary w-100 text-center mt-4 mb-3 border-0 search">
                <i class="fa fa-magnifying-glass"></i>
                <span class="cari">Cari</span>
              </button>
            </div>
            <?= form_close() ?>
          </div>
        </div>

      </div>
    </div>
  </div>