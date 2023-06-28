<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title><?= $title; ?></title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
     <div class="section-header">
          <h1>Form Tambah Tagihan</h1>
     </div>
     <div class="section-body">
          <div class="card">
               <div class="card-header">
                    <a href="<?= site_url('tagihan') ?>" class="btn btn-primary btn-xs">
                         <i class="fas fa-arrow-left"></i>
                    </a>
                    <h4 class="ml-2">Daftar Tagihan / Create</h4>
               </div>
               <div class="card-body">
                    <form action="<?= site_url('tagihan') ?>" method="post" autocomplete="off">
                         <div class="form-group row">
                              <label for="id_pmb" class="col-sm-2 col-form-label">ID Tagihan</label>
                              <div class="col-sm-9">
                                   <select name="id_pmb" id="id_pmb" class="custom-select custom-select-sm">
                                        <?php foreach ($pembayaran as $pmb) : ?>
                                             <option value="" hidden></option>
                                             <option value="<?= $pmb['id_pmb']; ?>"><?= $pmb['id_pmb']; ?> (<?= $pmb['nama_pmb']; ?>)</option>
                                        <?php endforeach; ?>
                                   </select>
                              </div>
                         </div>
                         <div class="form-group row">
                              <label for="nama_pmb" class="col-sm-2 col-form-label">Nama Tagihan</label>
                              <div class="col-sm-9">
                                   <select name="nama_pmb" id="nama_pmb" class="custom-select custom-select-sm">
                                        <?php foreach ($pembayaran as $pmb) : ?>
                                             <option value="" hidden></option>
                                             <option value="<?= $pmb['nama_pmb']; ?>"><?= $pmb['id_pmb']; ?> (<?= $pmb['nama_pmb']; ?>)</option>
                                        <?php endforeach; ?>
                                   </select>
                              </div>
                         </div>
                         <div class="form-group row">
                              <label for="id_mhs" class="col-sm-2 col-form-label">ID Mahasiswa</label>
                              <div class="col-sm-9">
                                   <select name="id_mhs" id="id_mhs" class="custom-select custom-select-sm">
                                        <?php foreach ($mahasiswa as $mhs) : ?>
                                             <option value="" hidden></option>
                                             <option value="<?= $mhs['id_mhs']; ?>"><?= $mhs['id_mhs']; ?> (<?= $mhs['nama_mhs']; ?>)</option>
                                        <?php endforeach; ?>
                                   </select>
                              </div>
                         </div>
                         <div class="form-group row">
                              <label for="nama_mhs" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                              <div class="col-sm-9">
                                   <select name="nama_mhs" id="nama_mhs" class="custom-select custom-select-sm">
                                        <?php foreach ($mahasiswa as $mhs) : ?>
                                             <option value="" hidden></option>
                                             <option value="<?= $mhs['nama_mhs']; ?>"><?= $mhs['id_mhs']; ?> (<?= $mhs['nama_mhs']; ?>)</option>
                                        <?php endforeach; ?>
                                   </select>
                              </div>
                         </div>
                         <div class="form-group row">
                              <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                              <div class="col-sm-9">
                                   <select name="nim" id="nim" class="custom-select custom-select-sm">
                                        <?php foreach ($mahasiswa as $mhs) : ?>
                                             <option value="" hidden></option>
                                             <option value="<?= $mhs['nim']; ?>"><?= $mhs['id_mhs']; ?> (<?= $mhs['nim']; ?>)</option>
                                        <?php endforeach; ?>
                                   </select>
                              </div>
                         </div>
                         <div class="form-group row">
                              <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                              <div class="col-sm-9">
                                   <select name="jumlah" id="jumlah" class="custom-select custom-select-sm">
                                        <?php foreach ($pembayaran as $pmb) : ?>
                                             <option value="" hidden></option>
                                             <option value="<?= $pmb['jumlah']; ?>"><?= $pmb['id_pmb']; ?> (<?= $pmb['jumlah']; ?>)</option>
                                        <?php endforeach; ?>
                                   </select>
                              </div>
                         </div>
                         <div class="form-group row">
                              <label for="status" class="col-sm-2 col-form-label">Status</label>
                              <div class="col-sm-9">
                                   <select name="status" id="status" class="custom-select custom-select-sm">
                                        <option value="" hidden></option>
                                        <option value="Belum Lunas">Belum Lunas</option>
                                        <option value="Lunas">Lunas</option>
                                   </select>
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