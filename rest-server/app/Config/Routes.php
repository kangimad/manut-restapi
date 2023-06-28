<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// API MAHASISWA
$routes->group('api', function ($routes) {
    $routes->resource('mahasiswa');
});

// API PEMBAYARAN
$routes->group('api', function ($routes) {
    $routes->resource('pembayaran');
});

// API TAGIHAN
$routes->group('api', function ($routes) {
    $routes->resource('tagihan');
});

// API PEMBAYARAN TAGIHAN
$routes->group('api', function ($routes) {
    $routes->resource('pembayarantagihan');
});

// HOME
$routes->get('/', 'Home::index');

// MAHASISWA
$routes->get('mahasiswa', 'Mahasiswa::ambil');
$routes->get('mahasiswa/tambah', 'Mahasiswa::tambah');
$routes->post('mahasiswa', 'Mahasiswa::simpan');
$routes->get('mahasiswa/ubah/(:any)', 'Mahasiswa::ubah/$1');
$routes->post('mahasiswa/perbarui/(:any)', 'Mahasiswa::perbarui/$1');
$routes->get('mahasiswa/hapus/(:any)', 'Mahasiswa::hapus/$1');

// PEMBAYARAN
$routes->get('pembayaran', 'Pembayaran::ambil');
$routes->get('pembayaran/tambah', 'Pembayaran::tambah');
$routes->post('pembayaran', 'Pembayaran::simpan');
$routes->get('pembayaran/ubah/(:any)', 'Pembayaran::ubah/$1');
$routes->post('pembayaran/perbarui/(:any)', 'Pembayaran::perbarui/$1');
$routes->get('pembayaran/hapus/(:any)', 'Pembayaran::hapus/$1');

// TAGIHAN
$routes->get('tagihan', 'Tagihan::ambil');
$routes->get('tagihan/tambah', 'Tagihan::tambah');
$routes->post('tagihan', 'Tagihan::simpan');
$routes->get('tagihan/ubah/(:any)', 'Tagihan::ubah/$1');
$routes->post('tagihan/perbarui/(:any)', 'Tagihan::perbarui/$1');
$routes->get('tagihan/hapus/(:any)', 'Tagihan::hapus/$1');

// PEMBAYARAN TAGIHAN
$routes->get('bayartagihan', 'PembayaranTagihan::ambil');
$routes->get('bayartagihan/tambah', 'PembayaranTagihan::tambah');
$routes->post('bayartagihan', 'PembayaranTagihan::simpan');
$routes->get('bayartagihan/ubah/(:any)', 'PembayaranTagihan::ubah/$1');
$routes->post('bayartagihan/perbarui/(:any)', 'PembayaranTagihan::perbarui/$1');
$routes->get('bayartagihan/hapus/(:any)', 'PembayaranTagihan::hapus/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
