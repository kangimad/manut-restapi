<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title><?= $title; ?></title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
     <div class="section-header">
          <h1>Mahasiswa</h1>
     </div>
     <div class="section-body">
          <div class="card">
               <div class="card-header">
                    <a href="<?= site_url('mahasiswa/tambah') ?>" class="btn btn-primary btn-xs">
                         <i class="fas fa-plus"></i>
                    </a>
                    <h4 class="ml-2">Daftar Mahasiswa</h4>
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
                              <th scope="col">Foto</th>
                              <th scope="col">Nama</th>
                              <th scope="col">NIM</th>
                              <th scope="col">Jurusan</th>
                              <th scope="col">Angkatan</th>
                              <th scope="col">Email</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php $i = 1; ?>
                         <?php foreach ($mahasiswa as $mhs) : ?>
                              <tr>
                                   <th scope="row"><?= $i++; ?></th>
                                   <td><?= $mhs['foto']; ?></td>
                                   <td><?= $mhs['nama_mhs']; ?></td>
                                   <td><?= $mhs['nim']; ?></td>
                                   <td><?= $mhs['jurusan']; ?></td>
                                   <td><?= $mhs['angkatan']; ?></td>
                                   <td><?= $mhs['email']; ?></td>
                                   <td>
                                        <a href="<?= site_url('mahasiswa/ubah/' . $mhs['id_mhs']) ?>" class="btn btn-warning">
                                             <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="<?= site_url('mahasiswa/hapus/' . $mhs['id_mhs']) ?>" class="btn btn-danger">
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