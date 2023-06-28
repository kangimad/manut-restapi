<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title><?= $title; ?></title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
     <div class="section-header">
          <h1>Tagihan</h1>
     </div>
     <div class="section-body">
          <div class="card">
               <div class="card-header">
                    <a href="<?= site_url('pembayaran/tambah') ?>" class="btn btn-primary btn-xs">
                         <i class="fas fa-plus"></i>
                    </a>
                    <h4 class="ml-2">Daftar Tagihan</h4>
               </div>

               <!-- Session -->
               <?php if (session()->getFlashdata('tambah')) : ?>
                    <div class="alert alert-success alert-dismissible show fade">
                         <div class="alert-body">
                              <button class="close" data-dismiss="alert">x</button>
                              <b>Success ! </b>
                              <?= session()->getFlashdata('tambah') ?>
                         </div>
                    </div>
               <?php endif; ?>

               <?php if (session()->getFlashdata('hapus')) : ?>
                    <div class="alert alert-success alert-dismissible show fade">
                         <div class="alert-body">
                              <button class="close" data-dismiss="alert">x</button>
                              <b>Success ! </b>
                              <?= session()->getFlashdata('hapus') ?>
                         </div>
                    </div>
               <?php endif; ?>

               <?php if (session()->getFlashdata('ubah')) : ?>
                    <div class="alert alert-success alert-dismissible show fade">
                         <div class="alert-body">
                              <button class="close" data-dismiss="alert">x</button>
                              <b>Success ! </b>
                              <?= session()->getFlashdata('ubah') ?>
                         </div>
                    </div>
               <?php endif; ?>
               <!-- End Session -->

          </div>
          <div class="card-body">
               <table class="table table-sm">
                    <thead>
                         <tr>
                              <th scope="col">#</th>
                              <th scope="col" class="d-none">id_pmb</th>
                              <th scope="col">Nama Pembayaran</th>
                              <th scope="col">Jumlah</th>
                              <th scope="col">Action</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php $i = 1; ?>
                         <?php foreach ($pembayaran as $pmb) : ?>
                              <tr>
                                   <th scope="row"><?= $i++; ?></th>
                                   <td class="d-none"><?= $pmb['id_pmb']; ?></td>
                                   <td><?= $pmb['nama_pmb']; ?></td>
                                   <td><?= $pmb['jumlah']; ?></td>
                                   <td>
                                        <a href="<?= site_url('pembayaran/ubah/' . $pmb['id_pmb']) ?>" class="btn btn-warning">
                                             <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="<?= site_url('pembayaran/hapus/' . $pmb['id_pmb']) ?>" class="btn btn-danger">
                                             <i class="fas fa-trash"></i>
                                        </a>
                                   </td>
                              </tr>
                         <?php endforeach; ?>
                    </tbody>
               </table>
          </div>
</section>
<?= $this->endSection() ?>