<?php

namespace Config;


use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('/welcome', 'Dashboard::wellcome');
$routes->get('/profile', 'Home::profile');
$routes->get('/dokumen', 'Home::dokumen');
$routes->get('/egov', 'Home::egov');
$routes->get('/berita', 'Home::berita');
$routes->get('/berita/(:any)', 'Home::BeritaDetails/$1');
$routes->get('/galeri', 'Home::galeri');
$routes->get('/kontak', 'Home::kontak');



// Dashboard Routes here
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/dashboard/post', 'Dashboard::Berita');
$routes->get('/dashboard/kategori', 'Dashboard::Kategori');
$routes->get('/dashboard/post/add', 'Dashboard::Add');
$routes->get('/dashboard/post/edit/(:num)', 'Dashboard::Edit/$1');
$routes->get('/dashboard/berita/(:any)', 'Dashboard::view/$1');
$routes->get('/dashboard/informasipublik', 'Dashboard::InformasiPublik');

$routes->post('/dashboard/(:any)/save', 'Dashboard::save');
$routes->put('/dashboard/update/(:num)', 'Dashboard::update/$1'); // Aksi update

$routes->post('/dashboard/uploadimage', 'Dashboard::uploadImage');
$routes->post('dashboard/uploadfile', 'Dashboard::uploadfile');

$routes->get('/dashboard/delete/(:num)', 'Dashboard::delete/$1');



// $routes->get('/auth/login', 'Dashboard::login');
// $routes->post('/proses/login', 'Auth::login');
service('auth')->routes($routes);
