     <!-- DASHBOARD -->
     <li class="nav-link <?= $title == 'Home &mdash; Manut-Payment' ? 'active' : ''; ?>">
          <a href="<?= site_url() ?>"><i class="fas fa-home"></i><span>Dashboard</span></a>
     </li>
     <!-- TAGIHAN -->
     <li class="nav-link <?= $title == 'Tagihan &mdash; Manut-Payment' || $title == 'Create Tagihan &mdash; Manut-Payment' || $title == 'Edit Tagihan &mdash; Manut-Payment' ? 'active' : ''; ?>">
          <a href="<?= site_url('tagihan') ?>" class="nav-link"><i class="fas fa-eye"></i><span>Tagihan</span></a>
     </li>
     <!-- PEMBAYARAN TAGIHAN -->
     <li class="nav-link <?= $title == 'Bayar Tagihan &mdash; Manut-Payment' || $title == 'Create Bayar Tagihan &mdash; Manut-Payment' || $title == 'Edit Bayar Tagihan &mdash; Manut-Payment' ? 'active' : ''; ?>">
          <a href="<?= site_url('bayartagihan') ?>" class="nav-link"><i class="fas fa-credit-card"></i><span>Bayar Tagihan</span></a>
     </li>


     <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block">
               <i class="fas fa-phone"></i> Contact Me
          </a>
     </div>