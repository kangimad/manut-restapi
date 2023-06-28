<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title><?= $title; ?></title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
     <div class="section-header">
          <h1>Form Edit Tagihan</h1>
     </div>
     <div class="section-body">
          <div class="card">
               <div class="card-header">
                    <a href="<?= site_url('tagihan') ?>" class="btn btn-primary btn-xs">
                         <i class="fas fa-arrow-left"></i>
                    </a>
                    <h4 class="ml-2">Daftar Pembayaran Tagihan / Edit</h4>
               </div>

               <div class="card-body">
                    <form action="<?= site_url('bayartagihan/update/' . $tagihan['id_tag']) ?>" method="post" autocomplete="off">
                         <div class="form-group row">
                              <label for="nama_tag" class="col-sm-2 col-form-label">Nama Tagihan</label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" id="nama_tag" value="<?= $tagihan['nama_tag']; ?>" name="nama_tag" required autofocus>
                              </div>
                         </div>
                         <div class="form-group row">
                              <label for="kode_tag" class="col-sm-2 col-form-label">Kode Tagihan</label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" id="kode_tag" value="<?= $tagihan['kode_tag']; ?>" name="kode_tag" required>
                              </div>
                         </div>
                         <div class="form-group row">
                              <label for="nominal" class="col-sm-2 col-form-label">Nominal</label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" id="nominal" value="<?= $tagihan['nominal']; ?>" name="nominal" required>
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