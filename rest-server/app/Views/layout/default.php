<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
     <!-- Title -->
     <?= $this->renderSection('title'); ?>
     <!-- End Title -->

     <!-- MyCSS Files -->
     <link rel="stylesheet" href="css/style.css">
     <!-- General CSS Files -->
     <link rel="stylesheet" href="/template/dist/assets/modules/bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="/template/dist/assets/modules/fontawesome/css/all.min.css">

     <!-- CSS Libraries -->
     <link rel="stylesheet" href="/template/dist/assets/modules/jqvmap/dist/jqvmap.min.css">
     <link rel="stylesheet" href="/template/dist/assets/modules/weather-icon/css/weather-icons.min.css">
     <link rel="stylesheet" href="/template/dist/assets/modules/weather-icon/css/weather-icons-wind.min.css">
     <link rel="stylesheet" href="/template/dist/assets/modules/summernote/summernote-bs4.css">

     <!-- Template CSS -->
     <link rel="stylesheet" href="/template/dist/assets/css/style.css">
     <link rel="stylesheet" href="/template/dist/assets/css/components.css">
     <!-- Start GA -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
     <script>
          window.dataLayer = window.dataLayer || [];

          function gtag() {
               dataLayer.push(arguments);
          }
          gtag('js', new Date());

          gtag('config', 'UA-94034622-3');
     </script>
     <!-- /END GA -->
</head>

<body>
     <div id="app">
          <div class="main-wrapper main-wrapper-1">
               <div class="navbar-bg"></div>
               <nav class="navbar navbar-expand-lg main-navbar">
                    <form class="form-inline mr-auto">
                         <ul class="navbar-nav mr-3">
                              <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                              <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                         </ul>
                         <div class="search-element">
                              <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                              <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                              <div class="search-backdrop"></div>
                              <div class="search-result">
                                   <div class="search-header">
                                        Histories
                                   </div>
                                   <div class="search-item">
                                        <a href="#">How to hack NASA using CSS</a>
                                        <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                                   </div>
                                   <div class="search-item">
                                        <a href="#">Kodinger.com</a>
                                        <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                                   </div>
                                   <div class="search-item">
                                        <a href="#">#Stisla</a>
                                        <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                                   </div>
                                   <div class="search-header">
                                        Result
                                   </div>
                                   <div class="search-item">
                                        <a href="#">
                                             <img class="mr-3 rounded" width="30" src="assets/img/products/product-3-50.png" alt="product">
                                             oPhone S9 Limited Edition
                                        </a>
                                   </div>
                                   <div class="search-item">
                                        <a href="#">
                                             <img class="mr-3 rounded" width="30" src="assets/img/products/product-2-50.png" alt="product">
                                             Drone X2 New Gen-7
                                        </a>
                                   </div>
                                   <div class="search-item">
                                        <a href="#">
                                             <img class="mr-3 rounded" width="30" src="assets/img/products/product-1-50.png" alt="product">
                                             Headphone Blitz
                                        </a>
                                   </div>
                                   <div class="search-header">
                                        Projects
                                   </div>
                                   <div class="search-item">
                                        <a href="#">
                                             <div class="search-icon bg-danger text-white mr-3">
                                                  <i class="fas fa-code"></i>
                                             </div>
                                             Stisla Admin Template
                                        </a>
                                   </div>
                                   <div class="search-item">
                                        <a href="#">
                                             <div class="search-icon bg-primary text-white mr-3">
                                                  <i class="fas fa-laptop"></i>
                                             </div>
                                             Create a new Homepage Design
                                        </a>
                                   </div>
                              </div>
                         </div>
                    </form>
                    <ul class="navbar-nav navbar-right">
                         <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
                              <div class="dropdown-menu dropdown-list dropdown-menu-right">
                                   <div class="dropdown-header">Messages
                                        <div class="float-right">
                                             <a href="#">Mark All As Read</a>
                                        </div>
                                   </div>
                                   <div class="dropdown-list-content dropdown-list-message">
                                        <a href="#" class="dropdown-item dropdown-item-unread">
                                             <div class="dropdown-item-avatar">
                                                  <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle">
                                                  <div class="is-online"></div>
                                             </div>
                                             <div class="dropdown-item-desc">
                                                  <b>Kusnaedi</b>
                                                  <p>Hello, Bro!</p>
                                                  <div class="time">10 Hours Ago</div>
                                             </div>
                                        </a>
                                   </div>
                                   <div class="dropdown-footer text-center">
                                        <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                                   </div>
                              </div>
                         </li>
                         <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg"><i class="far fa-bell"></i></a>
                              <div class="dropdown-menu dropdown-list dropdown-menu-right">
                                   <div class="dropdown-header">Notifications
                                        <div class="float-right">
                                             <a href="#">Mark All As Read</a>
                                        </div>
                                   </div>
                                   <div class="dropdown-list-content dropdown-list-icons">
                                        <a href="#" class="dropdown-item dropdown-item-unread">
                                             <div class="dropdown-item-icon bg-primary text-white">
                                                  <i class="fas fa-code"></i>
                                             </div>
                                             <div class="dropdown-item-desc">
                                                  Template update is available now!
                                                  <div class="time text-primary">2 Min Ago</div>
                                             </div>
                                        </a>
                                   </div>
                                   <div class="dropdown-footer text-center">
                                        <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                                   </div>
                              </div>
                         </li>
                         <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                   <img alt="" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                                   <div class="d-sm-none d-lg-inline-block">Hi, Manut-Team</div>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                   <div class="dropdown-title">Logged in 5 min ago</div>
                                   <a href="features-profile.html" class="dropdown-item has-icon">
                                        <i class="far fa-user"></i> Profile
                                   </a>
                                   <a href="features-activities.html" class="dropdown-item has-icon">
                                        <i class="fas fa-bolt"></i> Activities
                                   </a>
                                   <a href="features-settings.html" class="dropdown-item has-icon">
                                        <i class="fas fa-cog"></i> Settings
                                   </a>
                                   <div class="dropdown-divider"></div>
                                   <a href="#" class="dropdown-item has-icon text-danger">
                                        <i class="fas fa-sign-out-alt"></i> Logout
                                   </a>
                              </div>
                         </li>
                    </ul>
               </nav>
               <div class="main-sidebar sidebar-style-2">
                    <aside id="sidebar-wrapper">
                         <div class="sidebar-brand ">
                              <a href="<?= site_url() ?>">Manut-Team</a>
                         </div>
                         <div class="sidebar-brand sidebar-brand-sm">
                              <a href="<?= site_url() ?>">M-T</a>
                         </div>
                         <!-- Menu -->
                         <ul class="sidebar-menu">
                              <?= $this->include('layout/menu') ?>
                         </ul>
                         <!-- End Menu -->

                    </aside>
               </div>

               <!-- Main Content -->
               <div class="main-content">
                    <?= $this->renderSection('content'); ?>
               </div>
               <!-- End Main Content -->

               <!-- Footer -->
               <footer class="main-footer">
                    <div class="footer-left">
                         Copyright &copy; 2023 <div class="fas fa-envelope"></div> Developed <a href="<?= site_url() ?>">Manut-Team</a>
                    </div>
                    <div class="footer-right">

                    </div>
               </footer>
               <!-- End Footer -->
          </div>
     </div>

     <!-- General JS Scripts -->
     <script src="/template/dist/assets/modules/jquery.min.js"></script>
     <script src="/template/dist/assets/modules/popper.js"></script>
     <script src="/template/dist/assets/modules/tooltip.js"></script>
     <script src="/template/dist/assets/modules/bootstrap/js/bootstrap.min.js"></script>
     <script src="/template/dist/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
     <script src="/template/dist/assets/modules/moment.min.js"></script>
     <script src="/template/dist/assets/js/stisla.js"></script>

     <!-- JS Libraries -->
     <script src="/template/dist/assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
     <script src="/template/dist/assets/modules/chart.min.js"></script>
     <script src="/template/dist/assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
     <script src="/template/dist/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
     <script src="/template/dist/assets/modules/summernote/summernote-bs4.js"></script>
     <script src="/template/dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

     <!-- Page Specific JS File -->
     <script src="/template/dist/assets/js/page/index-0.js"></script>

     <!-- Template JS File -->
     <script src="/template/dist/assets/js/scripts.js"></script>
     <script src="/template/dist/assets/js/custom.js"></script>

     <!-- Sweet Alert -->
     <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script>
          Swal.fire({
               icon: 'info', // eror, success, info, warning, question
               title: 'Welcome, Ndel!',
               text: 'Go go go go ..!',
          })
     </script> -->
</body>

</html>