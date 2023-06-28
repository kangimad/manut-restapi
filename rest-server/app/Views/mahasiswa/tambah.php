<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title><?= $title; ?></title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
     <div class="section-header">
          <h1>Form Tambah Mahasiswa</h1>
     </div>
     <div class="section-body">
          <div class="card">
               <div class="card-header">
                    <a href="<?= site_url('mahasiswa') ?>" class="btn btn-primary btn-xs">
                         <i class="fas fa-arrow-left"></i>
                    </a>
                    <h4 class="ml-2">Daftar Mahasiswa / Create</h4>
               </div>

               <div class="card-body">
                    <form action="<?= site_url('mahasiswa') ?>" method="post" autocomplete="off">
                         <div class="form-group row">
                              <label for="nama_mhs" class="col-sm-2 col-form-label">Nama</label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" id="nama_mhs" placeholder="masukkan nama_mhs" name="nama_mhs" required autofocus>
                              </div>
                         </div>
                         <div class="form-group row">
                              <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" id="nim" placeholder="masukkan nim" name="nim" required>
                              </div>
                         </div>
                         <div class="form-group row">
                              <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" id="jurusan" placeholder="masukkan jurusan" name="jurusan" required>
                              </div>
                         </div>
                         <div class="form-group row">
                              <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" id="angkatan" placeholder="masukkan angkatan" name="angkatan" required>
                              </div>
                         </div>
                         <div class="form-group row">
                              <label for="email" class="col-sm-2 col-form-label">Email</label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" id="email" placeholder="masukkan email" name="email" required>
                              </div>
                         </div>
                         <div class="form-group row">
                              <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" id="foto" placeholder="masukkan foto" name="foto" required>
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