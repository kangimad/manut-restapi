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
                    <a href="<?= site_url('pembayaran') ?>" class="btn btn-primary btn-xs">
                         <i class="fas fa-arrow-left"></i>
                    </a>
                    <h4 class="ml-2">Daftar Pembayaran / Edit</h4>
               </div>

               <div class="card-body">
                    <form action="<?= site_url('pembayaran/perbarui/' . $pembayaran['id_pmb']) ?>" method="post" autocomplete="off">
                         <div class="form-group row">
                              <label for="nama_pmb" class="col-sm-2 col-form-label">Nama Pembayaran</label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" id="nama_pmb" value="<?= $pembayaran['nama_pmb']; ?>" name="nama_pmb" required autofocus>
                              </div>
                         </div>
                         <div class="form-group row">
                              <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" id="jumlah" value="<?= $pembayaran['jumlah']; ?>" name="jumlah" required>
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