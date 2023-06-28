<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title><?= $title; ?></title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
     <div class="section-header">
          <h1>Form Edit Pembayaran</h1>
     </div>
     <div class="section-body">
          <div class="card">
               <div class="card-header">
                    <a href="<?= site_url('bayartagihan') ?>" class="btn btn-primary btn-xs">
                         <i class="fas fa-arrow-left"></i>
                    </a>
                    <h4 class="ml-2">Daftar Pembayaran Tagihan / Edit</h4>
               </div>
               <div class="card-body">
                    <form action="<?= site_url('tagihan') ?>" method="post" autocomplete="off">
                         <div class="form-group row">
                              <label for="nama_mhs" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                              <div class="form-group row">
                                   <label for="id_pmb" class="col-sm-2 col-form-label">ID Tagihan</label>
                                   <div class="col-sm-9">
                                        <select name="id_pmb" id="id_pmb" class="custom-select custom-select-sm">
                                             <option value="<?= $tagihan['id_pmb']; ?>"><?= $tagihan['id_pmb']; ?></option>
                                             <?php foreach ($pembayaran as $pmb) : ?>
                                                  <option value="<?= $pmb['id_pmb']; ?>"><?= $pmb['id_pmb']; ?> (<?= $pmb['nama_pmb']; ?>)</option>
                                             <?php endforeach; ?>
                                        </select>
                                   </div>
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