     <!-- DASHBOARD -->
     <li class="nav-link <?= $title == 'Home &mdash; Manut-Portal' ? 'active' : ''; ?>">
          <a href="<?= site_url() ?>"><i class="fas fa-home"></i><span>Dashboard</span></a>
     </li>

     <!-- MAHASISWA -->
     <li class="nav-link <?= $title == 'Mahasiswa &mdash; Manut-Portal' || $title == 'Create Mahasiswa &mdash; Manut-Portal' || $title == 'Edit Mahasiswa &mdash; Manut-Portal' ? 'active' : ''; ?>">
          <a href="<?= site_url('mahasiswa') ?>" class="nav-link"><i class="fas fa-user"></i><span>Mahasiswa</span></a>
     </li>

     <!-- PEMBAYARAN -->
     <li class="nav-link <?= $title == 'Pembayaran &mdash; Manut-Portal' || $title == 'Create Pembayaran &mdash; Manut-Portal' || $title == 'Edit Pembayaran &mdash; Manut-Portal' ? 'active' : ''; ?>">
          <a href="<?= site_url('pembayaran') ?>" class="nav-link"><i class="fas fa-heart"></i><span>Pembayaran</span></a>
     </li>

     <!-- TAGIHAN -->
     <li class="nav-link <?= $title == 'Tagihan &mdash; Manut-Portal' || $title == 'Create Tagihan &mdash; Manut-Portal' || $title == 'Edit Tagihan &mdash; Manut-Portal' ? 'active' : ''; ?>">
          <a href="<?= site_url('tagihan') ?>" class="nav-link"><i class="fas fa-eye"></i><span>Tagihan</span></a>
     </li>

     <!-- BAYAR TAGIHAN -->
     <li class="nav-link <?= $title == 'Bayar Tagihan &mdash; Manut-Portal' || $title == 'Create Bayar Tagihan &mdash; Manut-Portal' || $title == 'Edit Bayar Tagihan &mdash; Manut-Portal' ? 'active' : ''; ?>">
          <a href="<?= site_url('bayartagihan') ?>" class="nav-link"><i class="fas fa-envelope"></i><span>Bayar Tagihan</span></a>
     </li>


     <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block">
               <i class="fas fa-phone"></i> Contact Me
          </a>
     </div>