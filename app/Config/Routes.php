<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ===============================
// 🏠 Halaman Utama (Landing Page)
// ===============================
$routes->get('/', 'Cv::index');
$routes->get('/pendidikan/detail/(:num)', 'Cv::pendidikanDetail/$1');
$routes->get('pendidikan', 'Cv::pendidikan');
$routes->get('pendidikan/detail/(:num)', 'Cv::pendidikanDetail/$1');

$routes->get('pengalaman', 'Cv::pengalaman');
$routes->get('keahlian', 'Cv::keahlian');



// ===============================
// 💼 CRUD Paket Jaringan
// ===============================
$routes->get('/paket', 'Paket::index');          // Tampilkan semua paket
$routes->get('/paket/create', 'Paket::create');  // Form tambah paket
$routes->post('/paket/store', 'Paket::store');   // Simpan paket baru
$routes->get('/paket/edit/(:num)', 'Paket::edit/$1'); // Form edit paket
$routes->post('/paket/update/(:num)', 'Paket::update/$1'); // Update paket
$routes->get('/paket/delete/(:num)', 'Paket::delete/$1');  // Hapus paket

$routes->get('/paket', 'Paket::index');
$routes->get('/paket/create', 'Paket::create');
$routes->post('/paket/store', 'Paket::store');
$routes->get('/paket/edit/(:num)', 'Paket::edit/$1');
$routes->post('/paket/update/(:num)', 'Paket::update/$1');
$routes->get('/paket/delete/(:num)', 'Paket::delete/$1');
