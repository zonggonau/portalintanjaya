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
$routes->get('/dashboard/berita', 'Dashboard::berita');


// $routes->get('/auth/login', 'Dashboard::login');
// $routes->post('/proses/login', 'Auth::login');
service('auth')->routes($routes);
