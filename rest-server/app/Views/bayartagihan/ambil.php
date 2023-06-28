<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title><?= $title; ?></title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
     <div class="section-header">
          <h1>Pembayaran Tagihan</h1>
     </div>
     <div class="section-body">
          <div class="card">
               <div class="card-header">
                    <a href="<?= site_url('bayartagihan/tambah') ?>" class="btn btn-primary btn-xs">
                         <i class="fas fa-plus"></i>
                    </a>
                    <h4 class="ml-2">Daftar Pembayaran Tagihan</h4>
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
          <!-- TABEL -->
          <div class="card-body">
               <table class="table table-sm">
                    <thead>
                         <tr>
                              <th scope="col">#</th>
                              <th scope="col" class="d-none">id_pmbtag</th>
                              <th scope="col" class="d-none">id_tag</th>
                              <th scope="col">Nama Mahasiswa</th>
                              <th scope="col">NIM</th>
                              <th scope="col">Nama Pembayaran Tagihan</th>
                              <th scope="col">Jumlah Pembayaran</th>
                              <th scope="col">Aksi</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php $i = 1; ?>
                         <?php foreach ($bayartag as $byrtag) : ?>
                              <tr>
                                   <th scope="row"><?= $i++; ?></th>
                                   <td class="d-none"><?= $byrtag['id_pmbtag']; ?></td>
                                   <td class="d-none"><?= $byrtag['id_tag']; ?></td>
                                   <td><?= $byrtag['nama_mhs']; ?></td>
                                   <td><?= $byrtag['nim']; ?></td>
                                   <td><?= $byrtag['nama_pmb']; ?></td>
                                   <td><?= $byrtag['jumlah_bayar']; ?></td>
                                   <td>
                                        <a href="<?= site_url('bayartagihan/ubah/' . $byrtag['id_pmbtag']) ?>" class="btn btn-warning">
                                             <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="<?= site_url('bayartagihan/hapus/' . $byrtag['id_pmbtag']) ?>" class="btn btn-danger">
                                             <i class="fas fa-trash"></i>
                                        </a>
                                   </td>
                              </tr>
                         <?php endforeach; ?>
                    </tbody>
               </table>
          </div>
          <!-- END TABEL -->
</section>
<?= $this->endSection() ?>