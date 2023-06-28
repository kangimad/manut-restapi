<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title><?= $title; ?></title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
     <div class="section-header">
          <h1>Form Tambah Pembayaran Tagihan</h1>
     </div>
     <div class="section-body">
          <div class="card">
               <div class="card-header">
                    <a href="<?= site_url('bayartagihan') ?>" class="btn btn-primary btn-xs">
                         <i class="fas fa-arrow-left"></i>
                    </a>
                    <h4 class="ml-2">Daftar Pembayaran / Create</h4>
               </div>

               <div class="card-body">
                    <form action="<?= site_url('bayartagihan') ?>" method="post" autocomplete="off">
                         <div class="form-group row">
                              <label for="id_tag" class="col-sm-2 col-form-label">ID Tagihan</label>
                              <div class="col-sm-9">
                                   <select name="id_tag" id="id_tag" class="custom-select custom-select-sm">
                                        <?php foreach ($tagihan as $tag) : ?>
                                             <option value="" hidden></option>
                                             <option value="<?= $tag['id_tag']; ?>"><?= $tag['id_tag']; ?> (<?= $tag['nama_pmb']; ?> | <?= $tag['nama_mhs']; ?>)</option>
                                        <?php endforeach; ?>
                                   </select>
                              </div>
                         </div>
                         <div class="form-group row">
                              <label for="nama_pmb" class="col-sm-2 col-form-label">Nama Tagihan</label>
                              <div class="col-sm-9">
                                   <select name="nama_pmb" id="nama_pmb" class="custom-select custom-select-sm">
                                        <?php foreach ($tagihan as $tag) : ?>
                                             <option value="" hidden></option>
                                             <option value="<?= $tag['nama_pmb']; ?>"><?= $tag['nama_pmb']; ?> (<?= $tag['nama_mhs']; ?>)</option>
                                        <?php endforeach; ?>
                                   </select>
                              </div>
                         </div>

                         <div class="form-group row">
                              <label for="nama_mhs" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                              <div class="col-sm-9">
                                   <select name="nama_mhs" id="nama_mhs" class="custom-select custom-select-sm">
                                        <?php foreach ($tagihan as $tag) : ?>
                                             <option value="" hidden></option>
                                             <option value="<?= $tag['nama_mhs']; ?>"><?= $tag['nama_mhs']; ?> (<?= $tag['nama_pmb']; ?>)</option>
                                        <?php endforeach; ?>
                                   </select>
                              </div>
                         </div>
                         <div class="form-group row">
                              <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                              <div class="col-sm-9">
                                   <select name="nim" id="nim" class="custom-select custom-select-sm">
                                        <?php foreach ($tagihan as $tag) : ?>
                                             <option value="" hidden></option>
                                             <option value="<?= $tag['nim']; ?>"><?= $tag['nim']; ?> (<?= $tag['nama_mhs']; ?>)</option>
                                        <?php endforeach; ?>
                                   </select>
                              </div>
                         </div>
                         <div class="form-group row">
                              <label for="jumlah_bayar" class="col-sm-2 col-form-label">Jumlah Pembayaran</label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" id="jumlah_bayar" placeholder="Masukkan Jumlah Pembayaran" name="jumlah_bayar" required>
                              </div>
                         </div>
                         <div>
                              <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"> Save</i></button>
                              <button type="reset" class="btn btn-secondary">Reset</button>
                         </div>
                    </form>
               </div>
          </div>

     </div>
</section>
<?= $this->endSection(); ?>