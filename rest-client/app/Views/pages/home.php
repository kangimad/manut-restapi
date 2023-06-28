<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<title><?= $title; ?></title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
     <div class="section-header">
          <h1>Manut Payment</h1>
          <!-- <div class="section-header-breadcrumb">
               <div class="breadcrumb-item"><a href="<?= site_url('/') ?>">Dashboard</a></div>
               <div class="breadcrumb-item active"><a href="<?= site_url('/') ?>">Profile</a></div>
          </div> -->
     </div>
     <div class="section-body">
          <h2 class="section-title">Manut-Team</h2>
          <p class="section-lead">
               Ini adalah hasil dari tugas mata kuliah Integrasi Sistem
          </p>
          <!-- <img alt="image" src="img/manut-portal.jpg" class="rounded-circle profile-widget-picture"> -->

          <div class="row">
               <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                         <div class="profile-widget-header">
                              <div class="profile-widget-items">
                                   <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Posts</div>
                                        <div class="profile-widget-item-value">111</div>
                                   </div>
                                   <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Followers</div>
                                        <div class="profile-widget-item-value">11K</div>
                                   </div>
                                   <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Following</div>
                                        <div class="profile-widget-item-value">1K</div>
                                   </div>
                              </div>
                         </div>
                         <div class="profile-widget-description">
                              <div class="profile-widget-name">Manut-Team <div class="text-muted d-inline font-weight-normal">
                                        <div class="slash"></div> Integrasi Sistem
                                   </div>
                              </div>
                              Manut-Team is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Sabar'</b>.
                         </div>
                         <div class="card-footer text-center">
                              <div class="font-weight-bold mb-2">Follow Manut-Team On</div>
                              <a href="#" class="btn mr-1">
                                   <i class="fas fa-tired"></i>
                              </a>
                              <a href="#" class="btn mr-1">
                                   <i class="fas fa-tired"></i>
                              </a>
                              <a href="#" class="btn mr-1">
                                   <i class="fas fa-tired"></i>
                              </a>
                              <a href="#" class="btn">
                                   <i class="fas fa-tired"></i>
                              </a>
                         </div>
                    </div>
               </div>
               <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                         <form method="post" class="needs-validation" novalidate="">
                              <div class="card-body">
                                   <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                             <label>First Name</label>
                                             <input type="text" class="form-control" value="Manut" required="">
                                             <div class="invalid-feedback">
                                                  Please fill in the first name
                                             </div>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                             <label>Last Name</label>
                                             <input type="text" class="form-control" value="Team" required="">
                                             <div class="invalid-feedback">
                                                  Please fill in the last name
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="form-group col-md-7 col-12">
                                             <label>Email</label>
                                             <input type="email" class="form-control" value="manut-team@gmail.com" required="">
                                             <div class="invalid-feedback">
                                                  Please fill in the email
                                             </div>
                                        </div>
                                        <div class="form-group col-md-5 col-12">
                                             <label>Phone</label>
                                             <input type="tel" class="form-control" value="089xxxxxxxxx">
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="form-group col-12">
                                             <label>Bio</label>
                                             <textarea class="form-control summernote-simple">Manut-Team is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Sabar'</b>.</textarea>
                                        </div>
                                   </div>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</section>
<?= $this->endSection() ?>